@extends('backend.layout.master')
@section('title', 'Sales')
@section('konten')

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
                    <th>Sale of Number</th>
                    <th>Date</th>
                    <th>User Id</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Sale of Number</th>
                    <th>Date</th>
                    <th>User Id</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($sales as $list)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $list->number }}</td>
                        <td>{{ $list->date }}</td>
                        <td>{{ $list->user_id }}</td>
                        <td>{{ $list->created_at }}</td>
                        <td>{{ $list->updated_at }}</td>
                        <td>
                            <a href="/sales/{{ $list->id }}">Detil</a> |
                            
                            <a href="/inventory/edit/{{ $list->id }}">Update</a> |
                            <a href="/inventory/destroy/{{ $list->id }}" onclick="return confirm('Yakin ?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
{{Auth::user()}}
    
@endsection