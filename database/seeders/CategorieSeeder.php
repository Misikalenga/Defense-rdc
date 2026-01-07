<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorie;

class CategorieSeeder extends Seeder
{
    public function run()
    {
        // Parents and their children according to the provided schema
        $parents = [
            'communiques' => [
                ['name' => 'Annonces officielles', 'slug' => 'annonces-officielles'],
                ['name' => 'Annonces', 'slug' => 'annonces'],
                ['name' => 'Décisions & notes', 'slug' => 'decisions-notes'],
                ['name' => 'Décisions', 'slug' => 'decisions'],
                ['name' => 'Cérémonie', 'slug' => 'ceremonie'],
                ['name' => 'Réforme', 'slug' => 'reforme'],
            ],
            'discours' => [
                ['name' => 'Allocutions', 'slug' => 'allocutions'],
            ],
            'operations' => [
                ['name' => 'Actions sur le terrain', 'slug' => 'actions-sur-le-terrain'],
                ['name' => 'Dossier vétérans', 'slug' => 'dossier-veterans'],
                ['name' => 'Programme', 'slug' => 'programme'],
                ['name' => 'Dossier', 'slug' => 'dossier'],
                ['name' => 'Santé', 'slug' => 'sante'],
                ['name' => 'Transparence', 'slug' => 'transparence'],
                ['name' => 'Sécurité', 'slug' => 'securite'],
                ['name' => 'Génie', 'slug' => 'genie'],
                ['name' => 'Assistance', 'slug' => 'assistance'],
                ['name' => 'Instruction', 'slug' => 'instruction'],
            ],
            'projets-prioritaires' => [
                ['name' => 'Sécurité (Projets)', 'slug' => 'securite-projets'],
                ['name' => 'Transformation', 'slug' => 'transformation'],
                ['name' => 'Gouvernance', 'slug' => 'gouvernance'],
                ['name' => 'Crise', 'slug' => 'crise'],
                ['name' => 'Logistique (Projets)', 'slug' => 'logistique-projets'],
            ],
            'modernisation' => [
                ['name' => 'Équipement', 'slug' => 'equipement'],
                ['name' => 'Maintenance', 'slug' => 'maintenance'],
                ['name' => 'Interop', 'slug' => 'interop'],
                ['name' => 'Infrastructures', 'slug' => 'infrastructures'],
                ['name' => 'Leadership', 'slug' => 'leadership'],
                ['name' => 'Cyber', 'slug' => 'cyber'],
                ['name' => 'Terrain', 'slug' => 'terrain'],
                ['name' => 'Formation (Modernisation)', 'slug' => 'formation-modernisation'],
            ],
            'veterans' => [
                ['name' => 'Droits sociaux', 'slug' => 'droits-sociaux'],
                ['name' => 'Reconversion', 'slug' => 'reconversion'],
                ['name' => 'Métiers', 'slug' => 'metiers'],
                ['name' => 'Emploi', 'slug' => 'emploi'],
                ['name' => 'Soutien', 'slug' => 'soutien'],
                ['name' => 'Pensions', 'slug' => 'pensions'],
                ['name' => 'Accès', 'slug' => 'acces'],
                ['name' => 'Médiation', 'slug' => 'mediation'],
            ],
            'cooperation' => [
                ['name' => 'Stabilité régionale', 'slug' => 'stabilite-regionale'],
                ['name' => 'Humanitaire', 'slug' => 'humanitaire'],
                ['name' => 'Technique', 'slug' => 'technique'],
                ['name' => 'Dialogue', 'slug' => 'dialogue'],
                ['name' => 'Prévention', 'slug' => 'prevention'],
                ['name' => 'Confiance', 'slug' => 'confiance'],
            ]
        ];

        // Create parent categories
        foreach (array_keys($parents) as $slug) {
            Categorie::firstOrCreate(['slug' => $slug], ['name' => ucfirst($slug), 'slug' => $slug]);
        }

        // Create children
        foreach ($parents as $parentSlug => $children) {
            $parent = Categorie::where('slug', $parentSlug)->first();
            if (!$parent) continue;
            foreach ($children as $child) {
                Categorie::firstOrCreate(
                    ['slug' => $child['slug']],
                    ['name' => $child['name'], 'slug' => $child['slug'], 'parent_id' => $parent->id]
                );
            }
        }
    }
}
