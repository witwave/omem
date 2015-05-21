<?php namespace App\Handlers\Events;

use App\Events\UserLog;

class UserLogHandler {

	/**
	 * Create the event handler.
	 *
	 * @return void
	 */
	public function __construct() {
		//
	}

	/**
	 * Handle the event.
	 *
	 * @param  UserLog  $event
	 * @return void
	 */
	public function handle(UserLog $event) {
		var_dump($event);

		return $event;
	}

}
