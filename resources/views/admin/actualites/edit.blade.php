@extends('admin.layout')

@section('content')
<div class="bg-white rounded-lg shadow-sm border border-black/5 p-6">
    <h3 class="font-bold text-lg mb-4">Modifier l'actualité</h3>

    <form action="{{ route('admin.actualites.update', $actualite) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label for="title" class="text-sm font-medium text-black/70">Titre</label>
            <input type="text" name="title" id="title" class="mt-1 block w-full px-3 py-2 border border-black/10 rounded-md shadow-sm focus:outline-none focus:ring-rdcBlue focus:border-rdcBlue sm:text-sm" value="{{ $actualite->title }}" required>
        </div>

        <div>
            <label for="content" class="text-sm font-medium text-black/70">Contenu</label>
            <textarea name="content" id="content" rows="5" class="mt-1 block w-full px-3 py-2 border border-black/10 rounded-md shadow-sm focus:outline-none focus:ring-rdcBlue focus:border-rdcBlue sm:text-sm" required>{{ $actualite->content }}</textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="categorie_id" class="text-sm font-medium text-black/70">Catégorie</label>
                <select name="categorie_id" id="categorie_id" class="mt-1 block w-full px-3 py-2 border border-black/10 rounded-md shadow-sm focus:outline-none focus:ring-rdcBlue focus:border-rdcBlue sm:text-sm" required>
                    <option value="">-- Sélectionnez une catégorie --</option>
                    @foreach($categories as $categorie)
                        <option value="{{ $categorie->id }}" @if(old('categorie_id', $actualite->categorie_id) == $categorie->id) selected @endif>{{ $categorie->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="status" class="text-sm font-medium text-black/70">Statut</label>
                <select name="status" id="status" class="mt-1 block w-full px-3 py-2 border border-black/10 rounded-md shadow-sm focus:outline-none focus:ring-rdcBlue focus:border-rdcBlue sm:text-sm" required>
                    <option value="draft" @if($actualite->status == 'draft') selected @endif>Brouillon</option>
                    <option value="published" @if($actualite->status == 'published') selected @endif>Publié</option>
                </select>
            </div>
        </div>

        <div>
            <label for="published_at" class="text-sm font-medium text-black/70">Date de publication</label>
            <input type="date" name="published_at" id="published_at" class="mt-1 block w-full px-3 py-2 border border-black/10 rounded-md shadow-sm focus:outline-none focus:ring-rdcBlue focus:border-rdcBlue sm:text-sm" value="{{ $actualite->published_at ? $actualite->published_at->format('Y-m-d') : '' }}">
        </div>

        <div>
            <label for="image" class="text-sm font-medium text-black/70">Image de couverture</label>
            <input type="file" name="image" id="image" class="mt-1 block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-rdcBlue hover:file:bg-blue-100"/>
            @if($actualite->image)
                <img src="{{ (\Illuminate\Support\Str::startsWith($actualite->image, ['http://','https://']) ? $actualite->image : asset('storage/' . $actualite->image)) }}" class="mt-2 rounded-md h-24">
            @endif
        </div>

        <div class="flex justify-end pt-4">
            <button type="submit" class="bg-rdcBlue text-white px-4 py-2 text-sm font-bold uppercase tracking-wide hover:bg-rdcBlue/90 transition rounded">
                Mettre à jour
            </button>
        </div>
    </form>
</div>
@endsection
