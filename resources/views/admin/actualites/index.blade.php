@extends('admin.layout')

@section('content')
<div class="lg:col-span-2 bg-white rounded-lg shadow-sm border border-black/5 flex flex-col">

    <div class="p-6 border-b border-black/5 flex items-center justify-between">
        <h3 class="font-bold text-lg">Toutes les publications</h3>
        <a href="{{ route('admin.actualites.create') }}" class="bg-rdcBlue text-white px-4 py-2 text-sm font-bold uppercase tracking-wide hover:bg-rdcBlue/90 transition rounded">
            Ajouter une actualité
        </a>
    </div>

    @if(session('success'))
        <div class="p-4 m-4 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm">
            <thead class="bg-gray-50 text-black/60 uppercase tracking-wider text-xs">
                <tr>
                    <th class="px-6 py-4 font-semibold">Titre</th>
                    <th class="px-6 py-4 font-semibold">Catégorie</th>
                    <th class="px-6 py-4 font-semibold">Statut</th>
                    <th class="px-6 py-4 font-semibold">Date de publication</th>
                    <th class="px-6 py-4 font-semibold text-right">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-100">
                @foreach($actualites as $actualite)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 font-medium text-ink">
                            <a href="{{ route('admin.actualites.show', $actualite) }}" class="hover:text-rdcBlue">{{ $actualite->title }}</a>
                        </td>

                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-50 text-rdcBlue">
                                {{ $actualite->categorie->name ?? 'N/A' }}
                            </span>
                        </td>

                        <td class="px-6 py-4">
                            <div class="flex items-center gap-1.5">
                                @if($actualite->status == 'published')
                                    <span class="w-2 h-2 rounded-full bg-green-500"></span>
                                    <span>Publié</span>
                                @else
                                    <span class="w-2 h-2 rounded-full bg-gray-300"></span>
                                    <span>Brouillon</span>
                                @endif
                            </div>
                        </td>

                        <td class="px-6 py-4 text-black/50">{{ $actualite->published_at ? $actualite->published_at->format('d M Y') : '--' }}</td>

                        <td class="px-6 py-4 text-right">
                             <a href="{{ route('admin.actualites.edit', $actualite) }}" class="text-black/40 hover:text-rdcBlue p-1">✏️</a>
                             <form action="{{ route('admin.actualites.destroy', $actualite) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-black/40 hover:text-rdcRed p-1" onclick="return confirm('Êtes-vous sûr ?')">🗑️</button>
                            </form>
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
@endsection
