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
        ];

        foreach ($categories as $cat) {
            Categorie::firstOrCreate(['slug' => $cat['slug']], $cat);
        }
    }
}
