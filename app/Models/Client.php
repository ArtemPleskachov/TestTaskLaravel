<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @method static firstOrNew(array $array)
 */
class Client extends Model
{
	protected $table = 'clients';
	protected $primaryKey = 'id';
	public $incrementing = false;
	
	protected $fillable = ['company_id'];
	
	
	
	public function address()
	{
		return $this->hasOne(Address::class, 'user_id', 'id');
	}
	
	public function company()
	{
		return $this->belongsTo(Company::class, 'company_id', 'id');
	}
}
