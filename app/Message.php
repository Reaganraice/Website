<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Message extends Model
{

	protected $fillable = [
		'name', 'email','message',
	];
}
