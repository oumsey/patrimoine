@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    MODIFICATION DE L'AGENCE BANCAIRE
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
      <form method="post" action="/updateagencebancaire/{{$agenceb->AGB_NUM}}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label>Banque</label>
          <select name="BQE_NUM" class="form-control" >
          @foreach ($banque as $types)
          <option <?php if($agenceb->BQE_NUM==$types->BQE_NUM) echo'selected'; ?> value="{{$types->BQE_NUM}}" >{{$types->BQE_NOM}}</option> 
          @endforeach
          </select>
        </div>
         <div class="form-group">
          <label >Libellés Agence Bancaire:</label>
         <input type="text" class="form-control" name="AGB_LIB" value="{{$agenceb->AGB_LIB}}" />
        </div>
        <div class="form-group">
            <label >Norme:</label>
            <input type="text" class="form-control" name="AGB_TEL"value="{{$agenceb->AGB_TEL}}"/>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection