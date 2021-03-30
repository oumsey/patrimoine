@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    MODIFICATION DE L'EXERCICE
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
      <form method="post" action="/updatefamille/{{$famille->FAM_NUM}}">
        @method('PATCH')
        @csrf
        <div class="form-group">
         <label >Nom de la Famille:</label>
         <input type="text" class="form-control" name="FAM_NOM" value="{{$famille->FAM_NOM}}" />
        </div>
        <div class="form-group">
            <label>Nom du Responsable:</label>
            <input type="text" class="form-control" name="FAM_NOMRESPO" value="{{$famille->FAM_NOMRESPO}}" />
        </div>
        <div class="form-group">
            <label >Téléphone de la famille:</label>
            <input type="text" class="form-control" name="FAM_TEL" value="{{$famille->FAM_TEL}}" />
        </div>
        <div>
        <label >Email:</label>
         <input type="text" class="form-control" name="FAM_EMAIL" value="{{$famille->FAM_EMAIL}}" />
        </div>
        <div class="form-group">
            <label >Boîte Postale:</label>
            <input type="text" class="form-control" name="FAM_BOITPOSTE" value="{{$famille->FAM_BOITPOSTE}}" />
        </div>
        <div class="form-group">
            <label >Age retrait:</label>
            <input type="text" class="form-control" name="FAM_AGERETRAIT" value="{{$famille->FAM_AGERETRAIT}}" />
        </div>
        <div class="form-group">
            <label >Montant Escompté:</label>
            <input type="text" class="form-control" name="FAM_MONTANTESCOMPTE" value="{{$famille->FAM_MONTANTESCOMPTE}}" />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection