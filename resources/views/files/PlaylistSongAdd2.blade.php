@extends('layouts.app2')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Album</div>

                <div class="panel-body">




<ul>

    @foreach($albums as $album)
    <li> {{ $album->albumName }} {{ link_to_route('ShowPlaylistAlbumSongs', 'expand', $parameters=array($id=$album->id,$name=$playlistName)) }} </li>



    @endforeach
    <br/>
    


</ul>



             </div>
            </div>
        </div>
    </div>
</div>









@endsection