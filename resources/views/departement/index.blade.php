@extends('layouts.app')

@section('content')

<h2 style="text-align:center;">Liste des départements</h2>

    <!-- retour vers l'accueil -->
    <a class="btn btn-danger" href="admin/dashboard">Retour</a><br><br>

      <!-- Ajout departement -->
    <form action=" {{ route('departement.register') }} " method="POST" style="margin-bottom: 10% ;">
            @csrf

           <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-1 float-right" >
                            <input class="form-control" name="entreprise" value="1" type="hidden">
                            <label for="nom">Nom</label>
                      </div>
                      <div class="col-md-3" >
                            <input class="form-control" name="nom" placeholder="nom du département">
                      </div >

                      <div class="col-md-1">
                        <button class=" btn btn-primary" value="submit">Ajouter</button>
                      </div>
                
            
    </form>
<!-- fin ajout -->

<!-- debut tableau -->
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr style="background-color:#1D71B8;">
        <th scope="col">N° </th>
        <th scope="col">Nom du Département</th>
        
        <th scope="col">Action</th>
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
    @foreach($departement as $departements)
        <tr>
        <td>
              <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                  <label class="custom-control-label" for="customCheck1"></label>
              </div>
            </td>
            <td>{{$departements->id}}</td>
            <td>{{$departements->nom}}</td>
                 
            <td><a href="" class="btn btn-primary">Modifier</a></td>
            <td><a href="" class="btn btn-info">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
<!-- fin tableau -->


@endsection