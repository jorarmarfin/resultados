@extends('layouts.base')

@section('contenido')
{!! Alert::render() !!}
@include('alerts.errors')
{!! Form::open(['route'=>'resultados.cepre.store','method'=>'POST']) !!}
<div class="form-group">
	{!!Form::label('lblCodigo', 'Ingrese su Código de Cepre UNI');!!}
	{!!Form::text('codigo', null , ['class'=>'form-control text-uppercase','placeholder'=>'Ingrese su Codigo de Cepre UNI']);!!}
</div>
{!! Form::submit('BUSCAR', ['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
<p></p>
@if(isset($Lista))

{!! $Lista[0]->ingreso !!}
<p></p>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-responsive" data-toggle="table" data-pagination="true">
        <thead>
        	<tr class="info">
                <th rowspan="2"> Codigo </th>
                <th rowspan="2" > Nombres </th>
                <th colspan="3" class="text-center"> 1 Parcial </th>
                <th colspan="3" class="text-center"> 2 Parcial </th>
                <th colspan="3" class="text-center"> Final </th>
                <th colspan="3" class="text-center"> Arquitectura </th>
        	</tr>
            <tr class="info">
                <th> Puntaje </th>
                <th> Nota  </th>
                <th> Merito  </th>
                <th> Puntaje </th>
                <th> Nota  </th>
                <th> Merito  </th>
                <th> Puntaje </th>
                <th> Nota  </th>
                <th> Merito  </th>
                <th> Puntaje </th>
                <th> Nota  </th>
                <th> Merito  </th>
            </tr>
        </thead>
        <tbody>
    	@foreach ($Lista as $item)
            <tr >
                <td> {{ $item->codigo }} </td>
                <td> {{ $item->nombre_completo }} </td>
                <td> {{ $item->ver_puntaje1 }} </td>
                <td> {{ $item->ver_nota1 }} </td>
                <td> {{ $item->ver_merito1 }} </td>
                <td> {{ $item->ver_puntaje2 }} </td>
                <td> {{ $item->ver_nota2 }} </td>
                <td> {{ $item->ver_merito2 }} </td>
                <td> {{ $item->ver_puntaje3 }} </td>
                <td> {{ $item->ver_nota3 }} </td>
                <td> {{ $item->ver_merito3 }} </td>
                <td> {{ $item->ver_puntaje_arq }} </td>
                <td> {{ $item->ver_nota_arq }} </td>
                <td> {{ $item->ver_merito_arq }} </td>
            </tr>
    	@endforeach
        </tbody>
    </table>
    {!! $Lista->render() !!}
</div>>
@endif
@stop



@section('titulo')
RESULTADOS DE CEPRE UNI 2017-2
@stop