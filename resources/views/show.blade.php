@extends('layout')

@section('title', 'Home Page')

@section('content')

<!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>product</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">product</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->
   
    <!-- section start -->
    <section>
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-10 col-xs-12">
                        <div class="product-right-slick">
                            <div><img src="https://images-na.ssl-images-amazon.com/images/I/61paqOv2LuL._AC_UX569_.jpg" alt=""
                                    class="img-fluid blur-up lazyload image_zoom_cls-0"></div>
                        </div>
                    </div>
                   <!--  <div class="col-lg-1 col-sm-2 col-xs-12">
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="slider-right-nav">
                                    <div><img src="https://images-na.ssl-images-amazon.com/images/I/61paqOv2LuL._AC_UX569_.jpg" alt=""
                                            class="img-fluid blur-up lazyload"></div>
                                    <div><img src="https://images-na.ssl-images-amazon.com/images/I/61paqOv2LuL._AC_UX569_.jpg" alt=""
                                            class="img-fluid blur-up lazyload"></div>
                                    <div><img src="https://images-na.ssl-images-amazon.com/images/I/61paqOv2LuL._AC_UX569_.jpg" alt=""
                                            class="img-fluid blur-up lazyload"></div>
                                    <div><img src="https://images-na.ssl-images-amazon.com/images/I/61paqOv2LuL._AC_UX569_.jpg" alt=""
                                            class="img-fluid blur-up lazyload"></div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2>{{ $product->name }}</h2>
                            <h3>${{ $product->price }}</h3>
                            @foreach($product['attributes'] as $attribute)
                                <h6 class="product-title">{{ $attribute['name'] }}</h6>
                                <div class="size-box">
                                        <ul>
                                            @foreach($attribute['all-attribute'] as $values)
                                                <li onclick="selectAttributes({{$attribute['id']}}, '{{$values->value}}')" ><a href="#">{{ $values->value }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                            @endforeach

                            <div class="product-description border-product">
                               <!--  <div class="size-box">
                                    <ul>
                                        <li class="active"><a href="#">s</a></li>
                                        <li><a href="#">m</a></li>
                                        <li><a href="#">l</a></li>
                                        <li><a href="#">xl</a></li>
                                    </ul>
                                </div> -->
                                <h6 class="product-title">Stock</h6>
                                <div class="qty-box">
                                    <div class="input-group"><span class="input-group-prepend"><button type="button"
                                                class="btn quantity-left-minus" data-type="minus" data-field=""><i
                                                    class="ti-angle-left"></i></button> </span>
                                        <input type="text" name="quantity" class="form-control input-number" value="1">
                                        <span class="input-group-prepend"><button type="button"
                                                class="btn quantity-right-plus" data-type="plus" data-field=""><i
                                                    class="ti-angle-right"></i></button></span></div>
                                </div>
                            </div>
                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p>{{ $product->description }}</p>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->
     <script>
        const jsonData = JSON.parse(@json($jsonData));
        const allAttributesId = jsonData.attributes.map( data =>{
            return data.id
        })
        function selectAttributes(id, value){
            console.log(id, value)
        }
        console.log(allAttributesId); 
    </script>


@endsection
