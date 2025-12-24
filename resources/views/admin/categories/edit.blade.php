@extends('admin.layout')

@section('content')
<div class="bg-white rounded-lg shadow-sm border border-black/5 p-6">
    <h3 class="font-bold text-lg mb-4">Modifier la catégorie</h3>

    <form action="{{ route('admin.categories.update', $categorie) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label for="name" class="text-sm font-medium text-black/70">Nom de la catégorie</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full px-3 py-2 border border-black/10 rounded-md shadow-sm focus:outline-none focus:ring-rdcBlue focus:border-rdcBlue sm:text-sm" value="{{ $categorie->name }}" required>
        </div>

        <div class="flex justify-end pt-4">
            <button type="submit" class="bg-rdcBlue text-white px-4 py-2 text-sm font-bold uppercase tracking-wide hover:bg-rdcBlue/90 transition rounded">
                Mettre à jour
            </button>
        </div>
    </form>
</div>
@endsection
