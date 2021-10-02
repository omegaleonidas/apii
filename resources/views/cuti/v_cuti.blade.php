@extends('layout.v_template')
@section('title','cuti')
@section('content')
  
<div class="card" >

<div class="card-header" >

<table id="table1" class="table table-bordered table-striped">


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
    <th>nip</th>
   
    <th>tanggal </th>
    <th>acc</th>
    <th></th>

    </tr>
</thead>

<tbody>
<?php   $no=1;     


?>

        @foreach ($cuti as $data)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$data -> nip}}</td>
           
         
           
            <td>{{$data -> tanggal}}</td>
            <td>{{$data -> acc}}</td>
             <td>
            <a href="/cuti/detail/{{$data -> id_cuti}}" class="btn btn-sm btn-success" > detail </a>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$data->id_cuti}}">
           Delete
                </button>
            </td>
        
        
        </tr>

        @endforeach

</tbody>

</table >

@foreach($cuti  as $data)



<div class="modal fade" id="delete{{$data->id_cuti}}">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">{{$data->nip}}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>apakah kamu ingin mengahapus cuti ini ?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button href="/cuti/delete/{{$data->id_cuti}}" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <a href="/cuti/delete/{{$data->id_cuti}}" class="btn btn-danger btn-sm" > delete</a>
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