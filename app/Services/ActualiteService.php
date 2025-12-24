<?php

namespace App\Services;

use App\Models\Actualite;
use Illuminate\Support\Str;

class ActualiteService
{
    public function getActualites()
    {
        return Actualite::latest()->paginate(10);
    }

    public function getPublishedActualites()
    {
        return Actualite::where('status', 'published')->latest('published_at')->get();
    }

    public function createActualite(array $data): Actualite
    {
        $data['slug'] = Str::slug($data['title']);
        return Actualite::create($data);
    }

    public function updateActualite(Actualite $actualite, array $data): bool
    {
        if (isset($data['title'])) {
            $data['slug'] = Str::slug($data['title']);
        }
        return $actualite->update($data);
    }

    public function deleteActualite(Actualite $actualite): bool
    {
        return $actualite->delete();
    }
}
