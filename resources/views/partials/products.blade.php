<div class="shop-shop">
    <div class="container">

        @if(Request::path()=='/')
        <div class="row  d-felx justify-content-center align-items-center">
            <div class="col-md-6 col-md-offset-3 text-center shop-heading">
                <h2><span>Our Popular Products</span></h2>
                <p>We love to tell our successful far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        @endif



        <div class="row">



            @forelse ($products as $item)
            <div class="col-md-3 text-center">
                <div class="product-entry">
                    <div class="product-img" style="background-image: url(images/{{ $item->thumbnail }});">
                        <p class="tag"><span class="{{ $item->tag }} text-capitalize">{{ $item->tag }}</span>
                        </p>

                        <div class="cart-info">
                            <p class="price"><span>${{ $item->price }}</span></p>
                            <h3><a class='name' href="shop.html">{{ $item->name }}</a></h3>
                        </div>
                        <div class='mask'></div>

                        <div class="cart">
                            <p>
                                <span class="addtocart"><a href="cart.html"><i
                                            class="icon-shopping-cart"></i></a></span>
                                <span><a href="shop/{{$item->id}}"><i class="icon-eye"></i></a></span>
                                <span><a href="#"><i class="icon-heart3"></i></a></span>
                                <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                            </p>
                        </div>



                    </div>
                </div>
            </div>
            @empty
                <div class="alert alert-info">No item available at this moment :(</div>
            @endforelse
        </div>
    </div>
</div>
