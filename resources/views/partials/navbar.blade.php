<nav id='navbar' class="navbar navbar-expand-md navbar-light bg-transparent d-flex mx-lg-5 mx-md-2 mx-sm-1">
    <a class="navbar-brand d-flex justify-content-center align-items-center" href="{{ route('index') }}">
        <img class='px-3' src="./images/logo.png" width='40%' alt="logo">
    </a>


    <div class="shop-nav d-none d-md-block menu-1 ml-auto" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto shop-navbar-link">
            <li class="active"><a href="index.html">Home</a> <span class="sr-only">(current)</span></li>
            <li class="has-dropdown">
                <a href="shop.html">Shop</a>
                <ul class="dropdown">
                    <li><a href="product-detail.html">Product Detail</a></li>
                    <li><a href="cart.html">Shipping Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="order-complete.html">Order Complete</a></li>
                    <li><a href="add-to-wishlist.html">Wishlist</a></li>
                </ul>
            </li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="cart.html"><i class="icon-shopping-cart"></i>

                    Cart
                    <span class="badge badge-pill badge-warning">0</span>

                </a>
            </li>
        </ul>
    </div>
</nav>
