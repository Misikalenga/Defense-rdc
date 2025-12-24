<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'categorie_id',
        'status',
        'published_at',
        'views',
        'shares',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
