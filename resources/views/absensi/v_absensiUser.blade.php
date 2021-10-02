

@extends('layout.v_template')

@section('content')
  

<table class="table table-boardered">

<thead>
    <tr>
    <th>no </th>
    <th>nama pegawai</th>
    <th>tanggal</th>
    <th>jam masuk</th>
    <th>jam pulang </th>
    <th>alamat </th>
    <th>keterangan</th>
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
            <td>{{$data -> alamat}}</td>
            <td>{{$data -> keterangan}}</td>
          
            <td>
            <a href="/absensi/detail/{{$data -> id_absensi}}" class="btn btn-sm btn-success" > detail </a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$data->id_absensi}}">delete</button>
            </td>
        
        
        </tr>

        @endforeach

</tbody>

</table >



@endsection