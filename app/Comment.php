<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
 
    // fields can be filled
    protected $fillable = ['body', 'user_id', 'tweet_id'];
   
    public function post()
    {
      return $this->belongsTo('App\Tweet');
    }
   
    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
