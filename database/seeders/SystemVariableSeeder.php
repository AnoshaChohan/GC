<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SystemVariableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('system_variables')->insert([
			'name' => "Gold Convert Ratio",
			'description' => "If ratio = 0.85 and the gold value is RM100, you will sell RM85 of gold to QM, remains RM15 of gold keep in QM.",
			'value' => '0.85',
			'created_at' => Carbon::now()->toDateTimeString(),
		]);

		DB::table('system_variables')->insert([
			'name' => "Management Fee Ratio",
			'description' => "If ratio = 0.035 and the gold value is RM100, the management fee will be RM100 * 0.035 / 365 * days of holding.",
			'value' => '0.035',
			'created_at' => Carbon::now()->toDateTimeString(),
		]);

		DB::table('system_variables')->insert([
			'name' => "Contact Number",
			'description' => "Contact number will be displayed in contact page.",
			'value' => '12345',
			'created_at' => Carbon::now()->toDateTimeString(),
		]);

		DB::table('system_variables')->insert([
			'name' => "Contact Email",
			'description' => "Email will be displayed in contact page.",
			'value' => 'example@email.com',
			'created_at' => Carbon::now()->toDateTimeString(),
		]);
    }
}
