@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    MODIFICATION DU COMPTES
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
      <form method="post" action="/updatetypecompte/{{$typecompte->TCP_NUM}}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label >Nom Type Bien:</label>
          <input type="text" class="form-control" name="TCP_LIB" value="{{$typecompte->TCP_LIB}}" />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection