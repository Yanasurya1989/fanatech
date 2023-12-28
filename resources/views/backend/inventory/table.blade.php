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
            {{-- @isset($isView)
                <th class="disabled-sorting text-right" style="width:12%">Aksi</th>                
            @endisset --}}
        </tr>
    </thead>
    {{-- <tfoot>
        <tr>
            <th>No</th>
            <th>Code</th>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Created At</th>
            <th>Updated At</th>
            @isset($isView)
                <th class="disabled-sorting text-right" style="width:12%">Aksi</th>                
            @endisset
        </tr>
    </tfoot> --}}
    <tbody>
        @foreach ($inventories as $list)

            <tr>
                @php $no=1 @endphp
                <td>{{$no++}}</td>
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
                
                {{-- @isset($isView)
                <td>
                    <a href="/inventory/edit/{{$list->id}}">Update</a> | 
                    <a href="/inventory/destroy/{{$list->id}}" onclick="return confirm('Yakin ?')">Delete</a>
                </td>
                @endisset --}}
            </tr>
            
        @endforeach
    </tbody>
</table>