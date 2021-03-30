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
          <td>Libellé Agence Bancaire</td>
          <td>Téléphone</td>
          <td>Nom De La Banque</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        <tr>
           @foreach($agenceb as $agb)
            <td>{{$agb->AGB_NUM }}</td>
            <td>{{$agb->AGB_LIB}}</td>
            <td>{{$agb->AGB_TEL}}</td>
            <td>{{$agb->banque->BQE_NOM}}</td>
            <td><a href="/afficheragencebancaire/{{$agb->AGB_NUM}}" class="btn btn-dark" >Modifier<br></a></td>
            <td>
                <form action="/destroyagencebancaire/{{$agb->AGB_NUM}}" method="post">
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