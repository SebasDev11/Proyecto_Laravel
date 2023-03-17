@extends('layouts.app')

@section('template_title')
    {{ $nota->name ?? "{{ __('Show') Nota" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Nota</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('notas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Estudiante:</strong>
                            {{ $nota->id_Estudiante->name }}
                        </div>
                        <div class="form-group">
                            <strong>Nota3:</strong>
                            {{ $nota->nota3 }}
                        </div>
                        <div class="form-group">
                            <strong>Nota2:</strong>
                            {{ $nota->nota2 }}
                        </div>
                        <div class="form-group">
                            <strong>Nota1:</strong>
                            {{ $nota->nota1 }}
                        </div>
                        <div class="form-group">
                            <strong>Date At:</strong>
                            {{ $nota->date_at }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
