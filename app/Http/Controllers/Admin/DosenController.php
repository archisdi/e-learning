<?php

namespace App\Http\Controllers\Admin;

use App\Dosen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DosenController extends Controller
{
    public function  __construct()
    {
        return $this->middleware('admin');
    }

    public function index()
    {
        $dosen = Dosen::paginate(15);

        return view('admin.data.dosen.index',compact('dosen'));
    }

    public function create()
    {
        return view('admin.data.dosen.create');
    }

    public function store(Request $request)
    {
        $data = $request->input();

        $data['password'] = bcrypt($data['password']);
        $dosen = new Dosen($data);
        $dosen->save();

        return redirect('/admin/data/dosen');
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
