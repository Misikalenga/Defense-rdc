@extends('admin.layout')

@section('content')
<div class="bg-white rounded-lg shadow-sm border border-black/5 p-6">
    <div class="flex items-center justify-between mb-4">
        <h3 class="font-bold text-lg">{{ $actualite->title }}</h3>
        <a href="{{ route('admin.actualites.index') }}" class="text-sm text-black/60 hover:text-rdcBlue">← Retour à la liste</a>
    </div>

    @if($actualite->image)
        <img src="{{ (Str::startsWith($actualite->image, ['http://','https://']) ? $actualite->image : asset('storage/' . $actualite->image)) }}" alt="{{ $actualite->title }}" class="rounded-lg w-full h-64 object-cover mb-4">
    @endif

    <div class="text-sm text-black/70 space-y-2">
        <p><strong class="font-semibold">Catégorie:</strong> {{ $actualite->categorie->name ?? 'N/A' }}</p>
        <p><strong class="font-semibold">Statut:</strong>
            @if($actualite->status == 'published')
                <span class="text-green-600">Publié</span>
            @else
                <span class="text-gray-600">Brouillon</span>
            @endif
        </p>
        <p><strong class="font-semibold">Date de publication:</strong> {{ $actualite->published_at ? $actualite->published_at->format('d/m/Y') : 'N/A' }}</p>
    </div>

    <hr class="my-4">

    <div class="prose max-w-none">
        {!! $actualite->content !!}
    </div>

    <hr class="my-4">

    <a href="{{ route('admin.actualites.edit', $actualite) }}" class="bg-yellow-400 text-white px-4 py-2 text-sm font-bold uppercase tracking-wide hover:bg-yellow-500 transition rounded">
        Modifier
    </a>
</div>
@endsection
