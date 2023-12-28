<table id="datatablesSimple">
    <thead>
        <tr>
            <th>No</th>
            <th>Code</th>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>No</th>
            <th>Code</th>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Aksi</th>
        </tr>
    </tfoot>
    <tbody>
        @foreach ($inventories as $list)

            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$list->code}}</td>
                <td>{{$list->name}}</td>
                <td>{{$list->price}}</td>
                <td>{{$list->stock}}</td>
                <td>{{$list->created_at}}</td>
                <td>{{$list->updated_at}}</td>
                <td>
                    <a href="/inventory/edit/{{$list->id}}">Update</a> | 
                    <a href="/inventory/destroy/{{$list->id}}" onclick="return confirm('Yakin ?')">Delete</a>
                </td>
            </tr>
            
        @endforeach
    </tbody>
</table>