<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Meetup extends Model {

	protected $table='meetups';

	protected $fillable=['name','cover','summary','content','endtime'];

}
