<?php

use Illuminate\Database\Seeder;

class rolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
            'id'=>1,
        	'role'=>'superadmin'
        ]);
        DB::table('roles')->insert([
            'id'=>2,
        	'role'=>'admin'
        ]);
        DB::table('roles')->insert([
            'id'=>3,
        	'role'=>'end_user'
        ]);
    }
}
