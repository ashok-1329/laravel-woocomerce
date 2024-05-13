@extends('layout')

@section('title', 'Products Page')

@section('content')
<div class="container mt-5" style="text-align: center;">
    <h2 class="mb-5">Welcome to the Woocomerce Website.</h2>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('images/verido.jpg') }}" class="img-fluid" alt="Left Image" />
        </div>
        <div class="col-md-6">
            <h2>Oversized Baggy Fit Drop Shoulder Half Sleeves Round Neck Solid Pure</h2>
            <div class="content">
               <p>Veirdo is one of the leading Indian online garment brand that offers exclusive range of fashions for Men and Boys. Official merchandiser of Disney and Marvel. We provide an ultimate T-shirt fashion meticulously crafted with Cotton fabric and blend. We manufacture T-shirts & Tops, Jackets, Sweatshirt, Co-Ords, Trackpants & Shorts with premium quality fabric for our customers which gives a perfect comfort and style. Our motto is to provide trending and fashionable products made of best materials from the market.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h2>Walker Leather Office Travel Bag</h2>
            <div class="content">
            <p>The super-stylish Walker leather unisex duffle bag is undoubtedly a trendsetter all year. This opulent, oblong weekender bag is made of the finest quality goat leather, accentuated with intricate detailing on the stitches. We offer excellent craftsmanship to ensure uniqueness and exclusivity. We are glad to let you know that all the procedures followed for tanning the skin are natural.</p>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('images/leather-bag.jpg') }}" class="img-fluid" alt="Left Image" />
        </div>
    </div>
</div>
</div>

@endsection
