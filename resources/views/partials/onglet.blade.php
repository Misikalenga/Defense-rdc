
<style>
    .no-scrollbar::-webkit-scrollbar {
      display: none;
    }

    .no-scrollbar {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }

    /* Onglets (même logique que la page contact) */
    .proj-tab.active {
      background-color: #0073CF;
      color: #ffffff;
      border-color: #0073CF;
    }

    /* Petite animation douce de réapparition */
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



    /* État par défaut : loupe visible, X caché */

    /* par défaut : loupe visible, X caché */
    #searchToggleBtn .icon-close { 
        display: none; 
    }
    /* quand ouvert : loupe cachée, X visible */
    #searchToggleBtn.open .icon-search { 
        display: none; 
    }
    #searchToggleBtn.open .icon-close  { 
        display: block; 
    }


    @keyframes fadeInOpacity {
      from {
        opacity: 0;
        transform: translateY(-4px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animate-fade-in {
      animation: fadeInOpacity 0.2s ease-out both;
    }

    /*bouton scroll x */
    @keyframes scrollHint {
      0%, 100% { transform: translateX(0); opacity: .7; }
      50%      { transform: translateX(6px); opacity: 1; }
    }

    .animate-scroll-hint {
      animation: scrollHint 1.2s ease-in-out infinite;
    }

</style>

<!-- BARRE ONGLET + RECHERCHE (VERSION STABLE : panneau en absolute sous la barre) -->
<section class="sticky top-[100px] z-40 bg-cream2 backdrop-blur border-b border-black/5 shadow-sm">

  <!-- LIGNE BARRE (ONGLETS + BOUTON) -->
  <div class="relative max-w-7xl mx-auto px-4 lg:px-6 py-3">

    
    <!-- ONGLET adapté a la page -->
    @if(Request::is('projets'))
        @include('partials.pageOnglet.projets-onglet')
    @elseif(Request::is('contact'))
        @include('partials.pageOnglet.contact-onglet')
    @elseif(Request::is('cabinet'))
        @include('partials.pageOnglet.cabinet-onglet')
    @elseif(Request::is('actualites'))
        @include('partials.pageOnglet.actualites-onglet')
    @endif

  </div>



</section>


<script>
    document.addEventListener("DOMContentLoaded", function () {

        // Sécurité : si la page n'a pas d'onglets
        if (!window.pageTabs || !Array.isArray(window.pageTabs)) return;

        // Switch des onglets
        window.switchTab = function (tab) {
            window.pageTabs.forEach(t => {
                const section = document.getElementById(`section-${t}`);
                const button  = document.getElementById(`tab-${t}`);

                if (section) section.classList.add("hidden");
                if (button)  button.classList.remove("active");
            });

            const activeSection = document.getElementById(`section-${tab}`);
            const activeButton  = document.getElementById(`tab-${tab}`);

            if (activeSection) activeSection.classList.remove("hidden");
            if (activeButton)  activeButton.classList.add("active");
        };


        // --- Activation automatique via ?tab=xxx ---
        const params = new URLSearchParams(window.location.search);
        const requestedTab = params.get("tab");

        // Si l'onglet demandé existe, on l'active
        if (requestedTab && window.pageTabs.includes(requestedTab)) {
            window.switchTab(requestedTab);
        } else {
            // Sinon onglet par défaut (le premier)
            const firstTab = window.pageTabs[0];
            if (firstTab) window.switchTab(firstTab);
        }

    });

    // Toggle panneau recherche
    function toggleSearchPanel() {
        const btn = document.getElementById("searchToggleBtn");
        const panel = document.getElementById("searchPanel");

        const willOpen = !btn.classList.contains("open");

        btn.classList.toggle("open", willOpen);
        panel.classList.toggle("hidden", !willOpen);

        if (willOpen) {
          // rejouer l'animation à chaque ouverture
          panel.classList.remove("animate-fade-in");
          void panel.offsetWidth;
          panel.classList.add("animate-fade-in");

          setTimeout(() => {
            const input = document.getElementById("searchInput");
            if (input) input.focus();
          }, 80);
        }
    }


    function toggleScrollTabs() {
     const scroller = document.getElementById("tabsScroller");
     const btn = document.getElementById("scrollHintBtn");
     const icon = document.getElementById("scrollHintIcon");
    
     if (!scroller || !btn || !icon) return;
    
     const direction = btn.dataset.direction;
    
     if (direction === "right") {
       scroller.scrollBy({ left: 420, behavior: "smooth" });
       btn.dataset.direction = "left";
       icon.classList.add("rotate-[-180deg]");
     } else {
       scroller.scrollBy({ left: -420, behavior: "smooth" });
       btn.dataset.direction = "right";
       icon.classList.remove("rotate-[-180deg]");
     }
    }
</script>
