extends('admin.master')

@section('content');

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courrier entrant</title>
</head>
<body>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Reference </th>
        <th scope="col">Objet</th>
        <th scope="col">Status</th>
        <th scope="col">Exediteur</th>
        <th scope="col">Pieces_jointe</th>
        <th scope="col">Date reception</th>
        <th scope="col">Libelle</th>
        <th scope="col">User</th>
        <th scope="col">Action</th>
      </tr>
      <tr>
            <td>
              <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                  <label class="custom-control-label" for="customCheck1">1</label>
              </div>
            </td>
    </thead>
    <tbody>
    @foreach($courriers_entrants as $courrierentrant)
        <tr>
            <td>{{$Courriers_Entrants->id}}</td>
            <td>{{$Courriers_Entrants->ref}}</td>
            <td>{{$Courriers_Entrants->objet}}</td>
            <td>{{$Courriers_Entrants->objet}}</td>
            <td>{{$Courriers_Entrants->status}}</td>
            <td>{{$Courriers_Entrants->expediteur}}</td>
            <td>{{$Courriers_Entrants->pieces_jointe}}</td>
            <td>{{$Courriers_Entrants->date_recept}}</td>
            <td>{{$Courriers_Entrants->libelle}}</td>
            <td>{{$Courriers_Entrants->user}}</td>
            <td><a href="" class="btn btn-primary">Modifier</a></td>
            <td><a href="" class="btn btn-info">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
</body>
</html>









@endsection
