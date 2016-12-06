@extends('dosen.layout.app')

@section('page_title','Nilai')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Nilai</div>

                    <div class="panel-body">

                        @foreach($matakuliah as $item)
                            <a href="{{route('dosen.nilai.show',$item->id)}}">
                                <div class="callout callout-info">
                                    {{$item->dosen_matakuliah->matakuliah->nama}}
                                    <div class="pull-right">
                                        {{$item->kelas->nama}}
                                    </div>
                                </div>
                            </a>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
