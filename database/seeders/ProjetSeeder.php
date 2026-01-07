<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Projet;
use App\Models\Categorie;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ProjetSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('fr_FR');

        $categories = Categorie::all();
        if ($categories->isEmpty()) {
            $this->call(CategorieSeeder::class);
            $categories = Categorie::all();
        }

        $items = [
            // Priorité 2026
            [
                'title' => 'Centre National de Coordination Opérationnelle (CNCO)',
                'content' => 'Création d’un centre de coordination inter-services permettant la consolidation des informations, la planification opérationnelle, le suivi des unités et la gestion de crise (catastrophes, incidents majeurs, situations sécuritaires). Le CNCO s’appuie sur une architecture de données unifiée, un reporting standardisé et des procédures communes afin d’augmenter la vitesse de décision et la qualité de l’exécution.',
                'category_slug' => 'securite-projets',
                'image' => 'assets/histo.jpeg',
                'published_at' => Carbon::createFromFormat('d M Y', '10 Dec 2025')->startOfDay(),
                'views' => 128
            ],
            [
                'title' => 'Surveillance des sites stratégiques',
                'content' => 'Caméras, contrôle d’accès, patrouilles et protocoles pour la protection des infrastructures sensibles.',
                'category_slug' => 'securite-projets',
                'image' => 'assets/bcc_kin.jpg',
                'published_at' => Carbon::createFromFormat('d M Y', '06 Dec 2025')->startOfDay(),
                'views' => 92
            ],
            [
                'title' => 'Digitalisation des procédures',
                'content' => 'Plateforme interne : demandes, validation, traçabilité, archivage et tableaux de bord.',
                'category_slug' => 'transformation',
                'image' => 'assets/soda-equipement.png',
                'published_at' => Carbon::createFromFormat('d M Y', '29 Nov 2025')->startOfDay(),
                'views' => 77
            ],
            [
                'title' => 'Santé militaire : remise à niveau',
                'content' => 'Mise à niveau des hôpitaux militaires, équipements essentiels, stocks et maintenance.',
                'category_slug' => 'sante-projets',
                'image' => 'assets/kalemie-soda.jpg',
                'published_at' => Carbon::createFromFormat('d M Y', '22 Nov 2025')->startOfDay(),
                'views' => 103
            ],
            [
                'title' => 'Intégrité & discipline administrative',
                'content' => 'Charte éthique, contrôle interne, formation, sanctions graduées et reporting.',
                'category_slug' => 'gouvernance',
                'image' => 'assets/kalemie-soda.jpg',
                'published_at' => Carbon::createFromFormat('d M Y', '10 Nov 2025')->startOfDay(),
                'views' => 65
            ],
            [
                'title' => 'Cellule de réponse rapide',
                'content' => 'Coordination d’urgence, logistique, évacuations, communications et partenariats humanitaires.',
                'category_slug' => 'crise',
                'image' => 'assets/soda-equipement.png',
                'published_at' => Carbon::createFromFormat('d M Y', '30 Oct 2025')->startOfDay(),
                'views' => 88
            ],
            [
                'title' => 'Maintenance & pièces de rechange',
                'content' => 'Inventaires, contrats, délais, standards de qualité et réduction des immobilisations.',
                'category_slug' => 'logistique-projets',
                'image' => 'assets/garderep.jpg',
                'published_at' => Carbon::createFromFormat('d M Y', '18 Oct 2025')->startOfDay(),
                'views' => 71
            ],
            // Modernisation -> Équipement
            [
                'title' => 'Équipement 2026 : flotte logistique & communications sécurisées',
                'content' => 'Acquisition progressive d’équipements de mobilité, de communications et de soutien. L’objectif est d’augmenter la disponibilité opérationnelle via la maintenance, les stocks stratégiques, et un cycle de vie maîtrisé (achats, formation, pièces, audit).',
                'category_slug' => 'equipement',
                'image' => null,
                'published_at' => Carbon::createFromFormat('d M Y', '03 Dec 2025')->startOfDay(),
                'views' => 0
            ],
            [
                'title' => 'Ateliers régionaux de maintenance',
                'content' => 'Réhabilitation d’ateliers, outillage, procédures et reporting pour réduire les immobilisations.',
                'category_slug' => 'maintenance',
                'image' => 'assets/garderep.jpg',
                'published_at' => Carbon::createFromFormat('d M Y', '27 Nov 2025')->startOfDay(),
                'views' => 0
            ],
            [
                'title' => 'Standardisation des communications',
                'content' => 'Réduction des modèles, sécurisation, documentation et formation d’usage.',
                'category_slug' => 'interop',
                'image' => 'assets/ancien-combattant-3.jpg',
                'published_at' => Carbon::createFromFormat('d M Y', '12 Nov 2025')->startOfDay(),
                'views' => 0
            ],
            [
                'title' => 'Stocks stratégiques',
                'content' => 'Constitution et rotation des stocks, traçabilité, normes et prévention des ruptures.',
                'category_slug' => 'logistique-projets',
                'image' => 'assets/soda-equipement.png',
                'published_at' => Carbon::createFromFormat('d M Y', '25 Oct 2025')->startOfDay(),
                'views' => 0
            ],
            [
                'title' => 'Casernement & conditions de vie',
                'content' => 'Réhabilitation ciblée, eau/électricité, hygiène, sécurité et maintenance.',
                'category_slug' => 'infrastructures',
                'image' => 'assets/kalemie-soda.jpg',
                'published_at' => Carbon::createFromFormat('d M Y', '08 Oct 2025')->startOfDay(),
                'views' => 0
            ],
            // Modernisation -> Formation
            [
                'title' => 'Leadership & éthique',
                'content' => 'Modules de commandement, décision sous pression, discipline et redevabilité.',
                'category_slug' => 'leadership',
                'image' => 'assets/ancien-combattant-2.jpg',
                'published_at' => Carbon::createFromFormat('d M Y', '21 Nov 2025')->startOfDay(),
                'views' => 0
            ],
            [
                'title' => 'Transmissions & cyber',
                'content' => 'Durcissement des systèmes, bonnes pratiques, procédures et riposte.',
                'category_slug' => 'cyber',
                'image' => 'assets/garderep.jpg',
                'published_at' => Carbon::createFromFormat('d M Y', '05 Nov 2025')->startOfDay(),
                'views' => 0
            ],
            [
                'title' => 'Instruction terrain',
                'content' => 'Exercices de coordination, procédures communes et évaluation post-action.',
                'category_slug' => 'terrain',
                'image' => 'assets/ancien-combattant-1.JPG',
                'published_at' => Carbon::createFromFormat('d M Y', '19 Oct 2025')->startOfDay(),
                'views' => 0
            ],
            [
                'title' => 'Chaîne d’approvisionnement',
                'content' => 'Prévision, stockage, distribution, maintenance et audit de performance.',
                'category_slug' => 'logistique-projets',
                'image' => 'assets/bcc_kin.jpg',
                'published_at' => Carbon::createFromFormat('d M Y', '02 Oct 2025')->startOfDay(),
                'views' => 0
            ],
            // Vétérans -> Réinsertion
            [
                'title' => 'Carte Vétéran : accès simplifié aux droits',
                'content' => 'Mise en place d’une carte sécurisée permettant de simplifier l’accès aux droits sociaux : soins, priorités administratives, programmes de réinsertion, et dispositifs de soutien.',
                'category_slug' => 'droits-sociaux',
                'image' => 'assets/ancien-combattant-3.jpg',
                'published_at' => Carbon::createFromFormat('d M Y', '01 Dec 2025')->startOfDay(),
                'views' => 0
            ],
            [
                'title' => 'Fonds d’appui à la reconversion',
                'content' => 'Micro-financements et accompagnement pour lancer ou renforcer une activité génératrice de revenu.',
                'category_slug' => 'reconversion',
                'image' => 'assets/histo.jpeg',
                'published_at' => Carbon::createFromFormat('d M Y', '26 Nov 2025')->startOfDay(),
                'views' => 0
            ],
            [
                'title' => 'Formation métiers techniques',
                'content' => 'Mécanique, soudure, électricité, sécurité, logistique : certifications et insertion.',
                'category_slug' => 'metiers',
                'image' => 'assets/kalemie-soda.jpg',
                'published_at' => Carbon::createFromFormat('d M Y', '09 Nov 2025')->startOfDay(),
                'views' => 0
            ],
            [
                'title' => 'Recrutement via entreprises',
                'content' => 'Accords avec entreprises : quotas, formation, mentorat et suivi post-recrutement.',
                'category_slug' => 'emploi',
                'image' => 'assets/ancien-combattant-2.jpg',
                'published_at' => Carbon::createFromFormat('d M Y', '20 Oct 2025')->startOfDay(),
                'views' => 0
            ],
            [
                'title' => 'Accompagnement psychosocial',
                'content' => 'Soutien psychologique, suivi, médiation familiale, réorientation et assistance.',
                'category_slug' => 'soutien',
                'image' => 'assets/ancien-combattant-3.jpg',
                'published_at' => Carbon::createFromFormat('d M Y', '04 Oct 2025')->startOfDay(),
                'views' => 0
            ],
            // Vétérans -> Droits sociaux
            [
                'title' => 'Modernisation des pensions',
                'content' => 'Simplification, réduction des délais, contrôles et transparence des paiements.',
                'category_slug' => 'pensions',
                'image' => 'assets/histo.jpeg',
                'published_at' => Carbon::createFromFormat('d M Y', '18 Nov 2025')->startOfDay(),
                'views' => 0
            ],
            [
                'title' => 'Parcours santé prioritaire',
                'content' => 'Accès prioritaire, orientation, prise en charge et partenariat avec structures dédiées.',
                'category_slug' => 'sante-projets',
                'image' => 'assets/ancien-combattant-1.JPG',
                'published_at' => Carbon::createFromFormat('d M Y', '28 Oct 2025')->startOfDay(),
                'views' => 0
            ],
            [
                'title' => 'Guichet unique',
                'content' => 'Accueil, orientation, suivi de dossier, recours et assistance administrative.',
                'category_slug' => 'acces',
                'image' => 'assets/garderep.jpg',
                'published_at' => Carbon::createFromFormat('d M Y', '12 Oct 2025')->startOfDay(),
                'views' => 0
            ],
            [
                'title' => 'Observatoire & médiation',
                'content' => 'Collecte des signalements, médiation, recommandations et publications régulières.',
                'category_slug' => 'mediation',
                'image' => 'assets/ancien-combattant-2.jpg',
                'published_at' => Carbon::createFromFormat('d M Y', '30 Sep 2025')->startOfDay(),
                'views' => 0
            ],
            // Coopération -> Partenariats
            [
                'title' => 'Mécanisme conjoint de partage d’information',
                'content' => 'Création d’un mécanisme technique de partage d’informations pour améliorer la prévention, la coordination et la confiance entre partenaires.',
                'category_slug' => 'stabilite-regionale',
                'image' => 'assets/kalemie-soda.jpg',
                'published_at' => Carbon::createFromFormat('d M Y', '02 Dec 2025')->startOfDay(),
                'views' => 0
            ],
            [
                'title' => 'Échanges & formations conjointes',
                'content' => 'Modules d’échange, visites techniques, retour d’expérience et standardisation.',
                'category_slug' => 'formation-modernisation',
                'image' => 'assets/histo.jpeg',
                'published_at' => Carbon::createFromFormat('d M Y', '14 Nov 2025')->startOfDay(),
                'views' => 0
            ],
            [
                'title' => 'Protocole commun de communication',
                'content' => 'Harmonisation et sécurisation des échanges : procédures, nomenclatures, audits.',
                'category_slug' => 'interop',
                'image' => 'assets/ancien-combattant-1.JPG',
                'published_at' => Carbon::createFromFormat('d M Y', '29 Oct 2025')->startOfDay(),
                'views' => 0
            ],
            [
                'title' => 'Corridor d’appui humanitaire',
                'content' => 'Appui logistique coordonné, stockage, distribution et sécurité des flux.',
                'category_slug' => 'humanitaire',
                'image' => 'assets/ancien-combattant-1.JPG',
                'published_at' => Carbon::createFromFormat('d M Y', '07 Oct 2025')->startOfDay(),
                'views' => 0
            ],
            [
                'title' => 'Maintenance & ateliers',
                'content' => 'Transfert de compétences, standards, outillage et procédures de qualité.',
                'category_slug' => 'technique',
                'image' => 'assets/ancien-combattant-2.jpg',
                'published_at' => Carbon::createFromFormat('d M Y', '24 Sep 2025')->startOfDay(),
                'views' => 0
            ],
            // Coopération -> Stabilité régionale
            [
                'title' => 'Cadre de dialogue transfrontalier',
                'content' => 'Réunions périodiques, prévention des incidents, mécanismes d’alerte et médiation.',
                'category_slug' => 'dialogue',
                'image' => 'assets/kalemie-soda.jpg',
                'published_at' => Carbon::createFromFormat('d M Y', '02 Nov 2025')->startOfDay(),
                'views' => 0
            ],
            [
                'title' => 'Réduction des incidents',
                'content' => 'Standardisation, procédures, réponse graduée et reporting commun.',
                'category_slug' => 'prevention',
                'image' => 'assets/garderep.jpg',
                'published_at' => Carbon::createFromFormat('d M Y', '16 Oct 2025')->startOfDay(),
                'views' => 0
            ],
            [
                'title' => 'Confiance & transparence',
                'content' => 'Points de contact, comptes rendus, vérification et mécanismes de recours.',
                'category_slug' => 'confiance',
                'image' => 'assets/ancien-combattant-2.jpg',
                'published_at' => Carbon::createFromFormat('d M Y', '28 Sep 2025')->startOfDay(),
                'views' => 0
            ],
            [
                'title' => 'Exercices de crise',
                'content' => 'Scénarios, coordination, communications, retours d’expérience et mise à jour des plans.',
                'category_slug' => 'crise',
                'image' => 'assets/ancien-combattant-1.JPG',
                'published_at' => Carbon::createFromFormat('d M Y', '10 Sep 2025')->startOfDay(),
                'views' => 0
            ],
        ];

        foreach ($items as $item) {
            $slug = Str::slug($item['title']);
            $categorie = Categorie::where('slug', $item['category_slug'])->first();

            $data = [
                'slug' => $slug,
                'title' => $item['title'],
                'content' => $item['content'] ?? '<p>' . implode('</p><p>', $faker->paragraphs(3)) . '</p>',
                'categorie_id' => $categorie ? $categorie->id : null,
                'image' => $item['image'] ?? null,
                'published_at' => $item['published_at'] ?? null,
                'status' => 'published',
                'views' => $item['views'] ?? rand(10, 500),
                'shares' => rand(0, 100),
            ];

            Projet::updateOrCreate(['slug' => $slug], $data);
        }
    }
}
