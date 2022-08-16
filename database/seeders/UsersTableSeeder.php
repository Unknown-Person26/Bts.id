<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'Dummy',
            'email' => 'dummy@gmail.com',
            'password' => Hash::make('12345678'),
            'phone' => '087678876979',
            'country' => 'Indonesia',
            'city' => 'Bandung',
            'postcode' => '40915',
            'name' => 'Dummy',
            'address' => 'Jlan pasir kaliki'
        ]);
    }
}
