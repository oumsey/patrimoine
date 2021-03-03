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
          <td>Nom Rubriques</td>
          <td>Norme</td>
          <td>Sens</td>
          <td>Activer</td>
          <td>Type Rubrique</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        <tr>
           @foreach($rubriques as $rubrique)
            <td>{{$rubrique->RUB_NUM }}</td>
            <td>{{$rubrique->RUB_LIB}}</td>
            <td>{{$rubrique->RUB_NORME}}</td>
            <td><?php if($rubrique->RUB_SENS==='A') echo 'Activer';
            if($rubrique->RUB_SENS==='P') echo 'Passif'; 
            if($rubrique->RUB_SENS==='M') echo 'Mixte'?></td>
            <td><?php if($rubrique->RUB_ACTIVER==='O') echo 'OUI';
            if($rubrique->RUB_ACTIVER==='N') echo 'NON';?> </td>
            <td>{{$rubrique->type->TRB_LIB}}</td>
            <td><a href="/afficherrubrique/{{$rubrique->RUB_NUM}}" class="btn btn-dark" >Modifier<br></a></td>
            <td>
                <form action="/destroyrubrique/{{$rubrique->RUB_NUM}}" method="post">
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