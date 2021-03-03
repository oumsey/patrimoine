@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    AJOUT DE BANQUES
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
      <form method="post" action="/store">
       <div class="form-group">
        @csrf
         <label >Nom:</label>
         <input type="text" class="form-control" name="BQE_NOM"/>
        </div>
        <div class="form-group">
            <label >Sigle:</label>
            <input type="text" class="form-control" name="BQE_SIGLE"/>
        </div>
        <div class="form-group">
            <label >Téléphone:</label>
            <input type="text" class="form-control" name="BQE_TEL"/>
        </div>
        <button type="submit" class="btn btn-primary">AJOUTER</button>
       </form>
    </div>
</div>
@endsection 