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
<section id="about-us">
    <div class="bg">
        <div class="bg-shadow">
            <div class="heading">
                <h1>About Us</h1>
                <p>Home&nbsp;| About</p>
            </div>
        </div>
    </div>

    <div class="about">
        <div class="about-img">
            <img src="{{asset('frontend/images/chef.jpg')}}" alt="">
        </div>
        <div class="about-container">
            <h2>Best bakery in town</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo deleniti
                non quaerat quidem magni eum fugit.
                At, possimus voluptatum. Ex laborum natus autem, adipisci alias vel
                quaerat perferendis deleniti Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Dignissimos, architecto porro? Sed qui saepe consequuntur dolorum fugiat illum erro
                r praesentium vel dolore! Ea enim maiores repellendus odit sit quisquam illo!
            </p>

            <p class="two">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error dicta sequi officiis fugiat quaerat sed tenetur corrupti. Debitis expedita
                consequatur neque, corrupti tenetur doloremque accusamus cupiditate similique labore vero repellendus!</p>
        </div>
    </div>
</section>
<section id="remember">
    <div class="heading">
        <h1>What We Offer</h1>
        <p>We Provide all kinds of bakery products</p>
    </div>
    <div class="remember-container">
        <div class="product">
            <img src="{{asset('frontend/images/blackforest.jpg')}}" alt="">
            <h4>Cakes</h4>
        </div>
        <div class="product">
            <img src="{{asset('frontend/images/buns.jpg')}}" alt="">
            <h4>Bread & Buns</h4>
        </div>
        <div class="product">
            <img src="{{asset('frontend/images/chocolatechips.jpg')}}" alt="">
            <h4>Biscuits</h4>
        </div>
    </div>
</section>
@include('frontend.footer')
<script src="app.js"></script>
</body>
</html>
