<?php

namespace App\Http\Controllers\Dosen;

use App\Models\AlokasiKuis;
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
        $kuis = $kelas->kuis;

        return view('dosen.kuis.show', compact('kelas', 'kuis'));
    }

    public function detail($id_kelas, $id_kuis)
    {
        $kelas = Auth::guard('dosen')->user()->dosen_kelas->where('id', $id_kelas)->first();
        $kuis = $kelas->kuis->where('id', $id_kuis)->first();

        return view('dosen.kuis.detail', compact('kelas', 'kuis'));
    }

    public function create($id)
    {
        $kelas = Auth::guard('dosen')->user()->dosen_kelas->where('id', $id)->first();

        return view('dosen.kuis.create', compact('kelas'));
    }

    public function store(Request $request, $id){
        $kelas = Auth::guard('dosen')->user()->dosen_kelas->where('id', $id)->first();

        $data = $request->input();
        $file = $request->file('kuis');
        $data['ext'] = $file->guessClientExtension();

        $new_kuis = new AlokasiKuis($data);
        $kelas->kuis()->save($new_kuis);

        $file->storeAs('/public/dosen/kuis/' . $id . '/'. $new_kuis->id , $data['title'] . '.' . $data['ext']);


        return redirect(route('dosen.kuis.show',$kelas->id));
    }

}
