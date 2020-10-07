<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;
    use Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($value)
    {
        if(isset($value)){
            return asset('storage/'.$value);
        }   else    {
            return asset('images/default.jpg');
        }
    }

    public function getCoverAttribute($value)
    {
        if(isset($value)){
            return asset('storage/'.$value);
        }   else    {
            return asset('images/banner.jpg');
        }
    }

    // $user->password = 'foobar' it willl go through the next method:
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function timeline()
    {
       $friends = $this->follows->pluck('id');

       return Tweet::whereIn('user_id', $friends)
       ->orWhere('user_id', $this->id)
       ->withLikes()
       ->latest()
        ->paginate(10);
    }


    public function tweets()
    {
        return $this->hasMany(Tweet::class)->latest();
    }

    public function path($append = '')
    {
        $path = route('profile', $this->username);

        return $append ? "{$path}/{$append}" : $path;
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }

}
