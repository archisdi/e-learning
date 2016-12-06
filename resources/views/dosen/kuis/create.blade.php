@extends('dosen.layout.app')

@section('page_title','Upload Kuis')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <form method="post" action="{{route('dosen.kuis.store',$kelas->id)}}" enctype="multipart/form-data">
                        <div class="panel-body">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Nama Kuis</label>
                                <input type="text" class="form-control" name="title" required>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" name="desc" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Due</label>
                                <input type="datetime" class="form-control flatpickr" name="due" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" required name="kuis">
                                <p class="help-block">Pilih file kuis yang akan di upload.</p>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <input type="submit" class="btn btn-success btn-block" value="Upload">
                        </div>
                    </form>
                </div>
                <div>
                    <a href="{{route('dosen.kuis.show',$kelas->id)}}" class="btn btn-default">kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('ext_footer_script')
    <script>
        $(function () {
            flatpickr(".flatpickr", {
                enableTime: true,
                format: 'yyyy-mm-dd hh:mm:ss'
            });
        });
    </script>
@endsection
