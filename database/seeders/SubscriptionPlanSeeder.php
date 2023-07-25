<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SubscriptionPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subscription_plans')->insert([
			'name' => "Free Trial",
			'description' => "Free Trial description",
			'price' => 0.0,
			'duration' => 1,
			'created_at' => Carbon::now()->toDateTimeString(),
		]);

		DB::table('subscription_plans')->insert([
			'name' => "Monthly Subscription",
			'description' => "Monthly Subscription description",
			'price' => 9.99,
			'duration' => 1,
			'created_at' => Carbon::now()->toDateTimeString(),
		]);

		DB::table('subscription_plans')->insert([
			'name' => "Annual Subscription",
			'description' => "Annual Subscription description",
			'price' => 19.99,
			'duration' => 12,
			'created_at' => Carbon::now()->toDateTimeString(),
		]);
    }
}
