<?php

use Illuminate\Database\Seeder;

class seed_users_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Steve George',
            'email' => 'edu@pagerange.com',
            'password' => bcrypt('mypass'),
            'is_admin' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'Tom Jones',
            'email' => 'tom@example.com',
            'password' => bcrypt('mypass'),
            'is_admin' => 1
        ]);
    }
}
