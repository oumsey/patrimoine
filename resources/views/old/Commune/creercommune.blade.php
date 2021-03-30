@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    AJOUT COMMUNES
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
      <form method="post" action="/storecommune">
       <div class="form-group">
        @csrf
        <div class="form-group">
        <label>Ville</label>
         <select name="VIL_NUM" class="form-control" >
          <option value="">Sélectionner </option>
           @foreach ($ville as $vil)
          <option value="{{$vil->VIL_NUM}}" >{{$vil->VIL_NOM}}</option>
          @endforeach
          </select>
        </div>
        <div class="form-group">
          <label >Commune:</label>
         <input type="text" class="form-control" name="COM_NOM"/>
        </div>
         <div class="form-group">
          <label >Description:</label>
         <input type="text" class="form-control" name="COM_DESCR"/>
        </div>
        <button type="submit" class="btn btn-primary">AJOUTER</button>
      </form>
 </div>
</div>
@endsection 