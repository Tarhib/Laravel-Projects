<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Count extends Model
{
    //
    protected $table ="count";
      public $fillable = ['songId','userId'];
}
