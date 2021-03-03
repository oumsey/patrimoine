@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    AJOUT TYPE BIEN
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
      <form method="post" action="/storetypebien">
       <div class="form-group">
        @csrf
         <label >Type de Bien:</label>
         <input type="text" class="form-control" name="TBI_LIB"/>
        </div>
        <button type="submit" class="btn btn-primary">AJOUTER</button>
       </form>
    </div>
</div>
@endsection 