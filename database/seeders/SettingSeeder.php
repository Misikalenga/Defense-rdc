<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            ['key' => 'contact.address', 'value' => "Ministère Délégué à la Défense et Anciens Combattants\nBoulevard Colonel Tshatshi, Kinshasa - Gombe"],
            ['key' => 'contact.phone', 'value' => '+243 820 000 000'],
            ['key' => 'contact.email', 'value' => 'contact@defense.gouv.cd'],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(['key' => $setting['key']], ['value' => $setting['value']]);
        }
    }
}
