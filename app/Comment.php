<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  
  public function __construct(){

  }

  public function user()
  {
      return $this->belongsTo(User::class);
  }
  
}
