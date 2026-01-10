@props(['id', 'name', 'value' => '', 'label' => null])

<div>
    @if ($label)
        <label for="{{ $id }}" class="text-sm font-medium text-black/70">{{ $label }}</label>
    @endif
    <textarea id="{{ $id }}" name="{{ $name }}">{{ $value }}</textarea>
</div>

@push('scripts')
<script>
    if (typeof CKEDITOR !== 'undefined') {
        CKEDITOR.replace('{{ $id }}', {
            // Configuration de base pour CKEditor 4
            // Vous pouvez ajouter des plugins, des boutons, etc. ici.
            // Exemple: extraPlugins: 'image2,codesnippet',
            // toolbar: [ ... ]
            // Note: Make sure the plugins you want to use are included in your CKEditor 4 build.
            versionCheck: false
        });
    } else {
        console.error('CKEDITOR is not defined. Ensure ckeditor.js is loaded correctly.');
    }
</script>
@endpush
