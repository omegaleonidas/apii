

@extends('layout.v_template')
@section('title','absensi')

@section('content')
  

<div class="card" >

<div class="card-header" >

<table id="table1" class="table table-bordered table-striped">

<thead>
    <tr>
    <th>no </th>
    <th>nip</th>
    <th>tanggal</th>
    <th>jam masuk</th>
    <th>jam pulang </th>
  
  
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
            <td>{{$data -> tanggal}}</td>
            <td>{{$data -> jam_masuk}}</td>
            <td>{{$data -> jam_selesai}}</td>
          
     
          
            <td>
            <a href="/absensi1/detail/{{$data -> id_absensi}}" class="btn btn-sm btn-success" > detail </a>
             <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$data->id_absensi}}">delete</button>
            </td>
        
        
        </tr>

        @endforeach

</tbody>

</table >

@foreach($absensi  as $data)



<div class="modal fade" id="delete{{$data->id_absensi}}">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">{{$data->nip}}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>apakah kamu ingin mengahapus absensi ini ?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button href="/absensi1/delete/{{$data->id_absensi}}" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <a href="/absensi1/delete/{{$data->id_absensi}}" class="btn btn-danger btn-sm" > delete</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
</div>
</div>
      @endforeach

@endsection