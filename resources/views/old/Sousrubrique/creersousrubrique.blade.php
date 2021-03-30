@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    AJOUT SOUS-RUBRIQUES
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
      <form method="post" action="/storesousrubrique">
       <div class="form-group">
        @csrf
        <div class="form-group">
        <label>Rubrique</label>
         <select name="RUB_NUM" class="form-control" >
          <option value="">Sélectionner </option>
           @foreach ($rubrique as $rubriques)
          <option value="{{$rubriques->RUB_NUM}}" >{{$rubriques->RUB_LIB}}</option>
          @endforeach
          </select>
        </div>
        <div class="form-group">
          <label >Sous-rubrique:</label>
         <input type="text" class="form-control" name="SRB_LIB"/>
        </div>
        <div class="form-group">
            <label >Norme:</label>
            <input type="text" class="form-control" name="SRB_NORME"/>
        </div>
        <div class="form-group">
            <label >Taux BoniMin:</label>
            <input type="text" class="form-control" name="SRB_TAUXBONIMIN"/>
        </div>
        <div class="form-group">
        <label >Taux BoniMax:</label>
         <input type="text" class="form-control" name="SRB_TAUXBONIMAX"/>
        </div>
        <div class="form-group">
            <label >Etat:</label>
            <select name="SRB_ETAT" class="form-control">
            <option value="">Sélectionnez</option>
            <option value="O">OUI</option>
            <option value="N">NON</option>
            </select>
        </div>
         </div>
         <div class="form-group">
          <label>ACTIVER</label></td>
          <select class="form-control" name="SRB_ACTIVER">
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