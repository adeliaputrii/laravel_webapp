@extends('layouts.app')
 
@section('content')
 
 
 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Karyawan</div>
 
                <div class="card-body">
                    <form method="POST" action="/karyawan">
                        @csrf
 
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" class="form-control" name="nik" value="{{ old('nik') }}">
                        </div>
                        div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                        </div>
                        div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" value="{{ old('jabatan') }}">
                        </div>
                        div class="form-group">
                            <label>Bagian/Toko</label>
                            <input type="text" class="form-control" name="bagian/toko" value="{{ old('bagian/toko') }}">
                        </div>
                        div class="form-group">
                            <label>Tanggal Masuk</label>
                            <input type="text" class="form-control" name="tanggal_masuk" value="{{ old('tanggal_masuk') }}">
                        </div>
                        div class="form-group">
                            <label>Tanggal Keluar</label>
                            <input type="text" class="form-control" name="tanggal_keluar" value="{{ old('tanggal_keluar') }}">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection