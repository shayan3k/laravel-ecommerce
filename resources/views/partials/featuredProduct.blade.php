<div id="shop-featured-product">
    <div class="container">
        <div class="row  d-felx justify-content-center align-items-center">
            <div class="col-md-6 col-md-offset-3 text-center shop-heading">
                <h2><span>Featured Products</span></h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem assumenda neque harum dignissimos
                    beatae consequatur quaerat aliquam totam mollitia ullam.</p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <a href="" class="f-product-2"
                            style="background-image: url(images/{{$featuredProducts[0]->thumbnail}});">
                            <div class="desc">
                                <h2>
                                    {!! str_replace(' ', '<br>', $featuredProducts[0]->title) !!}
                                </h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="" class="f-product-2"
                            style="background-image: url(images/{{$featuredProducts[1]->thumbnail}});">
                            <div class="desc">
                                <h2>
                                    {!! str_replace(' ', '<br>', $featuredProducts[1]->title) !!}
                                </h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <a href="" class="f-product-2"
                            style="background-image: url(images/{{$featuredProducts[2]->thumbnail}});">
                            <div class="desc">
                                <h2>
                                    {!! str_replace(' ', '<br>', $featuredProducts[2]->title) !!}
                                </h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <a href="shop.html" class="f-product-1"
                    style="background-image: url(images/{{$featuredProducts[3]->thumbnail}});">
                    <div class="desc">
                        <h2>
                            {!! str_replace(' ', '<br>', $featuredProducts[3]->title) !!}
                        </h2>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
