<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{


    public $fillable=['pid','group_id','openid','nickname','name','avatar','wechat','qq','live_city','email','address','sign','phone','company_name','company_site'];

    public function events()
    {
      return  $this->hasMany('App\Event', 'member_id', 'id');
    }

}
