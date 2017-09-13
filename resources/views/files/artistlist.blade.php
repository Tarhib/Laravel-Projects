@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Artists</div>

                <div class="panel-body">




<ul>
  @if(!count($artists))
  
  {{ "no result found."}}

  @endif

    @foreach($artists as $artist)
    <li> {{ $artist->artistName }}  {{ link_to_route('artistSongs', 'expand', [$artist->id]) }}</li>



    @endforeach


</ul>
             </div>
            </div>
        </div>
    </div>
</div>
@endsection