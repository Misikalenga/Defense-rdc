<script>
    window.pageTabs = ["actualites", "annonces", "decisions", "discours", "operations"];
</script>

<!-- ONGLET SCROLLABLE -->
<div id="tabsScroller"  class="max-w-[75%]  relative overflow-x-auto no-scrollbar pr-8">
  <div class="flex items-center gap-3 min-w-max">

    <button onclick="switchTab('actualites')" id="tab-actualites"
      class="proj-tab active px-4 py-2 bg-white border border-black/10 text-black/70 hover:bg-blue-50 text-sm font-bold uppercase tracking-wide rounded-sm transition">
      actualités
    </button>

    <button onclick="switchTab('annonces')" id="tab-annonces"
      class="proj-tab px-4 py-2 bg-white border border-black/10 text-black/70 hover:bg-blue-50 text-sm font-bold uppercase tracking-wide rounded-sm transition">
      annonces
    </button>

    <button onclick="switchTab('decisions')" id="tab-decisions"
      class="proj-tab px-4 py-2 bg-white border border-black/10 text-black/70 hover:bg-blue-50 text-sm font-bold uppercase tracking-wide rounded-sm transition">
      decisions
    </button>

    <button onclick="switchTab('discours')" id="tab-discours"
      class="proj-tab px-4 py-2 bg-white border border-black/10 text-black/70 hover:bg-blue-50 text-sm font-bold uppercase tracking-wide rounded-sm transition">
      discours
    </button>

    <button onclick="switchTab('operations')" id="tab-operations"
      class="proj-tab px-4 py-2 bg-white border border-black/10 text-black/70 hover:bg-blue-50 text-sm font-bold uppercase tracking-wide rounded-sm transition">
      operations
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



<!-- BOUTON RECHERCHE / FERMER (loupe -> X via CSS .open) -->
<button id="searchToggleBtn" onclick="toggleSearchPanel()"
  class="absolute right-4 top-1/2 -translate-y-1/2
         w-10 h-10 flex items-center justify-center
         bg-white border border-black/10 shadow-soft
         hover:bg-blue-50 transition z-50"
  aria-label="Rechercher">

  <!-- LOUPE -->
  <svg class="icon-search w-5 h-5 text-black/60"
    xmlns="http://www.w3.org/2000/svg" fill="none"
    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
    <path stroke-linecap="round" stroke-linejoin="round"
      d="m21 21-4.3-4.3m1.8-5.2a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
  </svg>

  <!-- X -->
  <svg class="icon-close w-5 h-5 text-black/60"
    xmlns="http://www.w3.org/2000/svg" fill="none"
    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
    <path stroke-linecap="round" stroke-linejoin="round"
      d="M6 18L18 6M6 6l12 12" />
  </svg>
</button>

<!-- PANNEAU RECHERCHE : ABSOLUTE sous la barre (ne pousse pas le contenu) -->
<div id="searchPanel"
  class="hidden absolute left-0 right-0 top-full mt-[4px] bg-white border border-black/10 shadow-soft animate-fade-in z-40">

  <div class="max-w-7xl mx-auto px-4 lg:px-6 py-4">
    <div class="grid md:grid-cols-12 gap-4 items-end">

      <div class="md:col-span-9">
        <label class="text-xs font-bold uppercase tracking-widest text-black/60">
          Recherche
        </label>
        <input id="searchInput" type="text" placeholder="Titre du projet, mot-clé, province…" class="mt-1 w-full border border-black/20 px-3 py-2 text-sm focus:outline-none focus:border-rdcBlue"
          oninput="applySearch()" />
      </div>

    </div>
  </div>
</div>