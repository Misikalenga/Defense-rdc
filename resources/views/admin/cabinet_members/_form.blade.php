@csrf
<div class="space-y-4">
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Nom complet</label>
        <input type="text" name="name" id="name" value="{{ old('name', $member->name ?? '') }}" required
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        @error('name')<span class="text-xs text-red-500">{{ $message }}</span>@enderror
    </div>

    <div>
        <label for="official_function" class="block text-sm font-medium text-gray-700">Fonction officielle</label>
        <input type="text" name="official_function" id="official_function" value="{{ old('official_function', $member->official_function ?? '') }}" required
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        @error('official_function')<span class="text-xs text-red-500">{{ $message }}</span>@enderror
    </div>

    <x-ckeditor-editor id="biography" name="biography" label="Biographie" :value="old('biography', $member->biography ?? '')" />
    @error('biography')<span class="text-xs text-red-500">{{ $message }}</span>@enderror

    <div>
        <label for="order_index" class="block text-sm font-medium text-gray-700">Ordre d'affichage</label>
        <input type="number" name="order_index" id="order_index" value="{{ old('order_index', $member->order_index ?? 0) }}" required
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        @error('order_index')<span class="text-xs text-red-500">{{ $message }}</span>@enderror
    </div>

    <div>
        <label for="photo" class="block text-sm font-medium text-gray-700">Photo</label>
        <input type="file" name="photo" id="photo" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
        @error('photo')<span class="text-xs text-red-500">{{ $message }}</span>@enderror

        @if(isset($member) && $member->photo_path)
            <div class="mt-2">
                <img src="{{ Storage::url($member->photo_path) }}" alt="Photo de {{ $member->name }}" class="h-20 w-20 object-cover rounded-md">
                <p class="text-xs text-gray-500 mt-1">Photo actuelle</p>
            </div>
        @endif
    </div>
    
    <div class="flex items-center">
        <input type="checkbox" name="is_active" id="is_active" value="1" 
            @if(isset($member))
                {{ old('is_active', $member->is_active) ? 'checked' : '' }}
            @else
                {{ old('is_active', true) ? 'checked' : '' }}
            @endif
            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
        <label for="is_active" class="ml-2 block text-sm text-gray-900">Afficher publiquement</label>
    </div>

</div>

<div class="pt-5">
    <div class="flex justify-end">
        <a href="{{ route('admin.cabinet-members.index') }}"
           class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            Annuler
        </a>
        <button type="submit"
                class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            Enregistrer
        </button>
    </div>
</div>

