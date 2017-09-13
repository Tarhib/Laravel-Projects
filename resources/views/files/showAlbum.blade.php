@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Albums</div>

                <div class="panel-body">


<ul>

    @foreach($albums as $album)
    <li> {{ $album->albumName }}  {{ link_to_route('albumSongs', 'expand', [$album->id]) }}</li>



    @endforeach


</ul>
             </div>
            </div>
        </div>
    </div>
</div>
@endsection