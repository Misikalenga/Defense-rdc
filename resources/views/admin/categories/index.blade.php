@extends('admin.layout')

@section('content')
<div class="lg:col-span-2 bg-white rounded-lg shadow-sm border border-black/5 flex flex-col">

    <div class="p-6 border-b border-black/5 flex items-center justify-between">
        <h3 class="font-bold text-lg">Catégories d'actualités</h3>
        <a href="{{ route('admin.categories.create') }}" class="bg-rdcBlue text-white px-4 py-2 text-sm font-bold uppercase tracking-wide hover:bg-rdcBlue/90 transition rounded">
            Ajouter une catégorie
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
                    <th class="px-6 py-4 font-semibold">Nom</th>
                    <th class="px-6 py-4 font-semibold">Slug</th>
                    <th class="px-6 py-4 font-semibold text-right">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-100">
                @foreach($categories as $categorie)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-4 font-medium text-ink">
                            {{ $categorie->name }}
                        </td>
                        <td class="px-6 py-4 text-black/50">{{ $categorie->slug }}</td>

                        <td class="px-6 py-4 text-right">
                             <a href="{{ route('admin.categories.edit', $categorie) }}" class="text-black/40 hover:text-rdcBlue p-1">✏️</a>
                             <form action="{{ route('admin.categories.destroy', $categorie) }}" method="POST" class="inline">
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
        {{ $categories->links() }}
    </div>
</div>
@endsection
