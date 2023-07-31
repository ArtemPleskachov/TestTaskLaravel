<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Client;
use App\Models\Company;
use App\Services\SyncService;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\DB;

class ClientsController extends Controller
{
	protected SyncService $syncService;
	
	/**
	 * @param SyncService $syncService
	 */
	public function __construct(SyncService $syncService)
	{
		$this->syncService = $syncService;
	}
	
	/**
	 * @throws GuzzleException
	 */
	public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
	{
		$this->syncService->syncData();
		$users = Client::all();
		return view('users', compact('users', ));
	}
	
	
	
	public function checkDatabaseConnection(): string
	{
		try {
			DB::connection()->getPdo();
			return "Database connection is established.";
		} catch (\Exception $e) {
			return "Failed to connect to the database: " . $e->getMessage();
		}
	}
}
