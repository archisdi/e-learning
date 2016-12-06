@extends('admin.layout.app')

@section('page_title','Tambah Data Dosen')

@section('content')
    <section class="content-header">
        <h1>
            Tambah Dosen
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-book"></i> Dosen</a></li>
            <li><a href="#">Tambah Dosen</a></li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="box box-default">

                    {!! Form::model(old(),array('url' => route('admin.dosen.store'), 'method' => 'post', 'id' => 'mahasiswa-form', 'class' => 'form-horizontal')) !!}

                    <div class="box-body">
                        @include('admin.data.dosen.form',['SubmitButtonText' => 'Tambah'])
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </section>
@endsection

@section('ext_footer_script')
    <script>
        $(function () {
            $('select').select2();

            $('#program_studi_id').on('change', function (e) {
                var cat_id = e.target.value;

                $.get('/data/matakuliah/' + cat_id, function (data) {

                    //success data
                    $('#matakuliah_id').empty();

                    $('#matakuliah_id').append(' Please choose one ');

                    $.each(data, function (index, subcatObj) {

                        $('#matakuliah_id').append('<option value ="' + subcatObj.id + '">' + subcatObj.kode + ' | ' + subcatObj.nama + '</option>');
                    });
                });
            });
        });
    </script>
@endsection