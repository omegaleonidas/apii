@extends('layout.v_template')

@section('content')
  

<form  action="/agama/update/{{$agama -> id_agama}}" method="POST"  enctype="multipart/form-data">
@csrf


<div class="content">
<div class="row">
<div class="col-sm-6">

<div class="form-group">
    <label >nama _agama</label>
    <input name="nama_agama" class="form-control  @error('nama_agama') is-invalid @enderror" value="{{$agama -> nama_agama}}">
<div class="text-danger">
        @error('nama_agama')
            {{$message}}
        @enderror
</div>

</div>

<div class="form-group">
    <button class="btn btn-primary btn-sm" >simpan</button>
</div>

</div>




</div>
</div>

</form>

    @endsection