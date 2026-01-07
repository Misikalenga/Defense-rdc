<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projet;
use App\Services\ProjetService;
use App\Services\CategorieService;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    protected $projetService;
    protected $categorieService;

    public function __construct(ProjetService $projetService, CategorieService $categorieService)
    {
        $this->projetService = $projetService;
        $this->categorieService = $categorieService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projets = $this->projetService->getProjets();
        return view('admin.projets.index', compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->categorieService->getAllCategories();
        return view('admin.projets.create', compact('categories'));
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
            $data['image'] = $request->file('image')->store('projets', 'public');
        }

        $this->projetService->createProjet($data);

        return redirect()->route('admin.projets.index')->with('success', 'Projet créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projet $projet)
    {
        return view('admin.projets.show', compact('projet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projet $projet)
    {
        $categories = $this->categorieService->getAllCategories();
        return view('admin.projets.edit', compact('projet', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projet $projet)
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
            $data['image'] = $request->file('image')->store('projets', 'public');
        }

        $this->projetService->updateProjet($projet, $data);

        return redirect()->route('admin.projets.index')->with('success', 'Projet mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projet $projet)
    {
        $this->projetService->deleteProjet($projet);
        return redirect()->route('admin.projets.index')->with('success', 'Projet supprimé avec succès.');
    }
}