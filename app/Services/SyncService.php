<?php
namespace App\Services;

use App\Models\Address;
use App\Models\Client;
use App\Models\Company;
use GuzzleHttp\Exception\GuzzleException;

class SyncService
{
	protected UserService $userService;
	
	/**
	 * @param UserService $userService
	 */
	public function __construct(UserService $userService)
	{
		$this->userService = $userService;
	}
	
	/**
	 * @throws GuzzleException
	 */
	public function syncData(): void
	{
		$data = $this->userService->getUsers();
		if ($data) {
			foreach ($data as $user) {
				$company = Company::updateOrCreate([
					'user_id' => $user['id'] //search parametrs
				],[
					'company_name' => $user['company']['name'],
					'company_catchPhrase' => $user['company']['catchPhrase'],
					'company_bs' => $user['company']['bs'],
				
				]);
				
				$client = Client::updateOrCreate([
					'id' => $user['id']
				],[
					'company_id' => $company->id,
					'name' => $user['name'],
					'username' => $user['username'],
					'email' => $user['email'],
					'phone' => $user['phone'],
					'website' => $user['website'],
				]);
				
				$address = Address::updateOrCreate([
					'user_id' => $client['id']
				],[
					'street' => $user['address']['street'],
					'suite' => $user['address']['suite'],
					'city' => $user['address']['city'],
					'zipcode' => $user['address']['zipcode'],
					'geo_lat' => $user['address']['geo']['lat'],
					'geo_lng' => $user['address']['geo']['lng'],
				]);
				
			}
			// Soft delete users that are not present in the API response
			Client::whereNotIn('id', array_column($data, 'id'))->delete();
		}
		
	}
	
	
}