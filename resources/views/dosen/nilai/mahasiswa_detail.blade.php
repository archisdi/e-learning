@extends('dosen.layout.app')

@section('page_title','Nilai Kuis '. $mahasiswa->nama)

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Nilai Kuis {{$kelas->dosen_matakuliah->matakuliah->nama}}</div>

                    <form method="post"
                          action="{{route('dosen.nilai.submit',[$kelas->id,$kuis->id,$mahasiswa->id])}}">
                        {{csrf_field()}}
                        <div class="panel-body">

                            <div class="form-group">
                                <label>Nama</label>
                                <div class="form-control">
                                    {{$mahasiswa->mahasiswa->nama}}
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Kuis</label>
                                <div class="form-control">
                                    {{$mahasiswa->kuis->title}}
                                </div>
                            </div>

                            <div class="form-group">
                                <label>File</label>
                                <br>
                                <a href="{{url('/file/submit/'.$kelas->id.'/'.$mahasiswa->id.'/'.$mahasiswa->id.'.'.$kuis->ext)}}"
                                   class="btn btn-default"><span class="fa fa-download"></span></a>
                            </div>


                            <div class="form-group">
                                <label>Nilai</label>
                                <br>
                                <input type="text" name="nilai" class="form-control">
                            </div>

                        </div>
                        <div class="panel-footer">
                            <input type="submit" value="Masukkan Nilai" class="btn btn-block btn-success btn-flat">
                        </div>
                    </form>
                </div>
                <div>
                    <a href="{{route('dosen.nilai.detail',[$kelas->id,$kuis->id])}}" class="btn btn-default">kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
