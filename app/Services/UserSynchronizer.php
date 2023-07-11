<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class UserSynchronizer implements IUsersSync
{
	
	/**
	 * @inheritDoc
	 */
	public function sync()
	{
		$responce = Http::get('https://jsonplaceholder.typicode.com/users');
		
		
	}
}