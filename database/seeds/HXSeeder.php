<?php

use Illuminate\Database\Seeder;

class HXSeeder extends Seeder
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
        		'hx_ten'=>'Chua co',
        		'hx_slug'=>str_slug('Chua co'),
        		'hx_giatien'=>'0000'
        		


        	],
        	
        	  ];
        	  DB::table('cbsh_hangxe')->insert($data);
    }
}
