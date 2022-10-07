<!--membuat kerangka dari master.blade.php -->
@extends('master')

<!--membuat komponen data -->
@section('title', 'Menambah Data')

<!-- membuat komponen main yang berisi form untuk mengisi data -->
@section('main')
<center><h1>Menambah Data Karyawan</h1></center>
<div class="col-md-8 col-sm-12 bg-white p-4 mt-5">
    <form method="post" action="/add_process">
        @csrf
        <div class="form-group"> 
            <label>NIK</label>
            <input type="text" class="form-control" name="nik" placeholder="NIK">
        </div>
        <div class="form-group"> 
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama">
        </div>
        <div class="form-group"> 
            <label>Jabatan</label>
            <input type="text" class="form-control" name="jabatan" placeholder="Jabatan">
        </div>
        <div class="form-group"> 
            <label>Bagian/Toko</label>
            <input type="text" class="form-control" name="bagian" placeholder="Bagian">
        </div>
        <div class="form-group"> 
            <label>Tanggal Masuk Kerja</label>
            <input type="date" class="form-control" name="tglmasuk" placeholder="Tanggal Masuk Kerja">
        </div>
        <div class="form-group"> 
            <label>Tanggal Keluar Kerja</label>
            <input type="date" class="form-control" name="tglkeluar" placeholder="Tanggal Keluar Kerja">
        </textarea>
        </div>
</div>   
@endsection

<!-- membuat komponen sidebar yang berisi tombol untuk upload data -->
@section('sidebar')
<div class="col-md-3 ml-md-5 col-sm-12 bg-white p-4" style="height:120px !important">
    <div class="form-group">
        <label>Upload</label>
        <input type="submit" class="form-control btn btn-primary" value="Submit">
        </div>
    </div> 
</form>
@endsection