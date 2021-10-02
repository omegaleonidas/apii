@extends('layout.v_template')
@section('title','jabatan')
@section('content')
  

<div class="card" >

<div class="card-header" >

<table id="table1" class="table table-bordered table-striped">
<a href="/jabatan/add" class="btn btn-sm btn-primary" > tambah </a>

@if(session('pesan'))

<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> success</h5>
            {{session('pesan')}}.
                </div>

@endif
<thead>
    <tr>
    <th>no </th>
    <th>jabatan</th>
    <th>aksi</th>
    </tr>
</thead>

<tbody>
<?php   $no=1;     

?>

        @foreach ($jabatan as $data)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$data -> nama_jabatan}}</td>
                    
                   
            <td>
            <a href="/jabatan/edit/{{$data -> id_jabatan}}" class="btn btn-sm btn-warning" > edit </a>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$data->id_jabatan}}">
           Delete
                </button>
            </td>
        
        
        </tr>

        @endforeach

</tbody>

</table >

@foreach($jabatan  as $data)



<div class="modal fade" id="delete{{$data->id_jabatan}}">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">{{$data->nama_jabatan}}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>apakah kamu ingin mengahapus jabatan ini ?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button href="/jabatan/delete/{{$data->id_jabatan}}" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <a href="/jabatan/delete/{{$data->id_jabatan}}" class="btn btn-danger btn-sm" > delete</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <div>
</div>
      @endforeach

@endsection