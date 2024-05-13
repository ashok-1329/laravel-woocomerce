@extends('layout')

@section('title', 'Home Page')

@section('content')
    <div class="container mt-5">
       <h2 class="mb-4">Add Product</h2>
        <form method="POST" id="variationForm" enctype="multipart/form-data">
            @csrf <!-- CSRF Protection -->
            <div class="form-group">
                <label for="name">Name:<span class="error">*</span></label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="category">Category:<span class="error">*</span></label>
                <select class="form-control" name="category_id" id="category_id">
                   @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="price">Price:<span class="error">*</span></label>
                <input type="number" name="price" id="price" class="form-control" required>
            </div>

             <div class="form-group">
                <label for="image">Select an product image (jpg, png, jpeg):<span class="error">*</span></label>
                <input type="file" name="image" id="imageInput" class="form-control" accept=".jpg, .jpeg, .png" required>
            </div>

            <div class="form-group">
                <label for="description">Description:<span class="error">*</span></label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>
            <span class="error form-error"></span>
            <br/>
            <br/>
            <button type="button" class="btn btn-success" id="attribute">Add Attribute</button>
            <div class="show-attribute mt-3">
                @foreach($attributes as $attribute)
                    <h6 class="product-title" data-id={{$attribute["id"]}}>{{ $attribute['name'] }}<span class="error">*</span></h6>
                    <div class="size-box">
                        
                            <select id="{{ $attribute['name'] }}Select" class="form-control">
                                <option value="0">Select Variation</option>
                            @foreach($attribute['values'] as $values)
                                <option value="{{ $values->id }}">{{ $values->value }}</option>
                            @endforeach
                            </select>
                        
                    </div>
                @endforeach
                <div class="form-group mt-3">
                 <label for="description">Variation Quantity:<span class="error">*</span></label>
                <input type="number" name="variation_stock" class="form-control" id="var_stock">
            </div>
                  <span class="error-message error"></span><br/><br/>

                <button type="button" class="btn btn-success" onclick="addVariation()">Add Variation</button>
            </div>   
            <button type="button" onclick="saveVariation()" class="btn btn-success" style="float: right;">Submit</button>
        </form>
    </div>
@endsection
