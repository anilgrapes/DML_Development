<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {

		DB::table('users')->insert([
			[
				'name' => 'Naice',
				'email' => 'naice@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM001',
				'name' => 'Vendor',
				'avatar' => 'users.jpeg',
				'phone' => '',
			],
			[
				'name' => 'LB Diamond',
				'email' => 'lbdiamond@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM002',
				'avatar' => 'users.jpeg',
				'phone' => '',
			],
			[
				'name' => 'Offline Orders',
				'email' => 'offlineorders@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM003',
				'avatar' => 'users.jpeg',
				'phone' => '',
			],
			[
				'name' => 'Diamond Mela',
				'email' => 'diamondmela@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM004',
				'avatar' => 'users.jpeg',
				'phone' => '',
			],
			[
				'name' => 'Sheetal',
				'email' => 'sheetal@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM005',
				'avatar' => 'users.jpeg',
				'phone' => '',
			],
			[
				'name' => 'Ariha',
				'email' => 'ariha@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM006',
				'avatar' => 'users.jpeg',
				'phone' => '',
			],
			[
				'name' => 'Dawariya',
				'email' => 'dawariya@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM007',
				'avatar' => 'users.jpeg',
				'phone' => '',
			],
			[
				'name' => 'Asian',
				'email' => 'asian@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM008',
				'avatar' => 'users.jpeg',
				'phone' => '',
			],
			[
				'name' => 'Himanshu',
				'email' => 'himanshu@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM009',
				'avatar' => 'users.jpeg',
				'phone' => '',
			],
			[
				'name' => 'LD',
				'email' => 'ld@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM010',
				'avatar' => 'users.jpeg',
				'phone' => '',
			],
			[
				'name' => 'Jewel House',
				'email' => 'jewelhouse@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM011',
				'avatar' => 'users.jpeg',
				'phone' => '',
			],
			[
				'name' => 'PDC',
				'email' => 'pdc@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM012',
				'avatar' => 'users.jpeg',
				'phone' => '',
			],
			[
				'name' => 'Jewel Vue',
				'email' => 'jewelvue@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM013',
				'avatar' => 'users.jpeg',
				'phone' => '',
			],
			[
				'name' => 'Harish',
				'email' => 'harish@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM020',
				'avatar' => 'users.jpeg',
				'phone' => '',
			],
			[
				'name' => 'Shashvat',
				'email' => 'shashvat@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM014',
				'avatar' => 'users.jpeg',
				'phone' => '',
			],
			[
				'name' => 'Kiran Gems',
				'email' => 'kirangems@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM015',
				'avatar' => 'users.jpeg',
				'phone' => '',
			],
			[
				'name' => 'Romil Jewelry',
				'email' => 'romiljewelry@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM016',
				'avatar' => 'users.jpeg',
				'phone' => '',
			],
			[
				'name' => 'Girdhar',
				'email' => 'girdhar@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM017',
				'avatar' => 'users.jpeg',
				'phone' => '',
			],
			[
				'name' => 'Anil Kalpesh',
				'email' => 'anilkalpesh@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM018',
				'avatar' => 'users.jpeg',
				'phone' => '',
			],
			[
				'name' => 'Pushyam',
				'email' => 'pushyam@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM019',
				'avatar' => 'users.jpeg',
				'phone' => '',
			],
			[
				'name' => 'Manish Seth',
				'email' => 'manishseth@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM021',
				'avatar' => 'users.jpeg',
				'phone' => '',
			],
			[
				'name' => 'Siddhivinayak',
				'email' => 'siddhivinayak@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM022',
				'avatar' => 'users.jpeg',
				'phone' => '',
			],
			[
				'name' => 'Dhani Jewels',
				'email' => 'dhanijewels@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM023',
				'avatar' => 'users.jpeg',
				'phone' => '',
			],
			[
				'name' => 'Antariksh',
				'email' => 'antariksh@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM024',
				'avatar' => 'users.jpeg',
				'phone' => '',
			],
			[
				'name' => 'Naivedya Jewels',
				'email' => 'naivedyajewels@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM025',
				'avatar' => 'users.jpeg',name
				'phone' => '',
			],
			[
				'name' => 'Sanjay Hizli',
				'email' => 'sanjayhizli@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM026',
				'avatar' => 'users.jpeg',
				'phone' => '',
			],
			[
				'name' => 'HB Jewels',
				'email' => 'hbjewels@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM027',
				'avatar' => 'users.jpeg',
				'phone' => '',
			],
			[
				'name' => 'Dharma Jewels',
				'email' => 'dharmajewels@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM028',
				'avatar' => 'users.jpeg',
				'phone' => '',
			],
			[
				'name' => 'Design Creation',
				'email' => 'designcreation@mailinator.com',
				'password' => bcrypt('12345678'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
				'vendor_dmcode' => 'DM029',
				'avatar' => 'users.jpeg',
				'phone' => '',
			],

		]);

		$this->call('PermissionsTableSeeder');

	}
}
