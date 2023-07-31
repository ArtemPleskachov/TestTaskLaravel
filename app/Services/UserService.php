<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class UserService
{
	/**
	 * @return mixed|null
	 * @throws GuzzleException
	 */
	public function getUsers(): mixed
	{
		$client = new Client();
		
		$response = $client->get('https://jsonplaceholder.typicode.com/users');
		
		if ($response->getStatusCode() === 200) {
			return json_decode($response->getBody(), true);
		}
		
		return null;
	}
}