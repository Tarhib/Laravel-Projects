@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Playlists</div>

                <div class="panel-body">


<ul>

    @foreach($playlists as $playlist)
    <li> {{ $playlist->playlistName }}  {{ link_to_route('expandSongs', 'expand', [$playlist->id]) }}</li>



    @endforeach


</ul>
             </div>
            </div>
        </div>
    </div>
</div>
@endsection