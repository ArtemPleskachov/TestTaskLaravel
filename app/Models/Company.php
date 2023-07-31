<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;
	protected $table = 'companies';
	protected $fillable = ['company_name', 'company_catchPhrase', 'company_bs', 'company_id'];
	
	public function client(): HasMany
	{
		return $this->hasMany(Client::class, 'company_id', 'id');
	}
}
