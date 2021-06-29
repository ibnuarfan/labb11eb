<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		//$model = model('UserModel');
		$model->insert([
		'username' => 'admin',
		'useremail' => 'admin123@gmail.com',
		'userpassword' => password_hash('admin1234', PASSWORD_DEFAULT),
	  ]);
	}
}
