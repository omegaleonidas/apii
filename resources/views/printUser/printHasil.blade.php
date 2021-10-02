
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
<style>
    @page { size: A4 }
  
    h1 {
        font-weight: bold;
        font-size: 10px;
        text-align: center;
    }
    h7{

       
        text-align: center;
    }



  
    table {
        border-collapse: collapse;
        width: 100%;
    }
  
    .table th {
        padding: 8px 8px;
        border:1px solid #000000;
        text-align: center;
    }
  
    .table td {
        padding: 3px 3px;
        border:1px solid #000000;
    }
  
    .text-center {
        text-align: center;
    }
    p.a{
      line-height:25px;
      text-align: center;
      font-size:20px;
      margin-top:20px;
    }

    p.b{
      line-height:16px;
      text-align: center;
      font-size:25px;
    }
    p.c{
      line-height:16px;
      text-align: center;
      font-size:15px;
     
    }
</style>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template/')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/')}}/dist/css/adminlte.min.css">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
<p class="a"    s>YAYASAN PENDIDIKAN  BUNGHATTA <br> BEKERJASAMA DENGAN <BR> YAYASAN PESANTREN ISLAM AL - AZHAR</p>
  <p class="b"    >SEKOLAH DASAR ISLAM AL AZHAR 32</p> 
<p   class="c"   >Jalan Khatib sulaiman No.86 Telp / Fax (0751) 7058619 Padang  </p>
<hr />

   
    <!-- /.row -->
  <!-- Table row -->
    <div class="row">
  
<br>
    <div style="padding: 50px;"  class="col-12" >
    <label > nama : {{$absensi1 -> nama_pegawai}} </label>
         <br>
 
     <label > Nip : {{$absensi1 -> nip}} </label>
     <br>
    <div  class="col-12 table-responsive">
      <br>
        <table  style="margin-left=30px" class="table table-striped" >
        <thead>
    <tr>
    <th>no </th>
    <th>nip</th>
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
    
            <td>{{$data -> nip}}</td>
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

    <div style="margin-left: 50px;">


    <label > keterangan laporan absensi kepegawaian  </label>
    <br>
    <label >  Hadir : {{$hadir}} </label>
    <br>
    <label > Hadir Sore : {{$hadir_sore}} </label>
    <br>
    <label > Terlambat : {{$terlambat}} </label>
    <br>
    <label > Cuti : {{$cuti}} </label>
    <br>
    <label > Alfa : {{$alfa}} </label>
    <br>
    <label > alfa sore  : {{$alfa_sore}} </label>
    
  

    </div>
   

      <!-- /.col -->
    </div>
    <!-- /.row -->

    
      <!-- /.col -->
    </div>

    <br>
    <br>
    <br>
    <div   style="text-align: right; margin-right: 70px; " > 

    <label style="text-align: right;  margin " > Kepala sekolah  </label>

<br>
<br>
<br>
<br>
<br>
<br>
    <label style="text-align: right;" > Rabial, S.Ag.,M.H.I  </label>



    </div>

    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
