<div class="form-group @if($errors->has('nama')) has-error @endif">
    {!! Form::label('nama', 'Nama', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('nama',null, array('class' => 'form-control', 'id' => 'nama','required')) !!}
        @if($errors->has('nama')) <span class="help-block">{{ $errors->first('nama') }}</span> @endif
    </div>
</div>

<div class="form-group @if($errors->has('nim')) has-error @endif">
    {!! Form::label('nim', 'Nim', array('class' => 'col-sm-2 control-label')) !!}

    <div class="col-sm-10">
        {!! Form::number('nim','Remedial', array('class' => 'form-control','required')) !!}
        @if($errors->has('nim')) <span class="help-block">{{ $errors->first('nim') }}</span> @endif

    </div>
</div>


<div class="form-group @if($errors->has('nim')) has-error @endif">
    {!! Form::label('jenis_kelamin', 'Jenis Kelamin', array('class' => 'col-sm-2 control-label')) !!}

    <div class="col-sm-10">
        {!! Form::select('jenis_kelamin', ['L' => 'Laki-laki', 'P' => 'Perempuan'], 'L',['style' => 'width: 100%;']) !!}
        @if($errors->has('jenis_kelamin')) <span class="help-block">{{ $errors->first('nim') }}</span> @endif

    </div>
</div>


<div class="form-group @if($errors->has('email')) has-error @endif">
    {!! Form::label('email', 'Email', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('email',NULL, array('class' => 'form-control', 'id' => 'email','required')) !!}
        @if($errors->has('email')) <span class="help-block">{{ $errors->first('email') }}</span> @endif

    </div>
</div>

<div class="form-group @if($errors->has('email')) has-error @endif">
    {!! Form::label('password', 'Password', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::password('password', array('class' => 'form-control', 'id' => 'password')) !!}
        @if($errors->has('password')) <span class="help-block">{{ $errors->first('email') }}</span> @endif

    </div>
</div>



<hr>

{!! Form::submit($SubmitButtonText, ['class' => 'btn bg-olive btn-flat btn-block form-control'])  !!}