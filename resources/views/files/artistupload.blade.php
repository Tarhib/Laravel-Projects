@extends('layouts.app2')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Upload Artist</div>

                <div class="panel-body">

<ul>

    @foreach($artists as $artist)
    <li> {{ $artist->artistName }} {{ link_to_route('deleteArtist', 'Delete', [$artist->id]) }} </li>



    @endforeach


</ul>





{!! Form::open(array('url' => '/artisthandleUpload'))  !!}
{!! Form::label('Artist name:')!!}

{!! Form::text('artistName') !!}
<br/>

{!! Form::label('Country name:')!!}

{!! Form::text('countryName') !!}
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
