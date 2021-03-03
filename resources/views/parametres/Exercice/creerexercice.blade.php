@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    AJOUT DE EXERCICES
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
      <form method="post" action="/storeexercice">
       <div class="form-group">
        @csrf
         <label >Date Début:</label>
         <input type="text" class="form-control" name="EXO_DATEDEBUT"  placeholder="<?php echo date('Y-m-d'); ?>" />
        </div>
        <div class="form-group">
            <label >Date Fin:</label>
            <input type="text" class="form-control" name="EXO_DATFIN" placeholder="<?php echo date('Y-m-d'); ?>"/>
        </div>
        <div class="form-group">
            <label >Montant Début:</label>
            <input type="text" class="form-control" name="EXO_MONTANTDEBUT"/>
        </div>
        <div>
        <label >Montant Fin:</label>
         <input type="text" class="form-control" name="EXO_MONTANTFIN"/>
        </div>
        <div class="form-group">
            <label >Début Solde Dette:</label>
            <input type="text" class="form-control" name="EXO_DEBUTSOLDETT"/>
        </div>
        <div class="form-group">
            <label >Fin Solde Dette:</label>
            <input type="text" class="form-control" name="EXO_FINSOLDETT"/>
        </div>
        <div class="form-group">
            <label >Etat:</label>
            <input type="text" class="form-control" name="EXO_ETAT"/>
        </div>
        <button type="submit" class="btn btn-primary">AJOUTER</button>
       </form>
    </div>
</div>
@endsection n