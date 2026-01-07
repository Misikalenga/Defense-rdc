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

        @if(isset($groupedProjets['priorite']))
        <section id="section-priorite" class="proj-section max-w-7xl mx-auto px-4 lg:px-6 py-12 fade-in">
            <div class="grid lg:grid-cols-12 gap-8 items-start mb-10">
                <div class="lg:col-span-8">
                    <h2 class="text-2xl md:text-3xl font-extrabold uppercase tracking-wide flex items-center gap-3">
                        <span class="w-2 h-10 bg-rdcGold block"></span>
                        Priorité 2026
                    </h2>
                    <p class="mt-3 text-black/70 text-lg leading-relaxed">
                        Feuille de route opérationnelle : projets à impact immédiat, indicateurs de suivi, calendrier prévisionnel et mécanismes d’accountability.
                    </p>
                </div>
            </div>

            @php
                $allPrioriteProjects = $groupedProjets['priorite']->flatten()->sortByDesc('published_at');
                $latestPriorite = $allPrioriteProjects->shift();
            @endphp

            @if($latestPriorite)
            <article class="bg-white border border-black/10 shadow-soft overflow-hidden mb-10" data-title="{{ $latestPriorite->title }}">
                <div class="grid lg:grid-cols-12">
                    <div class="lg:col-span-5 relative h-64 lg:h-full overflow-hidden">
                        <img src="{{ $latestPriorite->image ? asset($latestPriorite->image) : 'https://via.placeholder.com/800x600' }}" alt="{{ $latestPriorite->title }}" class="w-full h-full object-cover object-center hover:scale-105 transition duration-500">
                        <div class="absolute top-4 left-4 bg-rdcGold text-ink text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                            Plus récent • Dossier prioritaire
                        </div>
                    </div>
                    <div class="lg:col-span-7 p-6 md:p-8">
                        <p class="text-xs font-mono text-black/50 mb-2">Publication: {{ $latestPriorite->published_at->format('d M Y') }}</p>
                        <h3 class="text-2xl font-extrabold leading-tight">{{ $latestPriorite->title }}</h3>
                        <div class="mt-3 text-black/70 leading-relaxed line-clamp-6">{!! $latestPriorite->content !!}</div>
                    </div>
                </div>
            </article>
            @endif

            <h3 class="text-xl font-extrabold uppercase tracking-wide flex items-center gap-3 mb-6">
                <span class="w-2 h-7 bg-rdcBlue block"></span>
                Autres projets prioritaires (2026)
            </h3>
            <div id="prioGrid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($allPrioriteProjects as $projet)
                <article class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden" data-title="{{ $projet->title }}" data-date="{{ $projet->published_at->format('Y-m-d') }}" data-score="{{ $projet->views }}">
                    <div class="relative h-44 overflow-hidden">
                        <img class="w-full h-full object-cover hover:scale-105 transition duration-500" src="{{ $projet->image ? asset($projet->image) : 'https://via.placeholder.com/400x300' }}" alt="{{ $projet->title }}">
                        @if($projet->categorie)
                        <div class="absolute top-4 left-4 bg-rdcBlue text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                            {{ $projet->categorie->name }}
                        </div>
                        @endif
                    </div>
                    <div class="p-6">
                        <p class="text-xs font-mono text-black/50 mb-2">{{ $projet->published_at->format('d M Y') }}</p>
                        <h4 class="font-extrabold text-lg leading-tight mb-2">{{ $projet->title }}</h4>
                        <div class="text-sm text-black/70 line-clamp-3">{!! Str::limit(strip_tags($projet->content), 150) !!}</div>
                    </div>
                </article>
                @endforeach
            </div>
        </section>
        @endif

        @if(isset($groupedProjets['modernisation']))
        <section id="section-modernisation" class="proj-section hidden">
            <div class="max-w-7xl mx-auto px-4 lg:px-6 pt-12">
                <div class="max-w-4xl">
                    <h2 class="text-2xl font-extrabold uppercase tracking-wide flex items-center gap-3">
                        <span class="w-2 h-8 bg-rdcBlue block"></span>
                        Modernisation
                    </h2>
                    <p class="mt-2 text-black/70 ml-5">Renforcement capacitaire : équipements, maintenance, doctrine et formation professionnelle.</p>
                </div>
            </div>
            <div class="max-w-7xl mx-auto px-4 lg:px-6 py-12 fade-in">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($groupedProjets['modernisation']->flatten()->sortByDesc('published_at') as $projet)
                    <article class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden" data-title="{{ $projet->title }}" data-date="{{ $projet->published_at->format('Y-m-d') }}" data-score="{{ $projet->views }}">
                        <div class="relative h-44 overflow-hidden">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-500" src="{{ $projet->image ? asset($projet->image) : 'https://via.placeholder.com/400x300' }}" alt="{{ $projet->title }}">
                            @if($projet->categorie)
                            <div class="absolute top-4 left-4 bg-rdcBlue text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                {{ $projet->categorie->name }}
                            </div>
                            @endif
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">{{ $projet->published_at->format('d M Y') }}</p>
                            <h4 class="font-extrabold text-lg leading-tight mb-2">{{ $projet->title }}</h4>
                            <div class="text-sm text-black/70 line-clamp-3">{!! Str::limit(strip_tags($projet->content), 150) !!}</div>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </section>
        @endif

        @if(isset($groupedProjets['veterans']))
        <section id="section-veterans" class="proj-section hidden">
            <div class="max-w-7xl mx-auto px-4 lg:px-6 pt-12">
                <div class="max-w-4xl">
                    <h2 class="text-2xl font-extrabold uppercase tracking-wide flex items-center gap-3">
                        <span class="w-2 h-8 bg-rdcRed block"></span>
                        Vétérans
                    </h2>
                    <p class="mt-2 text-black/70 ml-5">Reconnaissance, protection sociale, réinsertion économique et accompagnement humain.</p>
                </div>
            </div>
            <div class="max-w-7xl mx-auto px-4 lg:px-6 py-12 fade-in">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($groupedProjets['veterans']->flatten()->sortByDesc('published_at') as $projet)
                    <article class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden" data-title="{{ $projet->title }}" data-date="{{ $projet->published_at->format('Y-m-d') }}" data-score="{{ $projet->views }}">
                        <div class="relative h-44 overflow-hidden">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-500" src="{{ $projet->image ? asset($projet->image) : 'https://via.placeholder.com/400x300' }}" alt="{{ $projet->title }}">
                            @if($projet->categorie)
                            <div class="absolute top-4 left-4 bg-rdcRed text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                {{ $projet->categorie->name }}
                            </div>
                            @endif
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">{{ $projet->published_at->format('d M Y') }}</p>
                            <h4 class="font-extrabold text-lg leading-tight mb-2">{{ $projet->title }}</h4>
                            <div class="text-sm text-black/70 line-clamp-3">{!! Str::limit(strip_tags($projet->content), 150) !!}</div>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </section>
        @endif

        @if(isset($groupedProjets['cooperation']))
        <section id="section-cooperation" class="proj-section hidden">
            <div class="max-w-7xl mx-auto px-4 lg:px-6 pt-12">
                <div class="max-w-4xl">
                    <h2 class="text-2xl font-extrabold uppercase tracking-wide flex items-center gap-3">
                        <span class="w-2 h-8 bg-rdcBlue block"></span>
                        Coopération
                    </h2>
                    <p class="mt-2 text-black/70 ml-5">Partenariats, coordination sécuritaire, stabilité régionale et initiatives de confiance.</p>
                </div>
            </div>
            <div class="max-w-7xl mx-auto px-4 lg:px-6 py-12 fade-in">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($groupedProjets['cooperation']->flatten()->sortByDesc('published_at') as $projet)
                    <article class="project-card bg-white border border-black/10 shadow-soft hover:-translate-y-1 transition overflow-hidden" data-title="{{ $projet->title }}" data-date="{{ $projet->published_at->format('Y-m-d') }}" data-score="{{ $projet->views }}">
                        <div class="relative h-44 overflow-hidden">
                            <img class="w-full h-full object-cover hover:scale-105 transition duration-500" src="{{ $projet->image ? asset($projet->image) : 'https://via.placeholder.com/400x300' }}" alt="{{ $projet->title }}">
                            @if($projet->categorie)
                            <div class="absolute top-4 left-4 bg-rdcBlue text-white text-[10px] font-bold px-2 py-1 uppercase tracking-widest">
                                {{ $projet->categorie->name }}
                            </div>
                            @endif
                        </div>
                        <div class="p-6">
                            <p class="text-xs font-mono text-black/50 mb-2">{{ $projet->published_at->format('d M Y') }}</p>
                            <h4 class="font-extrabold text-lg leading-tight mb-2">{{ $projet->title }}</h4>
                            <div class="text-sm text-black/70 line-clamp-3">{!! Str::limit(strip_tags($projet->content), 150) !!}</div>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </section>
        @endif

    </main>

    @include('partials.footer')


</body>

</html>
