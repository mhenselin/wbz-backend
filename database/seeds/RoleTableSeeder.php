<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'title' => 'admin',
            'label' => 'Admin',
        ]);

        DB::table('roles')->insert([
            'title' => 'read all',
            'label' => 'User 1',
        ]);

        DB::table('roles')->insert([
            'title' => 'read own',
            'label' => 'User 2',
        ]);
    }
}
