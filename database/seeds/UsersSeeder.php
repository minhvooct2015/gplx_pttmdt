<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
        	[
        		'email'=>'minh@gmail.com',
        		'password'=>bcrypt('123456'),
        		'level'=>1,


        	],
        	[
        		'email'=>'Boss@gmail.com',
        		'password'=>bcrypt('123456'),
        		'level'=>0,


        	],


        ];
        // DB::table('gplx_user')->insert($data);
    }
}
