<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $table = "MEMB_INFO";
    protected $hidden = ["memb__pwd"];
}
