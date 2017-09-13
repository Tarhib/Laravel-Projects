<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SongCount extends Model
{
    //
    protected $table ="songcount";
      public $fillable = ['name','count'];
}
