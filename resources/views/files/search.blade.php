@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Search by</div>

                <div class="panel-body">

                {!! Form::open(array('url' => '/handleSearch'))  !!}


                {!! Form::select('type', array('SongName' => 'SongName', 'ArtistName' => 'ArtistName','AlbumName' => 'AlbumName' ))!!}

                 <br/>


                 {!! Form::token()    !!}
                 {!! Form::submit('Submit')     !!}

                {!! Form::close()    !!}


        </div>
            </div>
        </div>
    </div>
</div>























@endsection