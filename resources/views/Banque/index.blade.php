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
          <td>Nom de la Banque</td>
          <td>Sigle de la Banque</td>
          <td>Téléphone</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        <tr>
           @foreach($banques as $banque)
            <td>{{$banque->BQE_NUM }}</td>
            <td>{{$banque->BQE_NOM}}</td>
            <td>{{$banque->BQE_SIGLE}}</td>
            <td>{{$banque->BQE_TEL}}</td>
            <td><a href="/afficher/{{$banque->BQE_NUM}}" class="btn btn-dark" >Modifier<br></a></td>
            <td>
                <form action="/destroy/{{$banque->BQE_NUM}}" method="post">
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