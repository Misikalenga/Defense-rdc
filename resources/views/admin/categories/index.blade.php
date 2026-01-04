@extends('admin.layout')

@section('content')
<div class="space-y-6 animate-fade-in">
  <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
    <div>
      <h2 class="text-2xl font-bold text-slate-800">Catégories</h2>
      <p class="text-slate-500 text-sm mt-1">Gérez la structure de vos contenus</p>
    </div>
    <a href="{{ route('admin.categories.create') }}" class="flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg shadow-sm transition-all active:scale-95">
      ➕ Nouvelle Catégorie
    </a>
  </div>

  <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
    <div class="p-4 border-b border-slate-100 bg-slate-50/50 flex gap-4">
      <div class="relative flex-1 max-w-md">
        <svg class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7" /><path d="M21 21l-4.35-4.35" /></svg>
        <input type="text" placeholder="Rechercher une catégorie..." class="w-full pl-10 pr-4 py-2 text-sm border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
      </div>
    </div>

    <div class="overflow-x-auto">
      <table class="w-full text-left text-sm text-slate-600">
        <thead class="bg-slate-50 text-xs uppercase font-semibold text-slate-500">
          <tr>
            <th class="px-6 py-4">Nom</th>
            <th class="px-6 py-4">Slug</th>
            <th class="px-6 py-4">Parent</th>
            <th class="px-6 py-4 text-center">Articles</th>
            <th class="px-6 py-4 text-right">Actions</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
          @foreach($categories as $cat)
            <tr class="hover:bg-slate-50/80 transition-colors group">
              <td class="px-6 py-4 font-medium text-slate-900">{{ $cat->name }}</td>
              <td class="px-6 py-4 font-mono text-xs text-slate-500">
                <span class="bg-slate-100 px-2 py-1 rounded border border-slate-200">/{{ $cat->slug }}</span>
              </td>
              <td class="px-6 py-4">
                @if($cat->parent)
                  <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700">{{ $cat->parent->name }}</span>
                @else
                  <span class="text-slate-400 italic text-xs">Racine</span>
                @endif
              </td>
              <td class="px-6 py-4 text-center">
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $cat->actualites_count > 0 ? 'bg-emerald-50 text-emerald-700' : 'bg-slate-100 text-slate-500' }}">{{ $cat->actualites_count }} articles</span>
              </td>
              <td class="px-6 py-4 text-right">
                <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                  <a href="{{ route('admin.categories.edit', $cat) }}" class="p-1 text-slate-400 hover:text-blue-600 transition-colors" title="Éditer">✏️</a>
                  <form action="{{ route('admin.categories.destroy', $cat) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="p-1 text-slate-400 hover:text-red-600 transition-colors" onclick="return confirm('Êtes-vous sûr ?')">🗑️</button>
                  </form>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="px-6 py-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
      <span>Affichage de 1 à {{ $categories->count() }} sur {{ $categories->count() }} résultats</span>
      <div class="flex gap-1">
        <button class="px-3 py-1 border rounded hover:bg-slate-50 disabled:opacity-50" disabled>Préc.</button>
        <button class="px-3 py-1 border rounded hover:bg-slate-50 disabled:opacity-50" disabled>Suiv.</button>
      </div>
    </div>
  </div>
</div>

@endsection
