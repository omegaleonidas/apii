@extends('layout.v_template')

@section('content')
  

<form  action="/informasi/insert" method="POST"  enctype="multipart/form-data">
@csrf




<div class="content">
<div class="row">
<div class="col-sm-6">

<div class="form-group">
    <label >Judul</label>
    <input name="judul" class="form-control  @error('judul') is-invalid @enderror" value="{{old('judul')}}">
<div class="text-danger">
        @error('judul')
            {{$message}}
        @enderror
</div>

</div>

<div class="form-group">
    <label >Descripsi</label>
    <textarea name="descripsi"  class="form-control @error('descripsi') is-invalid @enderror"  value="{{old('descripsi')}}" ></textarea>
    <div class="text-danger">
        @error('descripsi')
            {{$message}}
        @enderror
</div>

</div>

<div class="form-group">
    <label >gambar</label>
    <input name="gambar"  type="file" class="form-control form-control @error('gambar') is-invalid @enderror  " value="{{old('gambar')}}" >
    <div class="text-danger">
        @error('gambar')
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