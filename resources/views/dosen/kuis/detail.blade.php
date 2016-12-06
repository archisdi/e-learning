@extends('dosen.layout.app')

@section('page_title',$kelas->kelas->nama)

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$kuis->title}}</div>

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
                            <a href="{{url('/file/kuis/'.$kelas->id.'/'.$kuis->id.'/'.$kuis->title.'.'.$kuis->ext)}}" class="btn btn-default"><span class="fa fa-download"></span></a> {{$kuis->title.'.'.$kuis->ext}}
                        </div>

                        <div class="form-group">
                            <label>Due</label>
                            <br>
                            <span class="label label-default">{{$kuis->remaining()}}</span>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="{{route('dosen.kuis.index')}}" class="btn btn-default">kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
