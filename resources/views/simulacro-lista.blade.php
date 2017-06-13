@extends('layouts.base')

@section('contenido')
    @if ($resultado->activo)
        {{-- expr --}}
        {!! Alert::render() !!}
        @include('alerts.errors')
        {!! Form::open(['route'=>'resultados.simulacro.store','method'=>'POST']) !!}
        <div class="form-group">
            {!!Form::label('lblCodigo', 'Ingrese el Número de Inscripción del Simulacro que aparece en su ficha');!!}
            {!!Form::text('codigo', null , ['class'=>'form-control text-uppercase','placeholder'=>'Ingrese el Número de Inscripción']);!!}
        </div>
        {!! Form::submit('BUSCAR', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
        <p></p>
        <a href="{{ route('resultados.simulacro.quinto') }}" class="btn btn-warning">Resultados de Quinto Año</a>
        <a href="{{ route('resultados.simulacro.otros') }}" class="btn btn-info">Resultados de Quinto Año y egresados</a>
        <p></p>
        @if(isset($Lista))

        <p></p>
            <table class="table table-bordered table-hover table-responsive" data-toggle="table" data-pagination="true">
                <thead>
                    <tr class="info">
                        <th> Codigo </th>
                        <th> Grado </th>
                        <th> Puntaje </th>
                        <th> Nota  </th>
                        <th> Especialidad  </th>
                        <th> Merito Especialidad  </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Lista as $item)
                    <tr>
                        <td> {{ $item->codigo }} </td>
                        <td> {{ $item->grado }} </td>
                        <td> {{ $item->ver_puntaje }} </td>
                        <td> {{ $item->ver_nota }} </td>
                        <td> {{ $item->especialidad }} </td>
                        <td> {{ $item->merito_especialidad }} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $Lista->links() }}
        @endif
    @endif
@stop



@section('titulo')
RESULTADOS DEL SIMULACRO 2017-2
@stop