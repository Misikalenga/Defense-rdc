<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Actualités - Ministère Délégué Défense RDC</title>

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

        /* Active tab style */
        .filter-btn.active {
            background-color: #0073CF;
            color: white;
            border-color: #0073CF;
        }

        /* Hide scrollbar for chrome/safari/opera */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .no-scrollbar {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
</head>

<body class="bg-cream text-ink antialiased">

    <div id="progressBar" class="fixed top-0 left-0 h-1 bg-rdcGold z-[9999] w-0"></div>

    <!-- HEADER -->
    @include('partials.header')

    <!-- HERO SECTION -->
    <section class="bg-ink text-white py-12 md:py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-rdcBlue/10"></div>
        <div class="absolute -right-20 -top-20 w-96 h-96 bg-rdcBlue/20 rounded-full blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-4 lg:px-6 relative z-10">
            <p class="text-rdcGold font-bold uppercase tracking-widest text-xs mb-3">Espace Média</p>
            <h1 class="text-3xl md:text-5xl font-extrabold mb-6">Actualités & Publications</h1>
            <p class="text-white/70 max-w-2xl text-lg leading-relaxed">
                L'ensemble de l'information officielle : communiqués, discours du Ministre, opérations de terrain et
                actes administratifs.
            </p>
        </div>
    </section>

    <!-- BARRE DE FILTRES ETENDUE -->
    <section class="sticky top-[64px] z-40 bg-cream/95 backdrop-blur border-b border-black/5 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 lg:px-6 py-4 overflow-x-auto no-scrollbar">
            <div class="flex items-center gap-3 min-w-max">
                <button onclick="filterContent('all')" id="btn-all"
                    class="filter-btn active px-4 py-2 bg-white border border-black/10 text-black/70 hover:bg-black/5 text-sm font-bold uppercase tracking-wide rounded-sm transition">
                    Tout voir
                </button>
                <button onclick="filterContent('actus')" id="btn-actus"
                    class="filter-btn px-4 py-2 bg-white border border-black/10 text-black/70 hover:bg-black/5 text-sm font-bold uppercase tracking-wide rounded-sm transition">
                    Actualités
                </button>
                <!-- NOUVEAU BOUTON -->
                <button onclick="filterContent('operations')" id="btn-operations"
                    class="filter-btn px-4 py-2 bg-white border border-black/10 text-black/70 hover:bg-black/5 text-sm font-bold uppercase tracking-wide rounded-sm transition">
                    Opérations
                </button>
                <!-- NOUVEAU BOUTON -->
                <button onclick="filterContent('discours')" id="btn-discours"
                    class="filter-btn px-4 py-2 bg-white border border-black/10 text-black/70 hover:bg-black/5 text-sm font-bold uppercase tracking-wide rounded-sm transition">
                    Discours
                </button>
                <button onclick="filterContent('annonces')" id="btn-annonces"
                    class="filter-btn px-4 py-2 bg-white border border-black/10 text-black/70 hover:bg-black/5 text-sm font-bold uppercase tracking-wide rounded-sm transition">
                    Annonces
                </button>
                <button onclick="filterContent('decisions')" id="btn-decisions"
                    class="filter-btn px-4 py-2 bg-white border border-black/10 text-black/70 hover:bg-black/5 text-sm font-bold uppercase tracking-wide rounded-sm transition">
                    Décisions
                </button>
            </div>
        </div>
    </section>

    <main class="min-h-screen">

        <!-- 1. SECTION ACTUALITES (General) -->
        <section id="section-actus" class="content-section max-w-7xl mx-auto px-4 lg:px-6 py-12">
            <div class="flex items-end justify-between mb-8">
                <div>
                    <h2 class="text-2xl font-extrabold uppercase tracking-wide flex items-center gap-3">
                        <span class="w-2 h-8 bg-rdcBlue block"></span>
                        Actualités
                    </h2>
                </div>
            </div>

            <div class="grid lg:grid-cols-3 gap-6">

                <article
                    class="bg-white overflow-hidden border border-black/10 shadow-soft hover:-translate-y-1 transition group">
                    <div class="relative h-48 w-full overflow-hidden">
                        <img src="{{ asset('assets/bcc_kin.jpg') }}" alt="ancient combattant"
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition duration-500">
                        <div
                            class="absolute top-4 left-4 bg-rdcBlue text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                            Communiqué
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-xs font-mono text-black/50 mb-2">20 Nov 2025</p>
                        <h3 class="font-bold text-lg leading-tight mb-3 group-hover:text-rdcBlue transition">
                            Lancement du Fonds National d’Appui aux Anciens Combattants
                        </h3>
                        <p class="text-sm text-black/70 line-clamp-3">
                            Mise en place d’aides financières, de soins prioritaires et de dispositifs de soutien social
                            pour les vétérans.
                        </p>
                        <a href="#"
                            class="inline-block mt-4 text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Lire
                            la suite</a>
                    </div>
                </article>

                <article
                    class="bg-white overflow-hidden border border-black/10 shadow-soft hover:-translate-y-1 transition group">
                    <div class="relative h-48 w-full overflow-hidden">
                        <img src="{{ asset('assets/ancien-combattant-1.JPG') }}" alt="ancient combattant"
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition duration-500">
                        <div
                            class="absolute top-4 left-4 bg-rdcGold text-ink text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                            Cérémonie
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-xs font-mono text-black/50 mb-2">18 Nov 2025</p>
                        <h3 class="font-bold text-lg leading-tight mb-3 group-hover:text-rdcBlue transition">
                            Hommage national aux vétérans et blessés de guerre
                        </h3>
                        <p class="text-sm text-black/70 line-clamp-3">
                            Cérémonie officielle dédiée à la reconnaissance des anciens combattants ayant servi la
                            Nation.
                        </p>
                        <a href="#"
                            class="inline-block mt-4 text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Lire
                            la suite</a>
                    </div>
                </article>

                <article
                    class="bg-white overflow-hidden border border-black/10 shadow-soft hover:-translate-y-1 transition group">
                    <div class="relative h-48 w-full overflow-hidden">
                        <img src="{{ asset('assets/ancien-combattant-3.JPG') }}" alt="ancient combattant"
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition duration-500">
                        <div
                            class="absolute top-4 left-4 bg-rdcRed text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                            Réforme
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-xs font-mono text-black/50 mb-2">12 Nov 2025</p>
                        <h3 class="font-bold text-lg leading-tight mb-3 group-hover:text-rdcBlue transition">
                            Modernisation du système des pensions militaires
                        </h3>
                        <p class="text-sm text-black/70 line-clamp-3">
                            Simplification des démarches, revalorisation des pensions et numérique au service des
                            anciens combattants.
                        </p>
                        <a href="#"
                            class="inline-block mt-4 text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Lire
                            la suite</a>
                    </div>
                </article>

            </div>
        </section>

        <!-- 2. NOUVELLE SECTION OPERATIONS (Actions terrain, Sécurité) -->
        <section id="section-operations" class="content-section bg-cream2 border-y border-black/10">
            <div class="max-w-7xl mx-auto px-4 lg:px-6 py-12">
                <div class="max-w-4xl mb-8">
                    <h2 class="text-2xl font-extrabold uppercase tracking-wide flex items-center gap-3">
                        <span class="w-2 h-8 bg-green-700 block"></span>
                        Opérations & Terrain
                    </h2>
                    <p class="mt-2 text-black/70 ml-5">
                        Sécurité intérieure, inspections des troupes et actions civilo-militaires.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Article Opération 1 -->
                    <div
                        class="bg-white border border-black/10 flex flex-col md:flex-row h-full shadow-soft hover:shadow-lg transition group">
                        <div class="md:w-2/5 relative h-48 md:h-auto overflow-hidden">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/MONUSCO_North_Kivu_Brigade_training_2013_11_21.jpg/800px-MONUSCO_North_Kivu_Brigade_training_2013_11_21.jpg"
                                alt="Opération"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            <div class="absolute inset-0 bg-green-900/10 group-hover:bg-transparent transition"></div>
                        </div>
                        <div class="p-6 flex-1 flex flex-col justify-center">
                            <div class="mb-2">
                                <span
                                    class="text-[10px] font-bold uppercase tracking-widest text-green-700 bg-green-50 px-2 py-1">Sécurité
                                    Intérieure</span>
                            </div>
                            <h3 class="font-bold text-xl mb-2 group-hover:text-green-700 transition">Inspection de la
                                32ème Région Militaire</h3>
                            <p class="text-sm text-black/70 mb-4">Visite de commandement en Ituri pour évaluer les
                                dispositifs de protection des populations civiles.</p>
                            <p class="text-xs text-black/40 font-mono">02 Déc 2025</p>
                        </div>
                    </div>

                    <!-- Article Opération 2 -->
                    <div
                        class="bg-white border border-black/10 flex flex-col md:flex-row h-full shadow-soft hover:shadow-lg transition group">
                        <div class="md:w-2/5 relative h-48 md:h-auto overflow-hidden">
                            <img src="https://defense.gouv.cd/wp-content/uploads/2023/11/WhatsApp-Image-2023-11-20-at-13.06.45-1.jpeg"
                                alt="Génie Militaire"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        </div>
                        <div class="p-6 flex-1 flex flex-col justify-center">
                            <div class="mb-2">
                                <span
                                    class="text-[10px] font-bold uppercase tracking-widest text-rdcBlue bg-blue-50 px-2 py-1">Génie
                                    Militaire</span>
                            </div>
                            <h3 class="font-bold text-xl mb-2 group-hover:text-rdcBlue transition">Réhabilitation de la
                                route Kananga-Kalamba Mbuji</h3>
                            <p class="text-sm text-black/70 mb-4">Le corps du Génie déployé pour accélérer les travaux
                                de désenclavement du Kasaï-Central.</p>
                            <p class="text-xs text-black/40 font-mono">28 Nov 2025</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. NOUVELLE SECTION DISCOURS (Allocutions, Conférences) -->
        <section id="section-discours" class="content-section max-w-7xl mx-auto px-4 lg:px-6 py-12">
            <div class="max-w-4xl mb-8">
                <h2 class="text-2xl font-extrabold uppercase tracking-wide flex items-center gap-3">
                    <span class="w-2 h-8 bg-indigo-900 block"></span>
                    Allocutions & Conférences
                </h2>
                <p class="mt-2 text-black/70 ml-5">
                    Prises de parole officielles du Ministre Délégué.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-8">

                <!-- Discours Principal -->
                <div class="bg-ink text-white p-8 md:p-10 relative overflow-hidden shadow-soft">
                    <div class="absolute top-0 right-0 p-10 opacity-10">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                            class="w-40 h-40">
                            <path d="M8 5v14l11-7z" />
                        </svg>
                    </div>
                    <div class="relative z-10">
                        <span
                            class="inline-block border border-white/30 px-3 py-1 text-xs font-bold uppercase tracking-widest mb-4">Allocution</span>
                        <h3 class="text-2xl md:text-3xl font-bold mb-4 leading-tight">"La modernisation de notre armée
                            est irréversible."</h3>
                        <p class="text-white/70 mb-6">Discours de clôture de l'année académique à l'École de
                            Commandement et d'État-Major.</p>
                        <div class="flex items-center gap-4">
                            <button
                                class="bg-white text-ink px-5 py-2 text-sm font-bold uppercase tracking-wide hover:bg-cream transition">Lire
                                le texte</button>
                            <button class="flex items-center gap-2 text-sm font-semibold hover:text-rdcGold transition">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.91 11.672a.375.375 0 0 1 0 .656l-5.603 3.113a.375.375 0 0 1-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112Z" />
                                </svg>
                                Voir la vidéo
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Liste autres discours -->
                <div class="flex flex-col gap-4">
                    <div class="border-l-4 border-indigo-900 pl-6 py-2 hover:bg-gray-50 transition cursor-pointer">
                        <p class="text-xs text-black/50 font-mono mb-1">Conférence de Presse • 15 Nov 2025</p>
                        <h4 class="font-bold text-lg text-ink">Point de presse sur la situation sécuritaire à l'Est</h4>
                        <a href="#" class="text-sm text-rdcBlue font-semibold mt-1 inline-block">Lire la transcription
                            →</a>
                    </div>
                    <div class="border-l-4 border-black/10 pl-6 py-2 hover:bg-gray-50 transition cursor-pointer">
                        <p class="text-xs text-black/50 font-mono mb-1">Interview • 10 Nov 2025</p>
                        <h4 class="font-bold text-lg text-ink">Entretien exclusif sur la RTNC : le bilan à mi-parcours
                        </h4>
                        <a href="#" class="text-sm text-rdcBlue font-semibold mt-1 inline-block">Revoir l'émission →</a>
                    </div>
                    <div class="border-l-4 border-black/10 pl-6 py-2 hover:bg-gray-50 transition cursor-pointer">
                        <p class="text-xs text-black/50 font-mono mb-1">Hommage • 02 Nov 2025</p>
                        <h4 class="font-bold text-lg text-ink">Oraison funèbre du Général Major M.K.</h4>
                        <a href="#" class="text-sm text-rdcBlue font-semibold mt-1 inline-block">Lire le texte →</a>
                    </div>
                </div>

            </div>
        </section>

        <!-- 4. SECTION ANNONCES -->
        <section id="section-annonces" class="content-section bg-cream2 border-y border-black/10">
            <div class="max-w-7xl mx-auto px-4 lg:px-6 py-12">
                <div class="max-w-4xl mb-8">
                    <h2 class="text-2xl font-extrabold uppercase tracking-wide flex items-center gap-3">
                        <span class="w-2 h-8 bg-rdcGold block"></span>
                        Annonces Officielles
                    </h2>
                    <p class="mt-2 text-black/70 ml-5">
                        Publications légales, arrêtés ministériels et avis de recrutement.
                    </p>
                </div>

                <div class="flex flex-col gap-4">

                    <div
                        class="bg-white border border-black/10 p-5 md:p-6 shadow-soft hover:shadow-lg transition-all flex flex-col md:flex-row gap-5 items-start md:items-center">
                        <div
                            class="flex-shrink-0 bg-rdcBlue/10 text-rdcBlue w-12 h-12 flex items-center justify-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <div class="flex flex-wrap items-center gap-2 mb-1">
                                <span
                                    class="inline-block bg-rdcRed/10 text-rdcRed text-[10px] font-bold px-2 py-0.5 rounded uppercase tracking-wider">Important</span>
                                <span class="text-xs text-black/50 font-mono">Réf: MINDEF/CAB/0042/25</span>
                            </div>
                            <h3 class="font-bold text-lg leading-tight">Arrêté ministériel portant nomination des
                                Directeurs Régionaux</h3>
                            <p class="text-sm text-black/70 mt-1">
                                Publication de la liste officielle des nouveaux directeurs pour les régions militaires
                                Est et Centre. Prise de fonction immédiate.
                            </p>
                            <p class="text-xs text-black/50 mt-2">Publié le 24 Nov 2025</p>
                        </div>
                        <a href="#"
                            class="mt-2 md:mt-0 px-4 py-2 border border-black/10 text-sm font-semibold hover:bg-black/5 transition whitespace-nowrap">
                            Télécharger PDF
                        </a>
                    </div>

                    <div
                        class="bg-white border border-black/10 p-5 md:p-6 shadow-soft hover:shadow-lg transition-all flex flex-col md:flex-row gap-5 items-start md:items-center">
                        <div
                            class="flex-shrink-0 bg-rdcGold/20 text-ink w-12 h-12 flex items-center justify-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <div class="flex flex-wrap items-center gap-2 mb-1">
                                <span
                                    class="inline-block bg-black/5 text-black/70 text-[10px] font-bold px-2 py-0.5 rounded uppercase tracking-wider">Recrutement</span>
                                <span class="text-xs text-black/50 font-mono">Réf: REC/SERV/2026-A</span>
                            </div>
                            <h3 class="font-bold text-lg leading-tight">Ouverture du concours d'entrée 2026 - École du
                                Génie</h3>
                            <p class="text-sm text-black/70 mt-1">
                                Avis de recrutement pour les ingénieurs et techniciens. Les dossiers sont à déposer
                                avant le 15 Janvier 2026.
                            </p>
                            <p class="text-xs text-black/50 mt-2">Publié le 10 Nov 2025</p>
                        </div>
                        <a href="#"
                            class="mt-2 md:mt-0 px-4 py-2 border border-black/10 text-sm font-semibold hover:bg-black/5 transition whitespace-nowrap">
                            Voir les conditions
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. SECTION DECISIONS -->
        <section id="section-decisions" class="content-section max-w-7xl mx-auto px-4 lg:px-6 py-12">
            <div class="max-w-4xl mb-8">
                <h2 class="text-2xl font-extrabold uppercase tracking-wide flex items-center gap-3">
                    <span class="w-2 h-8 bg-ink block"></span>
                    Décisions & Notes
                </h2>
                <p class="mt-2 text-black/70 ml-5">
                    Actes administratifs, décisions ministérielles et notes circulaires.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div
                    class="bg-white group block border border-black/10 p-6 hover:shadow-soft transition-all duration-300 relative">
                    <div class="flex items-start justify-between mb-4">
                        <div
                            class="inline-flex items-center px-2 py-1 bg-ink text-white text-[10px] font-bold uppercase tracking-widest">
                            Décision
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="w-5 h-5 text-black/30 group-hover:text-rdcBlue transition-colors">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg mb-2 group-hover:text-rdcBlue transition-colors">
                        Décision N°005/MDDN/2025
                    </h3>
                    <p class="text-sm text-black/70 line-clamp-2">
                        Portant création d'une commission ad hoc pour l'évaluation des infrastructures hospitalières
                        militaires en zone Est.
                    </p>
                    <div
                        class="mt-4 pt-4 border-t border-black/5 flex items-center justify-between text-xs text-black/50">
                        <span>26 Nov 2025</span>
                        <span class="uppercase tracking-wide font-semibold text-black/70">PDF • 1.2 MB</span>
                    </div>
                    <a href="#" class="absolute inset-0 z-10" aria-label="Télécharger"></a>
                </div>

                <div
                    class="bg-white group block border border-black/10 p-6 hover:shadow-soft transition-all duration-300 relative">
                    <div class="flex items-start justify-between mb-4">
                        <div
                            class="inline-flex items-center px-2 py-1 bg-black/5 text-black/80 text-[10px] font-bold uppercase tracking-widest">
                            Note circulaire
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="w-5 h-5 text-black/30 group-hover:text-rdcBlue transition-colors">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg mb-2 group-hover:text-rdcBlue transition-colors">
                        Note de service - Logistique
                    </h3>
                    <p class="text-sm text-black/70 line-clamp-2">
                        Procédure actualisée concernant l'approvisionnement en carburant des unités déployées.
                        Application immédiate.
                    </p>
                    <div
                        class="mt-4 pt-4 border-t border-black/5 flex items-center justify-between text-xs text-black/50">
                        <span>22 Nov 2025</span>
                        <span class="uppercase tracking-wide font-semibold text-black/70">PDF • 850 KB</span>
                    </div>
                    <a href="#" class="absolute inset-0 z-10" aria-label="Télécharger"></a>
                </div>

            </div>
        </section>

    </main>

@include('partials.footer')

    <button id="scrollTopBtn" class="fixed bottom-6 right-6 z-[9997] opacity-0 translate-y-3 pointer-events-none
           bg-rdcBlue text-white w-12 h-12 shadow-soft
           flex items-center justify-center text-xl transition duration-300 hover:bg-rdcBlue/90"
        aria-label="Retour en haut">
        ↑
    </button>

    <script>
        document.getElementById("year").textContent = new Date().getFullYear();

        // Menu Mobile Logic
        const burgerBtn = document.getElementById("burgerBtn");
        const mobileMenu = document.getElementById("mobileMenu");
        const burgerLines = burgerBtn.querySelectorAll(".burger-line");
        let menuOpen = false;

        function toggleMenu() {
            menuOpen = !menuOpen;
            if (menuOpen) {
                burgerLines[0].style.transform = "translateY(8px) rotate(45deg)";
                burgerLines[1].style.opacity = "0";
                burgerLines[2].style.transform = "translateY(-8px) rotate(-45deg)";
                mobileMenu.style.maxHeight = mobileMenu.scrollHeight + "px";
            } else {
                burgerLines[0].style.transform = "translateY(0) rotate(0)";
                burgerLines[1].style.opacity = "1";
                burgerLines[2].style.transform = "translateY(0) rotate(0)";
                mobileMenu.style.maxHeight = "0px";
            }
        }

        burgerBtn.addEventListener("click", toggleMenu);

        // Scroll Logic
        const progressBar = document.getElementById("progressBar");
        const scrollTopBtn = document.getElementById("scrollTopBtn");

        function onScroll() {
            const scrollY = window.scrollY;
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;
            const progress = docHeight > 0 ? (scrollY / docHeight) * 100 : 0;
            progressBar.style.width = progress + "%";

            if (scrollY > 300) {
                scrollTopBtn.classList.remove("opacity-0", "translate-y-3", "pointer-events-none");
                scrollTopBtn.classList.add("opacity-100", "translate-y-0");
            } else {
                scrollTopBtn.classList.add("opacity-0", "translate-y-3", "pointer-events-none");
                scrollTopBtn.classList.remove("opacity-100", "translate-y-0");
            }
        }
        window.addEventListener("scroll", onScroll);
        scrollTopBtn.addEventListener("click", () => window.scrollTo({ top: 0, behavior: "smooth" }));

        // Filter Logic - Mise à jour pour les nouvelles catégories
        function filterContent(category) {
            const sections = ['actus', 'annonces', 'decisions', 'discours', 'operations'];

            // Update buttons style
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.classList.remove('active', 'bg-rdcBlue', 'text-white', 'border-rdcBlue');
                btn.classList.add('bg-white', 'text-black/70');
            });

            const activeBtn = document.getElementById(`btn-${category}`);
            if (activeBtn) {
                activeBtn.classList.remove('bg-white', 'text-black/70');
                activeBtn.classList.add('active', 'bg-rdcBlue', 'text-white', 'border-rdcBlue');
            }

            // Show/Hide sections
            if (category === 'all') {
                sections.forEach(s => {
                    const el = document.getElementById(`section-${s}`);
                    if (el) {
                        el.classList.remove('hidden');
                        // Animation de réapparition douce
                        el.style.opacity = 0;
                        setTimeout(() => el.style.opacity = 1, 50);
                    }
                });
            } else {
                sections.forEach(s => {
                    const el = document.getElementById(`section-${s}`);
                    if (el) {
                        if (s === category) {
                            el.classList.remove('hidden');
                            el.style.opacity = 0;
                            setTimeout(() => el.style.opacity = 1, 50);
                        } else {
                            el.classList.add('hidden');
                        }
                    }
                });
            }
            // Scroll to top of content slightly if needed, or just let user browse
            if (window.scrollY > 400) window.scrollTo({ top: 400, behavior: 'smooth' });
        }
    </script>
</body>

</html>
