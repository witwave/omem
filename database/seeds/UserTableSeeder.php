<?php 
use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
        User::create(['email' => 'witwave@outlook.com','password'=>'admin']);
    }
}