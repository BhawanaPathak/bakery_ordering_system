<nav>
    <span class="menu" id="open"><i class="fa fa-bars" aria-hidden="true" onclick="menu()"></i></span>

    <div class="logo">
        <h1>Bakery Shop</h1>
    </div>
    <ul id="nav-links">
        <li><a href="{{route('master.index')}}">Home</a></li>
        <li><a href="{{url('about')}}">About</a></li>
        <li><a href="{{route('frontend.front.shop')}}">Shop</a></li>
        <li>
            <a href="{{route('cart.cart')}}">
                <i class="fas fa-shopping-cart"></i>
                <span>{{\Gloudemans\Shoppingcart\Cart::count()}}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>

    </ul>

</nav>
