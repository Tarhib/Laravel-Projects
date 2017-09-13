<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Like;


use App\Http\Requests;
use App\Playlist;
use App\PlaylistSong;
use App\UploadedFile;

class ShowPlaylistController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show()
    {
    	$playlists=Playlist::all();

        return view('files.showPlaylist')->with(array('playlists' => $playlists));



    }

    public function expand($id)
    {
    	$playlist=Playlist::find($id);
    	
    	$songs=PlaylistSong::where('playlistName', $playlist->playlistName)->select('songId')->distinct()->get();
    	$playlistSong;

    	foreach($songs as $song){

    		$playlistSong[]=(UploadedFile::find($song->songId));
    	}


        if(count($songs))
        {
    	return view('files.songlistPlaylist')->with(array('songs' => $playlistSong))->with('playlistId',$id);
        }
        else{
        	return view('files.songlistPlaylist');

        }
    	
    }
    public function playlistLike($id1,$id2)
    {
        $playlist=Playlist::find($id2);
        
        $songs=PlaylistSong::where('playlistName', $playlist->playlistName)->select('songId')->distinct()->get();
        $playlistSong;

        foreach($songs as $song){

            $playlistSong[]=(UploadedFile::find($song->songId));
        }
        Like::create(['songId' => $id1,'userId' =>Auth::user()->id]);


        if(count($songs))
        {
        return view('files.songlistPlaylist')->with(array('songs' => $playlistSong))->with('playlistId',$id2);
        }
        else{
            return view('files.songlistPlaylist');

        }


        
    }
}
