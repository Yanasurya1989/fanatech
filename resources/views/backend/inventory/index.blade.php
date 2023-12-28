@extends('backend.layout.master')
@section('title', 'inventory')
@section('konten')

    <div class="mb-4">
        <a href="/inventory/create" class="btn btn-primary">+Tambah Data</a>
        <a href="{{ url('inventory/export/excel') }}" class="btn btn-success">Export</a>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Inventory
        </div>
        <div class="card-body">

            @include('backend.inventory.table', $inventories)

        </div>
    </div>
@endsection
