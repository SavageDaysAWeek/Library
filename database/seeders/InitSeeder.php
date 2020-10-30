<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class InitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')
            ->insert([
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
            ]);

        DB::table('genres')
            ->insert([
                ['name' => 'Ужасы'],
                ['name' => 'Приключения'],
                ['name' => 'Триллер'],
                ['name' => 'Детектив']
            ]);
    }
}
