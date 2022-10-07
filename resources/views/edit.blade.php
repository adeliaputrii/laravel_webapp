@extends('master')
 
<!-- membuat judul bernama 'Edit Artikel' pada tab bar -->
@section('title', 'Edit Data')
 
@section('header')
<center class="mt-4">
    <h2>Edit Artikel</h2>
</center>
@endsection
 
@section('main')
<div class="col-md-8 col-sm-12 bg-white p-4">
    <form method="post" action="/edit_process">
    @csrf
	<input type="hidden" value="{{ $data->id }}" name="id">
    <div class="form-group">
        <label>NIK</label>
        <input type="text" class="form-control" value="{{ $data->nik }}" name="nik" placeholder="NIK">
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" value="{{ $data->nama }}" name="nama" placeholder="Nama">
    </div>
    <div class="form-group">
        <label>Jabatan</label>
        <input type="text" class="form-control" value="{{ $data->jabatan }}" name="jabatan" placeholder="Jabatan">
        <div class="form-group">
            <label>Bagian</label>
            <input type="text" class="form-control" value="{{ $data->bagian }}" name="bagian" placeholder="Bagian">
        </div>
        <div class="form-group">
            <label>Tanggal Masuk Kerja</label>
            <input type="text" class="form-control" value="{{ $data->tglmasuk }}" name="tglmasuk" placeholder="Tanggal Masuk Kerja">
        </div>
        <div class="form-group">
            <label>Tanggal Keluar Kerja</label>
            <input type="text" class="form-control" value="{{ $data->tglkeluar }}" name="tglkeluar" placeholder="Tanggal Keluar Kerja">
        </div>
    </div>
       
</div>
@endsection
 
<!-- membuat komponen sidebar yang berisi tombol untuk upload artikel -->
@section('sidebar')
<div class="col-md-3 ml-md-5 col-sm-12 bg-white p-4" style="height:120px !important
    <div class="form-group">
        <label>Edit</label>
        <input type="submit" class="form-control btn btn-primary" value="Edit">
    </div>
</div>
</form>
@endsection