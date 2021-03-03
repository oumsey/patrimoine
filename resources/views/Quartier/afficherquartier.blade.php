@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    MODIFICATION DE QUARTIER
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
    @endif
      <form method="post" action="/updatequartier/{{$quartier->QRT_NUM}}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label>Commune</label>
          <select name="COM_NUM" class="form-control" >
          @foreach ($commune as $com)
          <option <?php if($quartier->COM_NUM==$com->COM_NUM) echo'selected'; ?> value="{{$com->COM_NUM}}" >{{$com->COM_NOM}}</option>
          @endforeach
          </select>
        </div>
         <div class="form-group">
          <label >Quartier:</label>
         <input type="text" class="form-control" name="QRT_NOM" value="{{$quartier->QRT_NOM}}" />
        </div>
        <div class="form-group">
          <label >Description:</label>
         <input type="text" class="form-control" name="QRT_DESCR" value="{{$quartier->QRT_DESCR}}"/>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection