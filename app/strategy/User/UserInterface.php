<?php

namespace App\strategy\User;

use Illuminate\Database\Eloquent\Model;

interface UserInterface
{
	public function encrypt($value, $serialize = true);
	public function decrypt($payload , $unserialize = true);
}