<?php

namespace App\Services;

use App\Models\CabinetMember;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class CabinetMemberService
{
    /**
     * Get all cabinet members for the admin index.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllMembers()
    {
        return CabinetMember::orderBy('order_index', 'asc')->get();
    }

    /**
     * Get active cabinet members for the public page.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getActiveMembers()
    {
        return CabinetMember::where('is_active', true)
            ->orderBy('order_index', 'asc')
            ->get();
    }

    /**
     * Create a new cabinet member.
     *
     * @param array $data
     * @return CabinetMember
     */
    public function createMember(array $data): CabinetMember
    {
        if (isset($data['photo'])) {
            $data['photo_path'] = $this->handleFileUpload($data['photo']);
            unset($data['photo']);
        }

        if (!empty($data['biography'])) {
            $data['biography'] = clean($data['biography']);
        }

        $data['slug'] = Str::slug($data['name']);

        return CabinetMember::create($data);
    }

    /**
     * Update a cabinet member.
     *
     * @param CabinetMember $member
     * @param array $data
     * @return CabinetMember
     */
    public function updateMember(CabinetMember $member, array $data): CabinetMember
    {
        if (isset($data['photo'])) {
            // Delete old photo if it exists
            if ($member->photo_path) {
                Storage::disk('public')->delete($member->photo_path);
            }
            $data['photo_path'] = $this->handleFileUpload($data['photo']);
            unset($data['photo']);
        }
        
        if (isset($data['name'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        if (!empty($data['biography'])) {
            $data['biography'] = clean($data['biography']);
        }

        $member->update($data);
        return $member;
    }

    /**
     * Delete a cabinet member.
     *
     * @param CabinetMember $member
     * @return void
     */
    public function deleteMember(CabinetMember $member): void
    {
        if ($member->photo_path) {
            Storage::disk('public')->delete($member->photo_path);
        }
        $member->delete();
    }

    /**
     * Handle the file upload.
     *
     * @param UploadedFile $file
     * @return string The path to the stored file.
     */
    private function handleFileUpload(UploadedFile $file): string
    {
        return $file->store('cabinet_photos', 'public');
    }
}
