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
            scrollbar-width: none;
        }

        /* Clamp sans plugin */
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .line-clamp-6 {
            display: -webkit-box;
            -webkit-line-clamp: 6;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Animation douce */
        .fade-in {
            animation: fadeIn .25s ease both;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(6px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="bg-cream text-ink antialiased">

    <div id="progressBar" class="fixed top-0 left-0 h-1 bg-rdcGold z-[9999] w-0"></div>

    <!-- HEADER -->
    @include('partials.header')

    <!-- HERO SECTION -->
    <section class="bg-ink text-white py-12 md:py-20 relative overflow-hidden min-h-[340px]">
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

    <!-- ONGLET BAR -->
    @include('partials.onglet')

    <main class="min-h-screen">

        <!-- 1. SECTION ACTUALITES  -->
        <section id="section-actualites" class="content-section max-w-7xl mx-auto px-4 lg:px-6 py-12 fade-in">

            <!-- Header enrichi + “dashboard” style pro -->
            <div class="grid lg:grid-cols-12 gap-8  items-start mb-10">
                <div class="lg:col-span-8 flex flex-col h-full">
                    <h2 class="text-2xl md:text-3xl font-extrabold uppercase tracking-wide flex items-center gap-3">
                        <span class="w-2 h-10 bg-rdcBlue block"></span>
                        Actualités
                    </h2>
                    <p class="mt-3 text-black/70 text-lg leading-relaxed">
                        Communiqués officiels, initiatives sociales pour les vétérans, modernisation des pensions,
                        cérémonies et actions du Ministère en faveur des anciens combattants de la RDC.
                    </p>

                    <!-- Mini dashboard -->
                    <div class="mt-auto grid sm:grid-cols-3 gap-4">
                        <div class="bg-white border border-black/10 shadow-soft p-4">
                            <p class="text-xs font-bold uppercase tracking-widest text-black/50">Publications</p>
                            <p class="text-3xl font-extrabold mt-2">68</p>
                            <p class="text-xs text-black/50 mt-1">Derniers 90 jours</p>
                        </div>
                        <div class="bg-white border border-black/10 shadow-soft p-4">
                            <p class="text-xs font-bold uppercase tracking-widest text-black/50">Dossiers vétérans</p>
                            <p class="text-3xl font-extrabold mt-2">14</p>
                            <p class="text-xs text-black/50 mt-1">Réinsertion • Droits • Santé</p>
                        </div>
                        <div class="bg-white border border-black/10 shadow-soft p-4">
                            <p class="text-xs font-bold uppercase tracking-widest text-black/50">Accès rapide</p>
                            <p class="text-sm font-semibold mt-3 text-black/70">PDF • Vidéos • Photos</p>
                            <p class="text-xs text-black/50 mt-1">Espace média & archives</p>
                        </div>
                    </div>


                </div>

                <!-- Note latérale pro -->
                <aside class="lg:col-span-4 bg-ink text-white p-6 shadow-soft relative overflow-hidden">
                    <div class="absolute -right-16 -bottom-16 w-56 h-56 bg-rdcBlue/25 rounded-full blur-2xl"></div>
                    <div class="relative z-10">
                        <p class="text-rdcGold font-bold uppercase tracking-widest text-xs">Brief média</p>
                        <h3 class="text-xl font-extrabold mt-2">Priorités de publication</h3>
                        <ul class="mt-4 space-y-2 text-white/80 text-sm">
                            <li>• Droits sociaux des anciens combattants</li>
                            <li>• Réinsertion : formation, emploi, fonds d’appui</li>
                            <li>• Santé & prise en charge des blessés</li>
                            <li>• Transparence : arrêtés, décisions, notes</li>
                        </ul>
                        <button
                            class="mt-5 bg-white text-ink px-4 py-2 text-sm font-bold uppercase tracking-wide hover:bg-cream transition">
                            Télécharger le kit presse
                        </button>
                    </div>
                </aside>
            </div>

            <!-- Article “le plus récent” mis en avant (style priorité 2026) -->
            <article class="bg-white border border-black/10 shadow-soft overflow-hidden mb-10">
                <div class="grid lg:grid-cols-12">
                    <div class="lg:col-span-5 relative h-64 lg:h-full overflow-hidden">
                        <img src="{{ asset('assets/bcc_kin.jpg') }}" alt="ancient combattant"
                            class="w-full h-full object-cover object-center hover:scale-105 transition duration-500">
                        <div
                            class="absolute top-4 left-4 bg-rdcGold text-ink text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                            À la une • Dossier vétérans
                        </div>
                        <div class="absolute bottom-4 left-4 flex gap-2">
                            <span class="bg-black/60 text-white text-[10px] px-2 py-1 uppercase tracking-widest">Droits</span>
                            <span class="bg-black/60 text-white text-[10px] px-2 py-1 uppercase tracking-widest">Santé</span>
                            <span class="bg-black/60 text-white text-[10px] px-2 py-1 uppercase tracking-widest">Réinsertion</span>
                        </div>
                    </div>

                    <div class="lg:col-span-7 p-6 md:p-8">
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <p class="text-xs font-mono text-black/50 mb-2">Communiqué • 20 Nov 2025 • Réf:
                                    MDDN/AC/1120</p>
                                <h3 class="text-2xl font-extrabold leading-tight">
                                    Lancement du Fonds National d’Appui aux Anciens Combattants
                                </h3>
                                <p class="mt-3 text-black/70 leading-relaxed line-clamp-6">
                                    Mise en place d’aides financières, de soins prioritaires et de dispositifs de soutien
                                    social pour les vétérans. Le fonds prévoit également des mécanismes d’orientation
                                    vers la formation, l’emploi et la reconversion, avec un suivi des dossiers et une
                                    procédure de recours.
                                </p>
                            </div>

                                <!-- Indicateurs “backend” -->
                            <div class="shrink-0 text-right">
                                <p class="text-[10px] font-bold uppercase tracking-widest text-black/50">Indicateurs</p>
                                <div class="mt-2 space-y-2">
                                    <div class="bg-cream2 border border-black/10 px-3 py-2">
                                        <p class="text-[10px] text-black/50 uppercase tracking-widest">Lectures</p>
                                        <p class="font-mono text-sm font-bold text-ink">12 438</p>
                                    </div>
                                    <div class="bg-cream2 border border-black/10 px-3 py-2">
                                        <p class="text-[10px] text-black/50 uppercase tracking-widest">Partages</p>
                                        <p class="font-mono text-sm font-bold text-ink">684</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bandeau “dossier complet” -->
                        <div class="mt-6 grid sm:grid-cols-3 gap-4">
                            <div class="border-l-4 border-rdcBlue pl-4">
                                <p class="text-xs font-bold uppercase tracking-widest text-black/50">Objectif</p>
                                <p class="text-sm text-black/70">Soutien durable & ciblé des vétérans.</p>
                            </div>
                            <div class="border-l-4 border-black/10 pl-4">
                                <p class="text-xs font-bold uppercase tracking-widest text-black/50">Rubriques</p>
                                <p class="text-sm text-black/70">Éligibilité • Procédure • Recours</p>
                            </div>
                            <div class="border-l-4 border-black/10 pl-4">
                                <p class="text-xs font-bold uppercase tracking-widest text-black/50">Documents</p>
                                <p class="text-sm text-black/70">Communiqué • Formulaire • Annexes</p>
                            </div>
                        </div>

                        <div class="mt-6 flex flex-wrap items-center gap-3">
                            <button
                                class="bg-rdcBlue text-white px-5 py-2 text-sm font-bold uppercase tracking-wide hover:bg-rdcBlue/90 transition">
                                Lire le dossier complet
                            </button>
                            <button class="px-5 py-2 border border-black/10 text-sm font-semibold hover:bg-black/5 transition">
                                Télécharger (PDF)
                            </button>
                            <a href="#" class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">
                                Voir photos & annexes →
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- “Rubriques” comme si c’était un vrai dossier -->
            <section class="bg-cream2 border border-black/10 shadow-soft p-6 mb-10">
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-white border border-black/10 p-5">
                        <p class="text-xs font-bold uppercase tracking-widest text-black/50">Rubrique</p>
                        <h4 class="font-extrabold text-lg mt-2">Éligibilité & preuves</h4>
                        <p class="text-sm text-black/70 mt-2">
                            Qui peut bénéficier, pièces requises, validation et lutte anti-fraude.
                        </p>
                        <a class="inline-block mt-3 text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4"
                            href="#">Ouvrir →</a>
                    </div>
                    <div class="bg-white border border-black/10 p-5">
                        <p class="text-xs font-bold uppercase tracking-widest text-black/50">Rubrique</p>
                        <h4 class="font-extrabold text-lg mt-2">Aides & prestations</h4>
                        <p class="text-sm text-black/70 mt-2">
                            Santé, appui financier, accompagnement social et orientation.
                        </p>
                        <a class="inline-block mt-3 text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4"
                            href="#">Ouvrir →</a>
                    </div>
                    <div class="bg-white border border-black/10 p-5">
                        <p class="text-xs font-bold uppercase tracking-widest text-black/50">Rubrique</p>
                        <h4 class="font-extrabold text-lg mt-2">Procédure & recours</h4>
                        <p class="text-sm text-black/70 mt-2">
                            Dépôt du dossier, délais, suivi et mécanismes de recours.
                        </p>
                        <a class="inline-block mt-3 text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4"
                            href="#">Ouvrir →</a>
                    </div>
                </div>
            </section>

            <!-- Grille de news (4+) -->
            <h3 class="text-xl font-extrabold uppercase tracking-wide flex items-center gap-3 mb-6">
                <span class="w-2 h-7 bg-rdcBlue block"></span>
                Dernières publications
            </h3>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
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
                        <h3 class="font-extrabold text-lg leading-tight mb-3 group-hover:text-rdcBlue transition">
                            Hommage national aux vétérans et blessés de guerre
                        </h3>
                        <p class="text-sm text-black/70 line-clamp-3">
                            Cérémonie officielle dédiée à la reconnaissance des anciens combattants ayant servi la
                            Nation.
                        </p>

                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-black/50">Galerie</span>
                            <a href="#"
                                class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Lire →</a>
                        </div>
                    </div>
                </article>

                <!-- Card 2 -->
                <article
                    class="bg-white overflow-hidden border border-black/10 shadow-soft hover:-translate-y-1 transition group">
                    <div class="relative h-48 w-full overflow-hidden">
                        <img src="{{ asset('assets/ancien-combattant-3.jpg') }}" alt="ancient combattant"
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition duration-500">
                        <div
                            class="absolute top-4 left-4 bg-rdcRed text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                            Réforme
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-xs font-mono text-black/50 mb-2">12 Nov 2025</p>
                        <h3 class="font-extrabold text-lg leading-tight mb-3 group-hover:text-rdcBlue transition">
                            Modernisation du système des pensions militaires
                        </h3>
                        <p class="text-sm text-black/70 line-clamp-3">
                            Simplification des démarches, revalorisation des pensions et numérique au service des
                            anciens combattants.
                        </p>

                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-black/50">Note</span>
                            <a href="#"
                                class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Lire →</a>
                        </div>
                    </div>
                </article>

                <!-- Card 3 -->
                <article
                    class="bg-white overflow-hidden border border-black/10 shadow-soft hover:-translate-y-1 transition group">
                    <div class="relative h-48 w-full overflow-hidden">
                        <img src="{{ asset('assets/ancien-combattant-2.jpg') }}" alt="ancient combattant"
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition duration-500">
                        <div
                            class="absolute top-4 left-4 bg-rdcBlue text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                            Programme
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-xs font-mono text-black/50 mb-2">05 Nov 2025</p>
                        <h3 class="font-extrabold text-lg leading-tight mb-3 group-hover:text-rdcBlue transition">
                            Réinsertion : lancement des formations métiers (pilote)
                        </h3>
                        <p class="text-sm text-black/70 line-clamp-3">
                            Métiers techniques, accompagnement à l’emploi et partenariat avec entreprises locales.
                        </p>

                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-black/50">Réinsertion</span>
                            <a href="#"
                                class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Lire →</a>
                        </div>
                    </div>
                </article>

                <!-- Card 4 -->
                <article
                    class="bg-white overflow-hidden border border-black/10 shadow-soft hover:-translate-y-1 transition group">
                    <div class="relative h-48 w-full overflow-hidden">
                        <img src="{{ asset('assets/ancien-combattant-3.jpg') }}"
                            alt="Entrepreneuriat"
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition duration-500">
                        <div
                            class="absolute top-4 left-4 bg-ink text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                            Dossier
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-xs font-mono text-black/50 mb-2">29 Oct 2025</p>
                        <h3 class="font-extrabold text-lg leading-tight mb-3 group-hover:text-rdcBlue transition">
                            Appui à l’entrepreneuriat des vétérans : cadre et critères
                        </h3>
                        <p class="text-sm text-black/70 line-clamp-3">
                            Critères d’éligibilité, mentoring, micro-financements et suivi post-accompagnement.
                        </p>

                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-black/50">Cadre</span>
                            <a href="#"
                                class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Lire →</a>
                        </div>
                    </div>
                </article>

                <!-- Card 5 -->
                <article
                    class="bg-white overflow-hidden border border-black/10 shadow-soft hover:-translate-y-1 transition group">
                    <div class="relative h-48 w-full overflow-hidden">
                        <img src="{{ asset('assets/histo.jpeg') }}"
                            alt="Santé"
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition duration-500">
                        <div
                            class="absolute top-4 left-4 bg-rdcRed text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                            Santé
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-xs font-mono text-black/50 mb-2">18 Oct 2025</p>
                        <h3 class="font-extrabold text-lg leading-tight mb-3 group-hover:text-rdcBlue transition">
                            Parcours santé prioritaire : prise en charge des blessés
                        </h3>
                        <p class="text-sm text-black/70 line-clamp-3">
                            Orientation, priorisation et partenariats avec structures dédiées.
                        </p>

                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-black/50">Soins</span>
                            <a href="#"
                                class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Lire →</a>
                        </div>
                    </div>
                </article>

                <!-- Card 6 -->
                <article
                    class="bg-white overflow-hidden border border-black/10 shadow-soft hover:-translate-y-1 transition group">
                    <div class="relative h-48 w-full overflow-hidden">
                        <img src="{{ asset('assets/ancien-combattant-2.jpg') }}"
                            alt="Transparence"
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition duration-500">
                        <div
                            class="absolute top-4 left-4 bg-rdcGold text-ink text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                            Transparence
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-xs font-mono text-black/50 mb-2">06 Oct 2025</p>
                        <h3 class="font-extrabold text-lg leading-tight mb-3 group-hover:text-rdcBlue transition">
                            Publication des procédures : délais & voies de recours
                        </h3>
                        <p class="text-sm text-black/70 line-clamp-3">
                            Clarification des délais, pièces requises et canaux officiels de suivi.
                        </p>

                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-black/50">Guide</span>
                            <a href="#"
                                class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Lire →</a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Bandeau d’archives -->
            <div class="mt-10 bg-white border border-black/10 shadow-soft p-6 flex flex-col md:flex-row gap-6 items-start md:items-center justify-between">
                <div>
                    <p class="text-xs font-bold uppercase tracking-widest text-black/50">Archives</p>
                    <h4 class="text-lg font-extrabold mt-1">Consulter toutes les actualités</h4>
                    <p class="text-sm text-black/70 mt-1">
                        Recherche avancée, filtres par thème, date, province et type de publication.
                    </p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <button class="px-5 py-2 border border-black/10 text-sm font-semibold hover:bg-black/5 transition">
                        Ouvrir l’archive
                    </button>
                    <button class="bg-rdcBlue text-white px-5 py-2 text-sm font-bold uppercase tracking-wide hover:bg-rdcBlue/90 transition">
                        Recherche avancée
                    </button>
                </div>
            </div>
        </section>


        <!-- SECTION 2 : OPERATIONS -->
        <section id="section-operations" class="content-section bg-cream2 border-y border-black/10">
            <div class="max-w-7xl mx-auto px-4 lg:px-6 py-12">

                <!-- Header section amélioré -->
            <div class="grid lg:grid-cols-12 gap-8  items-start mb-10">
                <div class="lg:col-span-8 flex flex-col h-full">
                        <h2 class="text-2xl md:text-3xl font-extrabold uppercase tracking-wide flex items-center gap-3">
                            <span class="w-2 h-10 bg-green-700 block"></span>
                            Opérations : Terrain & Sécurité intérieure
                        </h2>
                        <p class="mt-3 text-black/70 text-lg leading-relaxed">
                            Sécurité intérieure, inspections des troupes et actions civilo-militaires.
                            Chaque opération est documentée : objectifs, zone, unités engagées, résultats et médias.
                        </p>

                        <!-- Mini stats -->
                        <div class="mt-auto grid sm:grid-cols-3 gap-4">
                            <div class="bg-white border border-black/10 shadow-soft p-4">
                                <p class="text-xs font-bold uppercase tracking-widest text-black/50">Missions actives</p>
                                <p class="text-3xl font-extrabold mt-2">9</p>
                                <p class="text-xs text-black/50 mt-1">Suivi hebdomadaire</p>
                            </div>
                            <div class="bg-white border border-black/10 shadow-soft p-4">
                                <p class="text-xs font-bold uppercase tracking-widest text-black/50">Zones couvertes</p>
                                <p class="text-3xl font-extrabold mt-2">14</p>
                                <p class="text-xs text-black/50 mt-1">Régions & secteurs</p>
                            </div>
                            <div class="bg-white border border-black/10 shadow-soft p-4">
                                <p class="text-xs font-bold uppercase tracking-widest text-black/50">Rapports publiés</p>
                                <p class="text-3xl font-extrabold mt-2">27</p>
                                <p class="text-xs text-black/50 mt-1">Notes & comptes rendus</p>
                            </div>
                        </div>
                    </div>

                    <aside class="lg:col-span-4 bg-white border border-black/10 shadow-soft p-6">
                        <p class="text-xs font-bold uppercase tracking-widest text-black/50">Accès rapide</p>
                        <h3 class="text-xl font-extrabold mt-2">Suivi des opérations</h3>
                        <div class="mt-4 space-y-3">
                            <a href="#" class="block border border-black/10 p-4 hover:bg-black/5 transition">
                                <p class="text-[10px] uppercase tracking-widest font-bold text-green-700">Carte</p>
                                <p class="font-bold">Voir la carte des zones</p>
                                <p class="text-sm text-black/60">Secteurs, incidents, points de contact</p>
                            </a>
                            <a href="#" class="block border border-black/10 p-4 hover:bg-black/5 transition">
                                <p class="text-[10px] uppercase tracking-widest font-bold text-rdcBlue">Archives</p>
                                <p class="font-bold">Rapports précédents</p>
                                <p class="text-sm text-black/60">Classement par date & région</p>
                            </a>
                        </div>
                    </aside>
                </div>

                <!-- Mise en avant (plus récent) -->
                <article class="bg-ink text-white p-8 md:p-10 relative overflow-hidden shadow-soft mb-10">
                    <div class="absolute -right-16 -bottom-16 w-72 h-72 bg-green-700/25 rounded-full blur-2xl"></div>
                    <div class="relative z-10">
                        <span class="inline-block border border-white/30 px-3 py-1 text-xs font-bold uppercase tracking-widest mb-4">
                            Plus récent • Terrain
                        </span>
                        <h3 class="text-2xl md:text-3xl font-extrabold mb-3 leading-tight">
                            Mission d’inspection : 32ème Région Militaire (Ituri)
                        </h3>
                        <p class="text-white/70 mb-6 max-w-3xl line-clamp-6">
                            Visite de commandement pour évaluer les dispositifs de protection des populations civiles,
                            renforcer la discipline opérationnelle et accélérer la remontée d’informations.
                            Dossier : objectifs, unités, chronologie, photos et synthèse.
                        </p>

                        <div class="grid sm:grid-cols-3 gap-4 mb-6">
                            <div class="border-l-4 border-rdcGold pl-4">
                                <p class="text-xs font-bold uppercase tracking-widest text-white/70">Zone</p>
                                <p class="text-sm text-white/80 mt-1">Ituri • Secteurs prioritaires</p>
                            </div>
                            <div class="border-l-4 border-white/20 pl-4">
                                <p class="text-xs font-bold uppercase tracking-widest text-white/70">Focus</p>
                                <p class="text-sm text-white/80 mt-1">Sécurité intérieure • Coordination</p>
                            </div>
                            <div class="border-l-4 border-white/20 pl-4">
                                <p class="text-xs font-bold uppercase tracking-widest text-white/70">Date</p>
                                <p class="text-sm text-white/80 mt-1">02 Déc 2025</p>
                            </div>
                        </div>

                        <div class="flex flex-wrap items-center gap-4">
                            <button class="bg-white text-ink px-5 py-2 text-sm font-bold uppercase tracking-wide hover:bg-cream transition">
                                Lire le rapport
                            </button>
                            <button class="flex items-center gap-2 text-sm font-semibold hover:text-rdcGold transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6l4 2m6-2a10 10 0 1 1-20 0 10 10 0 0 1 20 0Z" />
                                </svg>
                                Voir chronologie
                            </button>
                            <a href="#" class="text-sm font-bold underline decoration-2 underline-offset-4 text-rdcGold">
                                Voir dossier média →
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Grille (au moins 4) -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- 1 -->
                    <article class="bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden group">
                        <div class="relative h-44 overflow-hidden">
                            <img src="{{ asset('assets/kalemie-soda.jpg') }}"
                                alt="Opération"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            <div class="absolute top-4 left-4 bg-green-700 text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Sécurité
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">02 Déc 2025 • Réf: OPS/ITURI/1202</p>
                            <h3 class="font-extrabold text-lg mb-2 group-hover:text-green-700 transition">Inspection de la 32ème Région</h3>
                            <p class="text-sm text-black/70 line-clamp-3">Évaluation des dispositifs et coordination des unités sur le terrain.</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-[10px] font-bold uppercase tracking-widest text-black/50">Rapport</span>
                                <a href="#" class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir →</a>
                            </div>
                        </div>
                    </article>

                    <!-- 2 -->
                    <article class="bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden group">
                        <div class="relative h-44 overflow-hidden">
                            <img src="{{ asset('assets/garderep.jpg') }}"
                                alt="Génie Militaire"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            <div class="absolute top-4 left-4 bg-rdcBlue text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Génie
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">28 Nov 2025 • Réf: OPS/GENIE/1128</p>
                            <h3 class="font-extrabold text-lg mb-2 group-hover:text-rdcBlue transition">Réhabilitation Kananga–Kalamba</h3>
                            <p class="text-sm text-black/70 line-clamp-3">Désenclavement accéléré et appui logistique via le corps du Génie.</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-[10px] font-bold uppercase tracking-widest text-black/50">Terrain</span>
                                <a href="#" class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir →</a>
                            </div>
                        </div>
                    </article>

                    <!-- 3 -->
                    <article class="bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden group">
                        <div class="relative h-44 overflow-hidden">
                            <img src="{{ asset('assets/histo.jpeg') }}"
                                alt="Assistance"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            <div class="absolute top-4 left-4 bg-rdcGold text-ink text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Assistance
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">21 Nov 2025 • Réf: OPS/CRISE/1121</p>
                            <h3 class="font-extrabold text-lg mb-2 group-hover:text-rdcBlue transition">Appui civilo-militaire</h3>
                            <p class="text-sm text-black/70 line-clamp-3">Logistique d’urgence et coordination avec les acteurs humanitaires.</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-[10px] font-bold uppercase tracking-widest text-black/50">Dossier</span>
                                <a href="#" class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir →</a>
                            </div>
                        </div>
                    </article>

                    <!-- 4 -->
                    <article class="bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden group">
                        <div class="relative h-44 overflow-hidden">
                            <img src="{{ asset('assets/bcc_kin.jpg') }}"
                                alt="Formation terrain"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            <div class="absolute top-4 left-4 bg-ink text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Instruction
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">09 Nov 2025 • Réf: OPS/FORM/1109</p>
                            <h3 class="font-extrabold text-lg mb-2 group-hover:text-rdcBlue transition">Instruction & coordination</h3>
                            <p class="text-sm text-black/70 line-clamp-3">Exercices, procédures communes et évaluation post-action.</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-[10px] font-bold uppercase tracking-widest text-black/50">Rapport</span>
                                <a href="#" class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir →</a>
                            </div>
                        </div>
                    </article>
                </div>

            </div>
        </section>

        <!-- SECTION 3 : DISCOURS  -->
        <section id="section-discours" class="content-section max-w-7xl mx-auto px-4 lg:px-6 py-12">

            <!-- Header amélioré -->
            <div class="grid lg:grid-cols-12 gap-8  items-start mb-10">
                <div class="lg:col-span-8 flex flex-col h-full">
                    <h2 class="text-2xl md:text-3xl font-extrabold uppercase tracking-wide flex items-center gap-3">
                        <span class="w-2 h-10 bg-indigo-900 block"></span>
                        Discours : Allocutions & Conférences
                    </h2>
                    <p class="mt-3 text-black/70 text-lg leading-relaxed">
                        Prises de parole officielles : discours, conférences, points de presse et interviews.
                        Chaque entrée peut inclure transcription, vidéo, photos et documents associés.
                    </p>

                    <div class="mt-auto grid sm:grid-cols-3 gap-4">
                        <div class="bg-white border border-black/10 shadow-soft p-4">
                            <p class="text-xs font-bold uppercase tracking-widest text-black/50">Discours (année)</p>
                            <p class="text-3xl font-extrabold mt-2">34</p>
                            <p class="text-xs text-black/50 mt-1">Transcriptions</p>
                        </div>
                        <div class="bg-white border border-black/10 shadow-soft p-4">
                            <p class="text-xs font-bold uppercase tracking-widest text-black/50">Vidéos</p>
                            <p class="text-3xl font-extrabold mt-2">12</p>
                            <p class="text-xs text-black/50 mt-1">Conférences & cérémonies</p>
                        </div>
                        <div class="bg-white border border-black/10 shadow-soft p-4">
                            <p class="text-xs font-bold uppercase tracking-widest text-black/50">Interviews</p>
                            <p class="text-3xl font-extrabold mt-2">9</p>
                            <p class="text-xs text-black/50 mt-1">Télévision & radio</p>
                        </div>
                    </div>
                </div>

                <aside class="lg:col-span-4 bg-white border border-black/10 shadow-soft p-6">
                    <p class="text-xs font-bold uppercase tracking-widest text-black/50">Accès rapide</p>
                    <h3 class="text-xl font-extrabold mt-2">Bibliothèque</h3>
                    <div class="mt-4 space-y-3">
                        <a href="#" class="block border border-black/10 p-4 hover:bg-black/5 transition">
                            <p class="text-[10px] uppercase tracking-widest font-bold text-indigo-900">Transcriptions</p>
                            <p class="font-bold">Télécharger les textes</p>
                            <p class="text-sm text-black/60">PDF, formats courts, citations</p>
                        </a>
                        <a href="#" class="block border border-black/10 p-4 hover:bg-black/5 transition">
                            <p class="text-[10px] uppercase tracking-widest font-bold text-rdcBlue">Vidéos</p>
                            <p class="font-bold">Médiathèque</p>
                            <p class="text-sm text-black/60">Replays & extraits</p>
                        </a>
                    </div>
                </aside>
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
                            class="inline-block border border-white/30 px-3 py-1 text-xs font-bold uppercase tracking-widest mb-4">Allocution
                            • Mise en avant</span>
                        <h3 class="text-2xl md:text-3xl font-extrabold mb-4 leading-tight">"La modernisation de notre
                            armée est irréversible."</h3>
                        <p class="text-white/70 mb-6 line-clamp-6">
                            Discours de clôture de l'année académique à l'École de Commandement et d'État-Major.
                            Dossier associé : synthèse, transcription intégrale, extraits vidéo et galerie photos.
                        </p>

                        <div class="grid sm:grid-cols-3 gap-4 mb-6">
                            <div class="border-l-4 border-rdcGold pl-4">
                                <p class="text-xs font-bold uppercase tracking-widest text-white/70">Contexte</p>
                                <p class="text-sm text-white/80 mt-1">École d’État-Major</p>
                            </div>
                            <div class="border-l-4 border-white/20 pl-4">
                                <p class="text-xs font-bold uppercase tracking-widest text-white/70">Formats</p>
                                <p class="text-sm text-white/80 mt-1">Texte • Vidéo • Photos</p>
                            </div>
                            <div class="border-l-4 border-white/20 pl-4">
                                <p class="text-xs font-bold uppercase tracking-widest text-white/70">Date</p>
                                <p class="text-sm text-white/80 mt-1">Déc 2025</p>
                            </div>
                        </div>

                        <div class="flex flex-wrap items-center gap-4">
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
                            <a href="#" class="text-sm font-bold underline decoration-2 underline-offset-4 text-rdcGold">
                                Voir dossier média →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Liste autres discours (améliorée) -->
                <div class="flex flex-col gap-4">
                    <div class="bg-white border border-black/10 shadow-soft p-5 hover:shadow-lg transition cursor-pointer">
                        <div class="flex items-center justify-between">
                            <p class="text-xs text-black/50 font-mono">Conférence de Presse • 15 Nov 2025</p>
                            <span class="text-[10px] font-bold uppercase tracking-widest bg-indigo-50 text-indigo-900 px-2 py-1">Transcription</span>
                        </div>
                        <h4 class="font-extrabold text-lg text-ink mt-2">Point de presse sur la situation sécuritaire à l'Est</h4>
                        <p class="text-sm text-black/70 mt-2 line-clamp-2">
                            Synthèse, questions-réponses, mesures annoncées et points d’attention.
                        </p>
                        <a href="#" class="text-sm text-rdcBlue font-bold mt-3 inline-block underline decoration-2 underline-offset-4">Lire →</a>
                    </div>

                    <div class="bg-white border border-black/10 shadow-soft p-5 hover:shadow-lg transition cursor-pointer">
                        <div class="flex items-center justify-between">
                            <p class="text-xs text-black/50 font-mono">Interview • 10 Nov 2025</p>
                            <span class="text-[10px] font-bold uppercase tracking-widest bg-blue-50 text-rdcBlue px-2 py-1">Replay</span>
                        </div>
                        <h4 class="font-extrabold text-lg text-ink mt-2">Entretien exclusif sur la RTNC : bilan à mi-parcours</h4>
                        <p class="text-sm text-black/70 mt-2 line-clamp-2">
                            Modernisation, discipline et priorités : annonces structurantes.
                        </p>
                        <a href="#" class="text-sm text-rdcBlue font-bold mt-3 inline-block underline decoration-2 underline-offset-4">Revoir →</a>
                    </div>

                    <div class="bg-white border border-black/10 shadow-soft p-5 hover:shadow-lg transition cursor-pointer">
                        <div class="flex items-center justify-between">
                            <p class="text-xs text-black/50 font-mono">Hommage • 02 Nov 2025</p>
                            <span class="text-[10px] font-bold uppercase tracking-widest bg-rdcGold/20 text-ink px-2 py-1">Texte</span>
                        </div>
                        <h4 class="font-extrabold text-lg text-ink mt-2">Oraison funèbre du Général Major M.K.</h4>
                        <p class="text-sm text-black/70 mt-2 line-clamp-2">
                            Discours officiel, biographie, décorations et galerie cérémonielle.
                        </p>
                        <a href="#" class="text-sm text-rdcBlue font-bold mt-3 inline-block underline decoration-2 underline-offset-4">Lire →</a>
                    </div>

                    <div class="bg-white border border-black/10 shadow-soft p-5 hover:shadow-lg transition cursor-pointer">
                        <div class="flex items-center justify-between">
                            <p class="text-xs text-black/50 font-mono">Allocution • 20 Oct 2025</p>
                            <span class="text-[10px] font-bold uppercase tracking-widest bg-ink/5 text-ink px-2 py-1">Extraits</span>
                        </div>
                        <h4 class="font-extrabold text-lg text-ink mt-2">Message à la Nation : discipline & cohésion</h4>
                        <p class="text-sm text-black/70 mt-2 line-clamp-2">
                            Extraits officiels, points clés et éléments de langage.
                        </p>
                        <a href="#" class="text-sm text-rdcBlue font-bold mt-3 inline-block underline decoration-2 underline-offset-4">Lire →</a>
                    </div>
                </div>

            </div>
        </section>

        <!-- SECTION 4 : ANNONCES -->
        <section id="section-annonces" class="content-section bg-cream2 border-y border-black/10">
            <div class="max-w-7xl mx-auto px-4 lg:px-6 py-12">

                <!-- Header amélioré -->
            <div class="grid lg:grid-cols-12 gap-8  items-start mb-10">
                <div class="lg:col-span-8 flex flex-col h-full">
                        <h2 class="text-2xl md:text-3xl font-extrabold uppercase tracking-wide flex items-center gap-3">
                            <span class="w-2 h-10 bg-rdcGold block"></span>
                            Annonces Officielles
                        </h2>
                        <p class="mt-3 text-black/70 text-lg leading-relaxed">
                            Publications légales, arrêtés ministériels, avis, appels à candidatures et recrutements.
                            Backend prévu : filtres, références, téléchargement, statut et archives.
                        </p>

                        <div class="mt-auto grid sm:grid-cols-3 gap-4">
                            <div class="bg-white border border-black/10 shadow-soft p-4">
                                <p class="text-xs font-bold uppercase tracking-widest text-black/50">Annonces actives</p>
                                <p class="text-3xl font-extrabold mt-2">5</p>
                                <p class="text-xs text-black/50 mt-1">À déposer / postuler</p>
                            </div>
                            <div class="bg-white border border-black/10 shadow-soft p-4">
                                <p class="text-xs font-bold uppercase tracking-widest text-black/50">Arrêtés</p>
                                <p class="text-3xl font-extrabold mt-2">12</p>
                                <p class="text-xs text-black/50 mt-1">2025</p>
                            </div>
                            <div class="bg-white border border-black/10 shadow-soft p-4">
                                <p class="text-xs font-bold uppercase tracking-widest text-black/50">Téléchargements</p>
                                <p class="text-3xl font-extrabold mt-2">9k</p>
                                <p class="text-xs text-black/50 mt-1">Documents PDF</p>
                            </div>
                        </div>
                    </div>

                    <aside class="lg:col-span-4 bg-white border border-black/10 shadow-soft p-6">
                        <p class="text-xs font-bold uppercase tracking-widest text-black/50">Raccourcis</p>
                        <h3 class="text-xl font-extrabold mt-2">Portail documents</h3>
                        <div class="mt-4 space-y-3">
                            <a href="#" class="block border border-black/10 p-4 hover:bg-black/5 transition">
                                <p class="text-[10px] uppercase tracking-widest font-bold text-rdcRed">Important</p>
                                <p class="font-bold">Derniers arrêtés</p>
                                <p class="text-sm text-black/60">Références, dates, PDF</p>
                            </a>
                            <a href="#" class="block border border-black/10 p-4 hover:bg-black/5 transition">
                                <p class="text-[10px] uppercase tracking-widest font-bold text-rdcBlue">Recrutement</p>
                                <p class="font-bold">Appels à candidatures</p>
                                <p class="text-sm text-black/60">Conditions, formulaires</p>
                            </a>
                        </div>
                    </aside>
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
                            <h3 class="font-extrabold text-lg leading-tight">Arrêté ministériel portant nomination des
                                Directeurs Régionaux</h3>
                            <p class="text-sm text-black/70 mt-1 line-clamp-3">
                                Publication de la liste officielle des nouveaux directeurs pour les régions militaires
                                Est et Centre. Prise de fonction immédiate.
                            </p>
                            <div class="mt-3 flex flex-wrap gap-2">
                                <span class="text-[10px] font-bold uppercase tracking-widest px-2 py-1 bg-cream2 border border-black/10">PDF</span>
                                <span class="text-[10px] font-bold uppercase tracking-widest px-2 py-1 bg-cream2 border border-black/10">Annexe</span>
                            </div>
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
                            <h3 class="font-extrabold text-lg leading-tight">Ouverture du concours d'entrée 2026 - École du
                                Génie</h3>
                            <p class="text-sm text-black/70 mt-1 line-clamp-3">
                                Avis de recrutement pour les ingénieurs et techniciens. Les dossiers sont à déposer
                                avant le 15 Janvier 2026.
                            </p>
                            <div class="mt-3 flex flex-wrap gap-2">
                                <span class="text-[10px] font-bold uppercase tracking-widest px-2 py-1 bg-cream2 border border-black/10">Conditions</span>
                                <span class="text-[10px] font-bold uppercase tracking-widest px-2 py-1 bg-cream2 border border-black/10">Formulaire</span>
                            </div>
                            <p class="text-xs text-black/50 mt-2">Publié le 10 Nov 2025</p>
                        </div>
                        <a href="#"
                            class="mt-2 md:mt-0 px-4 py-2 border border-black/10 text-sm font-semibold hover:bg-black/5 transition whitespace-nowrap">
                            Voir les conditions
                        </a>
                    </div>

                    <!-- 3e élément pour “au moins 4” -->
                    <div
                        class="bg-white border border-black/10 p-5 md:p-6 shadow-soft hover:shadow-lg transition-all flex flex-col md:flex-row gap-5 items-start md:items-center">
                        <div class="flex-shrink-0 bg-ink/5 text-ink w-12 h-12 flex items-center justify-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4m6 0a10 10 0 1 1-20 0 10 10 0 0 1 20 0Z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <div class="flex flex-wrap items-center gap-2 mb-1">
                                <span
                                    class="inline-block bg-ink/10 text-ink text-[10px] font-bold px-2 py-0.5 rounded uppercase tracking-wider">Avis</span>
                                <span class="text-xs text-black/50 font-mono">Réf: AVIS/PROC/2025-11</span>
                            </div>
                            <h3 class="font-extrabold text-lg leading-tight">Avis : calendrier de dépôt des dossiers administratifs</h3>
                            <p class="text-sm text-black/70 mt-1 line-clamp-3">
                                Mise à jour des délais, guichets et procédures pour éviter les retards et améliorer la traçabilité.
                            </p>
                            <p class="text-xs text-black/50 mt-2">Publié le 05 Nov 2025</p>
                        </div>
                        <a href="#"
                            class="mt-2 md:mt-0 px-4 py-2 border border-black/10 text-sm font-semibold hover:bg-black/5 transition whitespace-nowrap">
                            Consulter
                        </a>
                    </div>

                    <!-- 4e élément -->
                    <div
                        class="bg-white border border-black/10 p-5 md:p-6 shadow-soft hover:shadow-lg transition-all flex flex-col md:flex-row gap-5 items-start md:items-center">
                        <div class="flex-shrink-0 bg-rdcRed/10 text-rdcRed w-12 h-12 flex items-center justify-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 6h.008v.008H12v-.008Z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <div class="flex flex-wrap items-center gap-2 mb-1">
                                <span
                                    class="inline-block bg-rdcRed/10 text-rdcRed text-[10px] font-bold px-2 py-0.5 rounded uppercase tracking-wider">Important</span>
                                <span class="text-xs text-black/50 font-mono">Réf: URG/INFO/2025-10</span>
                            </div>
                            <h3 class="font-extrabold text-lg leading-tight">Note importante : consignes de communication officielle</h3>
                            <p class="text-sm text-black/70 mt-1 line-clamp-3">
                                Rappel des canaux, validation des communiqués et règles de diffusion des informations sensibles.
                            </p>
                            <p class="text-xs text-black/50 mt-2">Publié le 28 Oct 2025</p>
                        </div>
                        <a href="#"
                            class="mt-2 md:mt-0 px-4 py-2 border border-black/10 text-sm font-semibold hover:bg-black/5 transition whitespace-nowrap">
                            Lire
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- SECTION 5 : DECISIONS -->
        <section id="section-decisions" class="content-section max-w-7xl mx-auto px-4 lg:px-6 py-12">
            <div class="grid lg:grid-cols-12 gap-8  items-start mb-10">
                <div class="lg:col-span-8 flex flex-col h-full">
                    <h2 class="text-2xl md:text-3xl font-extrabold uppercase tracking-wide flex items-center gap-3">
                        <span class="w-2 h-10 bg-ink block"></span>
                        Décisions & Notes
                    </h2>
                    <p class="mt-3 text-black/70 text-lg leading-relaxed">
                        Actes administratifs, décisions ministérielles et notes circulaires.
                        Backend prévu : références, statut, versions, téléchargements et recherche plein texte.
                    </p>

                    <div class="mt-auto grid sm:grid-cols-3 gap-4">
                        <div class="bg-white border border-black/10 shadow-soft p-4">
                            <p class="text-xs font-bold uppercase tracking-widest text-black/50">Décisions</p>
                            <p class="text-3xl font-extrabold mt-2">41</p>
                            <p class="text-xs text-black/50 mt-1">2025</p>
                        </div>
                        <div class="bg-white border border-black/10 shadow-soft p-4">
                            <p class="text-xs font-bold uppercase tracking-widest text-black/50">Notes</p>
                            <p class="text-3xl font-extrabold mt-2">73</p>
                            <p class="text-xs text-black/50 mt-1">Circulaires & service</p>
                        </div>
                        <div class="bg-white border border-black/10 shadow-soft p-4">
                            <p class="text-xs font-bold uppercase tracking-widest text-black/50">Tél. (mois)</p>
                            <p class="text-3xl font-extrabold mt-2">2 104</p>
                            <p class="text-xs text-black/50 mt-1">PDF & annexes</p>
                        </div>
                    </div>
                </div>

                <aside class="lg:col-span-4 bg-white border border-black/10 shadow-soft p-6">
                    <p class="text-xs font-bold uppercase tracking-widest text-black/50">Bonnes pratiques</p>
                    <h3 class="text-xl font-extrabold mt-2">Traçabilité</h3>
                    <ul class="mt-4 space-y-2 text-sm text-black/70">
                        <li>• Réf unique + date + version</li>
                        <li>• Historique des modifications</li>
                        <li>• Statut (brouillon / signé / archivé)</li>
                        <li>• Téléchargements & consultations</li>
                    </ul>
                    <button class="mt-5 w-full px-4 py-2 bg-ink text-white font-bold uppercase tracking-wide text-sm hover:bg-ink/90 transition">
                        Ouvrir l’archive
                    </button>
                </aside>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="bg-white group block border border-black/10 p-6 hover:shadow-soft transition-all duration-300 relative">
                    <div class="flex items-start justify-between mb-4">
                        <div class="inline-flex items-center px-2 py-1 bg-ink text-white text-[10px] font-bold uppercase tracking-widest">
                            Décision
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="w-5 h-5 text-black/30 group-hover:text-rdcBlue transition-colors">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>
                    </div>
                    <h3 class="font-extrabold text-lg mb-2 group-hover:text-rdcBlue transition-colors">
                        Décision N°005/MDDN/2025
                    </h3>
                    <p class="text-sm text-black/70 line-clamp-3">
                        Création d'une commission ad hoc pour l'évaluation des infrastructures hospitalières militaires en zone Est.
                    </p>
                    <div class="mt-4 pt-4 border-t border-black/5 flex items-center justify-between text-xs text-black/50">
                        <span class="font-mono">26 Nov 2025</span>
                        <span class="uppercase tracking-wide font-semibold text-black/70">PDF • 1.2 MB</span>
                    </div>
                    <a href="#" class="absolute inset-0 z-10" aria-label="Télécharger"></a>
                </div>

                <div class="bg-white group block border border-black/10 p-6 hover:shadow-soft transition-all duration-300 relative">
                    <div class="flex items-start justify-between mb-4">
                        <div class="inline-flex items-center px-2 py-1 bg-black/5 text-black/80 text-[10px] font-bold uppercase tracking-widest">
                            Note circulaire
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="w-5 h-5 text-black/30 group-hover:text-rdcBlue transition-colors">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>
                    </div>
                    <h3 class="font-extrabold text-lg mb-2 group-hover:text-rdcBlue transition-colors">
                        Note de service - Logistique
                    </h3>
                    <p class="text-sm text-black/70 line-clamp-3">
                        Procédure actualisée concernant l'approvisionnement en carburant des unités déployées. Application immédiate.
                    </p>
                    <div class="mt-4 pt-4 border-t border-black/5 flex items-center justify-between text-xs text-black/50">
                        <span class="font-mono">22 Nov 2025</span>
                        <span class="uppercase tracking-wide font-semibold text-black/70">PDF • 850 KB</span>
                    </div>
                    <a href="#" class="absolute inset-0 z-10" aria-label="Télécharger"></a>
                </div>

                <!-- 3e -->
                <div class="bg-white group block border border-black/10 p-6 hover:shadow-soft transition-all duration-300 relative">
                    <div class="flex items-start justify-between mb-4">
                        <div class="inline-flex items-center px-2 py-1 bg-ink/10 text-ink text-[10px] font-bold uppercase tracking-widest">
                            Note interne
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="w-5 h-5 text-black/30 group-hover:text-rdcBlue transition-colors">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>
                    </div>
                    <h3 class="font-extrabold text-lg mb-2 group-hover:text-rdcBlue transition-colors">
                        Note interne – Conformité & diffusion
                    </h3>
                    <p class="text-sm text-black/70 line-clamp-3">
                        Règles de validation des documents, archivage, et diffusion des informations sensibles.
                    </p>
                    <div class="mt-4 pt-4 border-t border-black/5 flex items-center justify-between text-xs text-black/50">
                        <span class="font-mono">14 Nov 2025</span>
                        <span class="uppercase tracking-wide font-semibold text-black/70">PDF • 420 KB</span>
                    </div>
                    <a href="#" class="absolute inset-0 z-10" aria-label="Télécharger"></a>
                </div>

            </div>
        </section>

    </main>

@include('partials.footer')


</body>

</html>
