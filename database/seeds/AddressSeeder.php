<?php

use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('address')->insert([
        	['name'=>'Hà Nội'],
        	['name'=>'Huế'],
        	['name'=>'Đà Nẵng'],
        	['name'=>'Thành phố Hồ Chí Minh'],
        	['name'=>'Bắc Ninh'],
        	['name'=>'Hải Dương'],
        	['name'=>'Quảng Ninh'],
        	['name'=>'Hà Nam'],
        	['name'=>'Thanh Hóa'],
        	['name'=>'Điện Biên'],
        	['name'=>'Nghệ An'],
        ]);
    }
}
