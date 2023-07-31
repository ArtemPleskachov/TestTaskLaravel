<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Address extends Model
{
    use HasFactory;
	protected $table = 'addresses';
	
	protected $fillable = ['street', 'suite', 'city', 'zipcode', 'geo_lat', 'geo_lng'];
	
	
	public function client(): BelongsTo
	{
		return $this->belongsTo(Client::class, 'user_id', 'id');
	}
}
