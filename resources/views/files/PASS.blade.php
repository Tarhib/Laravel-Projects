@extends('layouts.app2')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Songs</div>

                <div class="panel-body">




<ul>

    @foreach($songs as $song)
    <li> {{ $song->filename }} {{ link_to_route('addToPlaylist', 'add to palylist', $parameters=array($id=$song->id,$name=$playlistName)) }}  </li>



    @endforeach
    {{ $playlistName}}


</ul>
             </div>
            </div>
        </div>
    </div>
</div>
@endsection