<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakery Shop</title>
    <link rel="stylesheet" href="{{asset('frontend/fontawesome/fontawesome-free/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
</head>
<body>
@include('frontend.nav')
<section id="shop">
    <div class="bg">
        <div class="bg-shadow">
            <div class="heading">
                <h1>Shop</h1>
                <p>Home&nbsp;| Shop</p>
            </div>
        </div>
    </div>
    <div class="options">
        <?php $cats=DB::table('categories')-> get();  ?>
        @foreach($cats as $cat)
            <li><a href="{{url('category',$cat->id)}}">{{ucwords($cat->name)}}</a></li>
        @endforeach
    </div>
    <div class="shop-container">
        @foreach($products as $product)
            <div class="product">
                <img src="/image/product/{{ $product->image}}" alt="">
                <h4>{{ $product->name }}</h4>
                <p>Rs{{$product->price}}</p>
                <a href="orderform.html">Order Now</a>
            </div>
        @endforeach
    </div>
</section>
@include('frontend.footer')
<script src="app.js"></script>
</body>
</html>
