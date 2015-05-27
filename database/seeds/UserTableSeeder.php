<?php
use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create([
            'email' => 'witwave@outlook.com',
            'password' => hash::make('qwe321'),
            'is_admin' => true
        ]);
    }
}