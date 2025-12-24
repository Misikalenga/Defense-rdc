<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Actualite;
use App\Models\Categorie;
use Illuminate\Support\Str;

class ActualiteSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('fr_FR');

        $categories = Categorie::all();
        if ($categories->isEmpty()) {
            $this->call(CategorieSeeder::class);
            $categories = Categorie::all();
        }

        // Quelques actualités représentatives
        $items = [
            [
                'title' => "Lancement de la campagne nationale d'appui aux anciens combattants",
                'content' => '<p>' . implode('</p><p>', $faker->paragraphs(5)) . '</p>',
                'status' => 'published',
                'published_at' => now()->subDays(2),
            ],
            [
                'title' => 'Inspection des unités : renforcement de la discipline opérationnelle',
                'content' => '<p>' . implode('</p><p>', $faker->paragraphs(4)) . '</p>',
                'status' => 'published',
                'published_at' => now()->subDays(10),
            ],
            [
                'title' => 'Appel à candidatures pour les écoles militaires 2026',
                'content' => '<p>' . implode('</p><p>', $faker->paragraphs(3)) . '</p>',
                'status' => 'draft',
                'published_at' => null,
            ],
        ];

        foreach ($items as $item) {
            $categorie = $categories->random();
            $slug = Str::slug($item['title']);
            Actualite::updateOrCreate(['slug' => $slug], array_merge($item, [
                'slug' => $slug,
                'categorie_id' => $categorie->id,
                'category' => $categorie->name, // legacy field kept for compatibility
                'image' => null,
                'views' => rand(100, 500),
                'shares' => rand(5, 50),
            ]));
        }
    }
}
