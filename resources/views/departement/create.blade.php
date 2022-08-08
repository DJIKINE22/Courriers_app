@extends('app')
@section('content')
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
@endif
<div class="row">
    <div class="col-md-6">
   
        <form action=" {{ route('departement.register') }} " method="POST">
            @csrf
            <div class="mb-3">
                <label for="nom">Nom</label>
                <input class="form-control" name="nom">
            </div>
            
            
           
                <button class=" btn btn-primary" value="submit">Enreigistrer</button>
                <a class="btn btn-danger" href="dashboard">Annuler</a>
            
            </form>
            
    </div>
</div>