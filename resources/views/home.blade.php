@extends('layouts.app')

@section('content')
<div class="container">
            <div class="mt-3">
                    <a href="{{ route('estudiantes.index') }}" class="btn btn-primary">Estudiantes</a>
                    <a href="{{ route('notas.index') }}" class="btn btn-primary ml-3">Notas</a>
            </div>
</div>
@endsection
