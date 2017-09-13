@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Welcome to melody.com
                    <br/>
                    <br/>
                    <br/>
                    {!! Form::open(array('url' => '/handleHomePageSearch'))  !!}

                {!! Form::text('songName')                 !!}
                


                 {!! Form::token()    !!}
                 {!! Form::submit('Search')     !!}

                {!! Form::close()    !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
