<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new User;
        $admin->name = 'Admin';
        $admin->phone = '1234567890';
        $admin->usertype = 1;
        $admin->email = 'admin@gmail.com';
        $admin->password = Hash::make('12345678');
        $admin->save();
    }
}