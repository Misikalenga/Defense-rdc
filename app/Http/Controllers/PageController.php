<?php

namespace App\Http\Controllers;

use App\Services\ActualiteService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $actualiteService;

    public function __construct(ActualiteService $actualiteService)
    {
        $this->actualiteService = $actualiteService;
    }

    public function actualites()
    {
        $actualites = $this->actualiteService->getPublishedActualites();
        return view('actualites', compact('actualites'));
    }
}
