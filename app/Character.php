<?php

namespace App;

use App\Casts\Hex;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{

    protected $table = "Character";
    protected $guarded = [];
    protected $hidden = ['MagicList','Quest'];
    protected $casts = [
      'Inventory' => Hex::class
    ];


    public function getRouteKeyName()
    {
        return "AccountID";
    }

    public function account()
    {
        return $this->belongsTo(Account::class,"AccountID","memb___id");
    }
}
