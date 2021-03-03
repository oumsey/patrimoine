@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    AJOUT DE PAYS
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
      <form method="post" action="/storepays">
       <div class="form-group">
        @csrf
         <label >Nom:</label>
         <input type="text" class="form-control" name="PAY_NOM"/>
        </div>
        <div class="form-group">
            <label >Nationalité:</label>
            <input type="text" class="form-control" name="PAY_NATIONALITE"/>
        </div>
        <button type="submit" class="btn btn-primary">AJOUTER</button>
       </form>
    </div>
</div>
@endsection 