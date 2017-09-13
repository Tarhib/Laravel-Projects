@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Search</div>

                <div class="panel-body">


                <ul>
    @if(count($songs))
    Song Result:
    @foreach($songs as $song)
    <li> {{ $song->filename }} {{ link_to_route('albumplay', 'play', [$song->id]) }} </li>



    @endforeach
    @endif

</ul>


<ul>
    @if(count($albums))
    Album Result:
    @foreach($albums as $album)
    <li> {{ $album->albumName }} {{ link_to_route('deleteAlbum', 'Delete', [$album->id]) }} </li>



    @endforeach
    @endif


</ul>

<ul>
  @if(count($artists))

  Artist Result:

    @foreach($artists as $artist)
    <li> {{ $artist->artistName }}  {{ link_to_route('artistSongs', 'expand', [$artist->id]) }}</li>



    @endforeach
    @endif


</ul>

@if(count($artists)==0 &&count($albums)==0 && count($songs)==0)
No result found.
@endif











                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
