@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Code</td>
          <td>Date Début:</td>
          <td>Date Fin:</td>
          <td>Montant Début:</td>
          <td>Montant Fin:</td>
          <td>Début Solde Dette:</td>
          <td>Fin Solde Dette:</td>
          <td>Etat:</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        <tr>
           @foreach($exercice as $exo)
            <td>{{$exo->EXO_NUM }}</td>
            <td>{{$exo->EXO_DATEDEBUT}}</td>
            <td>{{$exo->EXO_DATFIN}}</td>
            <td>{{$exo->EXO_MONTANTDEBUT}}</td>
            <td>{{$exo->EXO_MONTANTFIN}}</td>
            <td>{{$exo->EXO_DEBUTSOLDETT}}</td>
            <td>{{$exo->EXO_FINSOLDETT}}</td>
            <td>{{$exo->EXO_ETAT}}</td>
            <td><a href="/afficherexercice/{{$exo->EXO_NUM}}" class="btn btn-dark" >Modifier<br></a></td>
            <td>
                <form action="/destroyexercice/{{$exo->EXO_NUM}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>

           @endforeach
    </tbody>
  </table>
<div>
@endsection