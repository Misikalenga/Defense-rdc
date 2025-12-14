<script>
    window.pageTabs = ["coordonnees", "presse", "recrutement"];
</script>


<!-- ONGLET SCROLLABLE -->
<div id="tabsScroller"  class="max-w-[75%]  relative overflow-x-auto no-scrollbar pr-8">
  <div class="flex items-center gap-3 min-w-max">
    
    <button onclick="switchTab('coordonnees')" id="tab-coordonnees"
      class="proj-tab active px-4 py-2 bg-white border border-black/10 text-black/70 hover:bg-blue-50 text-sm font-bold uppercase tracking-wide rounded-sm transition">
      coordonnees 
    </button>

    <button onclick="switchTab('presse')" id="tab-presse"
      class="proj-tab px-4 py-2 bg-white border border-black/10 text-black/70 hover:bg-blue-50 text-sm font-bold uppercase tracking-wide rounded-sm transition">
      presse
    </button>

    <button onclick="switchTab('recrutement')" id="tab-recrutement"
      class="proj-tab px-4 py-2 bg-white border border-black/10 text-black/70 hover:bg-blue-50 text-sm font-bold uppercase tracking-wide rounded-sm transition">
      recrutement
    </button>

  </div>
</div>


<!-- DÉGRADÉ (seulement derrière le bouton, pas sur le panneau) -->
<div class="pointer-events-none absolute right-20 top-0 h-full w-20
            bg-gradient-to-l from-cream2 via-cream2 to-transparent"></div>

<!-- BOUTON INDICATEUR SCROLL (TOGGLE) -->
<button id="scrollHintBtn"
  data-direction="right"
  onclick="toggleScrollTabs()"
  class="absolute right-16 top-1/2 -translate-y-1/2
         w-10 h-10 flex items-center justify-center
         bg-white border border-black/10 shadow-soft
         hover:bg-blue-50 transition
         md:hidden z-40"
  aria-label="Faire défiler les onglets">

  <!-- WRAPPER = animation translateX -->
  <span class="scroll-hint-wiggle inline-flex">
    <!-- SVG = rotation -->
    <svg id="scrollHintIcon"
      class="w-5 h-5 text-black/60 transition-transform duration-200"
      xmlns="http://www.w3.org/2000/svg" fill="none"
      viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
      <path stroke-linecap="round" stroke-linejoin="round"
        d="M8 12h8m0 0-3-3m3 3-3 3" />
    </svg>
  </span>
</button>