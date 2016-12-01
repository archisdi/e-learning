@extends('dosen.layout.app')

@section('page_title','Upload Materi')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <form method="post" action="{{route('dosen.materi.store',$matakuliah->id)}}" enctype="multipart/form-data">
                        <div class="panel-body">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nama Materi</label>
                                <input type="text" class="form-control" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" required name="materi">
                                <p class="help-block">Pilih file materi yang akan di upload.</p>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <input type="submit" class="btn btn-success btn-block" value="Upload">
                        </div>
                    </form>
                </div>
                <div>
                    <a href="{{route('dosen.materi.show',$matakuliah->id)}}" class="btn btn-default">kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
