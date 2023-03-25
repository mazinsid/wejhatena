<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '123123123'
        ]);

        $role = Role::create(['name' => 'admin']);

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);

        $user2 = User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => '123123123'
        ]);

        $role2 = Role::create(['name' => 'user']);

        $permissions2 = Permission::pluck('id', 'id')->all();

        $role2->syncPermissions($permissions2);

        $user2->assignRole([$role2->id]);
    }
}
