    <header class="notscroll sticky top-0 z-[9000] bg-white border-b border-black/10">

        <div class="bg-ink text-white text-xs">
            <div class="max-w-7xl mx-auto px-4 lg:px-6 h-9 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <a href="#" class="hover:underline  hidden lg:block">Ministère Délégué</a>
                    <span class="opacity-50  hidden lg:block">|</span>
                    <a href="#annonces" class="hover:underline">Annonces Officielles</a>
                </div>
                <div class="flex items-center gap-4">
                    <a href="https://www.acr-rdc.com/" class="hover:underline hidden lg:block">ACR</a>
                    <a href="https://defense.gouv.cd/" class="hover:underline">Defense-Nationale</a>
                    <a href="#contact" class="hover:underline hidden lg:block">Recrutement</a>
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
                        <p class="text-sm font-bold uppercase tracking-wide">Ministère Délégué</p>
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
                                        <p class="text-xs uppercase font-bold text-black/60">Présentation</p>
                                        <a href="/#ministre" class="block mt-2 text-sm hover:underline">Le Ministre</a>
                                        <a href="/cabinet?tab=parcours" class="block mt-1 text-sm hover:underline">Biographie</a>
                                        <a href="/cabinet?tab=cabinet" class="block mt-1 text-sm hover:underline">Équipe du Cabinet</a>
                                    </div>
                                    <div class="transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-150">
                                        <p class="text-xs uppercase font-bold text-black/60">Actualités & Agenda</p>
                                        <a href="/actualites#actualites" class="block mt-2 text-sm hover:underline">Dernières actualités</a>
                                        <a href="/actualites?tab=annonces" class="block mt-1 text-sm hover:underline">Communiqués officiels</a>
                                        <a href="/#agenda" class="block mt-1 text-sm hover:underline">Agenda ministériel</a>
                                    </div>
                                    <div class="transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-200">
                                        <p class="text-xs uppercase font-bold text-black/60">Missions prioritaires</p>
                                        <a href="/#missions" class="block mt-2 text-sm hover:underline">Reconnaissance & Mémoire</a>
                                        <a href="/#missions" class="block mt-1 text-sm hover:underline">Droits sociaux & assistance</a>
                                        <a href="/#missions" class="block mt-1 text-sm hover:underline">Réinsertion & opportunités économiques</a>
                                    </div>
                                    <div class="bg-cream2 p-4 border border-black/10 transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-300">
                                        <p class="text-xs uppercase font-bold text-black/70">Accès rapide</p>
                                        <p class="text-sm mt-2 text-black/70">
                                            Consultez les dernières annonces et priorités stratégiques.
                                        </p>
                                        <a href="/actualites" class="inline-block mt-3 text-sm font-semibold text-rdcBlue hover:underline">
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
                                        <a href="/actualites?tab=annonces" class="block mt-2 text-sm hover:underline">Annonces officielles</a>
                                        <a href="/actualites?tab=decisions" class="block mt-1 text-sm hover:underline">Décisions & notes</a>
                                    </div>
                                    <div class="transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-150">
                                        <p class="text-xs uppercase font-bold text-black/60">Discours</p>
                                        <a href="/actualites?tab=discours" class="block mt-2 text-sm hover:underline">Allocutions</a>
                                        <a href="/actualites?tab=discours" class="block mt-1 text-sm hover:underline">Conférences</a>
                                    </div>
                                    <div class="transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-200">
                                        <p class="text-xs uppercase font-bold text-black/60">Opérations</p>
                                        <a href="/actualites?tab=operations" class="block mt-2 text-sm hover:underline">Actions sur le terrain</a>
                                        <a href="/actualites?tab=operations" class="block mt-1 text-sm hover:underline">Sécurité intérieure</a>
                                    </div>
                                    <div class="bg-cream2 p-4 border border-black/10 transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-300">
                                        <p class="text-xs uppercase font-bold text-black/70">Dernière publication</p>
                                        <p class="text-sm mt-2 text-black/70">Modernisation de la préparation opérationnelle.</p>
                                        <a href="/actualites#actualites" class="inline-block mt-3 text-sm font-semibold text-rdcBlue hover:underline">
                                            Lire →
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="group h-full flex items-center">
                        <a href="{{ route('projets') }}" class="nav-link uppercase text-sm font-semibold tracking-wider hover:text-rdcBlue transition py-4">
                            Projets
                        </a>
                        <div class="absolute left-0 right-0 top-[80px] pt-[24px] opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all duration-200 ease-out z-50">
                            <div class="bg-white border-t border-b border-black/10 shadow-soft">
                                <div class="max-w-7xl mx-auto px-6 py-6 grid grid-cols-4 gap-6">
                                    <div class="transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-75">
                                        <p class="text-xs uppercase font-bold text-black/60">Modernisation</p>
                                        <a href="/projets?tab=modernisation" class="block mt-2 text-sm hover:underline">Équipements</a>
                                        <a href="/projets?tab=modernisation" class="block mt-1 text-sm hover:underline">Formation</a>
                                    </div>
                                    <div class="transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-150">
                                        <p class="text-xs uppercase font-bold text-black/60">Vétérans</p>
                                        <a href="/projets?tab=veterans" class="block mt-2 text-sm hover:underline">Réinsertion</a>
                                        <a href="/projets?tab=veterans" class="block mt-1 text-sm hover:underline">Droits sociaux</a>
                                    </div>
                                    <div class="transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-200">
                                        <p class="text-xs uppercase font-bold text-black/60">Coopération</p>
                                        <a href="/projets?tab=cooperation" class="block mt-2 text-sm hover:underline">Partenariats</a>
                                        <a href="/projets?tab=cooperation" class="block mt-1 text-sm hover:underline">Stabilité régionale</a>
                                    </div>
                                    <div class="bg-cream2 p-4 border border-black/10 transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-300">
                                        <p class="text-xs uppercase font-bold text-black/70">Priorité 2026</p>
                                        <p class="text-sm mt-2 text-black/70">Renforcement logistique national.</p>
                                        <a href="/projets" class="inline-block mt-3 text-sm font-semibold text-rdcBlue hover:underline">
                                            Découvrir →
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="group h-full flex items-center">
                        <a href="{{ route('cabinet') }}" class="nav-link uppercase text-sm font-semibold tracking-wider hover:text-rdcBlue transition py-4">
                            Cabinet
                        </a>
                        <div class="absolute left-0 right-0 top-[80px] pt-[24px] opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all duration-200 ease-out z-50">
                            <div class="bg-white border-t border-b border-black/10 shadow-soft">
                                <div class="max-w-7xl mx-auto px-6 py-6 grid grid-cols-4 gap-6">
                                    <div class="transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-75">
                                        <p class="text-xs uppercase font-bold text-black/60">Parcours</p>
                                        <a href="/cabinet?tab=parcours" class="block mt-2 text-sm hover:underline">Carrière publique</a>
                                        <a href="/cabinet?tab=parcours" class="block mt-1 text-sm hover:underline">Engagements</a>
                                    </div>
                                    <div class="transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-150">
                                        <p class="text-xs uppercase font-bold text-black/60">Cabinet</p>
                                        <a href="/cabinet?tab=cabinet" class="block mt-2 text-sm hover:underline">Équipe</a>
                                        <a href="/cabinet?tab=cabinet" class="block mt-1 text-sm hover:underline">Attributions</a>
                                    </div>
                                    <div class="transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-200">
                                        <p class="text-xs uppercase font-bold text-black/60">Distinctions</p>
                                        <a href="/cabinet?tab=distinction" class="block mt-2 text-sm hover:underline">Récompenses</a>
                                        <a href="/cabinet?tab=distinction" class="block mt-1 text-sm hover:underline">Reconnaissance</a>
                                    </div>
                                    <div class="bg-cream2 p-4 border border-black/10 transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-300">
                                        <p class="text-xs uppercase font-bold text-black/70">Portrait officiel</p>
                                        <p class="text-sm mt-2 text-black/70">Vision et priorités nationales.</p>
                                        <a href="/cabinet" class="inline-block mt-3 text-sm font-semibold text-rdcBlue hover:underline">
                                            Lire →
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="group h-full flex items-center">
                        <a href="{{ route('contact') }}" class="nav-link uppercase text-sm font-semibold tracking-wider hover:text-rdcBlue transition py-4">
                            Contact
                        </a>
                        <div class="absolute left-0 right-0 top-[80px] pt-[24px] opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all duration-200 ease-out z-50">
                            <div class="bg-white border-t border-b border-black/10 shadow-soft">
                                <div class="max-w-7xl mx-auto px-6 py-6 grid grid-cols-4 gap-6">
                                    <div class="transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-75">
                                        <p class="text-xs uppercase font-bold text-black/60">Coordonnées</p>
                                        <a href="/contact?tab=coordonnees" class="block mt-2 text-sm hover:underline">Adresse</a>
                                        <a href="/contact?tab=coordonnees" class="block mt-1 text-sm hover:underline">Téléphone</a>
                                    </div>
                                    <div class="transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-150">
                                        <p class="text-xs uppercase font-bold text-black/60">Presse</p>
                                        <a href="/contact?tab=presse" class="block mt-2 text-sm hover:underline">Accréditations</a>
                                        <a href="/contact?tab=presse" class="block mt-1 text-sm hover:underline">Demandes médias</a>
                                    </div>
                                    <div class="transform transition-all duration-500 ease-out opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 group-hover:delay-200">
                                        <p class="text-xs uppercase font-bold text-black/60">Recrutement</p>
                                        <a href="/contact?tab=recrutement" class="block mt-2 text-sm hover:underline">Candidatures</a>
                                        <a href="/contact?tab=recrutement" class="block mt-1 text-sm hover:underline">Stages</a>
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
            <div id="mobileMenu" class="absolute top-full left-0 w-full bg-white  border-b border-black/10 shadow-soft lg:hidden overflow-y-auto max-h-0 transition-[max-height] duration-500 ease-in-out">
                <div class="pb-4 pt-2 space-y-2 text-sm">
                    <div class="bg-white border border-black/10 p-3">
                        <a href="{{ '/' }}" class="font-bold uppercase tracking-wide block">Accueil</a>
                        <div class="mt-2 text-black/70 grid gap-1 pl-2">
                            <a href="/">• Priorités nationales</a>
                            <a href="/">• Organisation</a>
                            <a href="/">• Missions</a>
                        </div>
                    </div>
                    <div class="bg-white border border-black/10 p-3">
                        <a href="{{ route('actualites') }}" class="font-bold uppercase tracking-wide block">Actualités</a>
                        <div class="mt-2 text-black/70 grid gap-1 pl-2">
                            <a href="/actualites?tab=actualites">• Actualités</a>
                            <a href="/actualites?tab=annonces">• Annonces officielles</a>
                            <a href="/actualites?tab=decisions">• Décisions & notes</a>
                            <a href="/actualites?tab=discours">• Discours</a>
                            <a href="/actualites?tab=operations">• Opérations</a>
                        </div>
                    </div>
                    <div class="bg-white border border-black/10 p-3">
                        <a href="{{ route('projets') }}" class="font-bold uppercase tracking-wide block">Projets</a>
                        <div class="mt-2 text-black/70 grid gap-1 pl-2">
                            <a href="/projets?tab=modernisation">• Modernisation</a>
                            <a href="/projets?tab=veterans">• Vétérans</a>
                            <a href="/projets?tab=cooperation">• Coopération</a>
                        </div>
                    </div>
                    <div class="bg-white border border-black/10 p-3">
                        <a href="{{ route('cabinet') }}" class="font-bold uppercase tracking-wide block">Cabinet</a>
                        <div class="mt-2 text-black/70 grid gap-1 pl-2">
                            <a href="/cabinet?tab=parcours">• Parcours</a>
                            <a href="/cabinet?tab=cabinet">• Cabinet</a>
                            <a href="/cabinet?tab=distinction">• Distinctions</a>
                        </div>
                    </div>
                    <div class="bg-white border border-black/10 p-3">
                        <a href="{{ route('contact') }}" class="font-bold uppercase tracking-wide block">Contact</a>
                        <div class="mt-2 text-black/70 grid gap-1 pl-2">
                            <a href="/contact?tab=coordonnees">• Coordonnées</a>
                            <a href="/contact?tab=presse">• Presse</a>
                            <a href="/contact?tab=recrutement">• Recrutement</a>
                        </div>
                    </div>

                    <a href="{{ route('login') }}" class="lg:hidden inline-flex items-center justify-center gap-2 w-full  px-3 py-2 bg-rdcGold text-dark text-xs font-bold uppercase tracking-wider hover:bg-rdcGold/60 transition">
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
    <script>
        
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
            
                mobileMenu.style.maxHeight = "85vh"; // ouverture avec limite contrôlée
                mobileMenu.style.overflowY = "auto"; // scroll interne
            } else {
                burgerLines[0].style.transform = "translateY(0) rotate(0)";
                burgerLines[1].style.opacity = "1";
                burgerLines[2].style.transform = "translateY(0) rotate(0)";
            
                mobileMenu.style.maxHeight = "0";
                mobileMenu.style.overflowY = "hidden";
            }
        }

        burgerBtn.addEventListener("click", toggleMenu);
    </script>