<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
  public function publisher(){
    return $this->belongsTo('App\Book');
  }
}
