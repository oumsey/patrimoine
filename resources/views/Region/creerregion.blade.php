@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    AJOUT REGIONS
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
      <form method="post" action="/storeregion">
       <div class="form-group">
        @csrf
        <div class="form-group">
        <label>PAYS</label>
         <select name="PAY_NUM" class="form-control" >
          <option value="">Sélectionner </option>
           @foreach ($pays as $pa)
          <option value="{{$pa->PAY_NUM}}" >{{$pa->PAY_NOM}}</option>
          @endforeach
          </select>
        </div>
        <div class="form-group">
          <label >Région:</label>
         <input type="text" class="form-control" name="REG_NOM"/>
        </div>
         <div class="form-group">
          <label >Description:</label>
         <input type="text" class="form-control" name="REG_DESCR"/>
        </div>
        <button type="submit" class="btn btn-primary">AJOUTER</button>
      </form>
 </div>
</div>
@endsection 