@extends('layouts.master')
@section('content')

  

@if(session('sukses'))
<div class="alert alert-success" role="alert">
      {{session('sukses')}}
</div>
@endif

<!-- Content Header (Page header) -->  
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Data Pasien</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Data Pasien</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<!-- /.content-header -->

  <!-- Main content -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-12">
              <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
                  <button type="button" class="btn btn-primary btn-sm " data-toggle="modal" data-target="#exampleModal">Tambah data</button>
                    <form class="form-inline" method="get" action="/pasien">
                        <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
              </nav>
</div>
          <div class="col-sm-6">  
            <ol class="breadcrumb float-sm-right">     </ol>
          </div>
  


        <!-- isi dalam box -->

        <div class='col-6'>
            <!-- Button trigger modal -->
            <h1>  </h1>
        </div>          
                <div class="card-body">
                    <table class='table table-hover'>
                        <tr>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach($data_pasien as $pasien)
                        <tr>
                            <td><a href="/pasien/{{$pasien->id}}/profile">{{$pasien->nama}}</a></td>
                            <td>{{$pasien->umur}}</td>
                            <td>{{$pasien->alamat}}</td>
                            <td>{{$pasien->jenis_kelamin}}</td>
                            <td>
                                <a href="/pasien/{{$pasien->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/pasien/{{$pasien->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('anda yakin?')">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        </table>              
                </div>
            
                              <!-- /.card-body -->

                              <!-- /.        
                              
                              <div class="card-footer">
                                
                              </div>
                              
                              card-footer-->

    </div>        
  </div><!-- /.container-fluid -->
</section><!-- Main content -->
      
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- FORM -->
                    <form action="/pasien/create" method="POST">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputNamaDepan1">Nama Depan</label>
                            <input name="nama_depan" type="text" class="form-control" placeholder="Nama depan" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNamaBelakang1">Nama Belakang</label>
                            <input name="nama_belakang" type="text" class="form-control" placeholder="Nama Belakang">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input name="email" type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUmur1">Umur</label>
                            <input name="age" type="text" class="form-control" placeholder="Umur" >
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name=alamat class="form-control" placeholder="Alamat" rows="3"></textarea>
                        </div>  
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin">
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                                                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                </div>
            </div>
            </div>

@stop           
      
