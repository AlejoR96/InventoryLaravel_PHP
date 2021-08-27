@extends('layout')
@section('title', 'Nueva Marca')
@section('header', 'Nueva Marca')
@section('content')

<form action="{{ route('brand.save') }}" method="post"> <!-- ruta o metodo para guardar datos por el formulario -->
    @csrf
    <div class="row mb-3"> <!-- Name brand-->
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" value="">
          @error('name')
            <p class="text-danger">
            {{$message}}
            </p>
          @enderror
        </div>
   </div>

    <div class="row mb-3"><!-- city brand -->
        <label for="name" class="col-sm-2 col-form-label">city</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="city" value="">
          @error('city')
            <p class="text-danger">
            {{$message}}
            </p>
        @enderror
        </div>
    </div>

    <div class="row mb-3"><!-- Country brand -->
        <label for="name" class="col-sm-2 col-form-label">Country</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="country" value="">
          @error('country')
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
