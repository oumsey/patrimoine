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
          <td>Nom Région</td>
          <td>Description</td>
          <td>PAYS</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        <tr>
           @foreach($region as $reg)
            <td>{{$reg->REG_NUM }}</td>
            <td>{{$reg->REG_NOM}}</td>
            <td>{{$reg->REG_DESCR}}</td>
            <td>{{$reg->pays->PAY_NOM}}</td>
            <td><a href="/afficherregion/{{$reg->REG_NUM}}" class="btn btn-dark" >Modifier<br></a></td>
            <td>
                <form action="/destroyregion/{{$reg->REG_NUM}}" method="post">
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