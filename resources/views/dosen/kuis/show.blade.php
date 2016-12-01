@extends('dosen.layout.app')

@section('page_title',$matakuliah->nama)

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Materi</div>

                    <div class="panel-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama File / Materi</th>
                                <th>Ekstensi</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach($materi as $item)
                                <tr>
                                    <td>{{$item->nama}}</td>
                                    <td>
                                        {{$item->ext}}
                                    </td>
                                    <td>
                                        <a href="{{url('/file/materi/'.$matakuliah->id.'/'.$item->nama.'.'.$item->ext)}}"
                                           class="btn btn-default btn-sm"><span class="fa fa-download"></span></a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>

                    <div class="panel-footer">
                        <a href="{{route('dosen.materi.create',$matakuliah->id)}}" class="btn btn-success btn-block">
                            Upload Materi
                        </a>
                    </div>
                </div>
                <div>
                    <a href="{{route('dosen.materi.index')}}" class="btn btn-default">kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
