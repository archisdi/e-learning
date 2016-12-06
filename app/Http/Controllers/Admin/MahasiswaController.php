<?php

namespace App\Http\Controllers\Admin;

use App\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MahasiswaController extends Controller
{

    public function  __construct()
    {
        return $this->middleware('admin');
    }

    public function index()
    {
        $mahasiswa = Mahasiswa::paginate(15);

        return view('admin.data.mahasiswa.index',compact('mahasiswa'));
    }


    public function create()
    {
        return view('admin.data.mahasiswa.create');
    }


    public function store(Request $request)
    {
        $data = $request->input();

        $data['password'] = bcrypt($data['password']);
        $mahasiswa = new Mahasiswa($data);
        $mahasiswa->save();

        return redirect('/admin/data/mahasiswa');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
