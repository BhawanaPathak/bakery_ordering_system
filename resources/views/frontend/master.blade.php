<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakery Shop</title>
    <link rel="stylesheet" href="{{asset('frontend/fontawesome/fontawesome-free/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/swiper/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/swiper/swiper-bundle.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
</head>
<body>
@include('frontend.nav')

<main>
    <!-- slider -->
@include('frontend.slider')
<!-- slider end -->

    <!-- advertising banner-->
    <section id="menu">
        <div class="container">
            <div class="restaurent">
                <div class="bg">
                    <div class="bg-shadow">
                        <div class="items">
                            <h1>Healthy and tasty fast food</h1>
                            <a href="#">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bakery">
                <div class="bg">
                    <div class="bg-shadow">
                        <div class="items">
                            <h1>Tasty and Delicious bakery items</h1>
                            <a href="#">Order Now</a>>
                        </div>
                    </div>
                </div>

            </div>
    </section>
    <!-- advertising end  -->

    <!-- products -->
    <section id="product">
        <h1>Ou<span>r Pro</span>ducts</h1>

        <div class="product-container" >
            @foreach($products as $product)
                <div class="col-md-3 product-info">
                    <img src="/image/product/{{ $product->image}}" alt="">
                    <div class="overlay">
                        <div class="buttons">
                            <a href="{{route('cart.add.',$product->id)}}">Order Now</a>
                        </div>
                    </div>
                    <h4>{{ $product->name }}</h4>
                    <p>Rs{{$product->price}}</p>
                </div>
            @endforeach

        </div>

    </section>
    <!-- product end -->

    <!-- purchase banner -->
    <section id="purchase">
        <div class="bg">
            <div class="bg-shadow">
                <div class="content">
                    <h1>Looking for delicious Cakes? </h1>
                    <a href="#">Order Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- purchase banner end -->

    <!-- contact -->
    <section id="contact">
        <div class="contacts">
            <h1>Get In Touch</h1>
            <form>
                <input type="text" name="name" placeholder=" Your Name"><br>
                <input type="email" name="email" placeholder="Your Email"><br>
                <input type="submit" value="Send">
            </form>
        </div>
    </section>
    <!-- contacts -->

    <!-- footer section -->
@include('frontend.footer')
<!-- footer end -->
</main>

<script src="{{asset('frontend/app.js')}}"></script>
<script src="{{asset('frontend/swiper/swiper-bundle.js')}}"></script>
<script src="{{asset('frontend/swiper/swiper-bundle.min.js')}}"></script>


<!--Sticky Navbar-->
<script type="text/javascript">

</script>

<!-- slider js -->

<script>
    var mySwiper = new Swiper('.swiper-container', {
        loop:true,
        speed:5000,
        pagination: {
            el: '.swiper-pagination',
            clickable:true,
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 3000,
        },
        fadeEffect: {
            crossFade: true,
        },
        breakpoints: {
            600: {
                slidesPerView: 1,
            },
            767: {
                slidesPerView: 1,
            },
            1024: {
                slidesPerView: 1,
            },
        }
    });
</script>
</body>
</html>
