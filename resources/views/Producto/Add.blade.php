@extends('layouts.PlantillaPrincipal')
@section('content')
    <h2>Nuevo Producto</h2>
    <form action="/Producto/insert" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1">Categoria</label>
            <input type="text" class="form-control" name="categoria">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1">Descripcion</label>
            <input type="text" class="form-control" name="descripcion">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1">Precio</label>
            <input type="text" class="form-control" name="precio">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1">Stock</label>
            <input type="text" class="form-control" name="stock">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1">Oferta</label>
            <input type="text" class="form-control" name="oferta">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1">Fecha V.</label>
            <input type="date" class="form-control" name="fechavnc">
        </div>
        <div class="form-group">
            <label for="foto">Imagen</label>
            <input type="file" class="form-control" name="imagen">
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
@endsection
