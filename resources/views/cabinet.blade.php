<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cabinet - Ministère Délégué Défense RDC</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        rdcBlue: "#0073CF",
                        rdcRed: "#CE1126",
                        rdcGold: "#FCD116",
                        cream: "#F7F3E8",
                        cream2: "#FBF8F0",
                        ink: "#0B1220"
                    },
                    boxShadow: {
                        soft: "0 8px 20px rgba(11,18,32,0.08)"
                    }
                }
            }
        }
    </script>

    <style>
        .tab-btn.active {
            background-color: #0073CF;
            color: white;
            border-color: #0073CF;
        }

        .bio-box { 
            display: none; 
        }
        .bio-box.open { 
            display: block; 
        }
    </style>

</head>

<body class="bg-cream text-ink antialiased">

@include('partials.header')


<!-- HERO -->
<section class="bg-ink text-white py-14 md:py-20 relative overflow-hidden min-h-[340px]">
    <div class="absolute inset-0 bg-rdcBlue/10"></div>
    <div class="absolute -right-20 -top-20 w-96 h-96 bg-rdcBlue/20 rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-4 lg:px-6 relative z-10">
        <p class="text-rdcGold font-bold uppercase tracking-widest text-xs mb-3">Le Ministère</p>
        <h1 class="text-3xl md:5xl font-extrabold mb-6">Le Cabinet du Ministre Délégué</h1>
        <p class="text-white/70 max-w-2xl leading-relaxed text-lg">
            Découvrez l’équipe dirigeante, les attributions du Cabinet et le parcours du Ministre.
        </p>
    </div>
</section>


@include('partials.onglet')


<main class="max-w-7xl mx-auto px-4 lg:px-6 py-12">

<!-- =============== PARCOURS =============== -->
<section id="section-parcours" class="content-section">

    <h2 class="text-2xl font-extrabold uppercase tracking-wide flex items-center gap-3 mb-8">
        <span class="w-2 h-8 bg-rdcBlue block"></span> Parcours du Ministre
    </h2>

    <!-- CARRIERE PUBLIQUE -->
    <div class="bg-white border border-black/10 shadow-soft p-6 mb-10">
        <h3 class="text-xl font-bold mb-4">Carrière publique</h3>
        <p class="text-black/70 leading-relaxed">
            Le Ministre Délégué a exercé des fonctions de commandement, de gestion stratégique et de supervision
            des unités opérationnelles à travers plusieurs régions militaires. Il a dirigé de nombreuses missions
            de modernisation, participé à l’élaboration des réformes administratives et conduit des actions
            prioritaires en faveur des anciens combattants.
        </p>
    </div>

    <!-- ENGAGEMENT -->
    <div class="bg-white border border-black/10 shadow-soft p-6">
        <h3 class="text-xl font-bold mb-4">Engagement</h3>
        <p class="text-black/70 leading-relaxed">
            Engagé dans la consolidation de la sécurité nationale, il œuvre pour la professionnalisation des
            forces armées, l’amélioration de la condition militaire et la reconnaissance nationale des vétérans.
            Son action s’inscrit dans une vision de responsabilité, d’honneur et de service à la Nation.
        </p>
    </div>

</section>



<!-- =============== CABINET =============== -->
<section id="section-cabinet" class="content-section hidden">

    <h2 class="text-2xl font-extrabold uppercase tracking-wide flex items-center gap-3 mb-8">
        <span class="w-2 h-8 bg-rdcRed block"></span> Le Cabinet et ses Attributions
    </h2>

    <!-- SECTION EQUIPE AVEC MEMBRES MIS EN AVANT -->
    <h3 class="text-xl font-bold mb-4">Équipe Dirigeante</h3>

    <div class="grid md:grid-cols-2 gap-6 mb-10">

        <!-- MINISTRE -->
        <div class="bg-white border shadow-soft border-black/10 p-6 flex gap-4">
            <img src="/assets/NTAMBWE_MPOSHI_CHARMANT_ELIEZER_cropped.png" class="w-24 h-24 object-cover rounded" />
            <div>
                <h4 class="font-bold text-lg">Ministre Délégué</h4>
                <p class="text-black/60 text-sm">Chef du Département</p>
                <button onclick="toggleBio('bio-ministre')"
                    class="text-rdcBlue text-sm font-semibold mt-2 hover:underline">Biographie</button>
            </div>
        </div>
        <div id="bio-ministre" class="bio-box bg-white p-4 border border-black/10 shadow-soft rounded mb-4">
            <p class="text-black/70">
                Biographie du Ministre : parcours militaire, académique et responsabilités stratégiques au sein de l’État.
            </p>
        </div>

        <!-- CHEF DE CABINET -->
        <div class="bg-white border shadow-soft border-black/10 p-6 flex gap-4">
            <img src="/assets/NTAMBWE_MPOSHI_CHARMANT_ELIEZER_cropped.png" class="w-24 h-24 object-cover rounded" />
            <div>
                <h4 class="font-bold text-lg">Directeur de Cabinet</h4>
                <p class="text-black/60 text-sm">Coordination stratégique</p>
                <button onclick="toggleBio('bio-chef')"
                    class="text-rdcBlue text-sm font-semibold mt-2 hover:underline">Biographie</button>
            </div>
        </div>
        <div id="bio-chef" class="bio-box bg-white p-4 border border-black/10 shadow-soft rounded mb-4">
            <p class="text-black/70">
                Expert en gouvernance publique, il supervise le fonctionnement global du Cabinet et des équipes ministérielles.
            </p>
        </div>

        <!-- CHEF ADJOINT -->
        <div class="bg-white border shadow-soft border-black/10 p-6 flex gap-4">
            <img src="/assets/NTAMBWE_MPOSHI_CHARMANT_ELIEZER_cropped.png" class="w-24 h-24 object-cover rounded" />
            <div>
                <h4 class="font-bold text-lg">Directeur de Cabinet Adjoint</h4>
                <p class="text-black/60 text-sm">Appui opérationnel</p>
                <button onclick="toggleBio('bio-adjoint')"
                    class="text-rdcBlue text-sm font-semibold mt-2 hover:underline">Biographie</button>
            </div>
        </div>
        <div id="bio-adjoint" class="bio-box bg-white p-4 border border-black/10 shadow-soft rounded mb-4">
            <p class="text-black/70">
                Spécialiste de la planification opérationnelle, il coordonne les missions et dossiers prioritaires.
            </p>
        </div>

        <!-- CONSEILLER PRINCIPAL -->
        <div class="bg-white border shadow-soft border-black/10 p-6 flex gap-4">
            <img src="/assets/NTAMBWE_MPOSHI_CHARMANT_ELIEZER_cropped.png" class="w-24 h-24 object-cover rounded" />
            <div>
                <h4 class="font-bold text-lg">Conseiller Principal</h4>
                <p class="text-black/60 text-sm">Analyse & stratégie</p>
                <button onclick="toggleBio('bio-conseiller')"
                    class="text-rdcBlue text-sm font-semibold mt-2 hover:underline">Biographie</button>
            </div>
        </div>
        <div id="bio-conseiller" class="bio-box bg-white p-4 border border-black/10 shadow-soft rounded mb-4">
            <p class="text-black/70">
                Conseiller stratégique chargé de l’analyse des enjeux sécuritaires et des politiques publiques.
            </p>
        </div>

    </div>


    <!-- LISTE DES AUTRES MEMBRES -->
    <h3 class="text-xl font-bold mb-4">Membres du Cabinet</h3>

    <div class="space-y-4">

        <!-- TEMPLATE MEMBRE -->
        <div class="bg-white border border-black/10 shadow-soft p-5 flex gap-4">
            <img src="/assets/NTAMBWE_MPOSHI_CHARMANT_ELIEZER_cropped.png" class="w-20 h-20 object-cover rounded" />
            <div class="flex-1">
                <h4 class="font-bold">Chargé des Programmes</h4>
                <p class="text-black/60 text-sm">Planification et évaluation</p>
                <button onclick="toggleBio('bio-m1')" class="text-sm text-rdcBlue hover:underline mt-2">Voir biographie</button>

                <div id="bio-m1" class="bio-box bg-white border border-black/10 p-4 mt-3 shadow-soft rounded">
                    <p class="text-black/70">Responsable de l’élaboration et du suivi des programmes du ministère.</p>
                </div>
            </div>
        </div>

        <div class="bg-white border border-black/10 shadow-soft p-5 flex gap-4">
            <img src="/assets/NTAMBWE_MPOSHI_CHARMANT_ELIEZER_cropped.png" class="w-20 h-20 object-cover rounded" />
            <div class="flex-1">
                <h4 class="font-bold">Chargé de Communication</h4>
                <p class="text-black/60 text-sm">Relations publiques</p>
                <button onclick="toggleBio('bio-m2')" class="text-sm text-rdcBlue hover:underline mt-2">Voir biographie</button>

                <div id="bio-m2" class="bio-box bg-white border border-black/10 p-4 mt-3 shadow-soft rounded">
                    <p class="text-black/70">Gère les messages officiels et la stratégie de communication du Ministère.</p>
                </div>
            </div>
        </div>

    </div>


    <!-- ATTRIBUTIONS -->
    <div class="bg-white border border-black/10 shadow-soft p-6 mt-12">
        <h3 class="text-xl font-bold mb-4">Attributions du Cabinet</h3>
        <p class="text-black/70 leading-relaxed">
            Le Cabinet assure la coordination administrative du Ministère, la planification stratégique,
            la gestion des priorités, la communication institutionnelle et la supervision des projets
            en faveur de la Défense nationale et des anciens combattants.
        </p>
    </div>

</section>



<!-- =============== DISTINCTIONS =============== -->
<section id="section-distinction" class="content-section hidden">

    <h2 class="text-2xl font-extrabold uppercase tracking-wide flex items-center gap-3 mb-8">
        <span class="w-2 h-8 bg-rdcGold block"></span> Distinctions et Reconnaissance
    </h2>

    <!-- RECOMPENSES -->
    <div class="bg-white border border-black/10 shadow-soft p-6 mb-8">
        <h3 class="text-xl font-bold mb-3">Récompenses</h3>
        <p class="text-black/70 leading-relaxed">
            Le Ministre a reçu plusieurs distinctions honorifiques pour son engagement au service de
            la Nation, son rôle dans la modernisation des forces armées et son dévouement envers les
            anciens combattants.
        </p>
    </div>

    <!-- RECONNAISSANCE -->
    <div class="bg-white border border-black/10 shadow-soft p-6">
        <h3 class="text-xl font-bold mb-3">Reconnaissance nationale et internationale</h3>
        <p class="text-black/70 leading-relaxed">
            Des organisations nationales, régionales et internationales ont salué son travail en matière
            de gestion des crises, de contribution aux missions de paix et de renforcement des institutions
            de défense.
        </p>
    </div>

</section>


</main>


@include('partials.footer')

<script>
function switchTab(tab) {
    const tabs = ["parcours", "cabinet", "distinction"];

    tabs.forEach(t => {
        document.getElementById(`section-${t}`).classList.add("hidden");
        document.getElementById(`tab-${t}`).classList.remove("active");
    });

    document.getElementById(`section-${tab}`).classList.remove("hidden");
    document.getElementById(`tab-${tab}`).classList.add("active");
}

function toggleBio(id) {
    const box = document.getElementById(id);
    box.classList.toggle("open");
}
</script>

</body>
</html>
