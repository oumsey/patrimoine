@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    MODIFICATION DE LA SOUS-RUBRIQUE
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
      <form method="post" action="/updatesousrubrique/{{$sousrubrique->RUB_NUM}}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label>Rubrique</label>
          <select name="RUB_NUM" class="form-control" >
          @foreach ($rubrique as $rub)
          <option <?php if($sousrubrique->RUB_NUM==$rub->RUB_NUM) echo'selected'; ?> value="{{$rub->RUB_NUM}}" >{{$rub->RUB_LIB}}</option>
          @endforeach
          </select>
        </div>
         <div class="form-group">
          <label >Sous-Rubrique:</label>
         <input type="text" class="form-control" name="SRB_LIB" value="{{$sousrubrique->SRB_LIB}}" />
        </div>
        <div class="form-group">
            <label >Norme:</label>
            <input type="text" class="form-control" name="SRB_NORME"value="{{$sousrubrique->SRB_NORME}}"/>
        </div>
        <div class="form-group">
            <label >Taux BoniMin:</label>
            <input type="text" class="form-control" name="SRB_TAUXBONIMIN"value="{{$sousrubrique->SRB_TAUXBONIMIN}}"/>
        </div>
        <div class="form-group">
        <label >Taux BoniMax:</label>
         <input type="text" class="form-control" name="SRB_TAUXBONIMAX"value="{{$sousrubrique->SRB_TAUXBONIMAX}}"/>
        </div>
        <div class="form-group">
            <label >Etat:</label>
            <select name="SRB_ETAT" class="form-control">
            <option <?php if($sousrubrique->SRB_ETAT=="O"&&$sousrubrique->SRB_ETAT=="N") echo'selected';?>value="{{$sousrubrique->SRB_ETAT}}"><?php if ($sousrubrique->SRB_ETAT=="O") echo "OUI";
            if ($sousrubrique->SRB_ETAT=="N") echo "NON";?></option>
            <option value="O">OUI</option>
            <option value="N">NON</option>
            </select>
        </div>
         <div class="form-group">
          <label>ACTIVER</label></td>
          <select class="form-control" name="SRB_ACTIVER">
            <option <?php if($sousrubrique->SRB_ACTIVER=="O"&& $sousrubrique->SRB_ACTIVER=="N") echo'selected';?> value="{{$sousrubrique->SRB_ACTIVER}}"><?php if ($sousrubrique->SRB_ACTIVER=="O") echo "OUI";
            if ($sousrubrique->SRB_ACTIVER=="N") echo "NON";?></option>
            <option value="O">OUI</option>
            <option value="N">NON</option>
          </select>
         </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection