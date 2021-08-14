@extends('layout')
@section('title', 'Nuevo Producto')
@section('header', 'Nuevo Producto')
@section('content')

<form action="{{ route('product.save') }}" method="post">
    @csrf
    <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name">
        </div>
    </div>

    <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Cost</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="cost">
        </div>
    </div>

    <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="price">
        </div>
    </div>

    <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Quantity</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="quantity">
        </div>
    </div>

    <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Brand</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="brand">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="/products" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </div>
</form>
@endSection
