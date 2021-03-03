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
          <td>Nom Quartier</td>
          <td>Description</td>
          <td>Commune</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        <tr>
           @foreach($quartier as $quar)
            <td>{{$quar->QRT_NUM }}</td>
            <td>{{$quar->QRT_NOM}}</td>
            <td>{{$quar->QRT_DESCR}}</td>
            <td>{{$quar->commune->COM_NOM}}</td>
            <td><a href="/afficherquartier/{{$quar->QRT_NUM}}" class="btn btn-dark" >Modifier<br></a></td>
            <td>
                <form action="/destroyquartier/{{$quar->QRT_NUM}}" method="post">
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