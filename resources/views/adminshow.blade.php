<!-- menggunakan kerangka dari master.blade.php -->
@extends('master')
 
@section('header')
<h2><center>List Data Karyawan</center></h2>
@if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
    </div>
    @endif
 
@endsection
 
@section('title', 'Halaman Khusus Admin')
 
@section('main')
<p>Cari Data Pegawai</p>
<form action="/cari" method="GET">
    <input type="text" name="cari" placeholder="Cari Karyawan .." value="{{ old('cari') }}">
    <input type="submit" value="CARI">
</form>
<center><h1>List Data Karyawan</h1></center>
    <div class="col-md-12 bg-white p-4">
        <a href="/add"><button class="btn btn-primary mb-3">Tambah Data Karyawan</button></a>
        <table class="table table-responsive table-bordered table-hover table-stripped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Bagian</th>
                    <th>Tanggal Masuk Kerja</th>
                    <th>Tanggal Keluar Kerja</th>
                    <th width="15%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $i => $data)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $data->nik }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->jabatan }}</td>
                        <td>{{ $data->bagian }}</td>
                        <td>{{ $data->tglmasuk }}</td>
                        <td>{{ $data->tglkeluar }}</td>
                        <td>
                            <a href="/edit/{{ $data->id }}"><button class="btn btn-success">Edit</button></a>
                            <a href="/delete/{{ $data->id }}"><button class="btn btn-danger">Hapus</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection