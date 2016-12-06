@extends('dosen.layout.app')

@section('page_title','Nilai Kuis '. $kuis->title)

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Nilai Kuis {{$kuis->title}}</div>

                    <div class="panel-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama</th>
                                <th>Tanggal submit</th>
                                <th>Nilai</th>
                                <th style="width: 7%">Aksi</th>
                            </tr>
                            @foreach($mahasiswa as $item)
                                <tr>
                                    <td>{{$item->mahasiswa->nama}}</td>
                                    <td>
                                        {{$item->created_at->format('d-m-Y H:i:s')}}
                                    </td>
                                    <td>
                                        {{$item->nilai}}
                                    </td>
                                    <td>
                                        <a href="{{route('dosen.nilai.mahasiswa_detail',[$kelas->id,$kuis->id,$item->mahasiswa_id])}}"
                                           class="btn btn-default btn-sm"><span class="fa fa-arrow-right"></span></a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div>
                    <a href="{{route('dosen.nilai.show',[$kelas->id,$kuis->id])}}" class="btn btn-default">kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
