<?php

namespace App\Services;

use App\Models\Categorie;
use Illuminate\Support\Str;

class CategorieService
{
    public function getCategories()
    {
        return Categorie::latest()->paginate(10);
    }

    public function getAllCategories()
    {
        return Categorie::all();
    }


    public function createCategorie(array $data): Categorie
    {
        $data['slug'] = Str::slug($data['name']);
        return Categorie::create($data);
    }

    public function updateCategorie(Categorie $categorie, array $data): bool
    {
        if (isset($data['name'])) {
            $data['slug'] = Str::slug($data['name']);
        }
        return $categorie->update($data);
    }

    public function deleteCategorie(Categorie $categorie): bool
    {
        return $categorie->delete();
    }
}
