@extends('layout')

@section('title', 'Products Page')

@section('content')

<div class="container mt-5">
    <div class="" style="display: flex; justify-content: space-between; align-items: center;">
        <h2 class="mb-4">Woocomerce Products</h2>
        <a href="{{ route('add_product') }}" class="edit btn btn-success btn-sm right">Add Product</a>
    </div>
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
