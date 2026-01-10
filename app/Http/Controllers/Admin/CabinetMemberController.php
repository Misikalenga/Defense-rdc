<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CabinetMember;
use App\Services\CabinetMemberService;
use App\Http\Requests\Admin\StoreCabinetMemberRequest;
use App\Http\Requests\Admin\UpdateCabinetMemberRequest;

class CabinetMemberController extends Controller
{
    protected $cabinetMemberService;

    public function __construct(CabinetMemberService $cabinetMemberService)
    {
        $this->cabinetMemberService = $cabinetMemberService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = $this->cabinetMemberService->getAllMembers();
        return view('admin.cabinet_members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cabinet_members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCabinetMemberRequest $request)
    {
        $data = $request->validated();
        
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo');
        }

        // Assurer que is_active est bien un booléen
        $data['is_active'] = $request->has('is_active');

        $this->cabinetMemberService->createMember($data);

        return redirect()->route('admin.cabinet-members.index')
                         ->with('success', 'Membre du cabinet créé avec succès.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CabinetMember $cabinetMember)
    {
        return view('admin.cabinet_members.edit', compact('cabinetMember'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCabinetMemberRequest $request, CabinetMember $cabinetMember)
    {
        $data = $request->validated();

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo');
        }

        // Assurer que is_active est bien un booléen
        $data['is_active'] = $request->has('is_active');

        $this->cabinetMemberService->updateMember($cabinetMember, $data);

        return redirect()->route('admin.cabinet-members.index')
                         ->with('success', 'Membre du cabinet mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CabinetMember $cabinetMember)
    {
        $this->cabinetMemberService->deleteMember($cabinetMember);

        return redirect()->route('admin.cabinet-members.index')
                         ->with('success', 'Membre du cabinet supprimé avec succès.');
    }
}
