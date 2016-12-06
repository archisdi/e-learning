<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Models\AlokasiMahasiswaKuis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class KuisController extends Controller
{
    public function __construct()
    {
        return $this->middleware('mahasiswa');
    }

    public function index()
    {
        $matakuliah = Auth::guard('mahasiswa')->user()->dosen_kelas;

        return view('mahasiswa.kuis.index', compact('matakuliah'));
    }

    public function show($id)
    {
        $kelas = Auth::guard('mahasiswa')->user()->dosen_kelas->where('id', $id)->first();
        $kuis = $kelas->kuis;

        return view('mahasiswa.kuis.show', compact('kelas', 'kuis'));
    }

    public function detail($id_kelas, $id_kuis)
    {
        $mahasiswa = Auth::guard('mahasiswa')->user();
        $kelas = $mahasiswa->dosen_kelas->where('id', $id_kelas)->first();
        $kuis = $kelas->kuis->where('id', $id_kuis)->first();

        $mahasiswa_kuis = AlokasiMahasiswaKuis::where('mahasiswa_id',$mahasiswa->id)->where('alokasi_kuis_id',$kuis->id)->first();

        return view('mahasiswa.kuis.detail', compact('kelas', 'kuis','mahasiswa_kuis'));
    }

    public function submit(Request $request, $id_kelas, $id_kuis)
    {
        $kelas = Auth::guard('mahasiswa')->user()->dosen_kelas->where('id', $id_kelas)->first();
        $kuis = $kelas->kuis->where('id', $id_kuis)->first();

        $input = $request->input();
        $file = $request->file('kuis');
        $input['ext'] = $file->guessClientExtension();
        $input['alokasi_kuis_id'] = $kuis->id;

        $new_kuis = New AlokasiMahasiswaKuis($input);

        Auth::guard('mahasiswa')->user()->kuis()->save($new_kuis);

        $file->storeAs('/public/mahasiswa/kuis/' . $kuis->id . '/' . $new_kuis->id, $new_kuis->id . '.' . $input['ext']);

        return back();
    }
}
