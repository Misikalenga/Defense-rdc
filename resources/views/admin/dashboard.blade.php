@extends('admin.layout')

@section('title', 'Tableau de bord')

@section('content')

<!-- Quick Stats -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

    <!-- Stat 1 -->
    <div class="bg-white p-5 rounded-lg shadow-sm border border-black/5 flex items-center gap-4">
        <div class="w-12 h-12 rounded-full bg-rdcBlue/10 text-rdcBlue flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
            </svg>
        </div>
        <div>
            <p class="text-xs text-black/50 uppercase font-bold tracking-wider">Articles Publiés</p>
            <p class="text-2xl font-bold">142</p>
        </div>
    </div>

    <!-- Stat 2 -->
    <div class="bg-white p-5 rounded-lg shadow-sm border border-black/5 flex items-center gap-4">
        <div class="w-12 h-12 rounded-full bg-rdcGold/20 text-ink flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
            </svg>
        </div>
        <div>
            <p class="text-xs text-black/50 uppercase font-bold tracking-wider">Documents PDF</p>
            <p class="text-2xl font-bold">58</p>
        </div>
    </div>

    <!-- Stat 3 -->
    <div class="bg-white p-5 rounded-lg shadow-sm border border-black/5 flex items-center gap-4">
        <div class="w-12 h-12 rounded-full bg-green-100 text-green-600 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
        </div>
        <div>
            <p class="text-xs text-black/50 uppercase font-bold tracking-wider">Visites (24h)</p>
            <p class="text-2xl font-bold">2.4k</p>
        </div>
    </div>

    <!-- Stat 4 -->
    <div class="bg-white p-5 rounded-lg shadow-sm border border-black/5 flex items-center gap-4">
        <div class="w-12 h-12 rounded-full bg-gray-100 text-gray-600 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </div>
        <div>
            <p class="text-xs text-black/50 uppercase font-bold tracking-wider">En Attente</p>
            <p class="text-2xl font-bold">3</p>
        </div>
    </div>

</div>

<!-- Content Split -->
<div class="grid lg:grid-cols-3 gap-8">

    <!-- Main Table (Left 2/3) -->
    <div class="lg:col-span-2 bg-white rounded-lg shadow-sm border border-black/5 flex flex-col">

        <div class="p-6 border-b border-black/5 flex items-center justify-between">
            <h3 class="font-bold text-lg">Dernières publications</h3>
            <div class="flex gap-2">
                <input type="text" placeholder="Rechercher..." class="text-sm px-3 py-1.5 border border-black/10 rounded focus:outline-none focus:border-rdcBlue">
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-gray-50 text-black/60 uppercase tracking-wider text-xs">
                    <tr>
                        <th class="px-6 py-4 font-semibold">Titre</th>
                        <th class="px-6 py-4 font-semibold">Catégorie</th>
                        <th class="px-6 py-4 font-semibold">Statut</th>
                        <th class="px-6 py-4 font-semibold">Date</th>
                        <th class="px-6 py-4 font-semibold text-right">Actions</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-100">

                    <!-- Ligne 1 -->
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 font-medium text-ink">
                            Inspection de la 32ème Région Militaire
                        </td>

                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-green-50 text-green-700">
                                Opération
                            </span>
                        </td>

                        <td class="px-6 py-4">
                            <div class="flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-green-500"></span>
                                <span>Publié</span>
                            </div>
                        </td>

                        <td class="px-6 py-4 text-black/50">02 Déc</td>

                        <td class="px-6 py-4 text-right">
                            <button class="text-black/40 hover:text-rdcBlue p-1">
                                ✏️
                            </button>
                            <button class="text-black/40 hover:text-rdcRed p-1">
                                🗑️
                            </button>
                        </td>
                    </tr>

                    <!-- Ligne 2 -->
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 font-medium text-ink">
                            Réhabilitation Route K-KM
                        </td>

                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-50 text-rdcBlue">
                                Génie
                            </span>
                        </td>

                        <td class="px-6 py-4">
                            <div class="flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-green-500"></span>
                                <span>Publié</span>
                            </div>
                        </td>

                        <td class="px-6 py-4 text-black/50">28 Nov</td>

                        <td class="px-6 py-4 text-right">
                            <button class="text-black/40 hover:text-rdcBlue p-1">✏️</button>
                            <button class="text-black/40 hover:text-rdcRed p-1">🗑️</button>
                        </td>
                    </tr>

                    <!-- Ligne 3 -->
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 font-medium text-ink">
                            Discours Clôture Académique
                        </td>

                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-black/60">
                                Discours
                            </span>
                        </td>

                        <td class="px-6 py-4">
                            <div class="flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-gray-300"></span>
                                <span>Brouillon</span>
                            </div>
                        </td>

                        <td class="px-6 py-4 text-black/50">--</td>

                        <td class="px-6 py-4 text-right">
                            <button class="text-black/40 hover:text-rdcBlue p-1">✏️</button>
                            <button class="text-black/40 hover:text-rdcRed p-1">🗑️</button>
                        </td>
                    </tr>

                    <!-- Ligne 4 -->
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 font-medium text-ink">
                            Décision N°005/MDDN
                        </td>

                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-black/10 text-ink">
                                Document
                            </span>
                        </td>

                        <td class="px-6 py-4">
                            <div class="flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-rdcGold"></span>
                                <span>En Attente</span>
                            </div>
                        </td>

                        <td class="px-6 py-4 text-black/50">26 Nov</td>

                        <td class="px-6 py-4 text-right">
                            <button class="text-black/40 hover:text-rdcBlue p-1">✏️</button>
                            <button class="text-black/40 hover:text-rdcRed p-1">🗑️</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>

    <!-- Actions & Right Column (Right 1/3) -->
    <div class="flex flex-col gap-6">

        <!-- Quick Actions -->
        <div class="bg-gradient-to-br from-rdcBlue to-indigo-900 rounded-lg shadow-lg p-6 text-white">
            <h3 class="font-bold text-lg mb-4">Actions Rapides</h3>
            <div class="flex flex-col gap-3">

                <button class="flex items-center gap-3 bg-white/10 hover:bg-white/20 transition px-4 py-3 rounded-md text-sm font-medium">
                    ➕ Nouvel Article / Actualité
                </button>

                <button class="flex items-center gap-3 bg-white/10 hover:bg-white/20 transition px-4 py-3 rounded-md text-sm font-medium">
                    📄 Uploader Document (PDF)
                </button>

            </div>
        </div>

        <!-- System Status -->
        <div class="bg-white rounded-lg shadow-sm border border-black/5 p-6">
            <h3 class="font-bold text-base mb-4 text-black/80">État du Système</h3>

            <div class="space-y-4">

                <div>
                    <div class="flex justify-between text-xs mb-1">
                        <span class="text-black/60">Stockage (PDF/Images)</span>
                        <span class="font-bold">75%</span>
                    </div>
                    <div class="w-full bg-gray-100 rounded-full h-1.5">
                        <div class="bg-rdcGold h-1.5 rounded-full" style="width: 75%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between text-xs mb-1">
                        <span class="text-black/60">Bande Passante (Mois)</span>
                        <span class="font-bold">45%</span>
                    </div>
                    <div class="w-full bg-gray-100 rounded-full h-1.5">
                        <div class="bg-green-500 h-1.5 rounded-full" style="width: 45%"></div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

@endsection
