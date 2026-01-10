<?php

namespace App\Services;

use App\Models\Projet;
use Illuminate\Support\Str;

class ProjetService
{
    public function getProjets()
    {
        return Projet::latest()->paginate(10);
    }

    public function getPublishedProjets()
    {
        return Projet::where('status', 'published')->latest('published_at')->get();
    }

    public function createProjet(array $data): Projet
    {
        $data['slug'] = Str::slug($data['title']);

        if (!empty($data['content'])) {
            $data['content'] = clean($data['content']);
        }

        return Projet::create($data);
    }

    public function updateProjet(Projet $projet, array $data): bool
    {
        if (isset($data['title'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        if (!empty($data['content'])) {
            $data['content'] = clean($data['content']);
        }
        
        return $projet->update($data);
    }

    public function deleteProjet(Projet $projet): bool
    {
        return $projet->delete();
    }
}
