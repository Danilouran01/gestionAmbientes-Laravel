@extends('layouts.plantillabase');
@section('title','ver elemento');

@section('contenido')
    <a href="elementos/create" class="btn btn-primary">crear</a>
    <table class="table table-dark table-striped mt-4">
       <thead>
        <tr>
            <th scope="col">serial </th>
            <th scope="col">marca</th>
            <th scope="col">placa</th>
            <th scope="col">modelo</th>
            <th scope="col">tipo_dispositivo</th>
            <th scope="col">estado </th>
            <th scope="col">acciones</th>
        </tr>
       </thead>

       <tbody>
        @foreach ($elementos as $elemento)
        <tr>
            <td>{{$elemento->serial}}</td>
            <td>{{$elemento->placa}}</td>
            <td>{{$elemento->marca}}</td>
            <td>{{$elemento->modelo}}</td>
            <td>{{$elemento->tipo_dispositivo}}</td>
            <td>{{$elemento->estado }}</td>
            <td>
                <a href="" class="btn btn-info">Editar</a>
                <a href="" class="btn btn-info">Eliminar</a>
            </td>
            
        </tr>
            
        @endforeach
       </tbody>
      </table>
@endsection