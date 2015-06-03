<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Member;

class Joiner extends Model
{

    public function member()
    {
        //return $this->belongsTo('App\Member', 'member_id', 'id');

        return $this->hasOne('App\Member', 'id', 'member_id');
    }

}
