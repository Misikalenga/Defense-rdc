@extends('admin.layout')

@section('title', 'Tableau de bord')

@section('content')

<!-- Quick Stats -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

    <div class="bg-white p-5 rounded-lg shadow-sm border border-black/5 flex items-center gap-4">
        <div class="w-12 h-12 rounded-full bg-rdcBlue/10 text-rdcBlue flex items-center justify-center">
            📄
        </div>
        <div>
            <p class="text-xs text-black/50 uppercase font-bold tracking-wider">Articles Publiés</p>
            <p class="text-2xl font-bold">142</p>
        </div>
    </div>

    <div class="bg-white p-5 rounded-lg shadow-sm border border-black/5 flex items-center gap-4">
        <div class="w-12 h-12 rounded-full bg-rdcGold/20 text-ink flex items-center justify-center">
            📁
        </div>
        <div>
            <p class="text-xs text-black/50 uppercase font-bold tracking-wider">Documents PDF</p>
            <p class="text-2xl font-bold">58</p>
        </div>
    </div>

    <div class="bg-white p-5 rounded-lg shadow-sm border border-black/5 flex items-center gap-4">
        <div class="w-12 h-12 rounded-full bg-green-100 text-green-600 flex items-center justify-center">
            👁️
        </div>
        <div>
            <p class="text-xs text-black/50 uppercase font-bold tracking-wider">Visites (24h)</p>
            <p class="text-2xl font-bold">2.4k</p>
        </div>
    </div>

    <div class="bg-white p-5 rounded-lg shadow-sm border border-black/5 flex items-center gap-4">
        <div class="w-12 h-12 rounded-full bg-gray-100 text-gray-600 flex items-center justify-center">
            ⏳
        </div>
        <div>
            <p class="text-xs text-black/50 uppercase font-bold tracking-wider">En Attente</p>
            <p class="text-2xl font-bold">3</p>
        </div>
    </div>

</div>

<!-- Content Split -->
<div class="grid lg:grid-cols-3 gap-8">

    <!-- Publications -->
    <div class="lg:col-span-2 bg-white rounded-lg shadow-sm border border-black/5 flex flex-col">

        <div class="p-6 border-b border-black/5 flex items-center justify-between">
            <h3 class="font-bold text-lg">Dernières publications</h3>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-gray-50 text-black/60 uppercase tracking-wider text-xs">
                    <tr>
                        <th class="px-6 py-4">Titre</th>
                        <th class="px-6 py-4">Catégorie</th>
                        <th class="px-6 py-4">Statut</th>
                        <th class="px-6 py-4">Date</th>
                        <th class="px-6 py-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($actualites as $actualite)
                    <tr>
                        <td class="px-6 py-4 font-medium">
                            {{ $actualite->title }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $actualite->categorie->name ?? '—' }}
                        </td>
                        <td class="px-6 py-4">
                            {{ ucfirst($actualite->status) }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $actualite->published_at?->format('d/m/Y') ?? '—' }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('admin.actualites.edit', $actualite) }}">✏️</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="p-4">
            {{ $actualites->links() }}
        </div>

    </div>

    <!-- Right Column -->
    <div class="flex flex-col gap-6">

        <!-- Contact Settings -->
        <div class="bg-white rounded-lg shadow-sm border border-black/5 p-6">
            <h3 class="font-bold text-base mb-4">Informations de Contact</h3>

            @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
            @endif


            <form action="{{ route('admin.settings.update') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-sm font-medium">Email</label>
                    <input type="email" name="contact_email" value="{{ setting('contact.email') }}" class="mt-1 w-full border rounded px-3 py-2">
                </div>

                <div>
                    <label class="block text-sm font-medium">Adresse</label>
                    <textarea name="contact_address" rows="3" class="mt-1 w-full border rounded px-3 py-2">{{ setting('contact.address') }}</textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium">Téléphone</label>
                    <input type="text" name="contact_phone" value="{{ setting('contact.phone') }}" class="mt-1 w-full border rounded px-3 py-2">
                </div>

                <div class="text-right">
                    <button class="bg-rdcBlue text-white px-4 py-2 rounded">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>

    </div>

</div>

@endsection

