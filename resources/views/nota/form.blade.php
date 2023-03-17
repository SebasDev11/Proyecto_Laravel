<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Asignar Estudiante') }}
            {{ Form::select('id_Estudiante', App\Models\Estudiante::pluck('name', 'id'), $nota->id_Estudiante, ['class' => 'form-control' . ($errors->has('id_Estudiante') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un estudiante']) }}
            {!! $errors->first('id_Estudiante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota3') }}
            {{ Form::text('nota3', $nota->nota3, ['class' => 'form-control' . ($errors->has('nota3') ? ' is-invalid' : ''), 'placeholder' => 'Nota3']) }}
            {!! $errors->first('nota3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota2') }}
            {{ Form::text('nota2', $nota->nota2, ['class' => 'form-control' . ($errors->has('nota2') ? ' is-invalid' : ''), 'placeholder' => 'Nota2']) }}
            {!! $errors->first('nota2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota1') }}
            {{ Form::text('nota1', $nota->nota1, ['class' => 'form-control' . ($errors->has('nota1') ? ' is-invalid' : ''), 'placeholder' => 'Nota1']) }}
            {!! $errors->first('nota1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date_at') }}
            {{ Form::date('date_at', $nota->date_at, ['class' => 'form-control' . ($errors->has('date_at') ? ' is-invalid' : ''), 'placeholder' => 'Date At']) }}
            {!! $errors->first('date_at', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="m-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>