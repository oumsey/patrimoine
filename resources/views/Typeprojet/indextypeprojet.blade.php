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
          <td>Nom du  Type de Projet</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        <tr>
           @foreach($typeprojet as $type)
            <td>{{$type->TPJ_NUM }}</td>
            <td>{{$type->TPJ_LIB}}</td>
            <td><a href="/affichertypeprojet/{{$type->TPJ_NUM}}" class="btn btn-dark" >Modifier<br></a></td>
            <td>
                <form action="/destroytypeprojet/{{$type->TPJ_NUM}}" method="post">
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