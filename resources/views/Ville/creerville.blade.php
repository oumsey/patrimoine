@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    AJOUT VILLES
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
      <form method="post" action="/storeville">
       <div class="form-group">
        @csrf
        <div class="form-group">
        <label>Régions</label>
         <select name="REG_NUM" class="form-control" >
          <option value="">Sélectionner </option>
           @foreach ($region as $reg)
          <option value="{{$reg->REG_NUM}}" >{{$reg->REG_NOM}}</option>
          @endforeach
          </select>
        </div>
        <div class="form-group">
          <label >Ville:</label>
         <input type="text" class="form-control" name="VIL_NOM"/>
        </div>
         <div class="form-group">
          <label >Description:</label>
         <input type="text" class="form-control" name="VIL_DESCR"/>
        </div>
        <button type="submit" class="btn btn-primary">AJOUTER</button>
      </form>
 </div>
</div>
@endsection 