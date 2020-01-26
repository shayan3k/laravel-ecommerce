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
            <li class="{{(Request::is('/'))?'active':''}}"><a href="{{ route('index') }}">Home</a></li>
            <li class="{{(Request::is('blog'))?'active':''}}"><a href="{{ route('blog') }}">Blog</a></li>
            <li class="{{(Request::is('shop'))?'active':''}}"><a href="{{ route('shop') }}">Shop</a></li>
            <li class="{{(Request::is('about'))?'active':''}}"><a href="{{ route('about') }}">About</a></li>
            <li class="{{(Request::is('contact'))?'active':''}}"><a href="{{ route('contact') }}">Contact</a></li>

            @auth

            <li class="{{(Request::is('/cart'))?'active':''}}">
                <a href="{{ route('cart.show') }}">
                    Cart
                </a>
            </li>

            @if(Auth::user()->isAdmin())
            <li class="{{(Request::is('/admin'))?'active':''}}">
                <a href="{{ route('admin') }}">
                    Admin
                </a>
            </li>
            @endif

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
