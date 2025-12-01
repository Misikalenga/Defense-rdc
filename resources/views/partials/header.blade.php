    <header class="notscroll sticky top-0 z-[9000] bg-white border-b border-black/10">

        <div class="bg-ink text-white text-xs">
            <div class="max-w-7xl mx-auto px-4 lg:px-6 h-9 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <a href="#" class="hover:underline">Ministre Délégué</a>
                    <span class="opacity-50">|</span>
                    <a href="#annonces" class="hover:underline">Annonces Officielles</a>
                </div>
                <div class="flex items-center gap-4">
                    <a href="https://www.acr-rdc.com/" class="hover:underline">ACR</a>
                    <a href="https://defense.gouv.cd/" class="hover:underline">Defense-Nationale</a>
                    <a href="#contact" class="hover:underline">Recrutement</a>
                </div>
            </div>
        </div>

        <nav class="max-w-7xl mx-auto px-4 lg:px-6 ">
            <div class="flex items-center justify-between h-16">

                <a href="{{ '/' }}" class="flex items-center gap-3">
                    <div class="w-10 h-10 flex items-center justify-center ">
                        <img src="{{ asset('assets/logof2.png') }}" alt="">
                    </div>
                    <div class="leading-tight">
                        <p class="text-sm font-bold uppercase tracking-wide">Ministre Délégué</p>
                        <p class="text-xs text-black/70 uppercase">Défense & Anciens Combattants</p>
                    </div>
                </a>

                <div class="hidden lg:flex items-center gap-8">

                    <div class="group h-full flex items-center">
                        <a href="{{ '/' }}" class="nav-link uppercase text-sm font-semibold tracking-wider hover:text-rdcBlue transition py-4">
                            Accueil
                        </a>
                        <div class="absolute left-0 right-0 top-[80px] pt-[24px] opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all duration-200 ease-out z-50">
                            <div class="bg-white border-t border-b border-black/10 shadow-soft">
                                <div class="max-w-7xl mx-auto px-6 py-6 grid grid-cols-4 gap-6">
                                    <div class="transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-75">
                                        <p class="text-xs uppercase font-bold text-black/60">Vision</p>
                                        <a href="#accueil" class="block mt-2 text-sm hover:underline">Priorités nationales</a>
                                        <a href="#missions" class="block mt-1 text-sm hover:underline">Missions clés</a>
                                    </div>
                                    <div class="transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-150">
                                        <p class="text-xs uppercase font-bold text-black/60">Organisation</p>
                                        <a href="#ministere" class="block mt-2 text-sm hover:underline">Structure du ministère</a>
                                        <a href="#ministere" class="block mt-1 text-sm hover:underline">Directions & services</a>
                                    </div>
                                    <div class="transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-200">
                                        <p class="text-xs uppercase font-bold text-black/60">Ressources</p>
                                        <a href="#" class="block mt-2 text-sm hover:underline">Textes officiels</a>
                                        <a href="#" class="block mt-1 text-sm hover:underline">Documents publics</a>
                                    </div>
                                    <div class="bg-cream2 p-4 border border-black/10 transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-300">
                                        <p class="text-xs uppercase font-bold text-black/70">Accès rapide</p>
                                        <p class="text-sm mt-2 text-black/70">
                                            Consultez les dernières annonces et priorités stratégiques.
                                        </p>
                                        <a href="#actualites" class="inline-block mt-3 text-sm font-semibold text-rdcBlue hover:underline">
                                            Voir les actus →
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="group h-full flex items-center">
                        <a href="{{ route('actualites') }}" class="nav-link uppercase text-sm font-semibold tracking-wider hover:text-rdcBlue transition py-4">
                            Actualités
                        </a>
                        <div class="absolute left-0 right-0 top-[80px] pt-[24px] opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all duration-200 ease-out z-50">
                            <div class="bg-white border-t border-b border-black/10 shadow-soft">
                                <div class="max-w-7xl mx-auto px-6 py-6 grid grid-cols-4 gap-6">
                                    <div class="transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-75">
                                        <p class="text-xs uppercase font-bold text-black/60">Communiqués</p>
                                        <a href="#annonces" class="block mt-2 text-sm hover:underline">Annonces officielles</a>
                                        <a href="#decisions" class="block mt-1 text-sm hover:underline">Décisions & notes</a>
                                    </div>
                                    <div class="transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-150">
                                        <p class="text-xs uppercase font-bold text-black/60">Discours</p>
                                        <a href="#actualites" class="block mt-2 text-sm hover:underline">Allocutions</a>
                                        <a href="#actualites" class="block mt-1 text-sm hover:underline">Conférences</a>
                                    </div>
                                    <div class="transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-200">
                                        <p class="text-xs uppercase font-bold text-black/60">Opérations</p>
                                        <a href="#missions" class="block mt-2 text-sm hover:underline">Actions sur le terrain</a>
                                        <a href="#missions" class="block mt-1 text-sm hover:underline">Sécurité intérieure</a>
                                    </div>
                                    <div class="bg-cream2 p-4 border border-black/10 transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-300">
                                        <p class="text-xs uppercase font-bold text-black/70">Dernière publication</p>
                                        <p class="text-sm mt-2 text-black/70">Modernisation de la préparation opérationnelle.</p>
                                        <a href="#actualites" class="inline-block mt-3 text-sm font-semibold text-rdcBlue hover:underline">
                                            Lire →
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="group h-full flex items-center">
                        <a href="#projets" class="nav-link uppercase text-sm font-semibold tracking-wider hover:text-rdcBlue transition py-4">
                            Projets
                        </a>
                        <div class="absolute left-0 right-0 top-[80px] pt-[24px] opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all duration-200 ease-out z-50">
                            <div class="bg-white border-t border-b border-black/10 shadow-soft">
                                <div class="max-w-7xl mx-auto px-6 py-6 grid grid-cols-4 gap-6">
                                    <div class="transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-75">
                                        <p class="text-xs uppercase font-bold text-black/60">Modernisation</p>
                                        <a href="#projets" class="block mt-2 text-sm hover:underline">Équipements</a>
                                        <a href="#projets" class="block mt-1 text-sm hover:underline">Formation</a>
                                    </div>
                                    <div class="transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-150">
                                        <p class="text-xs uppercase font-bold text-black/60">Vétérans</p>
                                        <a href="#projets" class="block mt-2 text-sm hover:underline">Réinsertion</a>
                                        <a href="#projets" class="block mt-1 text-sm hover:underline">Droits sociaux</a>
                                    </div>
                                    <div class="transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-200">
                                        <p class="text-xs uppercase font-bold text-black/60">Coopération</p>
                                        <a href="#projets" class="block mt-2 text-sm hover:underline">Partenariats</a>
                                        <a href="#projets" class="block mt-1 text-sm hover:underline">Stabilité régionale</a>
                                    </div>
                                    <div class="bg-cream2 p-4 border border-black/10 transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-300">
                                        <p class="text-xs uppercase font-bold text-black/70">Priorité 2026</p>
                                        <p class="text-sm mt-2 text-black/70">Renforcement logistique national.</p>
                                        <a href="#projets" class="inline-block mt-3 text-sm font-semibold text-rdcBlue hover:underline">
                                            Découvrir →
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="group h-full flex items-center">
                        <a href="#biographie" class="nav-link uppercase text-sm font-semibold tracking-wider hover:text-rdcBlue transition py-4">
                            Biographie
                        </a>
                        <div class="absolute left-0 right-0 top-[80px] pt-[24px] opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all duration-200 ease-out z-50">
                            <div class="bg-white border-t border-b border-black/10 shadow-soft">
                                <div class="max-w-7xl mx-auto px-6 py-6 grid grid-cols-4 gap-6">
                                    <div class="transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-75">
                                        <p class="text-xs uppercase font-bold text-black/60">Parcours</p>
                                        <a href="#biographie" class="block mt-2 text-sm hover:underline">Carrière publique</a>
                                        <a href="#biographie" class="block mt-1 text-sm hover:underline">Engagements</a>
                                    </div>
                                    <div class="transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-150">
                                        <p class="text-xs uppercase font-bold text-black/60">Cabinet</p>
                                        <a href="#biographie" class="block mt-2 text-sm hover:underline">Équipe</a>
                                        <a href="#biographie" class="block mt-1 text-sm hover:underline">Attributions</a>
                                    </div>
                                    <div class="transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-200">
                                        <p class="text-xs uppercase font-bold text-black/60">Distinctions</p>
                                        <a href="#biographie" class="block mt-2 text-sm hover:underline">Récompenses</a>
                                        <a href="#biographie" class="block mt-1 text-sm hover:underline">Reconnaissance</a>
                                    </div>
                                    <div class="bg-cream2 p-4 border border-black/10 transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-300">
                                        <p class="text-xs uppercase font-bold text-black/70">Portrait officiel</p>
                                        <p class="text-sm mt-2 text-black/70">Vision et priorités nationales.</p>
                                        <a href="#biographie" class="inline-block mt-3 text-sm font-semibold text-rdcBlue hover:underline">
                                            Lire →
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="group h-full flex items-center">
                        <a href="#contact" class="nav-link uppercase text-sm font-semibold tracking-wider hover:text-rdcBlue transition py-4">
                            Contact
                        </a>
                        <div class="absolute left-0 right-0 top-[80px] pt-[24px] opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all duration-200 ease-out z-50">
                            <div class="bg-white border-t border-b border-black/10 shadow-soft">
                                <div class="max-w-7xl mx-auto px-6 py-6 grid grid-cols-4 gap-6">
                                    <div class="transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-75">
                                        <p class="text-xs uppercase font-bold text-black/60">Coordonnées</p>
                                        <a href="#contact" class="block mt-2 text-sm hover:underline">Adresse</a>
                                        <a href="#contact" class="block mt-1 text-sm hover:underline">Téléphone</a>
                                    </div>
                                    <div class="transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-150">
                                        <p class="text-xs uppercase font-bold text-black/60">Presse</p>
                                        <a href="#contact" class="block mt-2 text-sm hover:underline">Accréditations</a>
                                        <a href="#contact" class="block mt-1 text-sm hover:underline">Demandes médias</a>
                                    </div>
                                    <div class="transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-200">
                                        <p class="text-xs uppercase font-bold text-black/60">Recrutement</p>
                                        <a href="#contact" class="block mt-2 text-sm hover:underline">Candidatures</a>
                                        <a href="#contact" class="block mt-1 text-sm hover:underline">Stages</a>
                                    </div>
                                    <div class="bg-cream2 p-4 border border-black/10 transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-300">
                                        <p class="text-xs uppercase font-bold text-black/70">Écrire au Ministère</p>
                                        <p class="text-sm mt-2 text-black/70">contact@defense.gouv.cd</p>
                                        <a href="mailto:contact@defense.gouv.cd" class="inline-block mt-3 text-sm font-semibold text-rdcBlue hover:underline">
                                            Envoyer →
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="flex items-center gap-2">
                    <a class=" hidden lg:block cursor-pointer hover:text-brand-2" href="{{ route('login') }}" title="Login" aria-label="Login" data-tracking="nav">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 17" class="size-6">
                            <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" clip-path="url(#a)">
                                <path d="M8 10.5a4 4 0 1 0 0-8 4 4 0 0 0 0 8M2 14c1.21-2.092 3.41-3.5 6-3.5s4.79 1.408 6 3.5"></path>
                            </g>
                            <defs>
                                <clipPath id="a">
                                    <path fill="#fff" d="M0 .5h16v16H0z"></path>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>

                    {{-- BURGER MOBILE --}}
                    <button id="burgerBtn" class="lg:hidden p-2 hover:bg-black/5 transition" aria-label="Menu">
                        <div class="relative w-6 h-5">
                            <span class="burger-line absolute left-0 top-0 w-6 h-0.5 bg-ink transition-all duration-300"></span>
                            <span class="burger-line absolute left-0 top-2 w-6 h-0.5 bg-ink transition-all duration-300"></span>
                            <span class="burger-line absolute left-0 top-4 w-6 h-0.5 bg-ink transition-all duration-300"></span>
                        </div>
                    </button>
                </div>
            </div>

            {{-- MENU MOBILE --}}
            <div id="mobileMenu" class="absolute top-full left-0 w-full bg-white border-b border-black/10 shadow-soft lg:hidden overflow-hidden max-h-0 transition-[max-height] duration-500 ease-in-out">
                <div class="pb-4 pt-2 space-y-2 text-sm">
                    <div class="bg-white border border-black/10 p-3">
                        <a href="#accueil" class="font-bold uppercase tracking-wide block">Accueil</a>
                        <div class="mt-2 text-black/70 grid gap-1 pl-2">
                            <a href="#accueil">• Priorités nationales</a>
                            <a href="#ministere">• Organisation</a>
                            <a href="#missions">• Missions</a>
                        </div>
                    </div>
                    <div class="bg-white border border-black/10 p-3">
                        <a href="#actualites" class="font-bold uppercase tracking-wide block">Actualités</a>
                        <div class="mt-2 text-black/70 grid gap-1 pl-2">
                            <a href="#annonces">• Annonces officielles</a>
                            <a href="#actualites">• Communiqués</a>
                            <a href="#decisions">• Décisions & notes</a>
                        </div>
                    </div>
                    <div class="bg-white border border-black/10 p-3">
                        <a href="#projets" class="font-bold uppercase tracking-wide block">Projets</a>
                        <div class="mt-2 text-black/70 grid gap-1 pl-2">
                            <a href="#projets">• Modernisation</a>
                            <a href="#projets">• Vétérans</a>
                            <a href="#projets">• Coopération</a>
                        </div>
                    </div>
                    <div class="bg-white border border-black/10 p-3">
                        <a href="#biographie" class="font-bold uppercase tracking-wide block">Biographie</a>
                        <div class="mt-2 text-black/70 grid gap-1 pl-2">
                            <a href="#biographie">• Parcours</a>
                            <a href="#biographie">• Cabinet</a>
                            <a href="#biographie">• Distinctions</a>
                        </div>
                    </div>
                    <div class="bg-white border border-black/10 p-3">
                        <a href="#contact" class="font-bold uppercase tracking-wide block">Contact</a>
                        <div class="mt-2 text-black/70 grid gap-1 pl-2">
                            <a href="#contact">• Coordonnées</a>
                            <a href="#contact">• Presse</a>
                            <a href="#contact">• Recrutement</a>
                        </div>
                    </div>

                    <a href="{{ route('login') }}" class="lg:hidden inline-flex items-center justify-center gap-2 w-full px-3 py-2 bg-rdcGold text-dark text-xs font-bold uppercase tracking-wider hover:bg-rdcGold/60 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 17" class="size-6">
                            <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" clip-path="url(#a)">
                                <path d="M8 10.5a4 4 0 1 0 0-8 4 4 0 0 0 0 8M2 14c1.21-2.092 3.41-3.5 6-3.5s4.79 1.408 6 3.5"></path>
                            </g>
                            <defs>
                                <clipPath id="a">
                                    <path fill="#fff" d="M0 .5h16v16H0z"></path>
                                </clipPath>
                            </defs>
                        </svg>

                        Login
                    </a>
                </div>
            </div>

        </nav>
    </header>
