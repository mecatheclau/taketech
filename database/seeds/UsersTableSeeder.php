<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'id'=>1,
            'firstname'=>'karuganda1',
            'lastname'=>'secondary',
        	'email'=>'karuganda1@gmail.com',
        	'password'=>bcrypt('karuganda1'),
        	'role' => 2,
        	'created_at' => date("2019-01-02 19:31:19"),
        	'updated_at' => date("2019-01-02 19:31:19")
        ]);
        DB::table('users')->insert([
            'id'=>2,
            'firstname'=>'karuganda',
            'lastname'=>'secondary',
        	'email'=>'karuganda@gmail.com',
        	'password'=>bcrypt('karuganda'),
        	'role' => 1,
        	'created_at' => date("2019-01-02 19:31:19"),
        	'updated_at' => date("2019-01-02 19:31:19")
        ]);
    }
}
