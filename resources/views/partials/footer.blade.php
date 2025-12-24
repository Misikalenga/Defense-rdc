<footer class="bg-white border-t border-black/10">
    <div class="max-w-7xl mx-auto px-6 lg:px-12 py-14 grid gap-10 lg:grid-cols-4 text-sm">

        <div>
            <a href="#accueil" class="flex items-center gap-3">
                <div class="w-16 h-16 flex items-center justify-center">
                    <img src="{{ asset('assets/logof2.png') }}" alt="">

                </div>
                <div class="leading-tight">
                    <p class="text-base font-bold uppercase tracking-wide">
                        Ministère Délégué
                    </p>
                    <p class="text-xs text-black/70 uppercase tracking-wide">
                        Défense & Anciens Combattants
                    </p>
                </div>
            </a>

            <p class="mt-5 text-[0.9rem] leading-relaxed text-black/70">
                Ministère Délégué à la Défense Nationale de la République
                Démocratique du Congo.
            </p>
        </div>

        <div class="md:col-span-3">
            <!-- version mobil-->
            <div class="grid grid-cols-2 gap-10 md:hidden">

                <div>
                    <p class="text-xl font-bold uppercase tracking-wide mb-4">
                        Liens rapides
                    </p>
                    <ul class="space-y-2 text-[0.9rem] text-black/70 leading-relaxed">
                        <li><a href="#actualites" class="hover:text-rdcBlue">Actualités</a></li>
                        <li><a href="#missions" class="hover:text-rdcBlue">Missions</a></li>
                        <li><a href="#projets" class="hover:text-rdcBlue">Projets</a></li>
                        <li><a href="#agenda" class="hover:text-rdcBlue">Agenda</a></li>
                    </ul>
                </div>

                <div>
                    <p class="text-xl font-bold uppercase tracking-wide mb-4">
                        Contact
                    </p>
                    <ul class="space-y-2 text-[0.9rem] text-black/70 leading-relaxed">
                        <li>📍 Kinshasa, RDC</li>
                        <li>☎️ +243 000 000 000</li>
                        <li>✉️ contact@defense.gouv.cd</li>
                    </ul>
                </div>
            </div>

            <div class="md:hidden mt-6">
                <p class="text-xl font-bold uppercase tracking-wide mb-4">Légal</p>
                <div class="flex justify-start gap-8 text-[0.9rem] text-black/70">
                    <a href="#" class="hover:text-rdcBlue">Mentions</a>
                    <a href="#" class="hover:text-rdcBlue">Confidentialité</a>
                    <a href="#" class="hover:text-rdcBlue">Cookies</a>
                </div>
            </div>
            <!-- version pc -->
            <div class="hidden md:grid grid-cols-3 gap-16">

                <div>
                    <p class="text-xl font-bold uppercase tracking-wide mb-4">Liens rapides</p>
                    <ul class="space-y-2 text-[0.9rem] text-black/70 leading-relaxed">
                        <li><a href="#actualites" class="hover:text-rdcBlue">Actualités</a></li>
                        <li><a href="#missions" class="hover:text-rdcBlue">Missions</a></li>
                        <li><a href="#projets" class="hover:text-rdcBlue">Projets</a></li>
                        <li><a href="#agenda" class="hover:text-rdcBlue">Agenda</a></li>
                    </ul>
                </div>

                <div>
                    <p class="text-xl font-bold uppercase tracking-wide mb-4">Contact</p>
                    <ul class="space-y-2 text-[0.9rem] text-black/70 leading-relaxed">
                        <li>📍 Kinshasa, RDC</li>
                        <li>☎️ +243 000 000 000</li>
                        <li>✉️ contact@defense.gouv.cd</li>
                    </ul>
                </div>

                <div>
                    <p class="text-xl font-bold uppercase tracking-wide mb-4">Légal</p>
                    <ul class="space-y-2 text-[0.9rem] text-black/70 leading-relaxed">
                        <li><a href="#" class="hover:text-rdcBlue">Mentions légales</a></li>
                        <li><a href="#" class="hover:text-rdcBlue">Confidentialité</a></li>
                        <li><a href="#" class="hover:text-rdcBlue">Cookies</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="notscroll border border-black/10 py-5">
        <p class="text-center text-xs text-black/60 uppercase tracking-wide">
            © <span id="year"></span> Ministère Délégué à la Défense Nationale — Tous droits réservés.
        </p>
    </div>
</footer>


    <button id="scrollTopBtn" class="fixed bottom-6 right-6 z-[9997] opacity-0 translate-y-3 pointer-events-none
           bg-rdcBlue text-white w-12 h-12 shadow-soft
           flex items-center justify-center text-xl transition duration-300 hover:bg-rdcBlue/90" aria-label="Retour en haut">
        ↑
    </button>
<script>
    // date automatique année copyright
    document.getElementById("year").textContent = new Date().getFullYear();

    




        // Scroll Logic BTN + Progress Bar
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
</script>