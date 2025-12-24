<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorie;

class CategorieSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Communiqués', 'slug' => 'communiques'],
            ['name' => 'Discours', 'slug' => 'discours'],
            ['name' => 'Opérations', 'slug' => 'operations'],
            ['name' => 'Annonces', 'slug' => 'annonces'],
            ['name' => 'Décisions', 'slug' => 'decisions'],
            ['name' => 'Dossier vétérans', 'slug' => 'dossier-veterans'],
            ['name' => 'Cérémonie', 'slug' => 'ceremonie'],
            ['name' => 'Réforme', 'slug' => 'reforme'],
            ['name' => 'Programme', 'slug' => 'programme'],
            ['name' => 'Dossier', 'slug' => 'dossier'],
            ['name' => 'Santé', 'slug' => 'sante'],
            ['name' => 'Transparence', 'slug' => 'transparence'],
            ['name' => 'Sécurité', 'slug' => 'securite'],
            ['name' => 'Génie', 'slug' => 'genie'],
            ['name' => 'Assistance', 'slug' => 'assistance'],
            ['name' => 'Instruction', 'slug' => 'instruction'],
        ];

        foreach ($categories as $cat) {
            Categorie::firstOrCreate(['slug' => $cat['slug']], $cat);
        }
    }
}
