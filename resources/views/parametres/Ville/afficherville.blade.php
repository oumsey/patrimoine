@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    MODIFICATION DE LA VILLE
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="/updateville/{{$ville->VIL_NUM}}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label>Région</label>
          <select name="REG_NUM" class="form-control" >
          @foreach ($region as $reg)
          <option <?php if($ville->REG_NUM==$reg->REG_NUM) echo'selected'; ?> value="{{$reg->REG_NUM}}" >{{$reg->REG_NOM}}</option>
          @endforeach
          </select>
        </div>
         <div class="form-group">
          <label >Ville:</label>
         <input type="text" class="form-control" name="VIL_NOM" value="{{$ville->VIL_NOM}}" />
        </div>
        <div class="form-group">
          <label >Description:</label>
         <input type="text" class="form-control" name="VIL_DESCR" value="{{$ville->VIL_DESCR}}"/>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection