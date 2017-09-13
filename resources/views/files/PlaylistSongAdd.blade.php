@extends('layouts.app2')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Select Playlist</div>

                <div class="panel-body">







{!! Form::open(array('url' => '/handleUploadPlaylistSong'))  !!}
{!! Form::label('Playlist name:')!!}

<select name="playlistName">
<?php
    foreach ($playlists as $playlist) {
?>
    <option value="<?php echo $playlist['playlistName'] ?>"> <?php echo $playlist['playlistName'] ?> </option>
<?php
    }
?>

</select>

   <br/>
   {!! Form::token()    !!}
    {!! Form::submit('Go')     !!}
  
   {!! Form::close()    !!}

             </div>
            </div>
        </div>
    </div>
</div>

@endsection
