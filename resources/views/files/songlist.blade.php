@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Search </div>

                <div class="panel-body">

                @if(!count($songs))
  
                  {{ "no result found."}}

                @endif
                

                 @foreach($songs as $file)
                 <li> {{ $file->filename }}  {{ link_to_route('playCheck', 'play', [$file->id]) }}</li>



                @endforeach


</ul>














                </div>
            </div>
        </div>
    </div>
</div>
@endsection