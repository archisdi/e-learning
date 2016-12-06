<?php

namespace App\Http\Controllers\Dosen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class NilaiController extends Controller
{
    public function __construct()
    {
        return $this->middleware('dosen');
    }

    public function index()
    {
        $matakuliah = Auth::guard('dosen')->user()->dosen_kelas;

        return view('dosen.nilai.index', compact('matakuliah'));
    }

    public function show($id)
    {
        $kelas = Auth::guard('dosen')->user()->dosen_kelas->where('id', $id)->first();
        $kuis = $kelas->kuis;

        return view('dosen.nilai.show', compact('kelas', 'kuis'));
    }

    public function detail($id_kelas, $id_kuis)
    {
        $kelas = Auth::guard('dosen')->user()->dosen_kelas->where('id', $id_kelas)->first();
        $kuis = $kelas->kuis->where('id', $id_kuis)->first();

        $mahasiswa = $kuis->mahasiswa_kuis;

        return view('dosen.nilai.detail', compact('kelas', 'kuis', 'mahasiswa'));
    }

    public function mahasiswa_detail($id_kelas, $id_kuis, $id_mahasiswa)
    {
        $kelas = Auth::guard('dosen')->user()->dosen_kelas->where('id', $id_kelas)->first();
        $kuis = $kelas->kuis->where('id', $id_kuis)->first();

        $mahasiswa = $kuis->mahasiswa_kuis->where('mahasiswa_id', $id_mahasiswa)->first();

        return view('dosen.nilai.mahasiswa_detail', compact('kelas', 'kuis', 'mahasiswa'));
    }

    public function submit(Request $request, $id_kelas, $id_kuis, $id_mahasiswa)
    {
        $input = $request->input();

        $kelas = Auth::guard('dosen')->user()->dosen_kelas->where('id', $id_kelas)->first();
        $kuis = $kelas->kuis->where('id', $id_kuis)->first();

        $mahasiswa = $kuis->mahasiswa_kuis->where('id', $id_mahasiswa)->first();

        $mahasiswa['nilai'] = $input['nilai'];
        $mahasiswa->save();

        return back();
    }
}
