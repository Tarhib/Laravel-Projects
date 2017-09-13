<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="css/app.css">
   <title> Show Count</title>

</head>
<body>
<h1> Melody.com</h1>
<h3>Report on the total hits.</h3>
<body>   

<table>
  <thead>
    <tr>
         <th>Name</th>
         <th>Count</th>

     </tr>
     </thead>
     <tbody>
      @foreach($songs as $song)
      <tr>
         <td>{{ $song->filename}}</td>
         <td> {{$song->count}}</td>
      </tr>
      @endforeach
      </tbody>
      </table>

      </body>
