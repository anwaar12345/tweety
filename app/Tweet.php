<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Tweet extends Model
{
    protected $fillable = ['body','user_id']; 
    protected $table = 'tweets';
    public function tweets()
    {
       return $this->select('users.*','tweets.body','tweets.user_id')
       ->leftJoin('users','users.id','=','tweets.user_id')
       ->latest()
       ->where('user_id',auth()->user()->id)
       ->get()->dd();
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function createTweet($request)
    {
        try{
           return $this->create([
               'body' => $request->body,
               'user_id' => auth()->user()->id
               ]);
        }catch(\Exception $ex){
            dd($ex->getMessage());
        }
    }
}
