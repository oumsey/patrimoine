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
      <form method="post" action="/updatetyperubrique/{{$typerubrique->TRB_NUM}}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label >Nom Type Rubrique:</label>
          <input type="text" class="form-control" name="TRB_LIB" value="{{$typerubrique->TRB_LIB}}" />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection