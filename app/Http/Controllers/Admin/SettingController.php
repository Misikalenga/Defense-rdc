<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'contact_email'   => 'nullable|email',
            'contact_phone'   => 'nullable|string',
            'contact_address' => 'nullable|string',
        ]);

        $map = [
            'contact_email'   => 'contact.email',
            'contact_phone'   => 'contact.phone',
            'contact_address' => 'contact.address',
        ];

        foreach ($map as $input => $key) {
            if ($request->filled($input)) {
                Setting::updateOrCreate(
                    ['key' => $key],
                    ['value' => $request->input($input)]
                );
            }
        }

        return back()->with('success', 'Paramètres mis à jour avec succès.');
    }
}
