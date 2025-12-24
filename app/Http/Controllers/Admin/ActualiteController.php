<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Actualite;
use App\Services\ActualiteService;
use App\Services\CategorieService;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    protected $actualiteService;
    protected $categorieService;

    public function __construct(ActualiteService $actualiteService, CategorieService $categorieService)
    {
        $this->actualiteService = $actualiteService;
        $this->categorieService = $categorieService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actualites = $this->actualiteService->getActualites();
        return view('admin.actualites.index', compact('actualites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->categorieService->getAllCategories();
        return view('admin.actualites.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'categorie_id' => 'required|exists:categories,id',
            'status' => 'required|string|in:draft,published',
            'published_at' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('actualites', 'public');
        }

        $this->actualiteService->createActualite($data);

        return redirect()->route('admin.actualites.index')->with('success', 'Actualité créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Actualite $actualite)
    {
        return view('admin.actualites.show', compact('actualite'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Actualite $actualite)
    {
        $categories = $this->categorieService->getAllCategories();
        return view('admin.actualites.edit', compact('actualite', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Actualite $actualite)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'categorie_id' => 'required|exists:categories,id',
            'status' => 'required|string|in:draft,published',
            'published_at' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('actualites', 'public');
        }

        $this->actualiteService->updateActualite($actualite, $data);

        return redirect()->route('admin.actualites.index')->with('success', 'Actualité mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Actualite $actualite)
    {
        $this->actualiteService->deleteActualite($actualite);
        return redirect()->route('admin.actualites.index')->with('success', 'Actualité supprimée avec succès.');
    }
}
