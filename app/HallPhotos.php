<?php

namespace App;
  

use Illuminate\Database\Eloquent\Model;

class HallPhotos extends Model
{
    //product_name=image_name

    protected $fillable  = ['Image_id', 'filename','Id'];
        public function Hall()
    {
        return $this->belongsTo('App\Hall');
    }

}
