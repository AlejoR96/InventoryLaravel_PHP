@extends('layout')
@section('title', 'Nuevo Producto')
@section('header', 'Nuevo Producto')
@section('content')

<form action="{{ route('product.save') }}" method="post">
    @csrf
    <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" value="{{@old('name')}}">
          @error('name')
            <p class="text-danger">
            {{$message}}
            </p>
          @enderror
        </div>
   </div>

    <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Cost</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="cost" value="{{@old('cost')}}">
        @error('cost')
            <p class="text-danger">
            {{$message}}
            </p>
        @enderror
        </div>

    </div>

    <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="price" value="{{@old('price')}}">
          @error('price')
            <p class="text-danger">
            {{$message}}
            </p>
        @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Quantity</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="quantity" value="{{@old('quantity')}}">
          @error('quantity')
            <p class="text-danger">
            {{$message}}
            </p>
        @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Brand</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="brand" value="{{@old('brand')}}">
          @error('brand')
            <p class="text-danger">
            {{$message}}
            </p>
          @enderror
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="/products" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>
@endSection
