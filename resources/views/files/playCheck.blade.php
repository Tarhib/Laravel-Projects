@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">playing Song</div>

                <div class="panel-body">


Song name:{{$filepath->filename}}
<br/>
Artist name:{{$filepath->artistName}}
<br/>
Album name:{{$filepath->albumName}}
<br/>
Genre: {{$filepath->genre}}
<br/>
{{$filepath->albumName}}/{{$filepath->filename}}
<br/>

<audio controls>
  
  <source src= "app/uploads/{{$filepath->albumName}}/{{$filepath->filename}}" type="audio/mpeg" >
Your browser does not support the audio element.
</audio>
<br/>




             </div>
            </div>
        </div>
    </div>
</div>

@endsection
