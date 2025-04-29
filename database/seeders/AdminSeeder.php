<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
             if (!User::where('email', 'admin@admin.com')->exists()) {
                $user = new User();
                $user->name = 'admin';
                $user->email = 'admin@admin.com';
                $user->password = bcrypt('123456'); 
                $user->role = 'admin'; 
                $user->created_by = 0; 
                $user->assign_to = 0; 
                $user->save(); 
            }
    }
}
