<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class DataController extends Controller
{
    public function show()
    {
        $data = DB::table('data')->orderby('id', 'desc')->get();
        return view('show', ['data'=>$data]);
    }

    public function add()
    {
        return view('add');
    }

    public function add_process(Request $data)
    {
           DB::table('data')->insert([
            'nik'=>$data->nik,
            'nama'=>$data->nama,
            'jabatan'=>$data->jabatan,
            'bagian'=>$data->bagian,
            'tglmasuk'=>$data->tglmasuk,
            'tglkeluar'=>$data->tglkeluar,
        ]);

        return redirect()->action('DataController@show_by_admin');
    }

    public function detail($id)
    {
        $data = DB::table('data')->where('id', $id)->first();
        return view('data', ['data'=>$data]);
    }

    public function show_by_admin()
    {
        $data = DB::table('data')->orderby('id', 'desc')->get();
        return view('adminshow', ['data'=>$data]);
    }

    public function edit($id)
    {
        $data = DB::table('data')->where('id', $id)->first();
        return view('edit', ['data'=>$data]);
    }
    public function edit_process(Request $data)
    {
        $id = $data->id;
        $nik = $data->nik;
        $nama = $data->nama;
        $jabatan = $data->jabatan;
        $bagian = $data->bagian;
        $tglmasuk = $data->tglmasuk;
        $tglkeluar = $data->tglkeluar;
        DB::table('data')->where('id', $id)
                            ->update(['nik' => $nik, 'nama' => $nama, 'jabatan' => $jabatan, 'bagian' => $bagian, 'tglmasuk' => $tglmasuk, 'tglkeluar' => $tglkeluar,]);
        Session::flash('success', 'Data berhasil diedit');
        return redirect()->action('DataController@show_by_admin');
    }

    public function delete($id)
    {
        //menghapus artikel dengan ID sesuai pada URL
        DB::table('data')->where('id', $id)
                            ->delete();
 
        //membuat pesan yang akan ditampilkan ketika artikel berhasil dihapus
        Session::flash('success', 'Data berhasil dihapus');
        return redirect()->action('DataController@show_by_admin');
    }

    public function cari(Request $data)
    {
        //menangkap data pencarian
        $cari = $data->cari;

        //mengambil data dari table karyawan sesuai pencarian dataa
        $data = DB::table('data')
        ->where('nik','like',"%".$cari."%")
        ->Orwhere('nama','like',"%".$cari."%")
        ->Orwhere('jabatan','like',"%".$cari."%")
        ->Orwhere('bagian','like',"%".$cari."%")
        ->Orwhere('tglmasuk','like',"%".$cari."%")
        ->Orwhere('tglkeluar','like',"%".$cari."%")
        ->paginate();

        //mengirim data karyawan ke view adminshow
        return view('adminshow',['data' => $data]);
    }
}