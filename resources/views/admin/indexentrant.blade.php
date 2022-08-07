@extends('layouts.app')

@section('content')

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
            <!-- <td>
              <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                  <label class="custom-control-label" for="customCheck1">1</label>
              </div>
            </td> -->
    </thead>
    <tbody>
    @foreach($oumou as $oumouDagnogo)
        <tr>
        <td>
              <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                  <label class="custom-control-label" for="customCheck1"></label>
              </div>
            </td>
            <!-- <td>{{$oumouDagnogo->id}}</td> -->
            <td>{{$oumouDagnogo->ref}}</td>
            <td>{{$oumouDagnogo->objet}}</td>
            <td>{{$oumouDagnogo->statut}}</td>
            <td>{{$oumouDagnogo->expeditaire}}</td>
            <td>{{$oumouDagnogo->piece_jointe}}</td>
            <td>{{$oumouDagnogo->date_recept}}</td>
            <td>{{$oumouDagnogo->libelle}}</td>
            <td>{{$oumouDagnogo->user}}</td>
            <td><a href="" class="btn btn-primary">Modifier</a></td>
            <td><a href="" class="btn btn-info">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
{{ Auth::user()->name }}


@endsection