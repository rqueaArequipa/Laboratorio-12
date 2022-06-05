@extends('layouts.PlantillaPrincipal')
@section('content')
    <h3>Productos <a href="Producto/add" type="button" class="btn btn-success m-2" >Agregar Producto</a></h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Categoría</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Stock</th>
            <th scope="col">Oferta</th>
            <th scope="col">Fecha V.</th>
            <th scope="col">Imagen</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($productos as $productos)
            <tr>
                <td>{{$productos->categoria}}</td>
                <td>{{$productos->nombre}}</td>
                <td>{{$productos->descripcion}}</td>
                <td>S/.{{$productos->precio ? $productos->precio: '0'}}</td>
                <td>{{ $productos->stock ? $productos->stock:'VACÍO'}}</td>
                <td>S/.{{$productos->oferta}}</td>
                <td>{{$productos->fechavnc}}</td>
                <td>
                        <img src="{{$productos->imagen}}" width="10%" >
                </td>

                <td>
                    <a href="Producto/{{$productos->_id}}/edit" type="button" class="btn btn-warning">Editar</a>
                    <a href="Producto/{{$productos->_id}}/delete" type="button" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
