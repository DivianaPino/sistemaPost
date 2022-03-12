<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use Spatie\Permission\Models\Role;




class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> "Admin",
            'email'=> "admin@gmail.com",
            'password'=>bcrypt('123456789'),
        ])->assignRole('Admin');
        

        $users=User::factory(5)->create();

        foreach($users as $user)
        {
           $user->assignRole('User');
        }  

            
    }
}
