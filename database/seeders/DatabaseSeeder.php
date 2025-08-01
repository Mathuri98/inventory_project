<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // seed admin user 

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password'=>'admin123', 
            'is_admin'=>true, 
        ]);


          User::factory()->create([
            'name' => 'User',
            'email' => 'user@example.com',
            'password'=>'user123', 
            'is_admin'=>false, 
        ]);

        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);


         
    }

   
}
