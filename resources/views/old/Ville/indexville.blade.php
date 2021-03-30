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
          <td>Nom Ville</td>
          <td>Description</td>
          <td>Région</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        <tr>
           @foreach($ville as $vil)
            <td>{{$vil->VIL_NUM }}</td>
            <td>{{$vil->VIL_NOM}}</td>
            <td>{{$vil->VIL_DESCR}}</td>
            <td>{{$vil->region->REG_NOM}}</td>
            <td><a href="/afficherville/{{$vil->VIL_NUM}}" class="btn btn-dark" >Modifier<br></a></td>
            <td>
                <form action="/destroyville/{{$vil->VIL_NUM}}" method="post">
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