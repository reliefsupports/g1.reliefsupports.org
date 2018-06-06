<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'API Provider',
            'email' => 'api@reliefsupports.org',
            'password' => bcrypt('zaq1@WSXCDE#'),
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@reliefsupports.org',
            'password' => bcrypt('cde3@WSXZAQ!'),
        ]);
    }
}
