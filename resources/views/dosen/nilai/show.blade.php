@extends('dosen.layout.app')

@section('page_title',$kelas->kelas->nama)

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Nilai</div>

                    <div class="panel-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama</th>
                                <th>Due date</th>
                                <th style="width: 7%">Aksi</th>
                            </tr>
                            @foreach($kuis as $item)
                                <tr>
                                    <td>{{$item->title}}</td>
                                    <td>
                                        {{$item->remaining()}}
                                    </td>
                                    <td>
                                        <a href="{{url('/dosen/nilai/'.$kelas->id.'/'.$item->id)}}"
                                           class="btn btn-default btn-sm"><span class="fa fa-eye"></span></a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div>
                    <a href="{{route('dosen.nilai.index')}}" class="btn btn-default">kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
