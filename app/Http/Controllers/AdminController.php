<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\UploadedFile;
use PDF;
use App\Count;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('isAdmin');
    }

    public function index()
    {
        return view('files.admin');
    }

    public function count()
    {

    	//$songs=UploadedFile::all();
    	 $songs=UploadedFile::all();
       foreach($songs as $song)
    {

       
        $user = UploadedFile::find($song->id);
        $count = Count::where('songId','=',$song->id)->count();

        $user->count = $count;

        $user->save();
    }
     $songs=UploadedFile::orderBy('count', 'desc')
                     ->get();
    	$pdf=PDF::loadview('files.vista', ['songs' => $songs]);
    	return $pdf->download('count.pdf');

    }
}
