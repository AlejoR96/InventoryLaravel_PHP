@extends('layout')
@section('title', $category->id ? 'Actualizar Categoria' : 'Nueva Categoria')
@section('header', $category->id ? 'Actualizar Categoria' : 'Nueva Categoria')
@section('content')

<form action="{{ route('category.save') }}" method="post"> <!-- ruta o metodo para guardar datos por el formulario -->
    @csrf
    <input type="hidden" name="id" value="{{$category->id}}">
    <div class="row mb-3"> <!-- Name -->
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" value="{{@old('name') ? @old('name'): $category -> name }}">
          @error('name')
            <p class="text-danger">
            {{$message}}
            </p>
          @enderror
        </div>
   </div>

    <div class="row mb-3"><!-- Description -->
        <label for="name" class="col-sm-2 col-form-label">description</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="description" value="{{ @old('description') ? @old('description') : $category -> description }}">
          @error('description')
            <p class="text-danger">
            {{$message}}
            </p>
        @enderror
        </div>
    </div>

  
    <div class="row mb-3"> <!-- Botones de cancelar y guardar -->
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="/brands" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>

@endsection
