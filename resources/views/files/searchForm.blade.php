@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Search </div>

                <div class="panel-body">

                {!! Form::open(array('url' => '/handleSongName'))  !!}

                {!! Form::text('songName')                 !!}
                


                 {!! Form::token()    !!}
                 {!! Form::submit('Submit')     !!}

                {!! Form::close()    !!}


        </div>
            </div>
        </div>
    </div>
</div>
@endsection