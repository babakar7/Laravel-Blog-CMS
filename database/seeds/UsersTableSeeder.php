<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        
        
       $user = App\User::create([
            
           'name' => 'Babakar',
            
            'email' => 'bbd2501@gmail.com',
            
            'password' =>  bcrypt('password'),
            
            'admin' => 1
            
            
        ]);
        
        
        
        
        App\Profile::create([
             
            
            'user_id' => $user->id,
            
            'avatar' => 'uploads/avatar/1.png',
            
            'about' => 'Lorem Ipsum',
            
            'facebook' => 'facebook.com'
            
            
        ]);
    }
}
