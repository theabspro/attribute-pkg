<?php
namespace Abs\AttributePkg\Database\Seeds;

use Abs\AttributePkg\Models\FieldType;
use Illuminate\Database\Seeder;

class FieldTypePkgSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$records = [
			[
				'name' => 'Single Selection Drop Down',
				'short_name' => 'SSDD',
			],
			[
				'name' => 'Multi Selection Drop Down',
				'short_name' => 'MSDD',
			],
			[
				'name' => 'Free Text Box',
				'short_name' => 'FTB',
			],
			[
				'name' => 'Numeric Text Box',
				'short_name' => 'NTB',
			],
			[
				'name' => 'Check Box',
				'short_name' => 'CB',
			],
			[
				'name' => 'Radio Button',
				'short_name' => 'RB',
			],
			[
				'name' => 'Date Picker',
				'short_name' => 'DP',
			],
			[
				'name' => 'Date Time Picker',
				'short_name' => 'DTP',
			],
			[
				'name' => 'Yes / No',
				'short_name' => 'YN',
			],
			[
				'name' => 'Auto Complete',
				'short_name' => 'AC',
			],
			[
				'name' => 'Check Box with Description',
				'short_name' => 'CBWD',
			],
			[
				'name' => 'Slider',
				'short_name' => 'SLD',
			],
			[
				'name' => '5 Star Rating',
				'short_name' => '5SR',
			],
		];

		FieldType::createMultipleFromArray($records);
	}
}