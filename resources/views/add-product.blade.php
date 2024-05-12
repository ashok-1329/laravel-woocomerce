@extends('layout')

@section('title', 'Home Page')

@section('content')
    <div class="container mt-5">
       <h2 class="mb-4">Add Product</h2>
        <form method="POST" action="{{ route('products.store') }}">
            @csrf <!-- CSRF Protection -->
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="name">Category:</label>
                <select class="form-control" name="category_id">
                   @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" name="price" id="price" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Add Product</button>
        </form>
    </div>
@endsection
