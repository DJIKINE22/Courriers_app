@extends('admin.master');

@section('content');

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Courrier entrant</title>
</head>
<body>
 
<div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Reference</th>
        <th scope="col">objet</th>
        <th scope="col">satatus</th>
        <th scope="col">pieces jointe</th>
        <th scope="col">Date recpetion</th>
        <th scope="col">Libelle</th>
        <th scope="col">user</th>
       
      </tr>
    </thead>
    <tbody>
        @foreach($courrier_entrant as $courrierentrant)
        <tr>
            <td>{{$courrier_entrants->id}}</td>
            <td>{{$courrier_entrants->ref}}</td>
            <td>{{$courrier_entrants->objet}}</td>
            <td>{{$courrier_entrants->status}}</td>
            <td>{{$courrier_entrants->pieces_jointe}}</td>
            <td>{{$courrier_entrants->date_reception}}</td>
            <td>{{$courrier_entrants->libelle}}</td>
            <td>{{$courrier_entrants->user}}</td>
       @endforeach    
  </table>
</div>
</body>
</html>










