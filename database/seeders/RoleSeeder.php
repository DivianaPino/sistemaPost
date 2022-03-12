<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1=Role::create(['name'=>'Admin']);
        $role2=Role::create(['name'=>'User']);

        $permission = Permission::create(['name' => 'users.index'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'users.edit'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'users.update'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'users.show'])->syncRoles([$role1]);

        
        $permission = Permission::create(['name' => 'dashboard'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'post.index'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'post.destroy'])->syncRoles([$role1]);
        
        $permission = Permission::create(['name' => 'myPosts.index'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'myPosts.create'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'myPosts.edit'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'myPosts.destroy'])->syncRoles([$role1,$role2]);

        $permission = Permission::create(['name' => 'comments.index'])->syncRoles([$role1,$role2]);
   
        $permission = Permission::create(['name' => 'commentPost.create'])->syncRoles([$role1,$role2]);
        $permission = Permission::create(['name' => 'commentPost.edit'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'commentPost.destroy'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'commentPost.show'])->syncRoles([$role1,$role2]);     
        
        $permission = Permission::create(['name' => 'myComments.index'])->syncRoles([$role1,$role2]);
    }
}
