<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Tweet extends Model
{
    use Likable;
    protected $guarded = [];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }

    public function path($append = '')
    {
        $path = route('tweet.update', $this->id);

        return $append ? "{$path}/{$append}" : $path;
    }

   
}
