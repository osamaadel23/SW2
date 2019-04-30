<?php

namespace App;

use App\Repositories\User\UserInterface as UserInterface;
use Illuminate\Database\Eloquent\Model;

class contact extends Model implements UserInterface
{
    protected $talbe="contacts";


     static public function getAll()
    {
        return static::all();
    }
}
