<?php

use Illuminate\Database\Seeder;

class MmToSieveTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$mul_rows =[
			[
				'stone_shape'=>'36',
				'mm_size'=>'+0.75',
				'sieve_size'=>'-0000',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+0.80',
				'sieve_size'=>'0000',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+0.90',
				'sieve_size'=>'000',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+1.00',
				'sieve_size'=>'00',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+1.10',
				'sieve_size'=>'0',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+1.15',
				'sieve_size'=>'1',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+1.20',
				'sieve_size'=>'1.5',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+1.25',
				'sieve_size'=>'2',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+1.30',
				'sieve_size'=>'2.5',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+1.35',
				'sieve_size'=>'3',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+1.40',
				'sieve_size'=>'3.5',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+1.45',
				'sieve_size'=>'4',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+1.50',
				'sieve_size'=>'4.5',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+1.55',
				'sieve_size'=>'5',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+1.60',
				'sieve_size'=>'5.5',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+1.70',
				'sieve_size'=>'6',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+1.80',
				'sieve_size'=>'6.5',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+1.90',
				'sieve_size'=>'7',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+2.00',
				'sieve_size'=>'7.5',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+2.10',
				'sieve_size'=>'8',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+2.20',
				'sieve_size'=>'8.5',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+2.30',
				'sieve_size'=>'9',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+2.40',
				'sieve_size'=>'9.5',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+2.50',
				'sieve_size'=>'10',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+2.60',
				'sieve_size'=>'10.5',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+2.70',
				'sieve_size'=>'11',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+2.80',
				'sieve_size'=>'11.5',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+2.90',
				'sieve_size'=>'12',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+3.00',
				'sieve_size'=>'12.5',
			],
			[
				'stone_shape'=>'36',
				'mm_size'=>'+3.10',
				'sieve_size'=>'13',
			]
    	];
       

		foreach ($mul_rows as $mul_rows) {
			DB::table('mm_to_sieve')->insert($mul_rows);
		}
    }
}
