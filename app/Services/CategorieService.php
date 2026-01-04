<?php

namespace App\Services;

use App\Models\Categorie;
use Illuminate\Support\Str;

class CategorieService
{
    public function getCategories()
    {
        return Categorie::with('parent')->withCount('actualites')->orderBy('name')->paginate(10);
    }

    public function getAllCategories()
    {
        return Categorie::with('parent')->withCount('actualites')->orderBy('name')->get();
    }

    public function createCategorie(array $data): Categorie
    {
        $data['slug'] = Str::slug($data['name']);
        $attributes = ['name' => $data['name'], 'slug' => $data['slug']];
        if (!empty($data['parent_id'])) {
            $attributes['parent_id'] = $data['parent_id'];
        }
        return Categorie::create($attributes);
    }

    public function updateCategorie(Categorie $categorie, array $data): bool
    {
        if (isset($data['name'])) {
            $data['slug'] = Str::slug($data['name']);
        }
        if (isset($data['parent_id']) && $data['parent_id'] == $categorie->id) {
            unset($data['parent_id']);
        }
        return $categorie->update($data);
    }

    public function deleteCategorie(Categorie $categorie): bool
    {
        return $categorie->delete();
    }
}
