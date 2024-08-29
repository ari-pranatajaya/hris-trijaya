<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $users = ['superadmin','headhr','staffhr','employee'];
        $default = [
            'password'  => bcrypt('password'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10)
        ];

        foreach ($users as $value) {
            User::create([...$default, ...[
                'name' => $value,
                'email'=> $value.'@tpfx.co.id',
            ]])->assignRole($value);
        }


    }
}
