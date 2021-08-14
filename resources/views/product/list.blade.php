@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="{{ route('product.form') }}" class="btn btn-primary">Nuevo producto</a>
        </div>

</div>
<table class="table table-striped table-hover">
    <!--Encabezado de la tabla -->
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Cost</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Brand</th>
            <th> </th>
        </tr>
    </thead>

    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product ->id}}</td>
            <td>{{$product ->name}}</td>
            <td>{{$product ->cost}}</td>
            <td>{{$product ->price}}</td>
            <td>{{$product ->quantity}}</td>
            <td>{{$product ->brand}}</td>
            <td>
                <a href="#" class="btn btn-warning">Editar</a>
                <a href="#" class="btn btn-danger">Borrar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
