<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ministre Délégué à la Défense Nationale - RDC</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        rdcBlue: "#0073CF"
                        , rdcRed: "#CE1126"
                        , rdcGold: "#FCD116"
                        , cream: "#F7F3E8"
                        , cream2: "#FBF8F0"
                        , ink: "#0B1220"
                    }
                    , boxShadow: {
                        soft: "0 8px 20px rgba(11,18,32,0.08)"
                    }
                }
            }
        }

    </script>

    <style>
        /* Background YouTube */
        .yt-bg {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .yt-bg iframe {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 120vw;
            height: 120vh;
            transform: translate(-50%, -50%);
            filter: saturate(.95) contrast(1.05) brightness(.82);
        }

        /* Subtle underline hover for desktop nav like mil.be */
        .nav-link::after {
            content: "";
            display: block;
            height: 2px;
            width: 0;
            background: currentColor;
            transition: width .25s ease;
            margin-top: 6px;
        }

        .nav-link:hover::after {
            width: 100%;
        }

    </style>
</head>

<body class="bg-cream text-ink antialiased">
<!-- BARRE DE PROGRESSION DE CHARGEMENT -->
    <div id="progressBar" class="notscroll fixed top-0 left-0 h-1 bg-rdcGold z-[9999] w-0"></div>
<!-- POPUP COOKIES -->
    <div id="cookiePopup" class="notscroll fixed bottom-4 left-4 right-4 md:left-auto md:right-6 md:w-[420px] z-[9998]">
        <div class="bg-white border border-black/10 shadow-soft p-4 md:p-5">
            <div class="flex items-start gap-3">
                <div class="text-2xl">🍪</div>
                <div class="text-sm leading-relaxed">
                    <p class="font-semibold uppercase tracking-wide">Cookies</p>
                    <p class="text-black/70 mt-1">
                        Cookies pour sécurité, mesure d’audience et amélioration du service.
                    </p>
                    <div class="mt-3 flex flex-wrap gap-2">
                        <button id="acceptCookies" class="px-3 py-1.5 bg-rdcBlue text-white text-sm hover:bg-rdcBlue/90 transition">
                            Accepter
                        </button>
                        <button id="declineCookies" class="px-3 py-1.5 bg-black/5 text-sm hover:bg-black/10 transition">
                            Refuser
                        </button>
                        <button id="customizeCookies" class="px-3 py-1.5 bg-black/5 text-sm hover:bg-black/10 transition">
                            Personnaliser
                        </button>
                    </div>
                </div>
                <button id="closeCookies" class="ml-auto text-black/60 hover:text-black text-lg leading-none">✕</button>
            </div>
        </div>
    </div>

    <!-- HEADER -->
    @include('partials.header')

    <section id="accueil" class="notscroll  relative h-screen max-h-[19.4375rem] w-full overflow-hidden bg-ink md:max-h-[42rem]">

        <!-- CONTAINER VIDÉO -->
        <div class="absolute inset-0 h-full w-full">
            <iframe class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 pointer-events-none" style="width: 120vw; height: 120vh;" src="https://www.youtube.com/embed/GWNu3U3HNfc?start=0&autoplay=1&mute=1&controls=0&loop=1&playlist=GWNu3U3HNfc&modestbranding=1&playsinline=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen title="Fond vidéo Défense RDC">
            </iframe>
        </div>

        <div class="relative z-10 flex h-full w-full items-center justify-center bg-gradient-to-b from-black/70 via-black/55 to-black/80 p-4">
            <div class="text-center text-white text-balance">

                <h2 class="text-2xl md:text-4xl font-extrabold">
                    Défense Nationale &amp; Anciens Combattants
                </h2>

                <h4 class="mt-6 text-xs md:text-sm uppercase tracking-[0.65em] font-semibold opacity-90">
                    É l i é z e r&nbsp; N t a m b w e
                </h4>

            </div>
        </div>

    </section>

<!-- BIOGRAPHIE -->

    <section id="biographie" class="notscroll">
        <div class="max-w-7xl mx-auto px-4 lg:px-6 py-16 grid md:grid-cols-2 gap-8 items-center">
            <div class="aspect-square bg-white border border-black/10 shadow-soft relative overflow-hidden">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_30%,rgba(0,115,207,0.15),transparent_45%),radial-gradient(circle_at_80%_80%,rgba(206,17,38,0.12),transparent_45%)]">
                </div>
                <img src="assets/NTAMBWE_MPOSHI_CHARMANT_ELIEZER.jpg" alt="Éliézer Ntambwe">
                <div class="absolute bottom-0 left-0 right-0 bg-white/90 p-4 border-t border-black/10">
                    <p class="text-xs uppercase tracking-widest text-black/60 font-bold">Portrait officiel</p>
                    <p class="font-semibold">Éliézer Ntambwe</p>
                    <p class="text-sm text-black/70">Ministre Délégué à la Défense Nationale</p>
                </div>
            </div>

            <div class="lg:flex lg:h-full lg:flex-col pt-16 justify-between">
                <div>
                    <h2 class="text-2xl md:text-3xl font-extrabold uppercase tracking-wide">Ministre Délégué à la Défense Nationale
                    </h2>
                    <p class="mt-3 text-black/70 leading-relaxed">
                        Parcours public, engagements nationaux et vision stratégique au service de la sécurité
                        et des anciens combattants.
                    </p>
                    <ul class="mt-4 space-y-2 text-sm text-black/70">
                        <li>• Expérience gouvernementale et réformes sectorielles</li>
                        <li>• Programmes de modernisation et d’éthique militaire</li>
                        <li>• Coopération régionale pour la stabilisation</li>
                    </ul>
                    <a href="#" class="mt-6 inline-flex text-sm font-semibold text-rdcBlue hover:underline uppercase tracking-wide">
                        Lire la biographie complète →
                    </a>
                </div>

                <!-- AUTRES MEMBRES DU CABINET -->
                <div id="cabinet" class="max-w-7xl pt-16 lg:pt-0 grid grid-cols-2 gap-8 block md:hidden lg:block lg:grid lg:grid-cols-3 lg:gap-8">

                    <!-- BLOC 1 -->
                    <div class="aspect-square bg-white border border-black/10 shadow-soft relative overflow-hidden">
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_30%,rgba(0,115,207,0.15),transparent_45%),radial-gradient(circle_at_80%_80%,rgba(206,17,38,0.12),transparent_45%)]"></div>
                        <img src="assets/NTAMBWE_MPOSHI_CHARMANT_ELIEZER_cropped.png" alt="Nom Ministre 1" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-white/90 px-4  border-t border-black/10">
                            <p class="font-semibold">Nom Ministre 1</p>
                            <p class="text-sm text-black/70">Titre du Ministre</p>
                        </div>
                    </div>

                    <!-- BLOC 2 -->
                    <div class="aspect-square bg-white border border-black/10 shadow-soft relative overflow-hidden">
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_30%,rgba(0,115,207,0.15),transparent_45%),radial-gradient(circle_at_80%_80%,rgba(206,17,38,0.12),transparent_45%)]"></div>
                        <img src="assets/NTAMBWE_MPOSHI_CHARMANT_ELIEZER_cropped.png" alt="Nom Ministre 2" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-white/90 px-4  border-t border-black/10">
                            <p class="font-semibold">Nom Ministre 2</p>
                            <p class="text-sm text-black/70">Titre du Ministre</p>
                        </div>
                    </div>

                    <!-- BLOC 3 caché en version telephone-->
                    <div class="aspect-square bg-white border border-black/10 hidden lg:block shadow-soft relative overflow-hidden">
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_30%,rgba(0,115,207,0.15),transparent_45%),radial-gradient(circle_at_80%_80%,rgba(206,17,38,0.12),transparent_45%)]"></div>
                        <img src="assets/NTAMBWE_MPOSHI_CHARMANT_ELIEZER_cropped.png" alt="Nom Ministre 3" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-white/90 px-4  border-t border-black/10">
                            <p class="font-semibold">Nom Ministre 3</p>
                            <p class="text-sm text-black/70">Titre du Ministre</p>
                        </div>
                    </div>
                </div>
            </div>          
        </div>
        <!-- VERSION TABLET AUTRES MEMBRES DU CABINET -->
                <div id="cabinet" class="max-w-7xl pb-16 m-auto px-4 lg:pt-0 md:grid md:grid-cols-3 gap-8 hidden md:block lg:hidden">

                    <!-- BLOC 1 -->
                    <div class="aspect-square bg-white border border-black/10 shadow-soft relative overflow-hidden">
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_30%,rgba(0,115,207,0.15),transparent_45%),radial-gradient(circle_at_80%_80%,rgba(206,17,38,0.12),transparent_45%)]"></div>
                        <img src="assets/MINISTRE_1.jpg" alt="Nom Ministre 1" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-white/90 px-4  border-t border-black/10">
                            <p class="font-semibold">Nom Ministre 1</p>
                            <p class="text-sm text-black/70">Titre du Ministre</p>
                        </div>
                    </div>

                    <!-- BLOC 2 -->
                    <div class="aspect-square bg-white border border-black/10 shadow-soft relative overflow-hidden">
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_30%,rgba(0,115,207,0.15),transparent_45%),radial-gradient(circle_at_80%_80%,rgba(206,17,38,0.12),transparent_45%)]"></div>
                        <img src="assets/MINISTRE_2.jpg" alt="Nom Ministre 2" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-white/90 px-4  border-t border-black/10">
                            <p class="font-semibold">Nom Ministre 2</p>
                            <p class="text-sm text-black/70">Titre du Ministre</p>
                        </div>
                    </div>

                    <!-- BLOC 3 -->
                    <div class="aspect-square bg-white border border-black/10 shadow-soft relative overflow-hidden">
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_30%,rgba(0,115,207,0.15),transparent_45%),radial-gradient(circle_at_80%_80%,rgba(206,17,38,0.12),transparent_45%)]"></div>
                        <img src="assets/MINISTRE_3.jpg" alt="Nom Ministre 3" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-white/90 px-4  border-t border-black/10">
                            <p class="font-semibold">Nom Ministre 3</p>
                            <p class="text-sm text-black/70">Titre du Ministre</p>
                        </div>
                    </div>
                </div>
    </section>

<!-- ACTUALITÉS -->
    <section id="actualites" class=" bg-cream2  border-t border-black/10 px-4 lg:px-6 py-16">

        <div class="max-w-7xl mx-auto">
            <div class="flex items-end justify-between">
                <div>
                    <h2 class="text-2xl md:text-3xl font-extrabold uppercase tracking-wide">Actualités</h2>
                    <p class="mt-2 text-black/70">
                        Hommages nationaux, réformes, actions sociales et accompagnement des anciens combattants.
                    </p>
                </div>

                <a href="#" class="hidden md:inline-flex text-sm font-semibold text-rdcBlue hover:underline uppercase tracking-wide">
                    Toutes les actualités →
                </a>
            </div>

            <div class="mt-6 grid lg:grid-cols-3 gap-5">

                <article class="bg-white overflow-hidden border border-black/10 shadow-soft hover:-translate-y-1 transition">
                    <div class="relative h-40 w-full overflow-hidden">
                        <img src="assets/bcc_kin.jpg" alt="ancient combattant" class="w-full h-full object-cover object-center">
                        <div class="absolute inset-0 bg-gradient-to-br from-rdcBlue/30 to-cream2/40"></div>
                    </div>
                    <div class="p-5">
                        <p class="text-xs uppercase tracking-widest text-black/60 font-semibold">
                            Communiqué • 20 Nov 2025
                        </p>
                        <h3 class="mt-2 font-bold text-lg">
                            Lancement du Fonds National d’Appui aux Anciens Combattants
                        </h3>
                        <p class="mt-2 text-sm text-black/70">
                            Mise en place d’aides financières, de soins prioritaires et de dispositifs de soutien social pour les
                            vétérans.
                        </p>
                    </div>
                </article>


                <article class="bg-white overflow-hidden border border-black/10 shadow-soft hover:-translate-y-1 transition">
                    <div class="relative h-40 w-full overflow-hidden">
                        <img src="assets/ancien-combattant-1.JPG" alt="ancient combattant" class="w-full h-full object-cover object-center">
                        <div class="absolute inset-0 bg-gradient-to-br from-rdcGold/30 to-cream2/40"></div>
                    </div>
                    <div class="p-5">
                        <p class="text-xs uppercase tracking-widest text-black/60 font-semibold">
                            Cérémonie • 18 Nov 2025
                        </p>
                        <h3 class="mt-2 font-bold text-lg">
                            Hommage national aux vétérans et blessés de guerre
                        </h3>
                        <p class="mt-2 text-sm text-black/70">
                            Cérémonie officielle dédiée à la reconnaissance des anciens combattants ayant servi la Nation.
                        </p>
                    </div>
                </article>

                <article class="bg-white overflow-hidden border border-black/10 shadow-soft hover:-translate-y-1 transition">
                    <div class="relative h-40 w-full overflow-hidden">
                        <img src="assets/ancien-combattant-3.jpg" alt="ancient combattant" class="w-full h-full object-cover object-center">
                        <div class="absolute inset-0 bg-gradient-to-br from-rdcRed/30 to-cream2/40"></div>
                    </div>
                    <div class="p-5">
                        <p class="text-xs uppercase tracking-widest text-black/60 font-semibold">
                            Réforme • 12 Nov 2025
                        </p>
                        <h3 class="mt-2 font-bold text-lg">
                            Modernisation du système des pensions militaires
                        </h3>
                        <p class="mt-2 text-sm text-black/70">
                            Simplification des démarches, revalorisation des pensions et numérique au service des anciens combattants.
                        </p>
                    </div>
                </article>

            </div>

            <a href="#" class="mt-6 md:hidden inline-flex text-sm font-semibold text-rdcBlue hover:underline uppercase tracking-wide">
                Toutes les actualités →
            </a>
        </div>
    </section>


    <!-- ANNONCES OFFICIELLES -->
    <!--<section id="annonces" class="bg-cream2 border-y border-black/10">
        <div class="max-w-7xl mx-auto px-4 lg:px-6 py-16">
            <div class="max-w-4xl">
                <h2 class="text-2xl md:text-3xl font-extrabold uppercase tracking-wide">Annonces Officielles</h2>
                <p class="mt-2 text-black/70">
                    Publications légales, arrêtés ministériels et avis de recrutement en vigueur.
                </p>
            </div>

            <div class="mt-8 flex flex-col gap-4">

                <div class="bg-white border border-black/10 p-5 md:p-6 shadow-soft hover:shadow-lg transition-all flex flex-col md:flex-row gap-5 items-start md:items-center">
                    <div class="flex-shrink-0 bg-rdcBlue/10 text-rdcBlue w-12 h-12 flex items-center justify-center rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <div class="flex flex-wrap items-center gap-2 mb-1">
                            <span class="inline-block bg-rdcRed/10 text-rdcRed text-[10px] font-bold px-2 py-0.5 rounded uppercase tracking-wider">Important</span>
                            <span class="text-xs text-black/50 font-mono">Réf: MINDEF/CAB/0042/25</span>
                        </div>
                        <h3 class="font-bold text-lg leading-tight">Arrêté ministériel portant nomination des Directeurs Régionaux
                        </h3>
                        <p class="text-sm text-black/70 mt-1">
                            Publication de la liste officielle des nouveaux directeurs pour les régions militaires Est et Centre.
                            Prise de fonction immédiate.
                        </p>
                        <p class="text-xs text-black/50 mt-2">Publié le 24 Nov 2025</p>
                    </div>
                    <a href="#" class="mt-2 md:mt-0 px-4 py-2 border border-black/10 text-sm font-semibold hover:bg-black/5 transition whitespace-nowrap">
                        Télécharger PDF
                    </a>
                </div>

                <div class="bg-white border border-black/10 p-5 md:p-6 shadow-soft hover:shadow-lg transition-all flex flex-col md:flex-row gap-5 items-start md:items-center">
                    <div class="flex-shrink-0 bg-rdcGold/20 text-ink w-12 h-12 flex items-center justify-center rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <div class="flex flex-wrap items-center gap-2 mb-1">
                            <span class="inline-block bg-black/5 text-black/70 text-[10px] font-bold px-2 py-0.5 rounded uppercase tracking-wider">Recrutement</span>
                            <span class="text-xs text-black/50 font-mono">Réf: REC/SERV/2026-A</span>
                        </div>
                        <h3 class="font-bold text-lg leading-tight">Ouverture du concours d'entrée 2026 - École du Génie</h3>
                        <p class="text-sm text-black/70 mt-1">
                            Avis de recrutement pour les ingénieurs et techniciens. Les dossiers sont à déposer avant le 15 Janvier
                            2026.
                        </p>
                        <p class="text-xs text-black/50 mt-2">Publié le 10 Nov 2025</p>
                    </div>
                    <a href="#" class="mt-2 md:mt-0 px-4 py-2 border border-black/10 text-sm font-semibold hover:bg-black/5 transition whitespace-nowrap">
                        Voir les conditions
                    </a>
                </div>

                <div class="bg-white border border-black/10 p-5 md:p-6 shadow-soft hover:shadow-lg transition-all flex flex-col md:flex-row gap-5 items-start md:items-center">
                    <div class="flex-shrink-0 bg-gray-100 text-gray-600 w-12 h-12 flex items-center justify-center rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <div class="flex flex-wrap items-center gap-2 mb-1">
                            <span class="inline-block bg-black/5 text-black/70 text-[10px] font-bold px-2 py-0.5 rounded uppercase tracking-wider">Note
                                de service</span>
                        </div>
                        <h3 class="font-bold text-lg leading-tight">Fermeture exceptionnelle des bureaux administratifs</h3>
                        <p class="text-sm text-black/70 mt-1">
                            En raison de la Journée Nationale des Héros, les services administratifs seront fermés ce vendredi.
                        </p>
                        <p class="text-xs text-black/50 mt-2">Publié le 28 Nov 2025</p>
                    </div>
                    <a href="#" class="mt-2 md:mt-0 px-4 py-2 border border-black/10 text-sm font-semibold hover:bg-black/5 transition whitespace-nowrap">
                        Lire la note
                    </a>
                </div>

            </div>
        </div>
    </section>-->
    <!-- DÉCISIONS & NOTES -->
    <!--<section id="decisions" class="border-b border-black/10">
        <div class="max-w-7xl mx-auto px-4 lg:px-6 py-16">
            <div class="max-w-4xl mb-8">
                <h2 class="text-2xl md:text-3xl font-extrabold uppercase tracking-wide">Décisions & Notes</h2>
                <p class="mt-2 text-black/70">
                    Actes administratifs, décisions ministérielles et notes circulaires.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div class="bg-white group block border border-black/10 p-6 hover:shadow-soft transition-all duration-300 relative">
                    <div class="flex items-start justify-between mb-4">
                        <div class="inline-flex items-center px-2 py-1 bg-ink text-white text-[10px] font-bold uppercase tracking-widest">
                            Décision
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-black/30 group-hover:text-rdcBlue transition-colors">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg mb-2 group-hover:text-rdcBlue transition-colors">
                        Décision N°005/MDDN/2025
                    </h3>
                    <p class="text-sm text-black/70 line-clamp-2">
                        Portant création d'une commission ad hoc pour l'évaluation des infrastructures hospitalières militaires en
                        zone Est.
                    </p>
                    <div class="mt-4 pt-4 border-t border-black/5 flex items-center justify-between text-xs text-black/50">
                        <span>26 Nov 2025</span>
                        <span class="uppercase tracking-wide font-semibold text-black/70">PDF • 1.2 MB</span>
                    </div>
                    <a href="#" class="absolute inset-0 z-10" aria-label="Télécharger"></a>
                </div>

                <div class="bg-white group block border border-black/10 p-6 hover:shadow-soft transition-all duration-300 relative">
                    <div class="flex items-start justify-between mb-4">
                        <div class="inline-flex items-center px-2 py-1 bg-black/5 text-black/80 text-[10px] font-bold uppercase tracking-widest">
                            Note circulaire
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-black/30 group-hover:text-rdcBlue transition-colors">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg mb-2 group-hover:text-rdcBlue transition-colors">
                        Note de service - Logistique
                    </h3>
                    <p class="text-sm text-black/70 line-clamp-2">
                        Procédure actualisée concernant l'approvisionnement en carburant des unités déployées. Application
                        immédiate.
                    </p>
                    <div class="mt-4 pt-4 border-t border-black/5 flex items-center justify-between text-xs text-black/50">
                        <span>22 Nov 2025</span>
                        <span class="uppercase tracking-wide font-semibold text-black/70">PDF • 850 KB</span>
                    </div>
                    <a href="#" class="absolute inset-0 z-10" aria-label="Télécharger"></a>
                </div>

                <div class="bg-white group block border border-black/10 p-6 hover:shadow-soft transition-all duration-300 relative">
                    <div class="flex items-start justify-between mb-4">
                        <div class="inline-flex items-center px-2 py-1 bg-rdcGold/20 text-ink text-[10px] font-bold uppercase tracking-widest">
                            Arrêté
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-black/30 group-hover:text-rdcBlue transition-colors">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg mb-2 group-hover:text-rdcBlue transition-colors">
                        Arrêté Interministériel Santé/Défense
                    </h3>
                    <p class="text-sm text-black/70 line-clamp-2">
                        Cadre de collaboration pour la prise en charge sanitaire des anciens combattants dans les hôpitaux de
                        référence.
                    </p>
                    <div class="mt-4 pt-4 border-t border-black/5 flex items-center justify-between text-xs text-black/50">
                        <span>15 Nov 2025</span>
                        <span class="uppercase tracking-wide font-semibold text-black/70">PDF • 2.4 MB</span>
                    </div>
                    <a href="#" class="absolute inset-0 z-10" aria-label="Télécharger"></a>
                </div>

                <div class="bg-white group block border border-black/10 p-6 hover:shadow-soft transition-all duration-300 relative">
                    <div class="flex items-start justify-between mb-4">
                        <div class="inline-flex items-center px-2 py-1 bg-black/5 text-black/80 text-[10px] font-bold uppercase tracking-widest">
                            Note d'information
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-black/30 group-hover:text-rdcBlue transition-colors">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg mb-2 group-hover:text-rdcBlue transition-colors">
                        Mise à jour du protocole cérémonial
                    </h3>
                    <p class="text-sm text-black/70 line-clamp-2">
                        Modifications apportées au déroulement des cérémonies d'hommage aux morts pour la patrie.
                    </p>
                    <div class="mt-4 pt-4 border-t border-black/5 flex items-center justify-between text-xs text-black/50">
                        <span>08 Nov 2025</span>
                        <span class="uppercase tracking-wide font-semibold text-black/70">PDF • 450 KB</span>
                    </div>
                    <a href="#" class="absolute inset-0 z-10" aria-label="Télécharger"></a>
                </div>

            </div>
        </div>
    </section>-->

<!-- MISSIONS -->

    <section id="missions" class="bg-cream border-t border-black/10">
        <div class="max-w-7xl mx-auto px-4 lg:px-6 pt-16 grid lg:grid-cols-2 gap-10 items-center">

            <div>
                <h2 class="text-2xl md:text-3xl font-extrabold text-black uppercase tracking-wide">Missions</h2>

                <p class="mt-3 text-black/70 leading-relaxed">
                    Le Ministère Délégué supervise la modernisation de la Défense nationale et assure la
                    protection des droits des anciens combattants, en veillant à leur reconnaissance, leur
                    accompagnement social et leur réinsertion économique.
                </p>

                <div class="mt-6 space-y-3">

                    <div class="bg-white text-black p-4 border border-black/10 flex gap-3">
                        <div class="w-10 h-10 bg-rdcBlue/10 flex items-center justify-center text-xl">🎖️</div>
                        <div>
                            <p class="font-semibold">Reconnaissance & Mémoire</p>
                            <p class="text-sm text-black/70">
                                Valorisation du sacrifice des anciens combattants, cérémonies nationales,
                                préservation de la mémoire militaire congolaise.
                            </p>
                        </div>
                    </div>
                
                    <div class="bg-white  text-black p-4 border border-black/10 flex gap-3">
                        <div class="w-10 h-10 bg-rdcRed/10 flex items-center justify-center text-xl">⚖️</div>
                        <div>
                            <p class="font-semibold">Droits sociaux & assistance</p>
                            <p class="text-sm text-black/70">
                                Accès aux pensions, soins, aides financières, soutien psychologique, accompagnement des blessés et des
                                familles.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white text-black p-4 h-full border border-black/10 flex gap-3">
                        <div class="w-10 h-10 bg-rdcGold/20 flex items-center justify-center text-xl">🏛️</div>
                        <div>
                            <p class="font-semibold">Réinsertion & opportunités économiques</p>
                            <p class="text-sm text-black/70">
                                Formation, reconversion professionnelle, partenariats avec les entreprises publiques et privées pour
                                faciliter l’intégration.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="lg:flex lg:h-full">
                <div class="aspect-[4/3] h-full bg-white shadow-soft border border-black/10 relative overflow-hidden">
                
                    <img src="assets/ancien-combattant-2.jpg" alt="soldat vétérans" class="absolute inset-0 w-full h-full object-cover object-center">
                
                    <div class="absolute inset-0 pointer-events-none bg-[radial-gradient(circle_at_20%_20%,rgba(0,115,207,0.18),transparent_45%),radial-gradient(circle_at_80%_10%,rgba(206,17,38,0.18),transparent_45%),radial-gradient(circle_at_60%_80%,rgba(252,209,22,0.25),transparent_50%)]">
                    </div>
                
                    <div class="absolute bottom-0 left-0 w-full bg-white text-black bg-opacity-95 px-5 py-4 border-t border-black/10">
                        <p class="text-[10px] uppercase tracking-widest text-black/60 font-bold">Focus</p>
                        <h3 class="mt-1 text-lg font-bold">Soutien aux anciens combattants</h3>
                        <p class="mt-1 text-xs text-black/70">
                            Une politique dédiée à la reconnaissance et au soutien de ceux qui ont servi.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    <!-- PROJETS -->
        <div id="projets" class="max-w-7xl mx-auto px-4 pt-6 lg:px-6 pb-16">
            <!--<h2 class="text-2xl md:text-3xl font-extrabold uppercase tracking-wide">Projets</h2>-->
            <!--<p class="mt-2 text-black/70">Axes de modernisation et programmes pour les vétérans.</p>-->

            <div class="mt-6 grid md:grid-cols-3 md:h-60 gap-4">
                <div class="bg-white text-black p-6 border border-black/10 shadow-soft">
                    <p class="text-xs uppercase tracking-widest text-black/60 font-bold">Modernisation</p>
                    <h3 class="mt-2 font-bold">Équipements & infrastructures</h3>
                    <p class="mt-2 text-sm text-black/70">Mise à niveau des capacités nationales.</p>
                </div>
                <div class="bg-white text-black p-6 border border-black/10 shadow-soft">
                    <p class="text-xs uppercase tracking-widest text-black/60 font-bold">Formation</p>
                    <h3 class="mt-2 font-bold">Doctrine & préparation</h3>
                    <p class="mt-2 text-sm text-black/70">Professionnalisation des forces.</p>
                </div>
                <div class="bg-white text-black p-6 border border-black/10 shadow-soft">
                    <p class="text-xs uppercase tracking-widest text-black/60 font-bold">Vétérans</p>
                    <h3 class="mt-2 font-bold">Réinsertion & mémoire</h3>
                    <p class="mt-2 text-sm text-black/70">Reconnaissance et appui social.</p>
                </div>
            </div>
        </div>
    </section>



<!-- AGENDA -->
    <section id="agenda" class="bg-cream2 border-t border-black/10">
        <div class="max-w-7xl mx-auto px-4 lg:px-6 py-16">

            <div class="flex items-center justify-between">
                <h2 class="text-2xl md:text-3xl font-extrabold uppercase tracking-wide">Agenda</h2>

                <div class="flex items-center gap-2">
                    <button id="agendaPrev" class="px-3 py-2 bg-white border border-black/20 text-sm font-semibold hover:bg-black/5">
                        ◀
                    </button>
                    <button id="agendaNext" class="px-3 py-2 bg-white border border-black/20 text-sm font-semibold hover:bg-black/5">
                        ▶
                    </button>
                </div>
            </div>

            <div class="relative mt-8 overflow-hidden border border-black/10 bg-white">

                <div id="agendaTrack" class="flex transition-transform duration-500 ease-in-out">

                    <div class="min-w-full p-8 border-r border-black/10">
                        <p class="text-xs uppercase tracking-widest text-black/60 font-bold">
                            28 Nov 2025
                        </p>
                        <h3 class="mt-2 font-bold text-xl">Réunion de coordination inter-services</h3>
                        <p class="mt-2 text-sm text-black/70">Kinshasa</p>

                        <p class="mt-4 text-black/80 leading-relaxed">
                            Rencontre des directions centrales concernant la planification opérationnelle,
                            l’analyse des besoins stratégiques et la coordination interservices.
                        </p>
                    </div>

                    <div class="min-w-full p-8 border-r border-black/10">
                        <p class="text-xs uppercase tracking-widest text-black/60 font-bold">
                            05 Déc 2025
                        </p>
                        <h3 class="mt-2 font-bold text-xl">Cérémonie nationale des anciens combattants</h3>
                        <p class="mt-2 text-sm text-black/70">Place des Héros</p>

                        <p class="mt-4 text-black/80 leading-relaxed">
                            Cérémonie officielle en hommage aux vétérans de la nation, en présence
                            des autorités civiles et militaires.
                        </p>
                    </div>

                    <div class="min-w-full p-8 border-r border-black/10">
                        <p class="text-xs uppercase tracking-widest text-black/60 font-bold">
                            12 Déc 2025
                        </p>
                        <h3 class="mt-2 font-bold text-xl">Visite technique – Modernisation Logistique</h3>
                        <p class="mt-2 text-sm text-black/70">Congo Central</p>

                        <p class="mt-4 text-black/80 leading-relaxed">
                            Inspection des infrastructures logistiques dans le cadre du programme
                            national de modernisation des installations militaires.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script>
        const track = document.getElementById("agendaTrack");
        const next = document.getElementById("agendaNext");
        const prev = document.getElementById("agendaPrev");

        let index = 0;
        const total = track.children.length;

        function updateCarousel() {
            track.style.transform = `translateX(-${index * 100}%)`;
        }

        next.addEventListener("click", () => {
            index = (index + 1) % total;
            updateCarousel();
        });

        prev.addEventListener("click", () => {
            index = (index - 1 + total) % total;
            updateCarousel();
        });

    </script>



<!-- CONTACT -->

    <section id="contact" class="bg-cream2">
        <div class="max-w-7xl mx-auto px-4 lg:px-6 pb-16">
            <div class="bg-ink text-white p-8 md:p-10 shadow-soft relative overflow-hidden border border-black/10">
                <div class="absolute -right-24 -top-24 w-72 h-72 bg-rdcBlue/30 blur-2xl"></div>
                <div class="absolute -left-24 -bottom-24 w-72 h-72 bg-rdcRed/30 blur-2xl"></div>

                <div class="relative grid md:grid-cols-3 gap-6 items-center">
                    <div class="md:col-span-2">
                        <h2 class="text-2xl md:text-3xl font-extrabold uppercase tracking-wide">Contact</h2>
                        <p class="mt-2 text-white/80">
                            Demandes institutionnelles, presse et programmes pour vétérans.
                        </p>
                    </div>
                    <div class="flex md:justify-end">
                        <a href="mailto:contact@defense.gouv.cd" class="inline-flex items-center justify-center px-5 py-3 bg-rdcGold text-ink font-semibold hover:bg-rdcGold/90 transition">
                            Écrire au Ministère
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('partials.footer')







    <script>
        // animation scroll page
        document.addEventListener("DOMContentLoaded", () => {

            // 1. Injection du style CSS pour l'animation
            const style = document.createElement('style');
            style.innerHTML = `
        .js-reveal {
          opacity: 0;
          transform: translateY(30px); /* Décalage vers le bas */
          transition: opacity 0.6s ease-out, transform 0.6s ease-out;
          will-change: opacity, transform;
        }
        .js-reveal.is-visible {
          opacity: 1;
          transform: translateY(0);
        }
      `;
            document.head.appendChild(style);

            // 2. Sélection des éléments à animer
            const targets = document.querySelectorAll('section > *, article > *, .grid > *');

            // 3. Configuration de l'observateur (IntersectionObserver)
            const observerOptions = {
                root: null, // On observe par rapport à la fenêtre
                threshold: 0.15, // L'élément doit être visible à 15% pour déclencher
                rootMargin: "0px" // Marge autour de la zone de détection
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {

                        // Petit délai pour l'effet "cascade" si plusieurs éléments apparaissent en même temps
                        // On utilise une astuce simple : retarder légèrement l'ajout de la classe
                        setTimeout(() => {
                            entry.target.classList.add('is-visible');
                        }, index * 100); // décalage entre chaque élément détecté en même temps 

                        // on arrête d'observer l'élément pour économiser des ressources
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // 4. Initialisation  on lance l'observation
            targets.forEach(target => {
                // On vérifie si l'élément ou l'un de ses parents a la classe 'notscroll'
                if (target.closest('.notscroll')) {
                    return; // On arrête là, on n'anime pas cet élément
                }

                // On évite d'animer les balises script ou style par erreur
                if (target.tagName !== 'SCRIPT' && target.tagName !== 'STYLE') {
                    target.classList.add('js-reveal');
                    observer.observe(target);
                }
            });
        });


        // Cookies popup
        const cookiePopup = document.getElementById("cookiePopup");
        const acceptCookies = document.getElementById("acceptCookies");
        const declineCookies = document.getElementById("declineCookies");
        const customizeCookies = document.getElementById("customizeCookies");
        const closeCookies = document.getElementById("closeCookies");

        function hideCookies() {
            cookiePopup.classList.add("opacity-0", "translate-y-2", "pointer-events-none");
            setTimeout(() => cookiePopup.remove(), 350);
        }
        const cookieChoice = localStorage.getItem("cookieChoice");
        if (cookieChoice) hideCookies();
        acceptCookies.addEventListener("click", () => {
            localStorage.setItem("cookieChoice", "accepted");
            hideCookies();
        });
        declineCookies.addEventListener("click", () => {
            localStorage.setItem("cookieChoice", "declined");
            hideCookies();
        });
        customizeCookies.addEventListener("click", () => {
            localStorage.setItem("cookieChoice", "custom");
            hideCookies();
        });
        closeCookies.addEventListener("click", hideCookies);

    </script>
</body>

</html>
