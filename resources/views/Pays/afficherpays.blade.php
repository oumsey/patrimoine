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
      <form method="post" action="/updatepays/{{$pays->PAY_NUM}}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label >Pays:</label>
          <input type="text" class="form-control" name="PAY_NOM" value="{{$pays->PAY_NOM}}" />
        </div>
        <div class="form-group">
          <label >Nationalité:</label>
          <input type="text" class="form-control" name="PAY_NATIONALITE" value="{{$pays->PAY_NATIONALITE}}" />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection