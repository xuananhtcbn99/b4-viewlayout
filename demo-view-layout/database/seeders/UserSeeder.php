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
        //
        $user = new User();
        $user->name = "Xuan Anh";
        $user->email = "xuantocvang@gmail.com";
        $user->password = Hash::make('12345');
        $user->save();

        $user = new User();
        $user->name = "Quoc Hoang";
        $user->email = "hoangqq@gmail.com";
        $user->password = Hash::make('123456');
        $user->save();

        $user = new User();
        $user->name = "Xuan Annn";
        $user->email = "anan@gmail.com";
        $user->password = Hash::make('1999');
        $user->save();
    }
}
