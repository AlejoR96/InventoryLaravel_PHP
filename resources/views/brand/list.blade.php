@extends('layout')
@section('content')

<div class="row">
    <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="{{ route('brand.form') }}" class="btn btn-primary"><span class="bi bi-file-earmark-plus">Nueva marca</span></a>
        </div>

</div>

@if(Session::has('message'))
<p class="alert alert-success">
    {{Session::get('message')}}

</p>
@endif


<!-- Vista de la tabla brand  -->
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>City</th>
            <th>Country</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        @foreach($brands as $brand)
        <tr>
            <td>{{$brand->id}}</td>
            <td>{{$brand->name}}</td>
            <td>{{$brand->city}}</td>
            <td>{{$brand->country}}</td>
            <td class="col-sm-2">
                <a href="#" class="btn btn-warning"><span class="bi bi-file-earmark-text">Editar</span></a>
                <a href="{{ route('brand.delete', ['id' => $brand->id]) }}" class="btn btn-danger"><span class="bi bi-trash">Borrar</span></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
