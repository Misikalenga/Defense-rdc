<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projets - Ministère Délégué Défense RDC</title>

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


</head>

<body class="bg-cream text-ink antialiased">

    <div id="progressBar" class="fixed top-0 left-0 h-1 bg-rdcGold z-[9999] w-0"></div>

    <!-- HEADER -->
    @include('partials.header')

    <!-- HERO -->
    <section class="bg-ink text-white py-12 md:py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-rdcBlue/10"></div>
        <div class="absolute -right-20 -top-20 w-96 h-96 bg-rdcBlue/20 rounded-full blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-4 lg:px-6 relative z-10">
            <p class="text-rdcGold font-bold uppercase tracking-widest text-xs mb-3">Portefeuille des projets</p>
            <h1 class="text-3xl md:text-5xl font-extrabold mb-6">Projets & Programmes</h1>
            <p class="text-white/70 max-w-2xl text-lg leading-relaxed">
                Dossiers stratégiques, programmes de modernisation, action sociale vétérans et coopération régionale.
                Conçus pour être suivis, documentés et évalués.
            </p>
        </div>
    </section>


    <!-- onglet navbar -->
    @include('partials.onglet')

    <!-- MAIN CONTENT -->


    <main class="min-h-screen">

        <!-- =========================
        TAB 1 : PRIORITÉ 2026 (différent + riche + score)
    ========================== -->
        <section id="section-priorite" class="proj-section max-w-7xl mx-auto px-4 lg:px-6 py-12 fade-in">

            <!-- Header section différent -->
            <div class="grid lg:grid-cols-12 gap-8 items-start mb-10">
                <div class="lg:col-span-8">
                    <h2 class="text-2xl md:text-3xl font-extrabold uppercase tracking-wide flex items-center gap-3">
                        <span class="w-2 h-10 bg-rdcGold block"></span>
                        Priorité 2026
                    </h2>
                    <p class="mt-3 text-black/70 text-lg leading-relaxed">
                        Feuille de route opérationnelle : projets à impact immédiat, indicateurs de suivi, calendrier
                        prévisionnel
                        et mécanismes d’accountability. Cette maquette simule un futur backend (recherche, tri,
                        pagination, scoring).
                    </p>

                    <!-- Mini “dashboard” -->
                    <div class="mt-6 grid sm:grid-cols-3 gap-4">
                        <div class="bg-white border border-black/10 shadow-soft p-4">
                            <p class="text-xs font-bold uppercase tracking-widest text-black/50">Projets actifs</p>
                            <p class="text-3xl font-extrabold mt-2">24</p>
                            <p class="text-xs text-black/50 mt-1">Mise à jour: 13 Déc 2025</p>
                        </div>
                        <div class="bg-white border border-black/10 shadow-soft p-4">
                            <p class="text-xs font-bold uppercase tracking-widest text-black/50">Projets en revue</p>
                            <p class="text-3xl font-extrabold mt-2">7</p>
                            <p class="text-xs text-black/50 mt-1">Audit & conformité</p>
                        </div>
                        <div class="bg-white border border-black/10 shadow-soft p-4">
                            <p class="text-xs font-bold uppercase tracking-widest text-black/50">Indicateurs</p>
                            <p class="text-3xl font-extrabold mt-2">12</p>
                            <p class="text-xs text-black/50 mt-1">KPI suivis mensuellement</p>
                        </div>
                    </div>
                </div>

                <aside class="lg:col-span-4 bg-ink text-white p-6 shadow-soft relative overflow-hidden">
                    <div class="absolute -right-16 -bottom-16 w-56 h-56 bg-rdcBlue/25 rounded-full blur-2xl"></div>

                    <div class="relative z-10">
                        <p class="text-rdcGold font-bold uppercase tracking-widest text-xs">
                            Dossier projet
                        </p>

                        <h3 class="text-xl font-extrabold mt-2">
                            Centres vétérans – Réhabilitation
                        </h3>

                        <ul class="mt-4 space-y-2 text-white/80 text-sm">
                            <li>• Provinces pilotes : Kinshasa, Kongo Central</li>
                            <li>• Volets : santé, accueil, orientation sociale</li>
                            <li>• Statut : préparation achevée</li>
                            <li>• Documents : note de cadrage, annexes</li>
                        </ul>

                        <button
                            class="mt-5 bg-white text-ink px-4 py-2 text-sm font-bold uppercase tracking-wide hover:bg-cream transition">
                            Consulter le dossier
                        </button>
                    </div>
                </aside>


            </div>

            <!-- Projet “le plus récent” mis en avant (différent) -->
            <article class="bg-white border border-black/10 shadow-soft overflow-hidden mb-10"
                data-title="Centre national de coordination opérationnelle 2026">
                <div class="grid lg:grid-cols-12">
                    <div class="lg:col-span-5 relative h-64 lg:h-full overflow-hidden">
                        <img src="{{ asset('assets/histo.jpeg') }}"
                            alt="Coordination opérationnelle"
                            class="w-full h-full object-cover object-center hover:scale-105 transition duration-500">
                        <div
                            class="absolute top-4 left-4 bg-rdcGold text-ink text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                            Plus récent • Dossier prioritaire
                        </div>
                        <div class="absolute bottom-4 left-4 flex gap-2">
                            <span
                                class="bg-black/60 text-white text-[10px] px-2 py-1 uppercase tracking-widest">KPI</span>
                            <span
                                class="bg-black/60 text-white text-[10px] px-2 py-1 uppercase tracking-widest">Sécurité</span>
                            <span
                                class="bg-black/60 text-white text-[10px] px-2 py-1 uppercase tracking-widest">Interop</span>
                        </div>
                    </div>

                    <div class="lg:col-span-7 p-6 md:p-8">
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <p class="text-xs font-mono text-black/50 mb-2">Publication: 10 Déc 2025 • Réf:
                                    PRIO/CNCO/2026-01</p>
                                <h3 class="text-2xl font-extrabold leading-tight">
                                    Centre National de Coordination Opérationnelle (CNCO)
                                </h3>
                                <p class="mt-3 text-black/70 leading-relaxed line-clamp-6">
                                    Création d’un centre de coordination inter-services permettant la consolidation des
                                    informations,
                                    la planification opérationnelle, le suivi des unités et la gestion de crise
                                    (catastrophes, incidents
                                    majeurs, situations sécuritaires). Le CNCO s’appuie sur une architecture de données
                                    unifiée, un
                                    reporting standardisé et des procédures communes afin d’augmenter la vitesse de
                                    décision et la qualité
                                    de l’exécution.
                                </p>
                            </div>

                            <!-- Score / likes -->
                            <div class="shrink-0 text-right">
                                <p class="text-[10px] font-bold uppercase tracking-widest text-black/50">Score</p>
                                <div class="mt-2 flex items-center justify-end gap-2">
                                    <button
                                        class="like-btn bg-white border border-black/10 px-3 py-2 hover:bg-blue-100 transition"
                                        data-like="prio-like-1" onclick="likeProject(event)">
                                        👍
                                    </button>
                                    <span id="prio-like-1" class="font-mono text-sm text-black/70">128</span>
                                </div>
                                <p class="text-[10px] text-black/40 mt-1">Signal citoyen</p>
                            </div>
                        </div>

                        <!-- Bandeau “dossier complet” -->
                        <div class="mt-6 grid sm:grid-cols-3 gap-4">
                            <div class="border-l-4 border-rdcBlue pl-4">
                                <p class="text-xs font-bold uppercase tracking-widest text-black/50">Objectif</p>
                                <p class="text-sm text-black/70">Réduire le temps de coordination & améliorer la
                                    traçabilité.</p>
                            </div>
                            <div class="border-l-4 border-black/10 pl-4">
                                <p class="text-xs font-bold uppercase tracking-widest text-black/50">Livrables</p>
                                <p class="text-sm text-black/70">Salle opérationnelle, procédures, tableau de bord KPI.
                                </p>
                            </div>
                            <div class="border-l-4 border-black/10 pl-4">
                                <p class="text-xs font-bold uppercase tracking-widest text-black/50">Calendrier</p>
                                <p class="text-sm text-black/70">T1: cadrage • T2: déploiement • T3: montée en charge.
                                </p>
                            </div>
                        </div>

                        <div class="mt-6 flex flex-wrap items-center gap-3">
                            <button
                                class="bg-rdcBlue text-white px-5 py-2 text-sm font-bold uppercase tracking-wide hover:bg-rdcBlue/90 transition">
                                Voir le dossier complet
                            </button>
                            <button
                                class="px-5 py-2 border border-black/10 text-sm font-semibold hover:bg-blue-100 transition">
                                Télécharger note (PDF)
                            </button>
                            <a href="#"
                                class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">
                                Voir annexes & rubriques →
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Rubriques supplémentaires (donne l’air “dossiers complets”) -->
            <section class="bg-cream2 border border-black/10 shadow-soft p-6 mb-10">
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-white border border-black/10 p-5">
                        <p class="text-xs font-bold uppercase tracking-widest text-black/50">Rubrique</p>
                        <h4 class="font-extrabold text-lg mt-2">Gouvernance & pilotage</h4>
                        <p class="text-sm text-black/70 mt-2">
                            Comité de suivi, responsabilités, arbitrages, conformité et transparence.
                        </p>
                        <a class="inline-block mt-3 text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4"
                            href="#">
                            Ouvrir →
                        </a>
                    </div>
                    <div class="bg-white border border-black/10 p-5">
                        <p class="text-xs font-bold uppercase tracking-widest text-black/50">Rubrique</p>
                        <h4 class="font-extrabold text-lg mt-2">Financement & achats</h4>
                        <p class="text-sm text-black/70 mt-2">
                            Plan de financement, appels d’offres, lots, clauses de qualité et contrôle.
                        </p>
                        <a class="inline-block mt-3 text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4"
                            href="#">
                            Ouvrir →
                        </a>
                    </div>
                    <div class="bg-white border border-black/10 p-5">
                        <p class="text-xs font-bold uppercase tracking-widest text-black/50">Rubrique</p>
                        <h4 class="font-extrabold text-lg mt-2">Évaluation & KPI</h4>
                        <p class="text-sm text-black/70 mt-2">
                            Indicateurs, baseline, objectifs trimestriels, rapport public synthétique.
                        </p>
                        <a class="inline-block mt-3 text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4"
                            href="#">
                            Ouvrir →
                        </a>
                    </div>
                </div>
            </section>

            <!-- Grille de projets (au moins 4) -->
            <h3 class="text-xl font-extrabold uppercase tracking-wide flex items-center gap-3 mb-6">
                <span class="w-2 h-7 bg-rdcBlue block"></span>
                Autres projets prioritaires (2026)
            </h3>

            <div id="prioGrid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <article
                    class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                    data-title="Programme de surveillance des sites stratégiques" data-date="2025-12-06"
                    data-score="92">
                    <div class="relative h-44 overflow-hidden">
                        <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                            src="{{ asset('assets/bcc_kin.jpg') }}"
                            alt="Surveillance sites stratégiques">
                        <div
                            class="absolute top-4 left-4 bg-rdcBlue text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                            Sécurité
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-xs font-mono text-black/50 mb-2">06 Déc 2025 • Réf: PRIO/SEC/2026-04</p>
                        <h4 class="font-extrabold text-lg leading-tight mb-2">Surveillance des sites stratégiques</h4>
                        <p class="text-sm text-black/70 line-clamp-3">
                            Caméras, contrôle d’accès, patrouilles et protocoles pour la protection des infrastructures
                            sensibles.
                        </p>

                        <div class="mt-4 flex items-center justify-between">
                            <button class="like-btn px-3 py-2 border border-black/10 hover:bg-blue-100 transition"
                                data-like="prio-like-2" onclick="likeProject(event)">👍</button>
                            <span class="font-mono text-sm text-black/70"><span id="prio-like-2">92</span> pts</span>
                            <a href="#"
                                class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                →</a>
                        </div>
                    </div>
                </article>

                <!-- Card 2 -->
                <article
                    class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                    data-title="Digitalisation des procédures de mobilisation" data-date="2025-11-29" data-score="77">
                    <div class="relative h-44 overflow-hidden">
                        <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                            src="{{ asset('assets/soda-equipement.png') }}"
                            alt="Digitalisation">
                        <div
                            class="absolute top-4 left-4 bg-ink text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                            Transformation
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-xs font-mono text-black/50 mb-2">29 Nov 2025 • Réf: PRIO/IT/2026-02</p>
                        <h4 class="font-extrabold text-lg leading-tight mb-2">Digitalisation des procédures</h4>
                        <p class="text-sm text-black/70 line-clamp-3">
                            Plateforme interne : demandes, validation, traçabilité, archivage et tableaux de bord.
                        </p>

                        <div class="mt-4 flex items-center justify-between">
                            <button class="like-btn px-3 py-2 border border-black/10 hover:bg-blue-100 transition"
                                data-like="prio-like-3" onclick="likeProject(event)">👍</button>
                            <span class="font-mono text-sm text-black/70"><span id="prio-like-3">77</span> pts</span>
                            <a href="#"
                                class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                →</a>
                        </div>
                    </div>
                </article>

                <!-- Card 3 -->
                <article
                    class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                    data-title="Réhabilitation des infrastructures de santé militaire" data-date="2025-11-22"
                    data-score="103">
                    <div class="relative h-44 overflow-hidden">
                        <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                            src="{{ asset('assets/kalemie-soda.jpg') }}"
                            alt="Santé militaire">
                        <div
                            class="absolute top-4 left-4 bg-rdcRed text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                            Santé
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-xs font-mono text-black/50 mb-2">22 Nov 2025 • Réf: PRIO/SANTE/2026-05</p>
                        <h4 class="font-extrabold text-lg leading-tight mb-2">Santé militaire : remise à niveau</h4>
                        <p class="text-sm text-black/70 line-clamp-3">
                            Mise à niveau des hôpitaux militaires, équipements essentiels, stocks et maintenance.
                        </p>

                        <div class="mt-4 flex items-center justify-between">
                            <button class="like-btn px-3 py-2 border border-black/10 hover:bg-blue-100 transition"
                                data-like="prio-like-4" onclick="likeProject(event)">👍</button>
                            <span class="font-mono text-sm text-black/70"><span id="prio-like-4">103</span> pts</span>
                            <a href="#"
                                class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                →</a>
                        </div>
                    </div>
                </article>

                <!-- Card 4 -->
                <article
                    class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                    data-title="Programme d’intégrité et discipline administrative" data-date="2025-11-10"
                    data-score="65">
                    <div class="relative h-44 overflow-hidden">
                        <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                            src="{{ asset('assets/kalemie-soda.jpg') }}"
                            alt="Discipline administrative">
                        <div
                            class="absolute top-4 left-4 bg-rdcGold text-ink text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                            Gouvernance
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-xs font-mono text-black/50 mb-2">10 Nov 2025 • Réf: PRIO/GOUV/2026-03</p>
                        <h4 class="font-extrabold text-lg leading-tight mb-2">Intégrité & discipline administrative</h4>
                        <p class="text-sm text-black/70 line-clamp-3">
                            Charte éthique, contrôle interne, formation, sanctions graduées et reporting.
                        </p>

                        <div class="mt-4 flex items-center justify-between">
                            <button class="like-btn px-3 py-2 border border-black/10 hover:bg-blue-100 transition"
                                data-like="prio-like-5" onclick="likeProject(event)">👍</button>
                            <span class="font-mono text-sm text-black/70"><span id="prio-like-5">65</span> pts</span>
                            <a href="#"
                                class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                →</a>
                        </div>
                    </div>
                </article>

                <!-- Card 5 (bonus pour “beaucoup d’articles”) -->
                <article
                    class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                    data-title="Cellule de réponse rapide aux crises humanitaires" data-date="2025-10-30"
                    data-score="88">
                    <div class="relative h-44 overflow-hidden">
                        <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                            src="{{ asset('assets/soda-equipement.png') }}"
                            alt="Crises">
                        <div
                            class="absolute top-4 left-4 bg-green-700 text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                            Crise
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-xs font-mono text-black/50 mb-2">30 Oct 2025 • Réf: PRIO/CRISE/2026-06</p>
                        <h4 class="font-extrabold text-lg leading-tight mb-2">Cellule de réponse rapide</h4>
                        <p class="text-sm text-black/70 line-clamp-3">
                            Coordination d’urgence, logistique, évacuations, communications et partenariats
                            humanitaires.
                        </p>

                        <div class="mt-4 flex items-center justify-between">
                            <button class="like-btn px-3 py-2 border border-black/10 hover:bg-blue-100 transition"
                                data-like="prio-like-6" onclick="likeProject(event)">👍</button>
                            <span class="font-mono text-sm text-black/70"><span id="prio-like-6">88</span> pts</span>
                            <a href="#"
                                class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                →</a>
                        </div>
                    </div>
                </article>

                <!-- Card 6 -->
                <article
                    class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                    data-title="Programme de maintenance & pièces de rechange" data-date="2025-10-18" data-score="71">
                    <div class="relative h-44 overflow-hidden">
                        <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                            src="{{ asset('assets/garderep.jpg') }}"
                            alt="Maintenance">
                        <div
                            class="absolute top-4 left-4 bg-rdcBlue text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                            Logistique
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-xs font-mono text-black/50 mb-2">18 Oct 2025 • Réf: PRIO/LOG/2026-07</p>
                        <h4 class="font-extrabold text-lg leading-tight mb-2">Maintenance & pièces de rechange</h4>
                        <p class="text-sm text-black/70 line-clamp-3">
                            Inventaires, contrats, délais, standards de qualité et réduction des immobilisations.
                        </p>

                        <div class="mt-4 flex items-center justify-between">
                            <button class="like-btn px-3 py-2 border border-black/10 hover:bg-blue-100 transition"
                                data-like="prio-like-7" onclick="likeProject(event)">👍</button>
                            <span class="font-mono text-sm text-black/70"><span id="prio-like-7">71</span> pts</span>
                            <a href="#"
                                class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                →</a>
                        </div>
                    </div>
                </article>
            </div>

        </section>

        <!-- =========================
        TAB 2 : MODERNISATION (avec sections équipement & formation)
    ========================== -->
        <section id="section-modernisation" class="proj-section hidden">

            <!-- Sous-hero interne -->

            <div class="max-w-7xl mx-auto px-4 lg:px-6 pt-12">
                <div class="max-w-4xl">
                    <h2 class="text-2xl font-extrabold uppercase tracking-wide flex items-center gap-3">
                        <span class="w-2 h-8 bg-rdcBlue block"></span>
                        Modernisation
                    </h2>
                    <p class="mt-2 text-black/70 ml-5">
                        Renforcement capacitaire : équipements, maintenance, doctrine et formation professionnelle.
                    </p>
                </div>
            </div>


            <div class="max-w-7xl mx-auto px-4 lg:px-6 py-12 fade-in">

                <!-- Projet le plus récent (mis en avant différemment) -->
                <article class="bg-ink text-white p-8 md:p-10 relative overflow-hidden shadow-soft mb-10 project-card"
                    data-title="Équipement 2026 : flotte logistique et communications" data-date="2025-12-03"
                    data-score="0">
                    <div class="absolute top-0 right-0 p-10 opacity-10">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                            class="w-40 h-40">
                            <path d="M3 6h18v12H3z" />
                        </svg>
                    </div>
                    <div class="relative z-10">
                        <span
                            class="inline-block border border-white/30 px-3 py-1 text-xs font-bold uppercase tracking-widest mb-4">
                            Dossier récent • Équipement
                        </span>
                        <h3 class="text-2xl md:text-3xl font-extrabold mb-3 leading-tight">
                            Équipement 2026 : flotte logistique & communications sécurisées
                        </h3>
                        <p class="text-white/70 mb-6 max-w-3xl line-clamp-6">
                            Acquisition progressive d’équipements de mobilité, de communications et de soutien.
                            L’objectif est d’augmenter la disponibilité opérationnelle via la maintenance, les stocks
                            stratégiques,
                            et un cycle de vie maîtrisé (achats, formation, pièces, audit).
                        </p>

                        <div class="grid sm:grid-cols-3 gap-4 mb-6">
                            <div class="border-l-4 border-rdcGold pl-4">
                                <p class="text-xs font-bold uppercase tracking-widest text-white/70">Rubriques</p>
                                <p class="text-sm text-white/80 mt-1">Besoins • Spécifications • Lots • Contrôle qualité
                                </p>
                            </div>
                            <div class="border-l-4 border-white/20 pl-4">
                                <p class="text-xs font-bold uppercase tracking-widest text-white/70">Zones</p>
                                <p class="text-sm text-white/80 mt-1">Est • Centre • Ouest • Appui logistique</p>
                            </div>
                            <div class="border-l-4 border-white/20 pl-4">
                                <p class="text-xs font-bold uppercase tracking-widest text-white/70">Calendrier</p>
                                <p class="text-sm text-white/80 mt-1">T1 cadrage • T2 achats • T3 déploiement</p>
                            </div>
                        </div>

                        <div class="flex flex-wrap items-center gap-4">
                            <button
                                class="bg-white text-ink px-5 py-2 text-sm font-bold uppercase tracking-wide hover:bg-cream transition">
                                Lire le dossier
                            </button>
                            <button class="flex items-center gap-2 text-sm font-semibold hover:text-rdcGold transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6l4 2m6-2a10 10 0 1 1-20 0 10 10 0 0 1 20 0Z" />
                                </svg>
                                Voir chronologie
                            </button>
                            <a href="#"
                                class="text-sm font-bold underline decoration-2 underline-offset-4 text-rdcGold">
                                Annexes techniques →
                            </a>
                        </div>
                    </div>
                </article>

                <!-- SECTION : ÉQUIPEMENT (au moins 4) -->
                <div class="mb-8">
                    <h3 class="text-xl font-extrabold uppercase tracking-wide flex items-center gap-3">
                        <span class="w-2 h-7 bg-rdcBlue block"></span>
                        Équipement
                    </h3>
                    <p class="mt-2 text-black/70 ml-5">Matériels, infrastructure, maintenance et cycles de vie.</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                    <!-- 1 -->
                    <article
                        class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                        data-title="Ateliers régionaux de maintenance" data-date="2025-11-27" data-score="0">
                        <div class="relative h-44 overflow-hidden">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                                src="{{ asset('assets/garderep.jpg') }}"
                                alt="Ateliers maintenance">
                            <div
                                class="absolute top-4 left-4 bg-rdcBlue text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Maintenance
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">27 Nov 2025 • Réf: MOD/EQP/1127</p>
                            <h4 class="font-extrabold text-lg mb-2">Ateliers régionaux de maintenance</h4>
                            <p class="text-sm text-black/70 line-clamp-3">
                                Réhabilitation d’ateliers, outillage, procédures et reporting pour réduire les
                                immobilisations.
                            </p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs font-bold uppercase tracking-widest text-black/50">Dossier</span>
                                <a href="#"
                                    class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                    →</a>
                            </div>
                        </div>
                    </article>

                    <!-- 2 -->
                    <article
                        class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                        data-title="Standardisation des équipements de communication" data-date="2025-11-12"
                        data-score="0">
                        <div class="relative h-44 overflow-hidden">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                                src="{{ asset('assets/ancien-combattant-3.jpg') }}"
                                alt="Communication">
                            <div
                                class="absolute top-4 left-4 bg-ink text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Interop
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">12 Nov 2025 • Réf: MOD/EQP/1112</p>
                            <h4 class="font-extrabold text-lg mb-2">Standardisation des communications</h4>
                            <p class="text-sm text-black/70 line-clamp-3">
                                Réduction des modèles, sécurisation, documentation et formation d’usage.
                            </p>
                            <div class="mt-4 flex items-center justify-between">
                                <span
                                    class="text-xs font-bold uppercase tracking-widest text-black/50">Spécifications</span>
                                <a href="#"
                                    class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                    →</a>
                            </div>
                        </div>
                    </article>

                    <!-- 3 -->
                    <article
                        class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                        data-title="Stocks stratégiques : pièces et consommables" data-date="2025-10-25" data-score="0">
                        <div class="relative h-44 overflow-hidden">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                                src="{{ asset('assets/soda-equipement.png') }}"
                                alt="Stocks">
                            <div
                                class="absolute top-4 left-4 bg-rdcGold text-ink text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Logistique
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">25 Oct 2025 • Réf: MOD/EQP/1025</p>
                            <h4 class="font-extrabold text-lg mb-2">Stocks stratégiques</h4>
                            <p class="text-sm text-black/70 line-clamp-3">
                                Constitution et rotation des stocks, traçabilité, normes et prévention des ruptures.
                            </p>
                            <div class="mt-4 flex items-center justify-between">
                                <span
                                    class="text-xs font-bold uppercase tracking-widest text-black/50">Traçabilité</span>
                                <a href="#"
                                    class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                    →</a>
                            </div>
                        </div>
                    </article>

                    <!-- 4 -->
                    <article
                        class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                        data-title="Modernisation des infrastructures de casernement" data-date="2025-10-08"
                        data-score="0">
                        <div class="relative h-44 overflow-hidden">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                                src="{{ asset('assets/kalemie-soda.jpg') }}"
                                alt="Casernement">
                            <div
                                class="absolute top-4 left-4 bg-rdcRed text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Infrastructures
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">08 Oct 2025 • Réf: MOD/EQP/1008</p>
                            <h4 class="font-extrabold text-lg mb-2">Casernement & conditions de vie</h4>
                            <p class="text-sm text-black/70 line-clamp-3">
                                Réhabilitation ciblée, eau/électricité, hygiène, sécurité et maintenance.
                            </p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs font-bold uppercase tracking-widest text-black/50">Travaux</span>
                                <a href="#"
                                    class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                    →</a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- SECTION : FORMATION (au moins 4) -->
                <div class="mb-8">
                    <h3 class="text-xl font-extrabold uppercase tracking-wide flex items-center gap-3">
                        <span class="w-2 h-7 bg-indigo-900 block"></span>
                        Formation
                    </h3>
                    <p class="mt-2 text-black/70 ml-5">Académies, spécialisations, doctrine, leadership et discipline.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- 1 -->
                    <article
                        class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                        data-title="Programme leadership & éthique de commandement" data-date="2025-11-21"
                        data-score="0">
                        <div class="relative h-44 overflow-hidden">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                                src="{{ asset('assets/ancien-combattant-2.jpg') }}"
                                alt="Leadership">
                            <div
                                class="absolute top-4 left-4 bg-indigo-900 text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Leadership
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">21 Nov 2025 • Réf: MOD/FORM/1121</p>
                            <h4 class="font-extrabold text-lg mb-2">Leadership & éthique</h4>
                            <p class="text-sm text-black/70 line-clamp-3">
                                Modules de commandement, décision sous pression, discipline et redevabilité.
                            </p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs font-bold uppercase tracking-widest text-black/50">Programme</span>
                                <a href="#"
                                    class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                    →</a>
                            </div>
                        </div>
                    </article>

                    <!-- 2 -->
                    <article
                        class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                        data-title="Formation technique : transmissions & cyber" data-date="2025-11-05" data-score="0">
                        <div class="relative h-44 overflow-hidden">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                                src="{{ asset('assets/garderep.jpg') }}"
                                alt="Cyber">
                            <div
                                class="absolute top-4 left-4 bg-rdcBlue text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Cyber
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">05 Nov 2025 • Réf: MOD/FORM/1105</p>
                            <h4 class="font-extrabold text-lg mb-2">Transmissions & cyber</h4>
                            <p class="text-sm text-black/70 line-clamp-3">
                                Durcissement des systèmes, bonnes pratiques, procédures et riposte.
                            </p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs font-bold uppercase tracking-widest text-black/50">Modules</span>
                                <a href="#"
                                    class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                    →</a>
                            </div>
                        </div>
                    </article>

                    <!-- 3 -->
                    <article
                        class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                        data-title="Instruction terrain : coordination inter-unités" data-date="2025-10-19"
                        data-score="0">
                        <div class="relative h-44 overflow-hidden">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                                src="{{ asset('assets/ancien-combattant-1.JPG') }}"
                                alt="Terrain">
                            <div
                                class="absolute top-4 left-4 bg-green-700 text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Terrain
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">19 Oct 2025 • Réf: MOD/FORM/1019</p>
                            <h4 class="font-extrabold text-lg mb-2">Instruction terrain</h4>
                            <p class="text-sm text-black/70 line-clamp-3">
                                Exercices de coordination, procédures communes et évaluation post-action.
                            </p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs font-bold uppercase tracking-widest text-black/50">Exercices</span>
                                <a href="#"
                                    class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                    →</a>
                            </div>
                        </div>
                    </article>

                    <!-- 4 -->
                    <article
                        class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                        data-title="Formation logistique : chaîne d’approvisionnement" data-date="2025-10-02"
                        data-score="0">
                        <div class="relative h-44 overflow-hidden">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                                src="{{ asset('assets/bcc_kin.jpg') }}"
                                alt="Logistique">
                            <div
                                class="absolute top-4 left-4 bg-rdcGold text-ink text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Logistique
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">02 Oct 2025 • Réf: MOD/FORM/1002</p>
                            <h4 class="font-extrabold text-lg mb-2">Chaîne d’approvisionnement</h4>
                            <p class="text-sm text-black/70 line-clamp-3">
                                Prévision, stockage, distribution, maintenance et audit de performance.
                            </p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs font-bold uppercase tracking-widest text-black/50">Cours</span>
                                <a href="#"
                                    class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                    →</a>
                            </div>
                        </div>
                    </article>

                </div>

            </div>
        </section>

        <!-- =========================
        TAB 3 : VÉTÉRANS (sections réinsertion & droits sociaux)
    ========================== -->
        <section id="section-veterans" class="proj-section hidden">


            <div class="max-w-7xl mx-auto px-4 lg:px-6 pt-12">
                <div class="max-w-4xl">
                    <h2 class="text-2xl font-extrabold uppercase tracking-wide flex items-center gap-3">
                        <span class="w-2 h-8 bg-rdcRed block"></span>
                        Vétérans
                    </h2>
                    <p class="mt-2 text-black/70 ml-5">
                        Reconnaissance, protection sociale, réinsertion économique et accompagnement humain.
                    </p>
                </div>
            </div>


            <div class="max-w-7xl mx-auto px-4 lg:px-6 py-12 fade-in">

                <!-- Projet le plus récent “différent” : mise en avant en 2 colonnes -->
                <article class="bg-white border border-black/10 shadow-soft overflow-hidden mb-10 project-card"
                    data-title="Carte vétéran : accès simplifié aux droits" data-date="2025-12-01" data-score="0">
                    <div class="grid lg:grid-cols-12">
                        <div class="lg:col-span-5 relative h-64 lg:h-full overflow-hidden">
                            <img class="w-full h-full object-cover object-center hover:scale-105 transition duration-500"
                                src="{{ asset('assets/ancien-combattant-3.jpg') }}"
                                alt="Carte vétéran">
                            <div
                                class="absolute top-4 left-4 bg-rdcRed text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Plus récent • Droits sociaux
                            </div>
                        </div>
                        <div class="lg:col-span-7 p-6 md:p-8">
                            <p class="text-xs font-mono text-black/50 mb-2">01 Déc 2025 • Réf: VET/DROITS/1201</p>
                            <h3 class="text-2xl font-extrabold mb-3">Carte Vétéran : accès simplifié aux droits</h3>
                            <p class="text-black/70 leading-relaxed line-clamp-6">
                                Mise en place d’une carte sécurisée permettant de simplifier l’accès aux droits sociaux
                                : soins,
                                priorités administratives, programmes de réinsertion, et dispositifs de soutien. Le
                                dossier inclut
                                l’architecture du registre, les protocoles de vérification, les mesures anti-fraude et
                                les mécanismes
                                de réclamation.
                            </p>

                            <div class="mt-6 grid sm:grid-cols-3 gap-4">
                                <div class="border-l-4 border-rdcRed pl-4">
                                    <p class="text-xs font-bold uppercase tracking-widest text-black/50">Rubriques</p>
                                    <p class="text-sm text-black/70">Éligibilité • Anti-fraude • Recours</p>
                                </div>
                                <div class="border-l-4 border-black/10 pl-4">
                                    <p class="text-xs font-bold uppercase tracking-widest text-black/50">Services</p>
                                    <p class="text-sm text-black/70">Santé • Allocations • Assistance</p>
                                </div>
                                <div class="border-l-4 border-black/10 pl-4">
                                    <p class="text-xs font-bold uppercase tracking-widest text-black/50">Déploiement</p>
                                    <p class="text-sm text-black/70">Pilote • Généralisation • Support</p>
                                </div>
                            </div>

                            <div class="mt-6 flex flex-wrap gap-3">
                                <button
                                    class="bg-rdcBlue text-white px-5 py-2 text-sm font-bold uppercase tracking-wide hover:bg-rdcBlue/90 transition">
                                    Voir le dossier
                                </button>
                                <button
                                    class="px-5 py-2 border border-black/10 text-sm font-semibold hover:bg-blue-100 transition">
                                    Télécharger formulaire
                                </button>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Réinsertion (4+) -->
                <div class="mb-8">
                    <h3 class="text-xl font-extrabold uppercase tracking-wide flex items-center gap-3">
                        <span class="w-2 h-7 bg-rdcGold block"></span>
                        Réinsertion
                    </h3>
                    <p class="mt-2 text-black/70 ml-5">Emploi, reconversion, entrepreneuriat et accompagnement.</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                    <article
                        class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                        data-title="Fonds d’appui à la reconversion" data-date="2025-11-26" data-score="0">
                        <div class="relative h-44 overflow-hidden">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                                src="{{ asset('assets/histo.jpeg') }}"
                                alt="Reconversion">
                            <div
                                class="absolute top-4 left-4 bg-rdcGold text-ink text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Reconversion
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">26 Nov 2025 • Réf: VET/REINS/1126</p>
                            <h4 class="font-extrabold text-lg mb-2">Fonds d’appui à la reconversion</h4>
                            <p class="text-sm text-black/70 line-clamp-3">
                                Micro-financements et accompagnement pour lancer ou renforcer une activité génératrice
                                de revenu.
                            </p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs font-bold uppercase tracking-widest text-black/50">Critères</span>
                                <a href="#"
                                    class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                    →</a>
                            </div>
                        </div>
                    </article>

                    <article
                        class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                        data-title="Programme formation métiers techniques" data-date="2025-11-09" data-score="0">
                        <div class="relative h-44 overflow-hidden">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                                src="{{ asset('assets/kalemie-soda.jpg') }}"
                                alt="Métiers">
                            <div
                                class="absolute top-4 left-4 bg-green-700 text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Métiers
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">09 Nov 2025 • Réf: VET/REINS/1109</p>
                            <h4 class="font-extrabold text-lg mb-2">Formation métiers techniques</h4>
                            <p class="text-sm text-black/70 line-clamp-3">
                                Mécanique, soudure, électricité, sécurité, logistique : certifications et insertion.
                            </p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs font-bold uppercase tracking-widest text-black/50">Centres</span>
                                <a href="#"
                                    class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                    →</a>
                            </div>
                        </div>
                    </article>

                    <article
                        class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                        data-title="Partenariats entreprises : recrutement vétérans" data-date="2025-10-20"
                        data-score="0">
                        <div class="relative h-44 overflow-hidden">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                                src="{{ asset('assets/ancien-combattant-2.jpg') }}"
                                alt="Emploi">
                            <div
                                class="absolute top-4 left-4 bg-rdcBlue text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Emploi
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">20 Oct 2025 • Réf: VET/REINS/1020</p>
                            <h4 class="font-extrabold text-lg mb-2">Recrutement via entreprises</h4>
                            <p class="text-sm text-black/70 line-clamp-3">
                                Accords avec entreprises : quotas, formation, mentorat et suivi post-recrutement.
                            </p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs font-bold uppercase tracking-widest text-black/50">Accords</span>
                                <a href="#"
                                    class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                    →</a>
                            </div>
                        </div>
                    </article>

                    <article
                        class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                        data-title="Cellules d’accompagnement psychosocial" data-date="2025-10-04" data-score="0">
                        <div class="relative h-44 overflow-hidden">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                                src="{{ asset('assets/ancien-combattant-3.jpg') }}"
                                alt="Accompagnement">
                            <div
                                class="absolute top-4 left-4 bg-rdcRed text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Soutien
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">04 Oct 2025 • Réf: VET/REINS/1004</p>
                            <h4 class="font-extrabold text-lg mb-2">Accompagnement psychosocial</h4>
                            <p class="text-sm text-black/70 line-clamp-3">
                                Soutien psychologique, suivi, médiation familiale, réorientation et assistance.
                            </p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs font-bold uppercase tracking-widest text-black/50">Réseau</span>
                                <a href="#"
                                    class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                    →</a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Droits sociaux (4+) -->
                <div class="mb-8">
                    <h3 class="text-xl font-extrabold uppercase tracking-wide flex items-center gap-3">
                        <span class="w-2 h-7 bg-ink block"></span>
                        Droits sociaux
                    </h3>
                    <p class="mt-2 text-black/70 ml-5">Pensions, santé, accès prioritaire et défense des droits.</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <article
                        class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                        data-title="Modernisation des pensions" data-date="2025-11-18" data-score="0">
                        <div class="relative h-44 overflow-hidden">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                                src="{{ asset('assets/histo.jpeg') }}"
                                alt="Pensions">
                            <div
                                class="absolute top-4 left-4 bg-ink text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Pensions
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">18 Nov 2025 • Réf: VET/DROITS/1118</p>
                            <h4 class="font-extrabold text-lg mb-2">Modernisation des pensions</h4>
                            <p class="text-sm text-black/70 line-clamp-3">
                                Simplification, réduction des délais, contrôles et transparence des paiements.
                            </p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs font-bold uppercase tracking-widest text-black/50">Procédure</span>
                                <a href="#"
                                    class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                    →</a>
                            </div>
                        </div>
                    </article>

                    <article
                        class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                        data-title="Parcours santé prioritaire" data-date="2025-10-28" data-score="0">
                        <div class="relative h-44 overflow-hidden">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                                src="{{ asset('assets/ancien-combattant-1.JPG') }}"
                                alt="Santé">
                            <div
                                class="absolute top-4 left-4 bg-rdcRed text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Santé
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">28 Oct 2025 • Réf: VET/DROITS/1028</p>
                            <h4 class="font-extrabold text-lg mb-2">Parcours santé prioritaire</h4>
                            <p class="text-sm text-black/70 line-clamp-3">
                                Accès prioritaire, orientation, prise en charge et partenariat avec structures dédiées.
                            </p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs font-bold uppercase tracking-widest text-black/50">Centres</span>
                                <a href="#"
                                    class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                    →</a>
                            </div>
                        </div>
                    </article>

                    <article
                        class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                        data-title="Guichet unique vétérans" data-date="2025-10-12" data-score="0">
                        <div class="relative h-44 overflow-hidden">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                                src="{{ asset('assets/garderep.jpg') }}"
                                alt="Guichet">
                            <div
                                class="absolute top-4 left-4 bg-rdcGold text-ink text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Accès
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">12 Oct 2025 • Réf: VET/DROITS/1012</p>
                            <h4 class="font-extrabold text-lg mb-2">Guichet unique</h4>
                            <p class="text-sm text-black/70 line-clamp-3">
                                Accueil, orientation, suivi de dossier, recours et assistance administrative.
                            </p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs font-bold uppercase tracking-widest text-black/50">Services</span>
                                <a href="#"
                                    class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                    →</a>
                            </div>
                        </div>
                    </article>

                    <article
                        class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                        data-title="Observatoire des droits & médiation" data-date="2025-09-30" data-score="0">
                        <div class="relative h-44 overflow-hidden">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                                src="{{ asset('assets/ancien-combattant-2.jpg') }}"
                                alt="Médiation">
                            <div
                                class="absolute top-4 left-4 bg-ink text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Médiation
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">30 Sep 2025 • Réf: VET/DROITS/0930</p>
                            <h4 class="font-extrabold text-lg mb-2">Observatoire & médiation</h4>
                            <p class="text-sm text-black/70 line-clamp-3">
                                Collecte des signalements, médiation, recommandations et publications régulières.
                            </p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs font-bold uppercase tracking-widest text-black/50">Rapports</span>
                                <a href="#"
                                    class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                    →</a>
                            </div>
                        </div>
                    </article>
                </div>

            </div>
        </section>

        <!-- =========================
        TAB 4 : COOPÉRATION (sections partenariats & stabilité régionale)
    ========================== -->
        <section id="section-cooperation" class="proj-section hidden">


            <div class="max-w-7xl mx-auto px-4 lg:px-6 pt-12">
                <div class="max-w-4xl">
                    <h2 class="text-2xl font-extrabold uppercase tracking-wide flex items-center gap-3">
                        <span class="w-2 h-8 bg-rdcBlue block"></span>
                        Coopération
                    </h2>
                    <p class="mt-2 text-black/70 ml-5">
                        Partenariats, coordination sécuritaire, stabilité régionale et initiatives de confiance.
                    </p>
                </div>
            </div>


            <div class="max-w-7xl mx-auto px-4 lg:px-6 py-12 fade-in">

                <!-- Projet le plus récent “différent” : encart + liste de rubriques -->
                <article class="bg-white border border-black/10 shadow-soft p-6 md:p-8 mb-10 project-card"
                    data-title="Mécanisme conjoint de partage d’information" data-date="2025-12-02" data-score="0">
                    <div class="flex flex-col lg:flex-row gap-8">
                        <div class="lg:w-2/5 relative h-56 lg:h-auto overflow-hidden border border-black/10">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                                src="{{ asset('assets/kalemie-soda.jpg') }}"
                                alt="Coopération">
                            <div
                                class="absolute top-4 left-4 bg-rdcBlue text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Plus récent • Stabilité régionale
                            </div>
                        </div>

                        <div class="flex-1">
                            <p class="text-xs font-mono text-black/50 mb-2">02 Déc 2025 • Réf: COOP/INFO/1202</p>
                            <h3 class="text-2xl font-extrabold mb-3">Mécanisme conjoint de partage d’information</h3>
                            <p class="text-black/70 leading-relaxed line-clamp-6">
                                Création d’un mécanisme technique de partage d’informations pour améliorer la
                                prévention, la
                                coordination et la confiance entre partenaires. Le dossier inclut : protocole de
                                classification,
                                canaux sécurisés, procédures d’alerte, et gouvernance des échanges.
                            </p>

                            <div class="mt-5 grid sm:grid-cols-2 gap-4">
                                <div class="bg-cream2 border border-black/10 p-4">
                                    <p class="text-xs font-bold uppercase tracking-widest text-black/50">Rubriques</p>
                                    <ul class="mt-2 text-sm text-black/70 space-y-1">
                                        <li>• Protocole de classification</li>
                                        <li>• Procédures d’alerte</li>
                                        <li>• Audit & conformité</li>
                                    </ul>
                                </div>
                                <div class="bg-cream2 border border-black/10 p-4">
                                    <p class="text-xs font-bold uppercase tracking-widest text-black/50">Livrables</p>
                                    <ul class="mt-2 text-sm text-black/70 space-y-1">
                                        <li>• Note cadre (PDF)</li>
                                        <li>• Catalogue d’incidents</li>
                                        <li>• Calendrier de réunions</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="mt-6 flex flex-wrap gap-3">
                                <button
                                    class="bg-rdcBlue text-white px-5 py-2 text-sm font-bold uppercase tracking-wide hover:bg-rdcBlue/90 transition">
                                    Voir le dossier
                                </button>
                                <button
                                    class="px-5 py-2 border border-black/10 text-sm font-semibold hover:bg-blue-100 transition">
                                    Demander une réunion
                                </button>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- PARTENARIATS (4+) -->
                <div class="mb-8">
                    <h3 class="text-xl font-extrabold uppercase tracking-wide flex items-center gap-3">
                        <span class="w-2 h-7 bg-rdcGold block"></span>
                        Partenariats
                    </h3>
                    <p class="mt-2 text-black/70 ml-5">Accords techniques, formation conjointe, appui logistique.</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                    <article
                        class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                        data-title="Programme d’échanges et formations conjointes" data-date="2025-11-14"
                        data-score="0">
                        <div class="relative h-44 overflow-hidden">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                                src="{{ asset('assets/histo.jpeg') }}"
                                alt="Échanges">
                            <div
                                class="absolute top-4 left-4 bg-rdcGold text-ink text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Formation
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">14 Nov 2025 • Réf: COOP/PART/1114</p>
                            <h4 class="font-extrabold text-lg mb-2">Échanges & formations conjointes</h4>
                            <p class="text-sm text-black/70 line-clamp-3">
                                Modules d’échange, visites techniques, retour d’expérience et standardisation.
                            </p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs font-bold uppercase tracking-widest text-black/50">Accords</span>
                                <a href="#"
                                    class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                    →</a>
                            </div>
                        </div>
                    </article>

                    <article
                        class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                        data-title="Interopérabilité communications : protocole commun" data-date="2025-10-29"
                        data-score="0">
                        <div class="relative h-44 overflow-hidden">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                                src="{{ asset('assets/ancien-combattant-1.JPG') }}"
                                alt="Interop">
                            <div
                                class="absolute top-4 left-4 bg-ink text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Interop
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">29 Oct 2025 • Réf: COOP/PART/1029</p>
                            <h4 class="font-extrabold text-lg mb-2">Protocole commun de communication</h4>
                            <p class="text-sm text-black/70 line-clamp-3">
                                Harmonisation et sécurisation des échanges : procédures, nomenclatures, audits.
                            </p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs font-bold uppercase tracking-widest text-black/50">Protocole</span>
                                <a href="#"
                                    class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                    →</a>
                            </div>
                        </div>
                    </article>

                    <article
                        class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                        data-title="Logistique : corridor d’appui humanitaire" data-date="2025-10-07" data-score="0">
                        <div class="relative h-44 overflow-hidden">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                                src="{{ asset('assets/ancien-combattant-1.JPG') }}"
                                alt="Corridor">
                            <div
                                class="absolute top-4 left-4 bg-green-700 text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Humanitaire
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">07 Oct 2025 • Réf: COOP/PART/1007</p>
                            <h4 class="font-extrabold text-lg mb-2">Corridor d’appui humanitaire</h4>
                            <p class="text-sm text-black/70 line-clamp-3">
                                Appui logistique coordonné, stockage, distribution et sécurité des flux.
                            </p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs font-bold uppercase tracking-widest text-black/50">Plan</span>
                                <a href="#"
                                    class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                    →</a>
                            </div>
                        </div>
                    </article>

                    <article
                        class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                        data-title="Renforcement technique : maintenance & ateliers" data-date="2025-09-24"
                        data-score="0">
                        <div class="relative h-44 overflow-hidden">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                                src="{{ asset('assets/ancien-combattant-2.jpg') }}"
                                alt="Ateliers">
                            <div
                                class="absolute top-4 left-4 bg-rdcBlue text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Technique
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">24 Sep 2025 • Réf: COOP/PART/0924</p>
                            <h4 class="font-extrabold text-lg mb-2">Maintenance & ateliers</h4>
                            <p class="text-sm text-black/70 line-clamp-3">
                                Transfert de compétences, standards, outillage et procédures de qualité.
                            </p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs font-bold uppercase tracking-widest text-black/50">Dossier</span>
                                <a href="#"
                                    class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                    →</a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- STABILITÉ RÉGIONALE (4+) -->
                <div class="mb-8">
                    <h3 class="text-xl font-extrabold uppercase tracking-wide flex items-center gap-3">
                        <span class="w-2 h-7 bg-rdcRed block"></span>
                        Stabilité régionale
                    </h3>
                    <p class="mt-2 text-black/70 ml-5">Prévention, mécanismes conjoints, confiance et coordination.</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <article
                        class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                        data-title="Cadre de dialogue transfrontalier" data-date="2025-11-02" data-score="0">
                        <div class="relative h-44 overflow-hidden">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                                src="{{ asset('assets/kalemie-soda.jpg') }}"
                                alt="Dialogue">
                            <div
                                class="absolute top-4 left-4 bg-rdcRed text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Dialogue
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">02 Nov 2025 • Réf: COOP/STAB/1102</p>
                            <h4 class="font-extrabold text-lg mb-2">Cadre de dialogue transfrontalier</h4>
                            <p class="text-sm text-black/70 line-clamp-3">
                                Réunions périodiques, prévention des incidents, mécanismes d’alerte et médiation.
                            </p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs font-bold uppercase tracking-widest text-black/50">Agenda</span>
                                <a href="#"
                                    class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                    →</a>
                            </div>
                        </div>
                    </article>

                    <article
                        class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                        data-title="Plan de réduction des incidents" data-date="2025-10-16" data-score="0">
                        <div class="relative h-44 overflow-hidden">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                                src="{{ asset('assets/garderep.jpg') }}"
                                alt="Incidents">
                            <div
                                class="absolute top-4 left-4 bg-ink text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Prévention
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">16 Oct 2025 • Réf: COOP/STAB/1016</p>
                            <h4 class="font-extrabold text-lg mb-2">Réduction des incidents</h4>
                            <p class="text-sm text-black/70 line-clamp-3">
                                Standardisation, procédures, réponse graduée et reporting commun.
                            </p>
                            <div class="mt-4 flex items-center justify-between">
                                <span
                                    class="text-xs font-bold uppercase tracking-widest text-black/50">Procédures</span>
                                <a href="#"
                                    class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                    →</a>
                            </div>
                        </div>
                    </article>

                    <article
                        class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                        data-title="Dispositif de confiance et transparence" data-date="2025-09-28" data-score="0">
                        <div class="relative h-44 overflow-hidden">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                                src="{{ asset('assets/ancien-combattant-2.jpg') }}"
                                alt="Confiance">
                            <div
                                class="absolute top-4 left-4 bg-rdcGold text-ink text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Confiance
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">28 Sep 2025 • Réf: COOP/STAB/0928</p>
                            <h4 class="font-extrabold text-lg mb-2">Confiance & transparence</h4>
                            <p class="text-sm text-black/70 line-clamp-3">
                                Points de contact, comptes rendus, vérification et mécanismes de recours.
                            </p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs font-bold uppercase tracking-widest text-black/50">Cadre</span>
                                <a href="#"
                                    class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                    →</a>
                            </div>
                        </div>
                    </article>

                    <article
                        class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden"
                        data-title="Exercices conjoints de gestion de crise" data-date="2025-09-10" data-score="0">
                        <div class="relative h-44 overflow-hidden">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-500"
                                src="{{ asset('assets/ancien-combattant-1.JPG') }}"
                                alt="Crise">
                            <div
                                class="absolute top-4 left-4 bg-green-700 text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                Crise
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">10 Sep 2025 • Réf: COOP/STAB/0910</p>
                            <h4 class="font-extrabold text-lg mb-2">Exercices de crise</h4>
                            <p class="text-sm text-black/70 line-clamp-3">
                                Scénarios, coordination, communications, retours d’expérience et mise à jour des plans.
                            </p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-xs font-bold uppercase tracking-widest text-black/50">Scénarios</span>
                                <a href="#"
                                    class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir
                                    →</a>
                            </div>
                        </div>
                    </article>
                </div>

            </div>
        </section>

    </main>

    @include('partials.footer')



    <script>
    const activeSection = document.getElementById(`section-${tab}`);
    const activeBtn = document.getElementById(`tab-${tab}`);

    if (activeSection) {
        activeSection.classList.remove("hidden");
        activeSection.classList.remove("fade-in");
        void activeSection.offsetWidth; // reset animation
        activeSection.classList.add("fade-in");
    }
    if (activeBtn) activeBtn.classList.add("active");

    // réapplique recherche/tri sur la nouvelle section
    applySearch();
    applySort(true);
    if (window.scrollY > 240) window.scrollTo({
        top: 240,
        behavior: "smooth"
    });
    }

    // Likes / score (maquette)
    function likeProject(e) {
        e.preventDefault();
        const btn = e.currentTarget;
        const targetId = btn.getAttribute("data-like");
        const counter = document.getElementById(targetId);
        if (!counter) return;

        // toggle “liked”
        const liked = btn.getAttribute("data-liked") === "1";
        let val = parseInt(counter.textContent.trim(), 10);
        if (Number.isNaN(val)) val = 0;

        if (liked) {
            val = Math.max(0, val - 1);
            btn.setAttribute("data-liked", "0");
            btn.classList.remove("bg-rdcBlue", "text-white", "border-rdcBlue");
            btn.classList.add("bg-white");
        } else {
            val += 1;
            btn.setAttribute("data-liked", "1");
            btn.classList.add("bg-rdcBlue", "text-white", "border-rdcBlue");
            btn.classList.remove("bg-white");
        }

        counter.textContent = String(val);

        // Met aussi à jour data-score sur la carte si présente (pour tri score)
        const card = btn.closest(".project-card");
        if (card) card.setAttribute("data-score", String(val));
    }

    // Recherche (sur section active uniquement)
    function getActiveSection() {
        return document.querySelector(".proj-section:not(.hidden)");
    }

    function applySearch() {
        const q = (document.getElementById("searchInput").value || "").toLowerCase().trim();
        const section = getActiveSection();
        if (!section) return;

        const cards = section.querySelectorAll(".project-card");
        cards.forEach(card => {
            const title = (card.getAttribute("data-title") || card.innerText || "").toLowerCase();
            const match = !q || title.includes(q);
            card.style.display = match ? "" : "none";
        });
    }

    // Tri (maquette : recent / score / alpha)
    function applySort(skipResortHidden = false) {
        const mode = document.getElementById("sortSelect").value;
        const section = getActiveSection();
        if (!section) return;

        // Tri seulement des conteneurs grids (id prioGrid + tous les .grid qu'on veut trier)
        // Ici: on trie uniquement les grids qui ont des project-card directes
        const grids = section.querySelectorAll(".grid");
        grids.forEach(grid => {
            const cards = Array.from(grid.children).filter(el => el.classList && el.classList.contains(
                "project-card"));
            if (cards.length < 2) return;

            // Ne trier que les éléments visibles si on veut, mais on garde simple.
            cards.sort((a, b) => {
                if (mode === "alpha") {
                    return (a.getAttribute("data-title") || "").localeCompare(b.getAttribute(
                        "data-title") || "");
                }
                if (mode === "score") {
                    const sa = parseInt(a.getAttribute("data-score") || "0", 10) || 0;
                    const sb = parseInt(b.getAttribute("data-score") || "0", 10) || 0;
                    return sb - sa;
                }
                // recent
                const da = new Date(a.getAttribute("data-date") || "1970-01-01").getTime();
                const db = new Date(b.getAttribute("data-date") || "1970-01-01").getTime();
                return db - da;
            });

            cards.forEach(c => grid.appendChild(c));
        });

        // Refiltre après tri
        applySearch();
    }

    // Init: tri + recherche
    applySort(true);
    applySearch();
    </script>

</body>

</html>