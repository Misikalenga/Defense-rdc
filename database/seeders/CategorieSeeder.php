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
