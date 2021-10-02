@extends('layout.v_template')
@section('content')
  
<form  action="/jabatan/insert" method="POST"  enctype="multipart/form-data">
@csrf


<div class="content">
<div class="row">
<div class="col-sm-6">

<div class="form-group">
    <label >nama jabatan</label>
    <input name="nama_jabatan" class="form-control  @error('nama_jabatan') is-invalid @enderror" value="{{old('nama_jabatan')}}">
<div class="text-danger">
        @error('nama_jabatan')
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