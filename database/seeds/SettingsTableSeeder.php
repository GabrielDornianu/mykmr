<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
          'logo' => 'images/Logo-kmr.png',
          'title' => 'KMR',
          'phone' => '969696969',
          'email' => 'testingkmr@yahoo.com',
          'fax' => 'kmr fax whatever',
          'mobile' => '0000 0000 991',
          'address' => 'Strada sperantei la parter cu fericirea',
          'about' => 'We are going to smash gorilla cheeks'
        ]);
    }
}
