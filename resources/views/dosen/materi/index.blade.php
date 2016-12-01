@extends('dosen.layout.app')

@section('page_title','Materi')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Materi</div>

                    <div class="panel-body">

                        @foreach($matakuliah as $item)
                            <a href="{{route('dosen.materi.show',$item->matakuliah->id)}}">
                                <div class="callout callout-info">
                                    {{$item->matakuliah->nama}}
                                </div>
                            </a>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
