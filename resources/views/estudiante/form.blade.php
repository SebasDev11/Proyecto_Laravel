<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $estudiante->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('surname') }}
            {{ Form::text('surname', $estudiante->surname, ['class' => 'form-control' . ($errors->has('surname') ? ' is-invalid' : ''), 'placeholder' => 'Surname']) }}
            {!! $errors->first('surname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
        {{ Form::label('date_born') }}
        {{ Form::date('date_born', $estudiante->date_born, ['class' => 'form-control' . ($errors->has('date_born') ? ' is-invalid' : ''), 'placeholder' => 'Date Born']) }}
        {!! $errors->first('date_born', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dni') }}
            {{ Form::text('dni', $estudiante->dni, ['class' => 'form-control' . ($errors->has('dni') ? ' is-invalid' : ''), 'placeholder' => 'Dni']) }}
            {!! $errors->first('dni', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $estudiante->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class= "m-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>