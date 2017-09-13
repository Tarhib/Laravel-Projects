@extends('layouts.app2')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Upload Album</div>

                <div class="panel-body">


<ul>

    @foreach($albums as $album)
    <li> {{ $album->albumName }} {{ link_to_route('deleteAlbum', 'Delete', [$album->id]) }} </li>



    @endforeach


</ul>


{!! Form::open(array('url' => '/handlealbumUpload',))  !!}
{!! Form::label('Album name:')!!}

{!! Form::text('albumName') !!}
<br/>

{!! Form::label('Artist name:')!!}
<select name="artistName">
<?php
    foreach ($artists as $artist) {
?>
    <option value="<?php echo $artist['artistName'] ?>"> <?php echo $artist['artistName'] ?> </option>
<?php
    }
?>

</select>




<br/>

   

   
   {!! Form::token()    !!}
   {!! Form::submit('Upload ')     !!}
   {!! Form::close()    !!}

             </div>
            </div>
        </div>
    </div>
</div>

@endsection
