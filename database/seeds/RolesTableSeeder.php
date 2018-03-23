<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'User',
            'Provider',
        ];
        
        foreach($roles as $key => $role){
            DB::table('roles')->insert([
                'id' => $key+1,
                'description' => $role,
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d')
            ]);    
        }
        
    }
}
