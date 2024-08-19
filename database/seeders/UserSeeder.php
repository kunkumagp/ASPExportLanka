<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = new User();
        $user->username = 'admin';
        $user->password = Hash::make('admin');
        $user->user_role = 'superAdmin';
        $user->account_status = 'active';
        $user->save();

    }
}
