@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    MODIFICATION DE LA RUBRIQUE
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
      <form method="post" action="/updaterubrique/{{$rubrique->RUB_NUM}}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label>Type Rubrique</label>
          <select name="TRB_NUM" class="form-control" >
          @foreach ($type as $types)
          <option <?php if($rubrique->TRB_NUM==$types->TRB_NUM) echo'selected'; ?> value="{{$types->TRB_NUM}}" >{{$types->TRB_LIB}}</option>
          @endforeach
          </select>
        </div>
         <div class="form-group">
          <label >Rubrique:</label>
         <input type="text" class="form-control" name="RUB_LIB" value="{{$rubrique->RUB_LIB}}" />
        </div>
        <div class="form-group">
            <label >Norme:</label>
            <input type="text" class="form-control" name="RUB_NORME"value="{{$rubrique->RUB_NORME}}"/>
        </div>
        <div class="form-group">
            <label >Taux BoniMin:</label>
            <input type="text" class="form-control" name="RUB_TAUXBONIMIN"value="{{$rubrique->RUB_TAUXBONIMIN}}"/>
        </div>
        <div class="form-group">
        <label >Taux BoniMax:</label>
         <input type="text" class="form-control" name="RUB_TAUXBONIMAX"value="{{$rubrique->RUB_TAUXBONIMAX}}"/>
        </div>
        <div class="form-group">
            <label >Etat:</label>
            <select name="RUB_ETAT" class="form-control">
            <option <?php if($rubrique->RUB_ETAT=="O"&&$rubrique->RUB_ETAT=="N") echo'selected';?>value="{{$rubrique->RUB_ETAT}}"><?php if ($rubrique->RUB_ETAT=="O") echo "OUI";
            if ($rubrique->RUB_ETAT=="N") echo "NON";?></option>
            <option value="O">OUI</option>
            <option value="N">NON</option>
            </select>
        </div>
        <div class="form-group">
          <label> Sens:</label>
          <select class="form-control" name="RUB_SENS">
            <OPTION <?php if($rubrique->RUB_SENS=="A"&&$rubrique->RUB_SENS=="P"&&$rubrique->RUB_SENS=="M") echo'selected';?>value="{{$rubrique->RUB_SENS}}"><?php if ($rubrique->RUB_SENS=="A") echo "Actif";
            if ($rubrique->RUB_SENS=="P") echo "Passif";
            if ($rubrique->RUB_SENS=="M") echo "Mixte"; ?></OPTION>
          <option value="A">Actif</option>
          <option value="P">Passif</option>
          <option value="M">Mixte</option>
          </select>
         </div>
         <div class="form-group">
          <label>ACTIVER</label></td>
          <select class="form-control" name="RUB_ACTIVER">
            <option <?php if($rubrique->RUB_ACTIVER=="O"&&$rubrique->RUB_ACTIVER=="N") echo'selected';?> value="{{$rubrique->RUB_ACTIVER}}""><?php if ($rubrique->RUB_ACTIVER=="O") echo "OUI";
            if ($rubrique->RUB_ACTIVER=="N") echo "NON";?></option>
            <option value="O">OUI</option>
            <option value="N">NON</option>
          </select>
         </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection