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
            @if($groupedActualites['latest_per_category']->count() > 0)
                @php $featured = $groupedActualites['latest_per_category']->shift(); @endphp
                <article class="bg-white border border-black/10 shadow-soft overflow-hidden mb-10">
                    <div class="grid lg:grid-cols-12">
                        <div class="lg:col-span-5 relative h-64 lg:h-full overflow-hidden">
                            <img src="{{ (\Illuminate\Support\Str::startsWith($featured->image, ['http://','https://']) ? $featured->image : asset('storage/' . $featured->image)) }}" alt="{{ $featured->title }}"
                                class="w-full h-full object-cover object-center hover:scale-105 transition duration-500">
                            <div
                                class="absolute top-4 left-4 bg-rdcGold text-ink text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                À la une • {{ $featured->categorie->name ?? 'N/A' }}
                            </div>
                        </div>

                        <div class="lg:col-span-7 p-6 md:p-8">
                            <div class="flex items-start justify-between gap-4">
                                <div>
                                    <p class="text-xs font-mono text-black/50 mb-2">Communiqué • {{ $featured->published_at->format('d M Y') }}</p>
                                    <h3 class="text-2xl font-extrabold leading-tight">
                                        {{ $featured->title }}
                                    </h3>
                                    <p class="mt-3 text-black/70 leading-relaxed line-clamp-6">
                                        {{ Str::limit(strip_tags($featured->content), 300) }}
                                    </p>
                                </div>

                                <!-- Indicateurs “backend” -->
                                <div class="shrink-0 text-right">
                                    <p class="text-[10px] font-bold uppercase tracking-widest text-black/50">Indicateurs</p>
                                    <div class="mt-2 space-y-2">
                                        <div class="bg-cream2 border border-black/10 px-3 py-2">
                                            <p class="text-[10px] text-black/50 uppercase tracking-widest">Lectures</p>
                                            <p class="font-mono text-sm font-bold text-ink">{{ $featured->views }}</p>
                                        </div>
                                        <div class="bg-cream2 border border-black/10 px-3 py-2">
                                            <p class="text-[10px] text-black/50 uppercase tracking-widest">Partages</p>
                                            <p class="font-mono text-sm font-bold text-ink">{{ $featured->shares }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6 flex flex-wrap items-center gap-3">
                                <a href="{{ route('actualites.show', $featured) }}"
                                    class="bg-rdcBlue text-white px-5 py-2 text-sm font-bold uppercase tracking-wide hover:bg-rdcBlue/90 transition">
                                    Lire le dossier complet
                                </a>
                                <a href="#" class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">
                                    Voir plus →
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            @endif

            <!-- Grille de news (4+) -->
            <h3 class="text-xl font-extrabold uppercase tracking-wide flex items-center gap-3 mb-6">
                <span class="w-2 h-7 bg-rdcBlue block"></span>
                Dernières publications par catégories
            </h3>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($groupedActualites['latest_per_category'] as $actualite)
                <article
                    class="bg-white overflow-hidden border border-black/10 shadow-soft hover:-translate-y-1 transition group">
                    <div class="relative h-48 w-full overflow-hidden">
                        <img src="{{ (\Illuminate\Support\Str::startsWith($actualite->image, ['http://','https://']) ? $actualite->image : asset('storage/' . $actualite->image)) }}" alt="{{ $actualite->title }}"
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition duration-500">
                        <div
                            class="absolute top-4 left-4 bg-rdcGold text-ink text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                            {{ $actualite->categorie->name ?? 'N/A' }}
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-xs font-mono text-black/50 mb-2">{{ $actualite->published_at->format('d M Y') }}</p>
                        <h3 class="font-extrabold text-lg leading-tight mb-3 group-hover:text-rdcBlue transition">
                            {{ $actualite->title }}
                        </h3>
                        <p class="text-sm text-black/70 line-clamp-3">
                            {{ Str::limit(strip_tags($actualite->content), 100) }}
                        </p>

                        <div class="mt-4 flex items-center justify-between">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-black/50">Article</span>
                            <a href="{{ route('actualites.show', $actualite) }}"
                                class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Lire →</a>
                        </div>
                    </div>
                </article>
                @empty
                <p class="col-span-full text-center text-black/60">Aucune actualité récente par catégorie n'est disponible.</p>
                @endforelse
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
        <section id="section-operations" class="content-section bg-cream2 border-y border-black/10 hidden">
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
                                <p class="text-3xl font-extrabold mt-2">{{ $groupedActualites['operations']->count() }}</p>
                                <p class="text-xs text-black/50 mt-1">Suivi hebdomadaire</p>
                            </div>
                            <div class="bg-white border border-black/10 shadow-soft p-4">
                                <p class="text-xs font-bold uppercase tracking-widest text-black/50">Publications</p>
                                <p class="text-3xl font-extrabold mt-2">{{ $groupedActualites['operations']->count() }}</p>
                                <p class="text-xs text-black/50 mt-1">Toutes les publications</p>
                            </div>
                            <div class="bg-white border border-black/10 shadow-soft p-4">
                                <p class="text-xs font-bold uppercase tracking-widest text-black/50">Rapports publiés</p>
                                <p class="text-3xl font-extrabold mt-2">{{ $groupedActualites['operations']->count() }}</p>
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

                <!-- Grille (au moins 4) -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse($groupedActualites['operations'] as $actualite)
                    <article class="bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden group">
                        <div class="relative h-44 overflow-hidden">
                            <img src="{{ (\Illuminate\Support\Str::startsWith($actualite->image, ['http://','https://']) ? $actualite->image : asset('storage/' . $actualite->image)) }}" alt="{{ $actualite->title }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            <div class="absolute top-4 left-4 bg-green-700 text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                {{ $actualite->categorie->name ?? 'N/A' }}
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">{{ $actualite->published_at->format('d M Y') }}</p>
                            <h3 class="font-extrabold text-lg mb-2 group-hover:text-green-700 transition">{{ $actualite->title }}</h3>
                            <p class="text-sm text-black/70 line-clamp-3">{{ Str::limit(strip_tags($actualite->content), 100) }}</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-[10px] font-bold uppercase tracking-widest text-black/50">Rapport</span>
                                <a href="{{ route('actualites.show', $actualite) }}" class="text-sm font-bold text-rdcBlue underline decoration-2 underline-offset-4">Voir →</a>
                            </div>
                        </div>
                    </article>
                    @empty
                    <p class="col-span-full text-center text-black/60">Aucune opération n'est disponible.</p>
                    @endforelse
                </div>

            </div>
        </section>

        <!-- SECTION 3 : DISCOURS  -->
        <section id="section-discours" class="content-section max-w-7xl mx-auto px-4 lg:px-6 py-12 hidden">

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
                            <p class="text-3xl font-extrabold mt-2">{{ $groupedActualites['discours']->count() }}</p>
                            <p class="text-xs text-black/50 mt-1">Transcriptions</p>
                        </div>
                        <div class="bg-white border border-black/10 shadow-soft p-4">
                            <p class="text-xs font-bold uppercase tracking-widest text-black/50">Vidéos</p>
                            <p class="text-3xl font-extrabold mt-2">{{ $groupedActualites['discours']->where('type', 'video')->count() }}</p>
                            <p class="text-xs text-black/50 mt-1">Conférences & cérémonies</p>
                        </div>
                        <div class="bg-white border border-black/10 shadow-soft p-4">
                            <p class="text-xs font-bold uppercase tracking-widest text-black/50">Interviews</p>
                            <p class="text-3xl font-extrabold mt-2">{{ $groupedActualites['discours']->where('type', 'interview')->count() }}</p>
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
                @if($groupedActualites['discours']->count() > 0)
                    @php $featuredDiscours = $groupedActualites['discours']->shift(); @endphp
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
                            <h3 class="text-2xl md:text-3xl font-extrabold mb-4 leading-tight">
                                {{ $featuredDiscours->title }}
                            </h3>
                            <p class="text-white/70 mb-6 line-clamp-6">
                                {{ Str::limit(strip_tags($featuredDiscours->content), 300) }}
                            </p>

                            <div class="grid sm:grid-cols-3 gap-4 mb-6">
                                <div class="border-l-4 border-rdcGold pl-4">
                                    <p class="text-xs font-bold uppercase tracking-widest text-white/70">Contexte</p>
                                    <p class="text-sm text-white/80 mt-1">{{ $featuredDiscours->categorie->name ?? 'N/A' }}</p>
                                </div>
                                <div class="border-l-4 border-white/20 pl-4">
                                    <p class="text-xs font-bold uppercase tracking-widest text-white/70">Formats</p>
                                    <p class="text-sm text-white/80 mt-1">Texte • Vidéo • Photos</p>
                                </div>
                                <div class="border-l-4 border-white/20 pl-4">
                                    <p class="text-xs font-bold uppercase tracking-widest text-white/70">Date</p>
                                    <p class="text-sm text-white/80 mt-1">{{ $featuredDiscours->published_at->format('d M Y') }}</p>
                                </div>
                            </div>

                            <div class="flex flex-wrap items-center gap-4">
                                <a href="{{ route('actualites.show', $featuredDiscours) }}"
                                    class="bg-white text-ink px-5 py-2 text-sm font-bold uppercase tracking-wide hover:bg-cream transition">Lire
                                    le texte</a>
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
                                <a href="{{ route('actualites.show', $featuredDiscours) }}" class="text-sm font-bold underline decoration-2 underline-offset-4 text-rdcGold">
                                    Voir dossier média →
                                </a>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Liste autres discours (améliorée) -->
                <div class="flex flex-col gap-4">
                    @forelse($groupedActualites['discours'] as $actualite)
                    <div class="bg-white border border-black/10 shadow-soft p-5 hover:shadow-lg transition cursor-pointer">
                        <div class="flex items-center justify-between">
                            <p class="text-xs text-black/50 font-mono">{{ $actualite->categorie->name ?? 'N/A' }} • {{ $actualite->published_at->format('d M Y') }}</p>
                            <span class="text-[10px] font-bold uppercase tracking-widest bg-indigo-50 text-indigo-900 px-2 py-1">{{ $actualite->type ?? 'Transcription' }}</span>
                        </div>
                        <h4 class="font-extrabold text-lg text-ink mt-2">{{ $actualite->title }}</h4>
                        <p class="text-sm text-black/70 mt-2 line-clamp-2">
                            {{ Str::limit(strip_tags($actualite->content), 100) }}
                        </p>
                        <a href="{{ route('actualites.show', $actualite) }}" class="text-sm text-rdcBlue font-bold mt-3 inline-block underline decoration-2 underline-offset-4">Lire →</a>
                    </div>
                    @empty
                    <p class="col-span-full text-center text-black/60">Aucun discours n'est disponible.</p>
                    @endforelse
                </div>

            </div>
        </section>

        <!-- SECTION 4 : ANNONCES -->
        <section id="section-annonces" class="content-section bg-cream2 border-y border-black/10 hidden">
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
                                <p class="text-3xl font-extrabold mt-2">{{ $groupedActualites['annonces']->count() }}</p>
                                <p class="text-xs text-black/50 mt-1">À déposer / postuler</p>
                            </div>
                            <div class="bg-white border border-black/10 shadow-soft p-4">
                                <p class="text-xs font-bold uppercase tracking-widest text-black/50">Publications</p>
                                <p class="text-3xl font-extrabold mt-2">{{ $groupedActualites['annonces']->count() }}</p>
                                <p class="text-xs text-black/50 mt-1">Toutes les publications</p>
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
                    @forelse($groupedActualites['annonces'] as $actualite)
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
                                    class="inline-block bg-rdcRed/10 text-rdcRed text-[10px] font-bold px-2 py-0.5 rounded uppercase tracking-wider">{{ $actualite->categorie->name ?? 'N/A' }}</span>
                                <span class="text-xs text-black/50 font-mono">{{ $actualite->reference ?? '' }}</span>
                            </div>
                            <h3 class="font-extrabold text-lg leading-tight">{{ $actualite->title }}</h3>
                            <p class="text-sm text-black/70 mt-1 line-clamp-3">
                                {{ Str::limit(strip_tags($actualite->content), 150) }}
                            </p>
                            <div class="mt-3 flex flex-wrap gap-2">
                                <span class="text-[10px] font-bold uppercase tracking-widest px-2 py-1 bg-cream2 border border-black/10">PDF</span>
                                {{-- Add more tags if actualite has a tags or types field --}}
                            </div>
                            <p class="text-xs text-black/50 mt-2">Publié le {{ $actualite->published_at->format('d M Y') }}</p>
                        </div>
                        <a href="{{ route('actualites.show', $actualite) }}"
                            class="mt-2 md:mt-0 px-4 py-2 border border-black/10 text-sm font-semibold hover:bg-black/5 transition whitespace-nowrap">
                            Télécharger PDF
                        </a>
                    </div>
                    @empty
                    <p class="col-span-full text-center text-black/60">Aucune annonce n'est disponible.</p>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- SECTION 5 : DECISIONS -->
        <section id="section-decisions" class="content-section max-w-7xl mx-auto px-4 lg:px-6 py-12 hidden">
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
                            <p class="text-3xl font-extrabold mt-2">{{ $groupedActualites['decisions']->count() }}</p>
                            <p class="text-xs text-black/50 mt-1">2025</p>
                        </div>
                        <div class="bg-white border border-black/10 shadow-soft p-4">
                            <p class="text-xs font-bold uppercase tracking-widest text-black/50">Publications</p>
                            <p class="text-3xl font-extrabold mt-2">{{ $groupedActualites['decisions']->count() }}</p>
                            <p class="text-xs text-black/50 mt-1">Toutes les publications</p>
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
                @forelse($groupedActualites['decisions'] as $actualite)
                <div class="bg-white group block border border-black/10 p-6 hover:shadow-soft transition-all duration-300 relative">
                    <div class="flex items-start justify-between mb-4">
                        <div class="inline-flex items-center px-2 py-1 bg-ink text-white text-[10px] font-bold uppercase tracking-widest">
                            {{ $actualite->categorie->name ?? 'Décision' }}
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="w-5 h-5 text-black/30 group-hover:text-rdcBlue transition-colors">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>
                    </div>
                    <h3 class="font-extrabold text-lg mb-2 group-hover:text-rdcBlue transition-colors">
                        {{ $actualite->title }}
                    </h3>
                    <p class="text-sm text-black/70 line-clamp-3">
                        {{ Str::limit(strip_tags($actualite->content), 150) }}
                    </p>
                    <div class="mt-4 pt-4 border-t border-black/5 flex items-center justify-between text-xs text-black/50">
                        <span class="font-mono">{{ $actualite->published_at->format('d M Y') }}</span>
                        <span class="uppercase tracking-wide font-semibold text-black/70">PDF • {{ $actualite->file_size ?? 'N/A' }}</span>
                    </div>
                    <a href="{{ route('actualites.show', $actualite) }}" class="absolute inset-0 z-10" aria-label="Télécharger"></a>
                </div>
                @empty
                <p class="col-span-full text-center text-black/60">Aucune décision n'est disponible.</p>
                @endforelse
            </div>
        </section>

    </main>
</body>

</html>
