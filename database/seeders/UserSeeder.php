<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     public function run()
     {
         User::create([
             'name' => 'John11 Doe',
             'email' => 'johndoe11111@example.com',
             'password' => Hash::make('12341234'), // Hash the password using bcrypt()
      //       'phone_number' => '013-2635432',
             'role' => 'admin',
         ]);
     
         User::create([
             'name' => 'John41 Doe',
             'email' => 'johndoe41@example.com',
             'password' => Hash::make('12341234'), // Hash the password using bcrypt()
//             'phone_number' => '012-2635432',
             'role' => 'subscriber',
         ]);
      }
    }