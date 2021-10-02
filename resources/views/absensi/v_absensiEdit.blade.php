@extends('layout.v_template')
@section('content')
  

<form  action="/absensi/update/{{$absensi -> id_absensi}}" method="POST"  enctype="multipart/form-data">
@csrf


<div class="content">
<div class="row">
<div class="col-sm-6">

<div class="form-group">
    <label >nip</label>
    <input name="nip" class="form-control  @error('nip') is-invalid @enderror" value="{{$absensi -> nip}}">
<div class="text-danger">
        @error('nip')
            {{$message}}
        @enderror
</div>

</div>

<div class="form-group">
    <label >tanggal</label>
    <input name="tanggal" class="form-control  @error('tanggal') is-invalid @enderror" value="{{$absensi -> tanggal}}">
<div class="text-danger">
        @error('tangggal')
            {{$message}}
        @enderror
</div>

</div>

<div class="form-group">
    <label >jam masuk</label>
    <input name="jam_masuk" class="form-control  @error('jam_masuk') is-invalid @enderror" value="{{$absensi -> jam_masuk}}">
<div class="text-danger">
        @error('jam_masuk')
            {{$message}}
        @enderror
</div>

</div>


<div class="form-group">
    <label >jam selesai</label>
    <input name="jam_selesai" class="form-control  @error('jam_selesai') is-invalid @enderror" value="{{$absensi -> jam_selesai}}">
<div class="text-danger">
        @error('jam_selesai')
            {{$message}}
        @enderror
</div>

</div>


<div class="form-group">
    <label >alamat</label>
    <input name="alamat" class="form-control  @error('alamat') is-invalid @enderror" value="{{$absensi -> alamat}}">
<div class="text-danger">
        @error('alamat')
            {{$message}}
        @enderror
</div>

</div>

<div class="form-group">
    <label >alamat sore</label>
    <input name="alamat_sore" class="form-control  @error('alamat_sore') is-invalid @enderror" value="{{$absensi -> alamat_sore}}">
<div class="text-danger">
        @error('alamat_sore')
            {{$message}}
        @enderror
</div>

</div>

<div class="form-group">
    <label >keterangan</label>
    <input name="keterangan" class="form-control  @error('keterangan') is-invalid @enderror" value="{{$absensi -> keterangan}}">
<div class="text-danger">
        @error('keterangan')
            {{$message}}
        @enderror
</div>

</div>

<div class="form-group">
    <label >keterangan sore</label>
    <input name="keterangan_sore" class="form-control  @error('keterangan_sore') is-invalid @enderror" value="{{$absensi -> keterangan_sore}}">
<div class="text-danger">
        @error('keterangan_sore')
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