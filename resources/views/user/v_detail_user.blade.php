@extends('layout.v_template')
@section('title','Detail User')
@section('content')
  
<table  class="table"  >

<tr>
<th width="100px" > nip </th>
<th width="30pxpx" > : </th>
<th  >  {{$user-> nip}}</th>
</tr>

<tr>
<th width="100px" > nama </th>
<th width="30pxpx" > : </th>
<th  > {{$user-> name}}</th>
</tr>



<tr>
<th width="100px" > email </th>
<th width="30pxpx" > : </th>
<th  >  {{$user-> email}}</th>
</tr>


<tr>
<th width="100px" > nohp </th>
<th width="30pxpx" > : </th>
<th  > +62  {{$user-> nohp}}</th>
</tr>






<tr>
<th><a href="/user"  class="btn btn-sm btn-success" > kembali </a></th>
</tr>




</table>



    @endsection