@extends('backend.layout.master')
@section('title', 'inventory')
@section('konten')

<div class="mb-4">
    <a href="/inventory/create" class="btn btn-primary">+Tambah Data</a>
</div>
<div class="card mb-4">  
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Inventory
    </div>
    <div class="card-body">
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
                @foreach ($inventory as $list)

                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$list->code}}</td>
                        <td>{{$list->name}}</td>
                        <td>{{$list->price}}</td>
                        <td>{{$list->stock}}</td>
                        <td>{{$list->created_at}}</td>
                        <td>{{$list->updated_at}}</td>
                        <td>
                            <a href="#">Update</a> | 
                            <a href="/inventory/destroy/{{$list->id}}" onclick="return confirm('Yakin ?')">Delete</a>
                        </td>
                    </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
