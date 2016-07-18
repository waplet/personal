<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table((new \App\User())->getTable())->truncate();
        
        $user = [
            'name' => 'waplet',
            'email' => 'waplet@gmail.com',
            'password' => bcrypt('waplet'),
        ];

        DB::table((new \App\User())->getTable())->insert($user);
    }
}