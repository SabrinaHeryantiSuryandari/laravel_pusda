<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            
        ]);
        // $user = [
        //     [
        //         'username' => 'admin',
        //        'name'=>'ini akun Admin',
        //        'email'=>'admin@example.com',
        //        'password'=> bcrypt('admin'),
        //     ],
        // ];
        // foreach ($user as $key => $value) {
        //     User::create($value);
        // }
    
    }
}
