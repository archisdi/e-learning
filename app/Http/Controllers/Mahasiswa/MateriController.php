<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Models\AlokasiMateri;
use App\Models\Matakuliah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class MateriController extends Controller
{
    public function __construct()
    {
        return $this->middleware('mahasiswa');
    }

    public function index()
    {
        $matakuliah = Auth::guard('mahasiswa')->user()->dosen_kelas;

        return view('mahasiswa.materi.index',compact('matakuliah'));
    }

    public function show($id){

        $matakuliah = Matakuliah::findOrFail($id);

        $materi = collect([]);
        foreach (Auth::guard('mahasiswa')->user()->dosen_kelas as $item){
            if($temp = $item->dosen_matakuliah->where('matakuliah_id', $id)->first()){
                $materi = $temp->materi ;
            }
        }

        return view('mahasiswa.materi.show',compact('matakuliah','materi'));
    }

}
