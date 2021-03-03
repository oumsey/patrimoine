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
          <td>Nom de la Famille</td>
          <td>Nom du Responsable</td>
          <td>Téléphone de la famille</td>
          <td>Email</td>
          <td>Boîte Postale</td>
          <td>Age retrait</td>
          <td>Montant Escompté</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        <tr>
           @foreach($famille as $fam)
            <td>{{$fam->FAM_NUM }}</td>
            <td>{{$fam->FAM_NOM}}</td>
            <td>{{$fam->FAM_NOMRESPO}}</td>
            <td>{{$fam->FAM_TEL}}</td>
            <td>{{$fam->FAM_EMAIL}}</td>
            <td>{{$fam->FAM_BOITPOSTE}}</td>
            <td>{{$fam->FAM_AGERETRAIT}}</td>
            <td>{{$fam->FAM_MONTANTESCOMPTE}}</td>
            <td><a href="/afficherfamille/{{$fam->FAM_NUM}}" class="btn btn-dark" >Modifier<br></a></td>
            <td>
                <form action="/destroyfamille/{{$fam->FAM_NUM}}" method="post">
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