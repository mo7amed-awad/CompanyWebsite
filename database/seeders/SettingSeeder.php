<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate(['id'=>1],[
            'address'=>'Address 1',
            'phone'=>'01014940640',
            'email'=>'info@info.com',
            'facebook'=>'Facebook',
            'linkedin'=>'Linkedin',
            'twitter'=>'Twitter',
            'instagram'=>'Instagram',
            'youtube'=>'Youtube',

        ]);
    }
}
