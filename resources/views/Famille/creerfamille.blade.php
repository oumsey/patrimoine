@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    AJOUT DE FAMILLE
  </div>
<div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="/storefamille">
       <div class="form-group">
        @csrf
         <label >Nom de la Famille:</label>
         <input type="text" class="form-control" name="FAM_NOM"/>
        </div>
        <div class="form-group">
            <label>Nom du Responsable:</label>
            <input type="text" class="form-control" name="FAM_NOMRESPO"/>
        </div>
        <div class="form-group">
            <label >Téléphone de la famille:</label>
            <input type="text" class="form-control" name="FAM_TEL"/>
        </div>
        <div>
        <label >Email:</label>
         <input type="text" class="form-control" name="FAM_EMAIL"/>
        </div>
        <div class="form-group">
            <label >Boîte Postale:</label>
            <input type="text" class="form-control" name="FAM_BOITPOSTE"/>
        </div>
        <div class="form-group">
            <label >Age retrait:</label>
            <input type="text" class="form-control" name="FAM_AGERETRAIT"/>
        </div>
        <div class="form-group">
            <label >Montant Escompte:</label>
            <input type="text" class="form-control" name="FAM_MONTANTESCOMPTE"/>
        </div>
        <button type="submit" class="btn btn-primary">AJOUTER</button>
       </form>
    </div>
</div>
@endsection 