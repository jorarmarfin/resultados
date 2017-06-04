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
            <div class="row">
                <div class="col-md-4">

                <ul class="list-group">
                    <li class="list-group-item"><strong>Código: </strong>
                        {{ $Lista->codigo }}
                    </li>
                    <li class="list-group-item"><strong>Nombres Completo: </strong>
                        {{ $Lista->nombre_completo }}
                    </li>
                    <li class="list-group-item"><strong> Puntaje: </strong>
                        {{ $Lista->ver_puntaje }}
                    </li>
                    <li class="list-group-item"><strong> Nota: </strong>
                        {{ $Lista->ver_nota }}
                    </li>
                    <li class="list-group-item"><strong> Mérito: </strong>
                        {{ $Lista->ver_merito }}
                    </li>
                </ul>
                </div><!--span-->
            </div><!--row-->
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-hover" data-toggle="table">
                        <thead>
                            <tr class="info">
                                <th> Materia </th>
                                <th> Preguntas </th>
                                <th> Nivel </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> Física y Química </td>
                                <td> {{ $Lista->ver_materia1 }} </td>
                                <td> {{ $Lista->ver_nivel1 }} </td>
                            </tr>
                            <tr>
                                <td> Matemática </td>
                                <td> {{ $Lista->ver_materia2 }} </td>
                                <td> {{ $Lista->ver_nivel2 }} </td>
                            </tr>
                            <tr>
                                <td> CC. SS., cultura general e Inglés </td>
                                <td> {{ $Lista->ver_materia3 }} </td>
                                <td> {{ $Lista->ver_nivel3 }} </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!--span-->
            </div><!--row-->
        @endif
    @endif
@stop



@section('titulo')
RESULTADOS DEL SIMULACRO 2017-2
@stop