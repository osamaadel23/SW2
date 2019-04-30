<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
        public $timestamps = false;
        protected $fillable  = ['Id', 'HallName','Admin', 'Contact','Space','Address','Description','Email','Branch','Paths'];


}
