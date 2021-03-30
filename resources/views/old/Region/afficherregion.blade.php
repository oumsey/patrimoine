@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    MODIFICATION DE LA REGION
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
      <form method="post" action="/updateregion/{{$region->REG_NUM}}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label>PAYS</label>
          <select name="PAY_NUM" class="form-control" >
          @foreach ($pays as $pa)
          <option <?php if($region->PAY_NUM==$pa->PAY_NUM) echo'selected'; ?> value="{{$pa->PAY_NUM}}" >{{$pa->PAY_NOM}}</option>
          @endforeach
          </select>
        </div>
         <div class="form-group">
          <label >Région:</label>
         <input type="text" class="form-control" name="REG_NOM" value="{{$region->REG_NOM}}" />
        </div>
        <div class="form-group">
          <label >Description:</label>
         <input type="text" class="form-control" name="REG_DESCR" value="{{$region->REG_DESCR}}"/>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection