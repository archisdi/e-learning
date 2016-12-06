<?php

namespace App\Http\Controllers;

use App\Models\AlokasiDosenMatakuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class DataController extends Controller
{
    public function get_materi($dosen_mk_id, $file_name)
    {
        $file = Storage::get('public/dosen/materi/' . $dosen_mk_id . '/' . $file_name);
        return (new Response($file, 200))
            ->header('Content-Type', 'application/file');
    }

    public function get_kuis($kelas_id, $kuis_id, $file_name)
    {
        $file = Storage::get('public/dosen/kuis/' . $kelas_id . '/' . $kuis_id. '/' . $file_name);
        return (new Response($file, 200))
            ->header('Content-Type', 'application/file');
    }

    public function get_submit($kelas_id, $kuis_id, $file_name)
    {
        $file = Storage::get('public/mahasiswa/kuis/' . $kelas_id . '/' . $kuis_id. '/' . $file_name);
        return (new Response($file, 200))
            ->header('Content-Type', 'application/file');
    }
}
