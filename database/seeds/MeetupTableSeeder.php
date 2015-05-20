<?php 
use Illuminate\Database\Seeder;
use App\Meetup;

class MeetupTableSeeder extends Seeder {

    public function run()
    {
        DB::table('meetups')->delete();
       
    }
}

