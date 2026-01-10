<?php

namespace Database\Seeders;

use App\Models\CabinetMember;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CabinetMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Vider la table avant de la remplir pour éviter les doublons
        DB::table('cabinet_members')->truncate();

        // --- Le Ministre ---
        $ministerName = 'Éliézer Ntambwe Mposhi';

        CabinetMember::create([
            'name' => $ministerName,
            'slug' => Str::slug($ministerName),
            'official_function' => 'Ministre de la Défense Nationale et des Anciens Combattants',
            'biography' => <<<HTML
            <p><strong>Biographie</strong></p>

            <p><strong>Éliézer Ntambwe Mposhi</strong>, né le 3 juillet 1972 à Kalungu, en République démocratique du Congo, est journaliste, producteur et animateur de télévision, ainsi qu’homme politique congolais. Il est ministre délégué en charge des Anciens combattants près le ministre de la Défense nationale depuis août 2025 et député national de la circonscription de Lukunga à Kinshasa depuis 2019, réélu lors des élections législatives de 2023.</p>

            <h3>Parcours médiatique</h3>

            <p>Journaliste de formation, Éliézer Ntambwe s’est fait connaître du grand public comme producteur et animateur de l’émission télévisée <strong>« Tokomi Wapi »</strong>, diffusée sur plusieurs chaînes de télévision en RDC. Cette émission d’analyse de l’actualité sociale et politique a donné la parole à de nombreux acteurs de la vie nationale et a rassemblé une large audience, avec des dizaines de milliers de visionnages quotidiens sur internet.</p>

            <p>Grâce à son ton engagé et à sa capacité à vulgariser les enjeux politiques, il s’est imposé comme l’une des figures médiatiques les plus suivies de sa génération en RDC.</p>

            <h3>Parcours politique et engagement</h3>

            <p>En 2018, Éliézer Ntambwe est élu député national de la circonscription de Lukunga à Kinshasa, sous la bannière de la coalition Lamuka. Il est reconduit à ce siège lors des élections législatives de 2023, confirmant son ancrage dans cette circonscription et son rôle au sein de l’opposition parlementaire de l’époque.</p>

            <p>À l’Assemblée nationale, il se distingue par un travail législatif axé sur les questions sociales et la protection des plus vulnérables. Il est notamment l’initiateur de plusieurs propositions de loi portant sur la création, l’organisation et le fonctionnement de l’Ordre national des sages-femmes, textes adoptés par la représentation nationale, ainsi que d’une proposition de loi modifiant et complétant le statut des anciens présidents de la République élus et des anciens chefs de corps constitués.</p>

            <p>Comme député, il utilise aussi les moyens de contrôle parlementaire (questions orales avec débat) pour interpeller le gouvernement sur des sujets tels que l’exercice du petit commerce par des étrangers, la surpopulation carcérale à la prison de Makala, la gestion du patrimoine foncier et immobilier de l’État ou encore les relations diplomatiques entre la RDC et la Chine. Ces initiatives témoignent d’un engagement en faveur de la justice sociale, de la bonne gouvernance et de la défense de l’intérêt général.</p>

            <h3>Ministre délégué aux Anciens combattants</h3>

            <p>En août 2025, Éliézer Ntambwe fait son entrée au <strong>Gouvernement Suminwa II</strong> en qualité de ministre délégué près le ministre de la Défense nationale, en charge des Anciens combattants. À ce poste, il porte l’ambition de doter les anciens combattants d’un cadre légal moderne, notamment à travers un projet de loi dédié à leur statut, et de sécuriser leur patrimoine ainsi que leurs droits sociaux.</p>

            <p>Dès ses premiers mois au gouvernement, il met en avant plusieurs axes prioritaires : l’identification et la catégorisation des anciens combattants, la récupération et la sécurisation de leurs biens, l’amélioration des conditions de fin de carrière et la préparation de cités et de mécanismes de soutien social en leur faveur. Son action s’inscrit dans la vision du Président de la République visant à reconnaître le sacrifice des anciens combattants et à leur garantir une retraite digne.</p>

            <h3>Initiatives sociales et ouverture à la diaspora</h3>

            <p>En parallèle de ses activités médiatiques et politiques, Éliézer Ntambwe est à l’origine de l’association <strong>RDC-Monde</strong>, plateforme visant à mobiliser la diaspora congolaise pour contribuer au développement national. Cette structure, présentée comme apolitique et tournée vers l’action citoyenne, encourage la participation des Congolais de l’étranger à des projets économiques, sociaux et communautaires en RDC.</p>
            HTML,
            'photo_path' => 'cabinet_photos/NTAMBWE_MPOSHI_CHARMANT_ELIEZER_cropped.png',
            'order_index' => 1,
            'is_active' => true,
        ]);


        // --- Membres Fictifs ---
        $members = [
            ['name' => 'Jean Mweka', 'function' => 'Directeur de Cabinet', 'bio' => 'Haut fonctionnaire expérimenté, Jean-Pierre Lumumba est un expert en administration publique et en gouvernance stratégique. Il est chargé de la coordination globale du cabinet, de la supervision des équipes et de la mise en œuvre des directives ministérielles. Son parcours inclut des postes clés dans plusieurs ministères régaliens.'],
            ['name' => 'Marie-Claire Bokeka', 'function' => 'Directrice de Cabinet Adjointe', 'bio' => 'Spécialiste de la planification opérationnelle et de la gestion de projets, Marie-Claire Mobutu seconde le Directeur de Cabinet dans ses fonctions. Elle veille au suivi des dossiers prioritaires, à la logistique et à la bonne marche administrative du cabinet. Elle est reconnue pour sa rigueur et son efficacité.'],
            ['name' => 'General Sylvain Kakobola', 'function' => 'Conseiller Principal en Stratégie et Sécurité', 'bio' => 'Officier général des forces armées à la retraite, le Général Kasavubu apporte son expertise sur les questions de défense, de sécurité nationale et de coopération militaire. Sa vision stratégique est un atout majeur pour l\'élaboration des politiques de défense.'],
            ['name' => 'Adolphe Kolwezi', 'function' => 'Conseiller en Communication', 'bio' => 'Professionnel des médias et de la communication institutionnelle, Adolphe Tshisekedi est responsable de l\'image publique du ministère. Il gère les relations avec la presse, la communication digitale et les déclarations officielles, assurant la transparence et la clarté de l\'action ministérielle.'],
            ['name' => 'Sophie Kananga', 'function' => 'Conseillère Juridique et Légale', 'bio' => 'Avocate spécialisée en droit public, Maître Kimbangu conseille le ministre sur tous les aspects légaux et réglementaires. Elle supervise la rédaction des projets de loi, des décrets et assure la conformité juridique des actions du ministère.'],
        ];

        foreach ($members as $index => $member) {
            CabinetMember::create([
                'name' => $member['name'],
                'slug' => Str::slug($member['name']),
                'official_function' => $member['function'],
                'biography' => $member['bio'],
                'order_index' => $index + 2,
                'is_active' => true,
            ]);
        }
    }
}
