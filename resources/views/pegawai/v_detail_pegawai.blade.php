@extends('layout.v_template')
@section('title','Detail pegawai')
@section('content')
  
<table  class="table"  >

<tr>
<th width="100px" > nip </th>
<th width="30pxpx" > : </th>
<th  >  {{$pegawai-> nip}}</th>
</tr>

<tr>
<th width="100px" > nama_pegawai </th>
<th width="30pxpx" > : </th>
<th  >  {{$pegawai-> nama_pegawai}}</th>
</tr>

<tr>
<th width="100px" > jabatan </th>
<th width="30pxpx" > : </th>
<th  >  {{$pegawai-> nama_jabatan}}</th>
</tr>

<tr>
<th width="100px" > email </th>
<th width="30pxpx" > : </th>
<th  >  {{$pegawai-> email}}</th>
</tr>



<tr>
<th width="100px" > no telp </th>
<th width="30pxpx" > : </th>
<th  >  {{$pegawai-> no_tlp}}</th>
</tr>


<tr>
<th width="100px" > alamat </th>
<th width="30pxpx" > : </th>
<th  >  {{$pegawai-> alamat_pegawai}}</th>
</tr>

<tr>
<th width="100px" > tanggal masuk </th>
<th width="30pxpx" > : </th>
<th  >  {{$pegawai-> tgl_masuk}}</th>
</tr>

<tr>
<th width="100px" > tempat lahir </th>
<th width="30pxpx" > : </th>
<th  >  {{$pegawai-> tmp_lahir}}</th>
</tr>

<tr>
<th width="100px" > gender </th>
<th width="30pxpx" > : </th>
<th  >  {{$pegawai-> gender}}</th>
</tr>

<tr>
<th width="100px" > agama </th>
<th width="30pxpx" > : </th>
<th  >  {{$pegawai-> nama_agama}}</th>
</tr>

<tr>
<th width="100px" > pendidikan </th>
<th width="30pxpx" > : </th>
<th  >  {{$pegawai-> pendidikan}}</th>
</tr>




<tr>
<th width="100px" > gambar </th>
<th width="30pxpx" > : </th>
<th  > <img src="{{url('foto_pegawai/'.$pegawai-> foto)}}"  width="300px"> </th>


</tr>



<tr>
<th><a href="/pegawai"  class="btn btn-sm btn-success" > kembali </a></th>
</tr>



</table>

    @endsection