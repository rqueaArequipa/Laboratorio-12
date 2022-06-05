@extends('layouts.PlantillaPrincipal')
@section('content')
    <h2>EDITAR CATEGORIA</h2>
    <form action="/Producto/update/{{$productos->_id}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1">Categoria</label>
            <input type="text" class="form-control"  name="categoria" value="{{$productos->categoria}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="{{$productos->nombre}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" value="{{$productos->descripcion}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1">Precio</label>
            <input type="text" class="form-control" name="precio" value="{{$productos->precio}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1">Stock</label>
            <input type="text" class="form-control" name="stock" value="{{$productos->stock}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1">Oferta</label>
            <input type="text" class="form-control" name="oferta" value="{{$productos->oferta}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1">Fecha V.</label>
            <input type="date" class="form-control" name="fechavnc" value="{{$productos->fechavnc}}">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
