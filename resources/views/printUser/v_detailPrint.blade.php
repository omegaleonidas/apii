



@extends('layout.v_template')
@section('title','laporan absensi')
@section('content')


<div class="card" >
    

<div class="card-header" >


<div class="row">
    <div class ="form-group ">
    <label > nama : {{$absensi1 -> nama_pegawai}} </label>
   
<br>
   <label > Nip : {{$absensi1 -> nip}} </label>

    </div>
   </div>

<div class="row">
    <div class ="form-group ">



    


    </div>



    </div>
    


</div>



   <a href="/report/detailPDF/{{$absensi1 -> nip}}" class="btn btn-sm btn-success" > PDF </a>
            <a href="/report/detail/{{$absensi1 -> nip}}" class="btn btn-sm btn-success" > Print</a>
    
            <div>

            &nbsp;
            </div>
   <table class="table table-striped">
        <thead>
    <tr>
    <th>no </th>
  
    <th>tanggal</th>
    <th>jam masuk</th>
    <th>jam pulang </th>
  
  
   <th>keterangan</th>
   <th>keterangan sore</th>
    </tr>
</thead>
      
<tbody>



<?php   $no=1;     
 
 
 

//  <td> <img src="{{url('foto_guru/'.$data->foto_guru)}}" width="150px" alt=""> </td> 
?>  

        @foreach ($absensi as $data)
        <tr>
            <td>{{$no++}}</td>
    
            <td>{{$data -> tanggal}}</td>
            <td>{{$data -> jam_masuk}}</td>
            <td>{{$data -> jam_selesai}}</td>
            <td>{{$data -> keterangan}}</td>
            <td>{{$data -> keterangan_sore}}</td>
          
        </tr>

        @endforeach

</tbody>

        </table>



</div>
</div>
@endsection

