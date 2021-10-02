



@extends('layout.v_template')
@section('title','laporan absensi')
@section('content')


<div class="card" >
    

<div class="card-header" >

<div class="row">
   




<table id="table1" class="table table-bordered table-striped">

<thead>
    <tr>
    <th>no </th>
    <th>nip</th>
    <th>nama pegawai</th>
 
  
  
    <th>aksi</th>
    </tr>
</thead>

<tbody>
<?php   $no=1;     

//  <td> <img src="{{url('foto_guru/'.$data->foto_guru)}}" width="150px" alt=""> </td> 
?>

        @foreach ($absensi as $data)
        <tr>
            <td>{{$no++}}</td> 
            <td>{{$data -> nip}}</td>
            <td>{{$data -> nama_pegawai}}</td>
         
     
          
            <td>
            <a href="/report1/detail1/{{$data -> nip}}" class="btn btn-sm btn-success" > detail </a>
           

          
            
            </td>
        
        
        </tr>

        @endforeach

</tbody>

</table >



</div>
</div>
@endsection

