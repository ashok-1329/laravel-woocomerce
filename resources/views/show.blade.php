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
                            <div><img src="{{ asset('images/' . $product->image) }}" alt=""
                                    class="img-fluid blur-up lazyload image_zoom_cls-0"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2>{{ $product->name }}</h2>
                            <h3>${{ $product->price }}</h3>
                            
                            @foreach($product['attributes'] as $attribute)
                                <h6 class="product-title">{{ $attribute['name'] }}</h6>
                                <div class="size-box">
                                        <ul id="att-ul-{{ $attribute['id'] }}">
                                            @foreach($attribute['all-attribute'] as $values)
                                                <li onclick="selectAttributes(this,{{$attribute['id']}}, '{{$values->value}}')" ><a href="javascript:void(0);">{{ $values->value }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                            @endforeach
                            <h6 id="stock-avail-message"></h6>
                            <div class="product-description border-product">
                                <h6 class="product-title">Available Quantity</h6>
                                <div class="qty-box">
                                    <div class="input-group"><span class="input-group-prepend"><button type="button"
                                                class="btn quantity-left-minus" data-type="minus" data-field=""><i
                                                    class="ti-angle-left"></i></button> </span>
                                        <input id="stock-quantity"  type="text" name="quantity" class="form-control input-number" value="0" disabled>
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
        const allAttributes = jsonData.attributes.map( data =>{
            return {id: data.id, selectedValue: null}
        })
        function selectAttributes(self, id, value){
            const listElements = document.querySelectorAll(`#att-ul-${id} li`);
            listElements.forEach(list =>{
                list.classList.remove('active');
            })
            self.classList.add('active');
            const attribute = allAttributes.find( item => item.id == id );
            attribute.selectedValue = value;
            if (allAttributes.some( item => item.selectedValue == null)) {
                return ; 
            }
            const hasvariation = jsonData.variations.find( variation =>{
                let flag = true;
                variation['availabe-attribute'].forEach( attValue => {
                    const attribute = allAttributes.find( item => item.id == attValue.attribute_id ); 
                    if (attValue.value != attribute.selectedValue ){
                        flag = false;
                    }
                })
                return flag
            })
            const stockAvailMessage = document.getElementById('stock-avail-message');
            const stockAQuantity = document.getElementById('stock-quantity');
            if (!hasvariation) {
                stockAvailMessage.innerText = "This Variation is not in stock. Choose other combo." ;
                stockAvailMessage.style.color = 'red';
                stockAQuantity.value = 0; 
            } else {
                stockAvailMessage.innerText = "This Variation is available in stock." ;
                stockAvailMessage.style.color = 'green';
                stockAQuantity.value = hasvariation.stock;  
            }
        }
    </script>
 
 
@endsection