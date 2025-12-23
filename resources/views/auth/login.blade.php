<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Connexion - Administration Défense RDC</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        rdcBlue: "#0073CF"
                        , rdcRed: "#CE1126"
                        , rdcGold: "#FCD116"
                        , cream: "#F7F3E8"
                        , cream2: "#FBF8F0"
                        , ink: "#0B1220"
                    }
                    , fontFamily: {
                        sans: ['Inter', 'sans-serif']
                    , }
                }
            }
        }

    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

    </style>
</head>

<body class="bg-gray-50 text-ink antialiased font-sans h-screen flex overflow-hidden">

    <!-- GAUCHE -->
    <div class="hidden lg:flex lg:w-1/2 bg-ink relative overflow-hidden items-center justify-center">

        <div class="absolute inset-0 z-0 opacity-20">
            <img src="/assets/bcc_kin.jpg" class="w-full h-full object-cover grayscale" alt="Background">
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-ink/80 to-rdcBlue/90 mix-blend-multiply z-0"></div>

        <div class="relative z-10 text-center px-10">
            <div class="w-24 h-24 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-6 border border-white/20 shadow-2xl">
                <img src="{{ asset('assets/logof2.png') }}" alt="Logo" class="w-16 h-16 object-contain">
            </div>
            <h2 class="text-3xl font-bold text-white mb-2">République Démocratique du Congo</h2>
            <p class="text-rdcGold font-medium uppercase tracking-widest text-sm mb-6">Ministère Délégué à la Défense</p>
            <div class="w-16 h-1 bg-white/20 mx-auto rounded-full mb-6"></div>
            <p class="text-white/70 max-w-md mx-auto text-sm leading-relaxed">
                Portail de gestion administrative et de publication des contenus officiels. Accès strictement réservé au personnel autorisé.
            </p>
        </div>

        <div class="absolute bottom-6 left-0 right-0 text-center text-white/30 text-xs">
            &copy; <span id="year"></span> Service Informatique & Presse
        </div>
    </div>

    <!-- DROITE -->
    <div class="w-full lg:w-1/2 flex flex-col justify-center items-center bg-white p-8 relative">

        <a href="/" class="absolute top-8 right-8 text-sm font-medium text-black/50 hover:text-rdcBlue transition flex items-center gap-2">
            Retour au site public
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg>
        </a>

        <div class="w-full max-w-md space-y-8">

            <div class="lg:hidden text-center mb-8">
                <img src="{{ asset('assets/logof2.png') }}" alt="Logo" class="w-16 h-16 mx-auto mb-4">
                <h2 class="text-xl font-bold text-ink">Administration</h2>
                <p class="text-sm text-black/50">Ministère Délégué Défense</p>
            </div>

            <div class="text-left">
                <h1 class="text-3xl font-bold text-gray-900 tracking-tight">Connexion</h1>
                <p class="mt-2 text-sm text-gray-600">
                    Veuillez saisir vos identifiants pour accéder au tableau de bord.
                </p>
            </div>

            <!-- FORMULAIRE -->
            <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
                @csrf

                @if ($errors->any())
                <div class="bg-red-50 text-rdcRed p-3 rounded text-sm mb-4 border border-rdcRed/20">
                    Identifiants incorrects.
                </div>
                @endif

                <div class="space-y-5">

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Adresse Email</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                </svg>
                            </div>
                            <input id="email" name="email" type="email" autocomplete="email" required value="{{ old('email') }}" class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg bg-white focus:ring-2 focus:ring-rdcBlue focus:border-rdcBlue sm:text-sm" placeholder="nom@defense.gouv.cd">
                        </div>
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg bg-white focus:ring-2 focus:ring-rdcBlue focus:border-rdcBlue sm:text-sm" placeholder="••••••••">
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 text-rdcBlue border-gray-300 rounded">
                        <span class="ml-2 text-sm text-gray-900">Se souvenir de moi</span>
                    </label>

                    <a href="{{ route('password.request') }}" class="text-sm font-medium text-rdcBlue hover:text-rdcBlue/80">
                        Mot de passe oublié ?
                    </a>
                </div>

                <button type="submit" class="w-full py-3 px-4 rounded-lg text-white font-bold bg-rdcBlue hover:bg-rdcBlue/90 shadow-lg shadow-rdcBlue/30 transition">
                    Se connecter
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-xs text-gray-400">
                    En cas de problème d'accès, contactez la DSI au <span class="font-semibold text-gray-600">4400</span>.
                </p>
            </div>
        </div>

        <div class="lg:hidden mt-8 text-center text-xs text-black/30">
            &copy; <span id="yearMobile"></span> MDDN RDC
        </div>
    </div>

    <script>
        document.getElementById("year").textContent = new Date().getFullYear();
        document.getElementById("yearMobile").textContent = new Date().getFullYear();

    </script>
</body>
</html>

