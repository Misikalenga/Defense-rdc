<?php

namespace App\Http\Controllers;

use App\Services\ActualiteService;
use App\Services\CategorieService;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\Actualite;
use App\Models\CabinetMember;
use App\Services\CabinetMemberService;


class PageController extends Controller
{
    protected $actualiteService;
    protected $categorieService;
    protected $projetService;
    protected $cabinetMemberService;

    public function __construct(ActualiteService $actualiteService, CategorieService $categorieService, \App\Services\ProjetService $projetService, CabinetMemberService $cabinetMemberService)
    {
        $this->actualiteService = $actualiteService;
        $this->categorieService = $categorieService;
        $this->projetService = $projetService;
        $this->cabinetMemberService = $cabinetMemberService;
    }

    public function actualites()
    {
        $allCategories = $this->categorieService->getAllCategories();
        $groupedActualites = [
            'latest_per_category' => new Collection(), // For the main 'Actualités' tab
            'annonces' => new Collection(),
            'decisions' => new Collection(),
            'discours' => new Collection(),
            'operations' => new Collection(),
            'others' => new Collection(), // For actualites not fitting specific tabs
        ];

        // Fetch actualites and group them
        foreach ($allCategories as $category) {
            // Get the latest actualite for the main 'Actualités' tab display
            $latestActualite = $category->actualites()
                                        ->where('status', 'published')
                                        ->latest('published_at')
                                        ->first();
            if ($latestActualite) {
                $groupedActualites['latest_per_category']->push($latestActualite);
            }

            // Get all actualites for specific category tabs
            if (in_array($category->slug, ['annonces', 'decisions', 'discours', 'operations'])) {
                $categoryActualites = $category->actualites()
                                                ->where('status', 'published')
                                                ->latest('published_at')
                                                ->get();
                $groupedActualites[$category->slug] = $groupedActualites[$category->slug]->concat($categoryActualites);

                // If a category has children, include their actualites too
                foreach ($category->children as $child) {
                    $childActualites = $child->actualites()
                                            ->where('status', 'published')
                                            ->latest('published_at')
                                            ->get();
                    $groupedActualites[$category->slug] = $groupedActualites[$category->slug]->concat($childActualites);
                }
                // Ensure unique actualites if any are duplicated through parent/child relations
                $groupedActualites[$category->slug] = $groupedActualites[$category->slug]->unique('id')->values();
            } else {
                // Collect actualites that are not part of the specific tabs for potential 'others' display
                $otherActualites = $category->actualites()
                                            ->where('status', 'published')
                                            ->latest('published_at')
                                            ->get();
                $groupedActualites['others'] = $groupedActualites['others']->concat($otherActualites);
            }
        }

        // Ensure latest_per_category is unique by actualite id and contains a diverse set
        $groupedActualites['latest_per_category'] = $groupedActualites['latest_per_category']->unique('id')->values()->sortByDesc('published_at');

        // Pass data to the view
        return view('actualites', [
            'groupedActualites' => $groupedActualites,
            'allCategories' => $allCategories,
        ]);
    }

    public function show(Actualite $actualite)
    {
        return view('actualite-single', compact('actualite'));
    }

    public function projets()
    {
        $publishedProjets = $this->projetService->getPublishedProjets();

        $groupedProjets = $publishedProjets->groupBy(function ($projet) {
            // Group by parent category slug, or use a default group
            if ($projet->categorie && $projet->categorie->parent) {
                // Map the parent slug to the section ID used in the view
                switch ($projet->categorie->parent->slug) {
                    case 'projets-prioritaires':
                        return 'priorite';
                    case 'modernisation':
                        return 'modernisation';
                    case 'veterans':
                        return 'veterans';
                    case 'cooperation':
                        return 'cooperation';
                }
            }
            return 'others'; // Default group if no parent or category
        });

        // Further group by child category within each main group
        $groupedProjets = $groupedProjets->map(function ($group) {
            return $group->groupBy(function ($projet) {
                return $projet->categorie ? $projet->categorie->name : 'Sans catégorie';
            });
        });

        return view('projets', [
            'groupedProjets' => $groupedProjets,
        ]);
    }

    public function cabinet()
    {
        $allMembers = $this->cabinetMemberService->getActiveMembers();

        // Récupérer le ministre par sa fonction officielle (à adapter si le titre change)
        $minister = $allMembers->firstWhere('official_function', 'Ministre de la Défense Nationale et des Anciens Combattants');

        // Récupérer les autres membres actifs, excluant le ministre
        $otherMembers = $allMembers->filter(function ($member) use ($minister) {
            return $minister ? $member->id !== $minister->id : true;
        })->sortBy('order_index'); // Assure l'ordre pour les autres membres

        return view('cabinet', compact('minister', 'otherMembers'));
    }

    /**
     * Display a single cabinet member's profile.
     *
     * @param  \App\Models\CabinetMember $cabinetMember
     * @return \Illuminate\View\View
     */
    public function showCabinetMember(CabinetMember $cabinetMember)
    {
        return view('cabinet-member-show', ['member' => $cabinetMember]);
    }
}
