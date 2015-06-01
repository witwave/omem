<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{

    //

    public function events()
    {
      return  $this->hasMany('App\Event', 'member_id', 'id');
    }

}
