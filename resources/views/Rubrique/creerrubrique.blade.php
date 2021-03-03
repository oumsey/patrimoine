@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    AJOUT RUBRIQUES
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
      <form method="post" action="/storerubrique">
       <div class="form-group">
        @csrf
        <div class="form-group">
        <label>Type Rubrique</label>
         <select name="TRB_NUM" class="form-control" >
          <option value="">Sélectionner </option>
           @foreach ($type as $types)
          <option value="{{$types->TRB_NUM}}" >{{$types->TRB_LIB}}</option>
          @endforeach
          </select>
        </div>
        <div class="form-group">
          <label >Rubrique:</label>
         <input type="text" class="form-control" name="RUB_LIB"/>
        </div>
        <div class="form-group">
            <label >Norme:</label>
            <input type="text" class="form-control" name="RUB_NORME"/>
        </div>
        <div class="form-group">
            <label >Taux BoniMin:</label>
            <input type="text" class="form-control" name="RUB_TAUXBONIMIN"/>
        </div>
        <div class="form-group">
        <label >Taux BoniMax:</label>
         <input type="text" class="form-control" name="RUB_TAUXBONIMAX"/>
        </div>
        <div class="form-group">
            <label >Etat:</label>
            <select name="RUB_ETAT" class="form-control">
            <option value="">Sélectionnez</option>
            <option value="O">OUI</option>
            <option value="N">NON</option>
            </select>
        </div>
        <div class="form-group">
          <label> Sens:</label>
          <select class="form-control" name="RUB_SENS">
          <option value=""> Sélectionnez</option>
          <option value="A">Actif</option>
          <option value="P">Passif</option>
          <option value="M">Mixte</option>
          </select>
         </div>
         <div class="form-group">
          <label>ACTIVER</label></td>
          <select class="form-control" name="RUB_ACTIVER">
            <option value="">Sélectionnez</option>
            <option value="O">OUI</option>
            <option value="N">NON</option>
          </select>
         </div>
        <button type="submit" class="btn btn-primary">AJOUTER</button>
      </form>
 </div>
</div>
@endsection 