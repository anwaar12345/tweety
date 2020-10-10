<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Tweet;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

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

    public function timeline()
    { 
        $ids = [];
        $ids = $this->follows()->get()->pluck('id');
        return Tweet::whereIn('user_id',$ids)
                     ->orWhere('user_id',$this->id)   
                    ->latest()->get();
    }
    public function tweets()
    {
        return $this->hasMany(Tweet::class,'user_id','id');
    }
    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }
    public function follows()
    {
        return $this->belongsToMany(User::class,'follows','user_id','following_user_id');
    }
    public function getRouteKeyName()
    {
        return 'name';
    }
}