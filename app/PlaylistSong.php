<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlaylistSong extends Model
{
    //
    protected $table ="playlistSongs";
      public $fillable = ['playlistName','songId','songName'];
}
