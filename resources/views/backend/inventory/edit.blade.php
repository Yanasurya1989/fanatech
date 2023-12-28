@extends('backend.layout.master');
@section('title', 'Add inventory')
@section('konten')

    <div class="container">
        <div class="tab-pane active" id="horizontal-form">
            <form action="/inventory/update/{{$inventories->id}}" method="POST">

                @csrf

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">id</label>
                  <input type="text" class="form-control" name="id" value="{{$inventories->id}}">
                </div>

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Code</label>
                  <input type="text" class="form-control" name="code" value="{{$inventories->code}}">
                </div>

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" value="{{$inventories->name}}">
                </div>

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Price</label>
                  <input type="text" class="form-control" name="price" value="{{$inventories->price}}">
                </div>

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Stock</label>
                  <input type="text" class="form-control" name="stock" value="{{$inventories->stock}}">
                </div>
                
                <button type="submit" class="btn btn-success">Update</button>
              </form>
        </div>
    </div>

@endsection
