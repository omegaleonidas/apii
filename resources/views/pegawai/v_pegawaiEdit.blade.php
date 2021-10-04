@extends('layout.v_template')

@section('content')
  
<form  action="/pegawai/update/{{$pegawai -> id_pegawai}}" method="POST"  enctype="multipart/form-data">
@csrf




<div class="content">
<div class="row">
<div class="col-sm-6">

<div class="form-group">
    <label >nip</label>
    <input name="nip" class="form-control  @error('nip') is-invalid @enderror" value="{{$pegawai -> nip}}">
<div class="text-danger">
        @error('nip')
            {{$message}}
        @enderror
</div>
</div>

<div class="form-group">
    <label >Nama Pegawai</label>
    <input name="nama_pegawai" class="form-control  @error('nama_pegawai') is-invalid @enderror" value="{{$pegawai -> nama_pegawai}}">
<div class="text-danger">
        @error('nama_pegawai')
            {{$message}}
        @enderror
</div>
</div>

<div class="form-group">
    <label >jabatan</label>
   
    <select name="jabatan_id"  class="form-control  @error('jabatan_id') is-invalid @enderror" >
                         @foreach ($jabatan as $data)
                    <option  value="{{ $data->id_jabatan }}">{{$data -> nama_jabatan}}</option>
                    @endforeach
            </select>
   
     <div class="text-danger">
        @error('jabatan_id')
            {{$message}}
        @enderror
</div>

</div>

<div class="form-group">
    <label >email</label>
    <input name="email" class="form-control @error('email') is-invalid @enderror"  value="{{$pegawai -> email}}" >
    <div class="text-danger">
        @error('email')
            {{$message}}
        @enderror
</div>

</div>


<div class="form-group">
    <label >no telepon</label>
    <input name="no_tlp" class="form-control @error('no_tlp') is-invalid @enderror"  value="{{$pegawai -> no_tlp}}" >
    <div class="text-danger">
        @error('no_tlp')
            {{$message}}
        @enderror
</div>

</div>

<div class="form-group">
    <label >alamat_pegawai</label>
    <input name="alamat_pegawai" class="form-control @error('alamat_pegawai') is-invalid @enderror"  value="{{$pegawai -> alamat_pegawai}}" >
    <div class="text-danger">
        @error('alamat_pegawai')
            {{$message}}
        @enderror
</div>

</div>

<div class="form-group">
    <label >tanggal masuk</label>
    <input name="tgl_masuk" class="form-control @error('tgl_masuk') is-invalid @enderror"  value="{{$pegawai -> tgl_masuk}}" >
    <div class="text-danger">
        @error('tgl_masuk')
            {{$message}}
        @enderror
</div>

</div>

<div class="form-group">
    <label >tanggal lahir</label>
    <input type="date" name="tmp_lahir" class="form-control @error('tmp_lahir') is-invalid @enderror"  value="{{$pegawai -> tmp_lahir}}" >
    <div class="text-danger">
        @error('tmp_lahir')
            {{$message}}
        @enderror
</div>

</div>


<div class="form-group">
    <label >gender</label>
    <select name="gender"   class="form-control  @error('gender') is-invalid @enderror" >
    <option value="">-Pilih-</option>
                        
                                <option     value="laki- laki">   laki-laki </option>
                                <option     value="perempuan">  perempuan  </option>
                            
                           
            </select>
       <div class="text-danger">
        @error('id_agama')
            {{$message}}
        @enderror
        </div>
</div>

<div class="form-group">
    <label >agama</label>
   <select name="id_agama"   class="form-control  @error('id_agama') is-invalid @enderror" >
    <option value="">-Pilih-</option>
                            @foreach($agama as $data)
                                <option     value="{{ $data->id_agama }}">
                                {{ $data->nama_agama}}</option>
                            @endforeach 
            </select>
       <div class="text-danger">
        @error('id_agama')
            {{$message}}
        @enderror
</div>

</div>

<div class="form-group">
    <label >pendidikan</label>
    <input name="pendidikan" class="form-control @error('pendidikan') is-invalid @enderror"  value="{{$pegawai -> pendidikan}}" >
    <div class="text-danger">
        @error('pendidikan')
            {{$message}}
        @enderror
</div>

</div>
<div class="form-group">
    <label >foto</label>
    <input name="foto"  type="file" class="form-control form-control @error('foto') is-invalid @enderror  " value="{{$pegawai -> foto}}" >
    <div class="text-danger">
        @error('foto')
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