@extends('layouts.app2')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Upload Playlist</div>

                <div class="panel-body">

<ul>

    @foreach($playlists as $playlist)
    <li> {{ $playlist->playlistName }}  {{ link_to_route('deletePlaylist', 'Delete', [$playlist->id]) }} </li>



    @endforeach


</ul>





{!! Form::open(array('url' => '/handleplaylistUpload'))  !!}
{!! Form::label('Playlist name:')!!}

{!! Form::text('playlistName') !!}
<br/>




   

   
   {!! Form::token()    !!}
   {!! Form::submit('Upload')     !!}
   {!! Form::close()    !!}

             </div>
            </div>
        </div>
    </div>
</div>

@endsection
