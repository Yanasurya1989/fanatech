@extends('backend.layout.master')
@section('title', 'Purchases')
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
                {{-- @foreach ($users as $list)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $list->name }}</td>
                        <td>{{ $list->email }}</td>
                        <td>{{ $list->created_at }}</td>
                        <td>{{ $list->updated_at }}</td>
                        <td>
                            <a href="/inventory/edit/{{ $list->id }}">Update</a> |
                            <a href="/inventory/destroy/{{ $list->id }}"
                                onclick="return confirm('Yakin ?')">Delete</a>
                        </td>
                    </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>
</div>
    
@endsection