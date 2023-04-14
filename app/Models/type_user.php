<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_user extends Model
{
    use HasFactory;
    protected $table = 'type_users';

	protected $casts = [
		'users_id' => 'int'
	];

	protected $fillable = [
		'type',
		'users_id'
	];

	public function usuario()
	{
		return $this->belongsTo(usuarios::class, 'users_id');
	}
}
