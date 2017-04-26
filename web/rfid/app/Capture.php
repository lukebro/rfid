<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capture extends Model
{
	public $timestamps = false;

	protected $casts = [
		'created_at' => 'datetime',
	];
}
