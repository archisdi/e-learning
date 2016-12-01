<?php

namespace App\Http\Controllers\Dosen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class KuisController extends Controller
{
    public function index()
    {
        $matakuliah = Auth::guard('dosen')->user()->dosen_kelas;

        return view('dosen.kuis.index', compact('matakuliah'));
    }

    public function show($id)
    {

        $kelas = Auth::guard('dosen')->user()->dosen_kelas->where('id', $id)->first();

        return $kelas;

        return view('dosen.materi.show', compact('matakuliah', 'materi'));
    }
}
