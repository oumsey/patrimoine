@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    MODIFICATION DE LA BANQUE
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
      <form method="post" action="/update/{{$banque->BQE_NUM}}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label >Nom de la Banque:</label>
          <input type="text" class="form-control" name="BQE_NOM" value="{{$banque->BQE_NOM}}" />
        </div>
        <div class="form-group">
          <label >Sigle de la Banque:</label>
          <input type="text" class="form-control" name="BQE_SIGLE" value="{{$banque->BQE_SIGLE}}" />
        </div>
        <div class="form-group">
          <label >Contact de la Banque:</label>
          <input type="text" class="form-control" name="BQE_TEL" value="{{$banque->BQE_TEL}}" />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection