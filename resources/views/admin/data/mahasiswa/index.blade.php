@extends('admin.layout.app')

@section('page_title','Home')

@section('content')
    <section class="content-header">
        <h1>Mahasiswa</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Data</a></li>
            <li class="active">Mahasiswa</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Mahasiswa</h3>

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <th>Nama</th>
                                <th>Nim</th>
                                <th>Email</th>
                            </tr>
                            @foreach($mahasiswa as $item)
                                <tr>
                                    <td>{{$item->nama}}</td>
                                    <td><span class="label label-default">{{$item->nim}}</span></td>
                                    <td>{{$item->email}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="box-footer">
                        {{$mahasiswa->render()}}
                        <div class="pull-right">
                            <a href="{{route('admin.mahasiswa.create')}}" class="btn bg-olive btn-lg"><span
                                        class="fa fa-plus"></span></a>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
@endsection
