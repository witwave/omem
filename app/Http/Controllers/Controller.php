<?php namespace App\Http\Controllers;
use Log;
use Session;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;


    public function getMember(){

        return Session::get('member');
    }


    public function getMemberId(){

        if($member=$this->getMember()){
            Log::debug("member id:".$member->id);
            return $member->id;
        }
        return null;
    }




}
