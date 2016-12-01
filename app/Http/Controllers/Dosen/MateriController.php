<?php

namespace App\Http\Controllers\Dosen;

use App\Models\AlokasiMateri;
use App\Models\Matakuliah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class MateriController extends Controller
{
    public function __construct()
    {
        return $this->middleware('dosen');
    }

    public function index()
    {
        $matakuliah = Auth::guard('dosen')->user()->dosen_matakuliah;

        return view('dosen.materi.index', compact('matakuliah'));
    }

    public function show($id)
    {
        $matakuliah = Matakuliah::findOrFail($id);

        $materi = Auth::guard('dosen')->user()->dosen_matakuliah->where('matakuliah_id', $id)->first()->materi;

        return view('dosen.materi.show', compact('matakuliah', 'materi'));
    }

    public function create($id)
    {
        $matakuliah = Matakuliah::findOrFail($id);
        return view('dosen.materi.create', compact('matakuliah'));
    }

    public function store(Request $request, $id)
    {
        $dosen_kelas = Auth::guard('dosen')->user()->dosen_matakuliah->where('matakuliah_id', $id)->first();

        $data = $request->input();
        $file = $request->file('materi');
        $data['ext'] = $file->guessClientExtension();

        $file->storeAs('/public/dosen/materi/' . $id . '/', $data['nama'] . '.' . $data['ext']);

        $new_materi = new AlokasiMateri($data);
        $dosen_kelas->materi()->save($new_materi);

        return redirect(route('dosen.materi.show', $id));
    }
}
