<nav id='navbar' class="navbar navbar-expand-md navbar-light bg-transparent d-flex mx-lg-5 mx-md-2 mx-sm-1">
    <a class="navbar-brand d-flex justify-content-center align-items-center" href="{{ route('index') }}">
        @if(Request::is('*/*'))
        <img class='px-3' src="../images/logo.png" width='40%' alt="logo">
        @else
        <img class='px-3' src="./images/logo.png" width='40%' alt="logo">
        @endif
    </a>
    <div class="shop-nav d-none d-md-block menu-1 ml-auto" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto shop-navbar-link">
            <li class="active"><a href="{{ route('index') }}">Home</a> <span class="sr-only">(current)</span></li>
            <li class="has-dropdown">
                <a href="{{ route('shop') }}">Shop</a>
                <ul class="dropdown">

                    <li><a href="{{ route('product-detail') }}">Product Detail</a></li>
                    <li><a href="{{ route('cart.show') }}">Shipping Cart</a></li>
                    <li><a href="{{ route('checkout') }}">Checkout</a></li>
                    <li><a href="{{ route('order-complete') }}">Order Complete</a></li>
                    <li><a href="{{ route('add-to-wishlist') }}">Wishlist</a></li>


                </ul>
            </li>
            <li><a href="{{ route('blog') }}">Blog</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>

            @auth
            <li>
                <a href="{{ route('cart.show') }}"><i class="icon-shopping-cart"></i>
                    Cart
                <span class="badge badge-pill badge-warning text-white">0</span>
                </a>
            </li>
            <li>

                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class='btn-logout-form' style='color : #379500;'>Logout</button>
                </form>

            </li>

            @else
            <li><a href="{{ route('register') }}" class='ml-5 btn-logout-a' style='color : #379500;'>Register</a></li>
            <li><a href="{{ route('login') }}" class='btn-logout-a' style='color : #379500;'>Login</a></li>
            @endauth




        </ul>
    </div>
</nav>
