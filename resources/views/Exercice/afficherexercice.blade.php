@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    MODIFICATION DE L'EXERCICE
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
      <form method="post" action="/updateexercice/{{$exercice->EXO_NUM}}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label >Date Début:</label>
          <input type="text" class="form-control" name="EXO_DATEDEBUT" value="{{$exercice->EXO_DATEDEBUT}}" />
        </div>
        <div class="form-group">
          <label >Date Fin:</label>
          <input type="text" class="form-control" name="EXO_DATFIN" value="{{$exercice->EXO_DATFIN}}" />
        </div>
        <div class="form-group">
          <label >Montant Début:</label>
          <input type="text" class="form-control" name="EXO_MONTANTDEBUT" value="{{$exercice->EXO_MONTANTDEBUT}}" />
        </div>
        <div class="form-group">
          <label >Montant fin:</label>
          <input type="text" class="form-control" name="EXO_MONTANTFIN" value="{{$exercice->EXO_MONTANTFIN}}" />
        </div>
        <div class="form-group">
          <label >Début de Solde Dette:</label>
          <input type="text" class="form-control" name="EXO_DEBUTSOLDETT" value="{{$exercice->EXO_DEBUTSOLDETT}}" />
        </div>
        <div class="form-group">
          <label >Fin Solde Dette:</label>
          <input type="text" class="form-control" name="EXO_FINSOLDETT" value="{{$exercice->EXO_FINSOLDETT}}" />
        </div>
        <div class="form-group">
          <label >ETAT:</label>
          <input type="text" class="form-control" name="EXO_ETAT" value="{{$exercice->EXO_ETAT}}" />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection