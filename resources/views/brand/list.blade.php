<table>
    <thead>
        <tr>
            <th>Name</th>
        </tr>
    </thead>

    <tbody>
        @foreach($brands as $brand)
        <tr>
            <td>{{$brand->name}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

