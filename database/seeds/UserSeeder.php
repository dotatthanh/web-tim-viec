<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run(){
		DB::table('users')->insert([
			[
				'name'=>'Admin',
				'email'=>'admin@gmail.com',
				'password'=>bcrypt('123456'),
				'role_id'=>1,
				'company_id'=>null


			],
			[
				'name'=>'Tran Bao Hieu',
				'email'=>'trungnn160697@gmail.com',
				'password'=>bcrypt('123456'),
				'role_id'=>2,
				'company_id'=>1,


			],
			[
				'name'=>'Nguyen Dinh Tho',
				'email'=>'sonbom@gmail.com',
				'password'=>bcrypt('123456'),
				'role_id'=>2,
				'company_id'=>2,


			],
			[
				'name'=>'Nguyen Thanh Long',
				'email'=>'haipt@gmail.com',
				'password'=>bcrypt('123456'),
				'role_id'=>3,
				'company_id'=>null

			],
			[
				'name'=>'Nguyễn Thị Kiều Thương',
				'email'=>'thuongntk@gmail.com',
				'password'=>bcrypt('123456'),
				'role_id'=>3,
				'company_id'=>null

			],
			[
				'name'=>'Lê Trọng Chung',
				'email'=>'chunglt@gmail.com',
				'password'=>bcrypt('123456'),
				'role_id'=>3,
				'company_id'=>null
			]
		]);
	}
}

