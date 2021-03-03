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
          <td>PAYS</td>
          <td>Nationalité</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        <tr>
           @foreach($pays as $pa)
            <td>{{$pa->PAY_NUM }}</td>
            <td>{{$pa->PAY_NOM}}</td>
            <td>{{$pa->PAY_NATIONALITE}}</td>
            <td><a href="/afficherpays/{{$pa->PAY_NUM}}" class="btn btn-dark" >Modifier<br></a></td>
            <td>
                <form action="/destroypays/{{$pa->PAY_NUM}}" method="post">
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