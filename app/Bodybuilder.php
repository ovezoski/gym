<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bodybuilder extends Model
{

    protected $fillable =['name', 'nickname'];
    

    public function subscriptions()
    {
        return $this->hasMany('\App\Subscription');
    }

    public function subscribe()
    {
       return $this->subscriptions()->save( new \App\Subscription );
    }

}
