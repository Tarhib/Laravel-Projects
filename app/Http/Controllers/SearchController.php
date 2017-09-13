<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\UploadedFile;
use App\Album;
use App\Artist;

class SearchController extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function type()
    {


    	return view('files.search');
    }

    public function getbox(Request $request)
    {
    	$type=$request->input('type');
    	if($type=='SongName')
    	{
    		return view('files.searchForm');
    	}

    	if($type=='AlbumName')
    	{
    		return view('files.albumSearchForm');

    	}

    	if($type=='ArtistName')
    	{
    		return view('files.artistSearchForm');
    		
    	}


    }

    public function songName(Request $request)
    {

    	$name=$request->input('songName');
    	//$songs=UploadedFile::orderBy('filename')->get();
    	$songs=UploadedFile::where('filename','LIKE','%'.$name.'%')->get();
    	return view('files.songlist')->with(array('songs' => $songs ));
    }

    public function albumName(Request $request)
    {

    	$name=$request->input('albumName');
    	//$songs=UploadedFile::orderBy('filename')->get();
    	$albums=Album::where('albumName','LIKE','%'.$name.'%')->get();
    	return view('files.albumlist')->with(array('albums' => $albums ));
    }

    public function artistName(Request $request)
    {

    	$name=$request->input('artistName');
    	//$songs=UploadedFile::orderBy('filename')->get();
    	$artists=Artist::where('artistName','LIKE','%'.$name.'%')->get();
    	return view('files.artistlist')->with(array('artists' => $artists ));
    }

    public function homepageSearch(Request $request)
    {

      $name=$request->input('songName');
      $songs=UploadedFile::where('filename','LIKE','%'.$name.'%')->get();
      $albums=Album::where('albumName','LIKE','%'.$name.'%')->get();
      $artists=Artist::where('artistName','LIKE','%'.$name.'%')->get();
      return view('files.homeSearch')->with(array('songs' => $songs ))->with(array('albums' => $albums ))->with(array('artists' => $artists ));


    }
}
