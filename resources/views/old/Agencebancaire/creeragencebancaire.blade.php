@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    AJOUT AGENCE BANCAIRE
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
      <form method="post" action="/storeagencebancaire">
       <div class="form-group">
        @csrf
        <div class="form-group">
        <label>Banque</label>
         <select name="BQE_NUM" class="form-control" >
          <option value="">Sélectionner </option>
           @foreach ($banque as $bqe)
          <option value="{{$bqe->BQE_NUM}}" >{{$bqe->BQE_NOM}}</option>
          @endforeach
          </select>
        </div>
        <div class="form-group">
          <label >Libellés Agence Bancaire:</label>
         <input type="text" class="form-control" name="AGB_LIB"/>
        </div>
        <div class="form-group">
            <label >Téléphone:</label>
            <input type="text" class="form-control" name="AGB_TEL"/>
        </div>
        <button type="submit" class="btn btn-primary">AJOUTER</button>
      </form>
 </div>
</div>
@endsection 