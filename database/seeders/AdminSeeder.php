<?php

namespace Database\Seeders;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'id' => '1',
            'name' => 'Fong',
            'email' => 'fong@gmail.com',
            'password' => '1234567890',
        ]);
    }
}