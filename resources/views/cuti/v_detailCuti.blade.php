@extends('layout.v_template')
@section('title','Detail Guru')
@section('content')
<form  action="/cuti/update/{{$cuti -> id_cuti}}" method="POST"  enctype="multipart/form-data">
@csrf

<table  class="table" >

<tr>
<th width="100px" > nama </th>
<th width="30pxpx" > : </th>
<th  >  {{$cuti-> nama_pegawai}}</th>
</tr>
<tr>
<th width="100px" > nip </th>
<th width="30pxpx" > : </th>
<th  >  {{$cuti-> nip}}</th>
</tr>


<tr>
<th width="100px" > alasan cuti </th>
<th width="30pxpx" > : </th>
<th  >  {{$cuti-> alasan_cuti}}</th>
</tr>

<tr>
<th width="100px" > tanggal mulai </th>
<th width="30pxpx" > : </th>
<th  >  {{$cuti-> tanggal_mulai}}</th>
</tr>

<tr>
<th width="100px" > tanggal_akhir </th>
<th width="30pxpx" > : </th>
<th  >  {{$cuti-> tanggal_akhir}}</th>
</tr>

<tr>
<th width="100px" > tanggal </th>
<th width="30pxpx" > : </th>
<th  >  {{$cuti-> tanggal}}</th>
</tr>
<tr>
<th width="100px" > acc </th>
<th width="30pxpx" > : </th>
<th  >  {{$cuti-> acc}}</th>
</tr>

<tr>
<div>

<input  type="hidden" name="cuti" class="form-control  @error('nip') is-invalid @enderror" value="3487"   >

</div>
<th><a href="/cuti"  class="btn btn-sm btn-success" > kembali </a></th>
</tr>



<div class="form-group">
    <button class="btn btn-primary btn-sm" >Setujui</button>
</div>
</table>

</form>


    @endsection