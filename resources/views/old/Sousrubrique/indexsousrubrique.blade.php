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
          <td>Nom Sous-Rubriques</td>
          <td>Norme</td>
          <td>Activer</td>
          <td>Rubrique</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        <tr>
           @foreach($sousrubriques as $sousrubrique)
            <td>{{$sousrubrique->SRB_NUM }}</td>
            <td>{{$sousrubrique->SRB_LIB}}</td>
            <td>{{$sousrubrique->SRB_NORME}}</td>
            <td><?php if($sousrubrique->SRB_ACTIVER==='O') echo 'OUI';
            if($sousrubrique->SRB_ACTIVER==='N') echo 'NON';?> </td>
            <td>{{$sousrubrique->rubrique->RUB_LIB}}</td>
            <td><a href="/affichersousrubrique/{{$sousrubrique->SRB_NUM}}" class="btn btn-dark" >Modifier<br></a></td>
            <td>
                <form action="/destroysousrubrique/{{$sousrubrique->SRB_NUM}}" method="post">
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