<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $data = array_merge([
            $this->crud('users'),
        ]);

        // create roles and assign existing permissions
       
        $role1 = Role::create(['name' => 'Super-Admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider
        $role1->givePermissionTo($this->crud('users'));

        $role2 = Role::create(['name' => 'Admin']);
    
        $user = \App\Models\User::factory()->create([
            'name' => 'Super-Admin',
            'email' => 'echokemediasuper_admin@gmail.com',
            'username' => 'Sudo',
    
        ]);
        $user->assignRole($role1);
        
        $user = \App\Models\User::factory()->create([
            'name' => 'Admin ',
            'email' => 'echokemediaadmin@gmail.com',
            'username' => 'Media Creator',
        ]);
        $user->assignRole($role2);
    }

    public function crud($model, array $actions = null)
    {
        $list = [];
        foreach (["create", "read", "update", "delete"] as $action) {
           
        }
        return $list;
    }

}
