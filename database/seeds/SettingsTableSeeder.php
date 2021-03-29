<?php

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
        \App\Setting::create([

            'site_name'=>"laravel's Blog",
            'address'=>'Nepal,Biratchowk',
            'contact_number'=>'9816342254',
            'contact_email'=>'esor.poudel@gmail.com',
            'about'=>'this is about field'

        ]);
    }
}
