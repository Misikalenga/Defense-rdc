<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Administration')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
                        ink: "#0B1220",
                    },
                    boxShadow: {
                        soft: "0 8px 20px rgba(11,18,32,0.08)",
                    },
                },
            }
        }
    </script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        .sidebar-link.active {
            background-color: rgba(255, 255, 255, 0.1);
            border-left: 4px solid #FCD116;
        }
    </style>

    @stack('styles')
</head>

<body class="bg-gray-50 text-ink antialiased flex h-screen overflow-hidden">

    {{-- SIDEBAR --}}
    @include('admin.partials.sidebar')

    <!-- MOBILE OVERLAY -->
    <div id="sidebarOverlay" class="fixed inset-0 bg-black/50 z-20 hidden md:hidden glass transition-opacity" onclick="toggleSidebar()"></div>

    {{-- MAIN CONTENT --}}
    <main class="flex-1 flex flex-col h-screen overflow-hidden relative">
        @include('admin.partials.topbar')

        <div class="flex-1 overflow-auto p-4 lg:p-8">
            @yield('content')
        </div>
    </main>

    @stack('scripts')

    <script>
        function toggleSidebar() {
            // Pour le mobile, nous pourrions ajouter une classe pour faire glisser la sidebar
            // Pour l'instant, c'est une structure HTML statique, donc pas d'action JS complexe.
            alert("Le menu mobile s'ouvrirait ici dans une application React/JS complète.");
        }

        // Toggle User Menu Logic
        function toggleUserMenu() {
            const menu = document.getElementById('userMenuDropdown');
            menu.classList.toggle('hidden');
        }

        // Close menu when clicking outside
        window.addEventListener('click', function(e) {
            const menu = document.getElementById('userMenuDropdown');
            const button = document.querySelector('button[onclick="toggleUserMenu()"]');
            
            if (!menu.contains(e.target) && !button.contains(e.target) && !menu.classList.contains('hidden')) {
                menu.classList.add('hidden');
            }
        });
    </script>

</body>
</html>
