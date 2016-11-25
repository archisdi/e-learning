@extends('admin.layout.app')

@section('page_title','Tambah Matakuliah Tawar')

@section('content')
    <section class="content-header">
        <h1>
            Tambah Mahasiswa
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-book"></i> Mahasiswa</a></li>
            <li><a href="#">Tambah Mahasiswa</a></li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="box box-default">

                    {!! Form::model(old(),array('url' => route('admin.mahasiswa.store'), 'method' => 'post', 'id' => 'mahasiswa-form', 'class' => 'form-horizontal')) !!}

                    <div class="box-body">
                        @include('admin.data.mahasiswa.form',['SubmitButtonText' => 'Tambah'])
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