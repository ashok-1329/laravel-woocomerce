@extends('layout')

@section('title', 'Home Page')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Products List</h2>
    <a id="addProductBtn" href="{{ route('add_product') }}" class="btn btn-primary">Add Product</a>
    <table id="myTable" class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
@endsection
