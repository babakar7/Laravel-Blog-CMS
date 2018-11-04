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
        //
        
        
        App\Setting::create([
          
            'site_name' => 'My blog',
            
            'address' =>   'My address',
            
            'contact_number' => '00000000',
            
            'contact_email' => 'myemail@email.com'
            
        ]);
    }
}
