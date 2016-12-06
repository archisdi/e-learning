@extends('mahasiswa.layout.app')

@section('page_title',$kelas->kelas->nama)

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{$kuis->title}}
                        @if($mahasiswa_kuis != null)
                        <div class="pull-right"><span class="label label-success">Telah disubmit</span></div>
                        @endif
                    </div>
                    <form method="post" action="{{route('mahasiswa.kuis.submit',[$kelas->id,$kuis->id])}}"
                          enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="panel-body">

                            <div class="form-group">
                                <label>Deskripsi</label>
                                <div class="form-control">
                                    {{$kuis->desc}}
                                </div>
                            </div>

                            <div class="form-group">
                                <label>File</label>
                                <br>
                                <a href="{{url('/file/kuis/'.$kelas->id.'/'.$kuis->id.'/'.$kuis->title.'.'.$kuis->ext)}}"
                                   class="btn btn-default"><span
                                            class="fa fa-download"></span></a> {{$kuis->title.'.'.$kuis->ext}}
                            </div>

                            <div class="form-group">
                                <label>Due</label>
                                <br>
                                <span class="label label-default">{{$kuis->remaining()}}</span>
                            </div>

                            @if($mahasiswa_kuis == null)
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <input type="file" required name="kuis">
                                    <p class="help-block">Pilih file jawaban kuis yang akan di upload.</p>
                                </div>

                        </div>
                        <div class="panel-footer">
                            <input type="submit" class="btn btn-success btn-block" value="Submit Jawaban">
                        </div>
                        @else

                            <div class="form-group">
                                <label>Tanggal Submit</label>
                                <div class="form-control">
                                    {{$mahasiswa_kuis->created_at->format('d-m-Y H:i:s')}}
                                </div>
                            </div>

                </div>
                @endif
                </form>
            </div>
            <div>
                <a href="{{route('mahasiswa.kuis.index')}}" class="btn btn-default">kembali</a>
            </div>
        </div>
    </div>
    </div>
@endsection
