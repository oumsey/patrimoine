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
          <td>Nom Commune</td>
          <td>Description</td>
          <td>Ville</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        <tr>
           @foreach($commune as $comm)
            <td>{{$comm->COM_NUM }}</td>
            <td>{{$comm->COM_NOM}}</td>
            <td>{{$comm->COM_DESCR}}</td>
            <td>{{$comm->ville->VIL_NOM}}</td>
            <td><a href="/affichercommune/{{$comm->COM_NUM}}" class="btn btn-dark" >Modifier<br></a></td>
            <td>
                <form action="/destroycommune/{{$comm->COM_NUM}}" method="post">
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