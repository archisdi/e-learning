<?php

namespace App\Http\Controllers\Mahasiswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class NilaiController extends Controller
{
    public function __construct()
    {
        return $this->middleware('mahasiswa');
    }

    public function index()
    {
        $matakuliah = Auth::guard('mahasiswa')->user()->dosen_kelas;

        return view('mahasiswa.nilai.index', compact('matakuliah'));
    }

    public function show($id)
    {
        $kelas = Auth::guard('mahasiswa')->user()->dosen_kelas->where('id', $id)->first();
        $kuis = $kelas->kuis;

        return view('mahasiswa.nilai.show', compact('kelas', 'kuis'));
    }
}
