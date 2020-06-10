<?php

use Illuminate\Database\Seeder;

class cbsh_lichhoc extends Seeder
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
        		'lh_ngay'=>'Thứ Hai, 04 tháng 5, 2020',
        		'lh_giobatdau'=>'7:00 AM',
        		'id_llh'=>'1',
        		'id_ch'=>'6',
        		'id_lhlx'=>'10',
        		
        	],

        	]
        	 DB::table('cbsh_lichhoc')->insert($data);
    }
}
