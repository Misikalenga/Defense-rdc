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

        // Actualités issues de la page d'exemple
        $items = [
            ['title' => "Lancement du Fonds National d’Appui aux Anciens Combattants", 'category_slug' => 'dossier-veterans', 'image' => 'http://minidef.nakimya.com/assets/bcc_kin.jpg', 'published_at' => now()->setDate(2025,11,20)->setTime(9,0), 'status' => 'published'],
            ['title' => 'Hommage national aux vétérans et blessés de guerre', 'category_slug' => 'ceremonie', 'image' => 'http://minidef.nakimya.com/assets/ancien-combattant-1.JPG', 'published_at' => now()->setDate(2025,11,18)->setTime(9,0), 'status' => 'published'],
            ['title' => 'Modernisation du système des pensions militaires', 'category_slug' => 'reforme', 'image' => 'http://minidef.nakimya.com/assets/ancien-combattant-3.jpg', 'published_at' => now()->setDate(2025,11,12)->setTime(9,0), 'status' => 'published'],
            ['title' => 'Réinsertion : lancement des formations métiers (pilote)', 'category_slug' => 'programme', 'image' => 'http://minidef.nakimya.com/assets/ancien-combattant-2.jpg', 'published_at' => now()->setDate(2025,11,5)->setTime(9,0), 'status' => 'published'],
            ['title' => 'Appui à l’entrepreneuriat des vétérans : cadre et critères', 'category_slug' => 'dossier', 'image' => 'http://minidef.nakimya.com/assets/ancien-combattant-3.jpg', 'published_at' => now()->setDate(2025,10,29)->setTime(9,0), 'status' => 'published'],
            ['title' => 'Parcours santé prioritaire : prise en charge des blessés', 'category_slug' => 'sante', 'image' => 'http://minidef.nakimya.com/assets/histo.jpeg', 'published_at' => now()->setDate(2025,10,18)->setTime(9,0), 'status' => 'published'],
            ['title' => 'Publication des procédures : délais & voies de recours', 'category_slug' => 'transparence', 'image' => 'http://minidef.nakimya.com/assets/ancien-combattant-2.jpg', 'published_at' => now()->setDate(2025,10,6)->setTime(9,0), 'status' => 'published'],
            ['title' => 'Inspection de la 32ème Région', 'category_slug' => 'securite', 'image' => 'http://minidef.nakimya.com/assets/kalemie-soda.jpg', 'published_at' => now()->setDate(2025,12,2)->setTime(9,0), 'status' => 'published'],
            ['title' => 'Réhabilitation Kananga–Kalamba', 'category_slug' => 'genie', 'image' => 'http://minidef.nakimya.com/assets/garderep.jpg', 'published_at' => now()->setDate(2025,11,28)->setTime(9,0), 'status' => 'published'],
            ['title' => 'Appui civilo-militaire', 'category_slug' => 'assistance', 'image' => 'http://minidef.nakimya.com/assets/histo.jpeg', 'published_at' => now()->setDate(2025,11,21)->setTime(9,0), 'status' => 'published'],
            ['title' => 'Instruction & coordination', 'category_slug' => 'instruction', 'image' => 'http://minidef.nakimya.com/assets/bcc_kin.jpg', 'published_at' => now()->setDate(2025,11,9)->setTime(9,0), 'status' => 'published'],
            ['title' => 'Point de presse sur la situation sécuritaire à l\'Est', 'category_slug' => 'discours', 'image' => null, 'published_at' => now()->setDate(2025,11,15)->setTime(9,0), 'status' => 'published'],
            ['title' => 'Entretien exclusif sur la RTNC : bilan à mi-parcours', 'category_slug' => 'discours', 'image' => null, 'published_at' => now()->setDate(2025,11,10)->setTime(9,0), 'status' => 'published'],
            ['title' => 'Oraison funèbre du Général Major M.K.', 'category_slug' => 'discours', 'image' => null, 'published_at' => now()->setDate(2025,11,2)->setTime(9,0), 'status' => 'published'],
            ['title' => 'Message à la Nation : discipline & cohésion', 'category_slug' => 'discours', 'image' => null, 'published_at' => now()->setDate(2025,10,20)->setTime(9,0), 'status' => 'published'],
            ['title' => 'Arrêté ministériel portant nomination des Directeurs Régionaux', 'category_slug' => 'annonces', 'image' => null, 'published_at' => now()->setDate(2025,11,24)->setTime(9,0), 'status' => 'published'],
            ['title' => 'Ouverture du concours d\'entrée 2026 - École du Génie', 'category_slug' => 'annonces', 'image' => null, 'published_at' => now()->setDate(2025,11,10)->setTime(9,0), 'status' => 'published'],
            ['title' => 'Avis : calendrier de dépôt des dossiers administratifs', 'category_slug' => 'annonces', 'image' => null, 'published_at' => now()->setDate(2025,11,5)->setTime(9,0), 'status' => 'published'],
            ['title' => 'Note importante : consignes de communication officielle', 'category_slug' => 'annonces', 'image' => null, 'published_at' => now()->setDate(2025,10,28)->setTime(9,0), 'status' => 'published'],
            ['title' => 'Décision N°005/MDDN/2025', 'category_slug' => 'decisions', 'image' => null, 'published_at' => now()->setDate(2025,11,26)->setTime(9,0), 'status' => 'published'],
            ['title' => 'Note de service - Logistique', 'category_slug' => 'decisions', 'image' => null, 'published_at' => now()->setDate(2025,11,22)->setTime(9,0), 'status' => 'published'],
            ['title' => 'Note interne – Conformité & diffusion', 'category_slug' => 'decisions', 'image' => null, 'published_at' => now()->setDate(2025,11,14)->setTime(9,0), 'status' => 'published'],
        ];

        foreach ($items as $item) {
            $slug = Str::slug($item['title']);
            $categorie = Categorie::where('slug', $item['category_slug'])->first();

            $data = [
                'slug' => $slug,
                'title' => $item['title'],
                'content' => $item['content'] ?? '<p>' . implode('</p><p>', $faker->paragraphs(3)) . '</p>',
                'categorie_id' => $categorie ? $categorie->id : null,
                'category' => $categorie ? $categorie->name : null,
                'image' => $item['image'] ?? null,
                'published_at' => $item['published_at'] ?? null,
                'status' => $item['status'] ?? 'draft',
                'views' => $item['views'] ?? rand(100, 20000),
                'shares' => $item['shares'] ?? rand(5, 1000),
            ];

            Actualite::updateOrCreate(['slug' => $slug], $data);
        }
    }
}
