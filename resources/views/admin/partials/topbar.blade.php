<!-- Top Bar Updated for Laravel User Menu -->
<header class="h-16 bg-white border-b border-black/5 flex items-center justify-between px-4 lg:px-8 z-10">
    <div class="flex items-center gap-4">
        <button class="md:hidden p-2 text-ink" onclick="toggleSidebar()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>

        <h2 class="text-lg font-bold">@yield('title', "Vue d'ensemble")</h2>
    </div>

    <div class="flex items-center gap-4">

        <!-- Voir le site public -->
        <a href="{{ route('home') }}" class="hidden md:flex items-center gap-2 text-xs font-semibold uppercase tracking-wide text-rdcBlue border border-rdcBlue/20 px-3 py-1.5 rounded hover:bg-rdcBlue/5 transition">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
            </svg>
            Voir le site
        </a>

        <!-- Notification Bell -->
        <div class="relative cursor-pointer hover:bg-black/5 p-1.5 rounded-full transition">
            <span class="absolute top-1 right-1 w-2 h-2 bg-rdcRed rounded-full border border-white"></span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-black/60">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
            </svg>
        </div>

        <!-- USER PROFILE DROPDOWN -->
        <div class="relative">
            <button onclick="toggleUserMenu()" class="flex items-center gap-2 focus:outline-none ml-2">

                <!-- Avatar dynamique -->
                <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=0B1220&color=fff&size=128" alt="Profile" class="w-9 h-9 rounded-full border border-black/10 object-cover shadow-sm hover:ring-2 hover:ring-rdcBlue/20 transition">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-black/40 hidden md:block">
                    <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>
            </button>

            <!-- Dropdown Menu -->
            <div id="userMenuDropdown" class="hidden absolute right-0 mt-3 w-56 bg-white rounded-lg shadow-xl border border-black/5 py-2 z-50">

                <!-- HEADER UTILISATEUR -->
                <div class="px-4 py-3 border-b border-black/5 mb-1">
                    <p class="text-sm font-bold text-ink">{{ Auth::user()->name }}</p>
                    <p class="text-xs text-black/50 truncate">{{ Auth::user()->email }}</p>
                </div>

                <!-- Profil -->
                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-black/70 hover:bg-gray-50 hover:text-rdcBlue transition flex items-center gap-2">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                    Mon Profil
                </a>

                <!-- Logout -->
                <form method="POST" action="{{ route('logout') }}" class="block w-full">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 text-sm text-rdcRed font-medium hover:bg-rdcRed/5 transition flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6A2.25 2.25 0 0 0 5.25 5.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                        </svg>
                        Déconnexion
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>

