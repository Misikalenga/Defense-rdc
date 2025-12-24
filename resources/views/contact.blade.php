<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact - Ministère Délégué Défense RDC</title>

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
                        ink: "#0B1220",
                    },
                    boxShadow: {
                        soft: "0 8px 20px rgba(11,18,32,0.08)"
                    }
                }
            }
        }
    </script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map {
            height: 350px;
            width: 100%;
            position: relative; 
            z-index: 1;
        }

        /*empecehr leaflet d'etre au premier plan*/
        .leaflet-container * {
            z-index: 1 !important;
        }

        .contact-tab.active {
            background-color: #0073CF; /* rdcBlue */
            color: #ffffff;
            border-color: #0073CF;
        }
    </style>
</head>

<body class="bg-cream text-ink antialiased">

@include('partials.header')

<!-- HERO CONTACT -->
<section class="bg-ink text-white py-14 md:py-20 relative overflow-hidden min-h-[340px]">
    <div class="absolute inset-0 bg-rdcBlue/10"></div>
    <div class="absolute -right-20 -top-20 w-96 h-96 bg-rdcBlue/20 rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-4 lg:px-6 relative z-10">
        <p class="text-rdcGold font-bold uppercase tracking-widest text-xs mb-3">Nous contacter</p>
        <h1 class="text-3xl md:text-5xl font-extrabold mb-6">Ministère Délégué à la Défense et Anciens Combattants</h1>
        <p class="text-white/70 max-w-2xl text-lg leading-relaxed">
            Coordonnées officielles, contacts presse et informations sur le recrutement.
        </p>
    </div>
</section>

<!-- ONGLET BAR -->
@include('partials.onglet')

<main class="max-w-7xl mx-auto px-4 lg:px-6 py-12">

    <!-- SECTION 1 : COORDONNÉES -->
    <section id="section-coordonnees" class="contact-section">

        <h2 class="text-2xl font-extrabold uppercase tracking-wide flex items-center gap-3 mb-10">
            <span class="w-2 h-8 bg-rdcBlue block"></span> Coordonnées Officielles
        </h2>

        <div class="grid lg:grid-cols-2 gap-10">
            
            <!-- Formulaire -->
            <div class="bg-white p-6 shadow-soft border border-black/10">
                <h3 class="text-xl font-bold mb-4">Formulaire de Contact</h3>

                <form class="space-y-4">
                    <input type="text" placeholder="Nom complet"
                        class="w-full border border-black/20 p-3 focus:outline-none focus:border-rdcBlue">
                    <input type="email" placeholder="Adresse email"
                        class="w-full border border-black/20 p-3 focus:outline-none focus:border-rdcBlue">
                    <input type="text" placeholder="Objet"
                        class="w-full border border-black/20 p-3 focus:outline-none focus:border-rdcBlue">
                    <textarea placeholder="Votre message" rows="5"
                        class="w-full border border-black/20 p-3 focus:outline-none focus:border-rdcBlue"></textarea>

                    <button class="bg-rdcBlue text-white px-6 py-2 font-bold uppercase tracking-wide hover:bg-rdcBlue/90">
                        Envoyer
                    </button>
                </form>
            </div>

            <!-- Coordonnées + Carte -->
            <div class="space-y-6">
                <div class="bg-white p-6 shadow-soft border border-black/10">
                    <h3 class="text-xl font-bold mb-2">Adresse & Téléphone</h3>
                    <p class="text-black/70 mb-1">📍 Ministère Délégué à la Défense et Anciens Combattants</p>
                    <p class="text-black/70 mb-1">Boulevard Colonel Tshatshi, Kinshasa - Gombe</p>
                    <p class="text-black/70">📞 +243 820 000 000</p>
                </div>

                <div class="bg-white p-6 shadow-soft border border-black/10">
                    <h3 class="text-xl font-bold mb-4">Localisation</h3>
                    <div id="map"></div>
                </div>
            </div>

        </div>
    </section>

    <!-- SECTION 2 : PRESSE -->
    <section id="section-presse" class="contact-section hidden">
        <h2 class="text-2xl font-extrabold uppercase tracking-wide flex items-center gap-3 mb-10">
            <span class="w-2 h-8 bg-rdcRed block"></span> Espace Presse
        </h2>

        <div class="space-y-6">

            <div class="bg-white shadow-soft border border-black/10 p-6">
                <h3 class="text-xl font-bold mb-2">Accréditations Presse</h3>
                <p class="text-black/70 mb-4">
                    Les journalistes souhaitant couvrir les activités du Ministère peuvent soumettre une demande d’accréditation.
                </p>
                <button class="px-5 py-2 bg-rdcRed text-white font-bold uppercase tracking-wide hover:bg-rdcRed/90">
                    Faire une demande
                </button>
            </div>

            <div class="bg-white shadow-soft border border-black/10 p-6">
                <h3 class="text-xl font-bold mb-2">Demandes Médias</h3>
                <p class="text-black/70 mb-4">
                    Interviews, prises de vues, interventions du Ministre Délégué : les équipes médias peuvent soumettre une demande officielle.
                </p>
                <button class="px-5 py-2 bg-rdcBlue text-white font-bold uppercase tracking-wide hover:bg-rdcBlue/90">
                    Contacter le Service Presse
                </button>
            </div>

        </div>
    </section>

    <!-- SECTION 3 : RECRUTEMENT -->
    <section id="section-recrutement" class="contact-section hidden">
        <h2 class="text-2xl font-extrabold uppercase tracking-wide flex items-center gap-3 mb-10">
            <span class="w-2 h-8 bg-rdcGold block"></span> Recrutement
        </h2>

        <div class="space-y-6">

            <div class="bg-white p-6 shadow-soft border border-black/10">
                <h3 class="text-xl font-bold mb-2">Candidature Spontanée</h3>
                <p class="text-black/70 mb-4">
                    Vous souhaitez rejoindre l’administration du Ministère Délégué ? Déposez votre dossier complet : CV, lettre de motivation et références.
                </p>
                <button class="px-5 py-2 bg-rdcBlue text-white font-bold uppercase tracking-wide hover:bg-rdcBlue/90">
                    Envoyer une candidature
                </button>
            </div>

            <div class="bg-white p-6 shadow-soft border border-black/10">
                <h3 class="text-xl font-bold mb-2">Stages & Jeunes Experts</h3>
                <p class="text-black/70 mb-4">
                    Le Ministère accueille chaque année de jeunes diplômés pour des stages d’excellence dans les domaines militaire, logistique, juridique et administratif.
                </p>
                <button class="px-5 py-2 bg-rdcGold text-ink font-bold uppercase tracking-wide hover:bg-rdcGold/80">
                    Postuler à un stage
                </button>
            </div>

        </div>

    </section>

</main>

@include('partials.footer')

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>
    // Carte Leaflet
    let map = L.map('map').setView([-4.325, 15.322], 13); // Kinshasa Gombe

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
    }).addTo(map);

    // Retire le lien Leaflet" légalement
    map.attributionControl.setPrefix('');

    L.marker([-4.325, 15.322]).addTo(map)
        .bindPopup("Ministère Délégué - Défense RDC<br>Kinshasa / Gombe")
        .openPopup();
</script>

</body>
</html>
