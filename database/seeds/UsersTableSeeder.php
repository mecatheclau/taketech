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
            'name'=>'meca',
        	'email'=>'maniragabaclaude@gmail.com',
        	'password'=>bcrypt('espagnol21'),
        	'role' => 1,
        	'created_at' => date("2019-01-02 19:31:19"),
        	'updated_at' => date("2019-01-02 19:31:19")
        ]);
    }
}
