<table>
    <!--Encabezado de la tabla -->
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Cost</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Brand</th>
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
        </tr>
        @endforeach
    </tbody>
</table>
