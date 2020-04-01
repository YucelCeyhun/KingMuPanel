<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $table = "MEMB_INFO";
    protected $hidden = ["memb___pwd"];

    public function getRouteKeyName()
    {
        return 'memb___id';
    }

    public function characters(){
        return $this->hasMany(Character::class,'AccountID','memb___id');
    }
}
