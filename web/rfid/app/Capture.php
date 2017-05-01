<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capture extends Model
{
	public $timestamps = false;

	protected $casts = [
		'created_at' => 'datetime',
	];

	public function getNumberAttribute()
	{
		 return str_replace('540:', '', $this->card);
	}

	public function isValid()
	{
		return strpos($this->card, '540:') !== false;
	}

}
