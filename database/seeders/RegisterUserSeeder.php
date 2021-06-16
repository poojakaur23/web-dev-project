<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Hash;//password encryption
class RegisterUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_user_register')->insert([
            'name'=>'Test Test',
            'email'=>'test@gmail.com',
            'password'=>Hash::make('12345')
        ]);
    }
}
