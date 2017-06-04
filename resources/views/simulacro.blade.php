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
        @if(isset($Lista))

        <p></p>
            <table class="table table-bordered table-hover table-responsive" data-toggle="table" data-pagination="true">
                <thead>
                    <tr class="info">
                        <th> Codigo </th>
                        <th> Nombres  </th>
                        <th> Puntaje </th>
                        <th> Nota  </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> {{ $Lista->codigo }} </td>
                        <td> {{ $Lista->nombre_completo }} </td>
                        <td> {{ $Lista->ver_puntaje }} </td>
                        <td> {{ $Lista->ver_nota }} </td>
                    </tr>
                </tbody>
            </table>
        @endif
    @endif
@stop



@section('titulo')
RESULTADOS DEL SIMULACRO 2017-2
@stop