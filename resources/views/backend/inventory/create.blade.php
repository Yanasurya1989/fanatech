@extends('backend.layout.master');
@section('title', 'Add inventory')
@section('konten')

    <div class="container">
        <div class="tab-pane active" id="horizontal-form">
            <form action="/inventory/store" method="POST">

                @csrf

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Code</label>
                  <input type="text" class="form-control" name="code">
                </div>

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name">
                </div>

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Price</label>
                  <input type="text" class="form-control" name="price">
                </div>

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Stock</label>
                  <input type="text" class="form-control" name="stock">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>

@endsection
