@extends('layouts.master')
@section('content')

@if(session('sukses'))
         <div class= "alert alert-success" role="alert">
                {{session('sukses')}}
        </div>
        @endif
<!-- Content Header (Page header) -->  
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Data Pasien</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Edit</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<!-- /.content-header -->     
        <section class="content">
        <div class="row">
            <div class='col-lg-12'>
             <div class = "card-body">
                <form action="/pasien/{{$pasien->id}}/update" method="POST">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputNamaDepan1">Nama Depan</label>
                            <input name="nama_depan" type="text" class="form-control" placeholder="Nama depan" value="{{$pasien->nama_depan}}" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNamaBelakang1">Nama Belakang</label>
                            <input name="nama_belakang" type="text" class="form-control" placeholder="Nama Belakang" value="{{$pasien->nama_belakang}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUmur1">Umur</label>
                            <input name="umur" type="number" class="form-control" placeholder="Umur" value="{{$pasien->umur}}" >
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name=alamat class="form-control" placeholder="Alamat" rows="3" >{{$pasien->alamat}}</textarea>
                        </div>  
                        
                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin">
                                <option value="Laki-Laki" @if($pasien->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
                                <option value="Perempuan" @if($pasien->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                               
                            </select>
                            <h1></h1>
                              <button type="submit" class="btn btn-warning">Update</button>
                              <a class="btn btn-secondary" href="/pasien" role="button">Batal</a>
            
                    </form>
                    </div>
                </div>
               
            </div>
@stop
