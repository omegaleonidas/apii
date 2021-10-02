@extends('layout.v_template')
@section('title','Detail informasi')
@section('content')
  
<table  class="table"  >

<tr>
<th width="100px" > judul </th>
<th width="30pxpx" > : </th>
<th  >  {{$informasi-> judul}}</th>
</tr>

<tr>
<th width="100px" > descripsi </th>
<th width="30pxpx" > : </th>
<th  >  {{$informasi-> descripsi}}</th>
</tr>

<tr>
<th width="100px" > gambar </th>
<th width="30pxpx" > : </th>
<th> <div class="col-sm 12" >
<div class="col - sm 4">
<img src="{{url('foto_informasi/'.$informasi-> gambar)}}" width="150px" ></th>
</tr>


<tr>
<th><a href="/informasi"  class="btn btn-sm btn-success" > kembali </a></th>
</tr>




</table>



    @endsection