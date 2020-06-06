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
                'hoten'=>'minh',
        		'email'=>'minh@gmail.com',
                'ngaysinh'=>'15 tháng 05,2000',
                'cmnd'=>'213456789',
                'hokhau'=>'TPCT',
                'noio'=>'NK-AK-CT',
                'sodienthoai'=>'32436',
        		'password'=>bcrypt('123456'),
        		'level'=>1,


        	],
        	[
        		 'hoten'=>'minh12',
                'email'=>'http@gmail.com',
                'ngaysinh'=>'15 tháng 05,2000',
                'cmnd'=>'213456789',
                'hokhau'=>'TPCT',
                'noio'=>'NK-AK-CT',
                'sodienthoai'=>'32436',
                'password'=>bcrypt('123456'),
                'level'=>1,


        	],


        ];
         DB::table('gplx_user')->insert($data);
    }
}
