<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ActualiteService;
use App\Models\Categorie;

class AdminController extends Controller
{
    public function dashboard(ActualiteService $actualiteService)
    {
        $actualites = $actualiteService->getActualites();
        $categories = Categorie::withCount('actualites')->orderBy('name')->get();
        return view('admin.dashboard', compact('actualites', 'categories'));
    }
}
