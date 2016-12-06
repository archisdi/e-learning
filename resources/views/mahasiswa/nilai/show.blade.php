@extends('mahasiswa.layout.app')

@section('page_title',$kelas->kelas->nama)

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Nilai Kuis {{$kelas->dosen_matakuliah->matakuliah->nama}}</div>

                    <div class="panel-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama</th>
                                <th>Nilai</th>
                            </tr>
                            @foreach($kuis as $item)
                                <tr>
                                    <td>{{$item->title}}</td>
                                    <td>
                                        @if($data = $item->mahasiswa_kuis->where('mahasiswa_id',Auth::user()->id)->first())
                                            {{$data->nilai}}
                                        @else
                                            Nilai belum di input
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>

                </div>
                <div>
                    <a href="{{route('mahasiswa.nilai.index')}}" class="btn btn-default">kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
