@extends('layout.v_template')

@section('title','informasi')
@section('content')
  
<div class="card" >

<div class="card-header" >

<table id="table1" class="table table-bordered table-striped">
<a href="/informasi/add" class="btn btn-sm btn-primary" > tambah </a>

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
    <th>judul</th>
    <th>gambar</th>
    <th>aksi</th>
    </tr>
</thead>

<tbody>
<?php   $no=1;     


?>

        @foreach ($informasi as $data)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$data -> judul}}</td>
             <td> <img src="{{url('foto_informasi/'.$data->gambar)}}" width="100px" alt=""> </td> 
            
         
          
            <td>
            <a href="/informasi/detail/{{$data -> id_informasi}}" class="btn btn-sm btn-success" > detail </a>
            <a href="/informasi/edit/{{$data -> id_informasi}}" class="btn btn-sm btn-warning" > edit </a>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$data->id_informasi}}">
           Delete
                </button>
            </td>
        
        
        </tr>

        @endforeach

</tbody>

</table >

@foreach($informasi  as $data)



<div class="modal fade" id="delete{{$data->id_informasi}}">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">{{$data->judul}}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>apakah kamu ingin mengahapus informasi ini ?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button href="/informasi/delete/{{$data->id_informasi}}" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <a href="/informasi/delete/{{$data->id_informasi}}" class="btn btn-danger btn-sm" > delete</a>
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