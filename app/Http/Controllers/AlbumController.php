<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Album;
use App\Artist;
use \Storage;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('isAdmin');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function upload()
    {
        $albums=Album::all();
        $artists=Artist::all();
         return view('files.album')->with(array('artists' => $artists))->with(array('albums' => $albums));


    }

    public function handlealbumUpload(Request $request)
      {

        $albumName=$request->input('albumName');
        $artistName=$request->input('artistName');

        Album::create(['albumName' => $albumName,'artistName' =>$artistName]);
        $directory= config('app.fileDestinationPath').'/'.$albumName;
        Storage::makeDirectory($directory);

        return redirect()->to('album');




      }

       public function deleteAlbum($id)
    {
        $album=Album::find($id);
         $directory= config('app.fileDestinationPath').'/'.$album->albumName;
         Storage::deleteDirectory($directory);
        $album->delete();
         return redirect()->to('album');


    }
}
