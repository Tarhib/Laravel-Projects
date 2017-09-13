@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Total hits</div>

                <div class="panel-body">


                <table>
  <thead>
    <tr>
         <th>Name</th>
         <th>Count</th>

     </tr>
     </thead>
     <tbody>
      @foreach($arrays as $song)
      <tr>
         <td>{{ $song->filename}}</td>
         <td> {{$song->count}}</td>
      </tr>
      @endforeach
      </tbody>
      </table>
      <br/>
      













             </div>
            </div>
        </div>
    </div>
</div>
@endsection