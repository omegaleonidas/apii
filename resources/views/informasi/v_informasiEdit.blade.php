@extends('layout.v_template')

@section('content')
  

<form  action="/informasi/update/{{$informasi -> id_informasi}}" method="POST"  enctype="multipart/form-data">
@csrf




<div class="content">
<div class="row">
<div class="col-sm-6">

<div class="form-group">
    <label >Judul</label>
    <input name="judul" class="form-control  @error('judul') is-invalid @enderror" value="{{$informasi -> judul}}">
<div class="text-danger">
        @error('judul')
            {{$message}}
        @enderror
</div>

</div>

<div class="form-group">
    <label >Descripsi</label>
    <textarea name="descripsi" class="form-control @error('descripsi') is-invalid @enderror" value="{{$informasi -> descripsi}}"> </textarea>
    <div class="text-danger">
        @error('descripsi')
            {{$message}}
        @enderror
</div>

</div>

<div class="col-sm 12" >
<div class="col - sm 4">
<img src="{{url('foto_informasi/'.$informasi-> gambar)}}" width="150px" >
</div>

<div class="col-sm-8">
<div class="form-group">
    <label >gambar</label>
    <input name="gambar"  type="file" class="form-control form-control @error('gambar') is-invalid @enderror  " value="{{$informasi -> gambar}}" >
    <div class="text-danger">
        @error('gambar')
            {{$message}}
        @enderror
</div>
</div>


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