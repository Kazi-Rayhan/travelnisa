<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'Admin'=>'Administrator',
            'User'=>'User',
        ];
        foreach ($roles as $key=>$value) {
            Role::create([
                'name' => $key,
                'display_name'=>$value,
            ]);
        }
    }
}
