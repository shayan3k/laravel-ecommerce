<div id="shop-testimony" class="shop-light-grey py-3">
    <div class="container">
        <div class="row  d-felx justify-content-center align-items-center flex-column">
            <div class="col-md-6 col-md-offset-3 text-center shop-heading">
                <h2><span>We are proud of our customers</span></h2>
            </div>
        </div>
        <div class="row  d-felx justify-content-center align-items-center flex-column">
            <div class="col-md-8 col-md-offset-2">
                <div class="owl-carousel2">


                    @foreach ($testimony as $item)
                    
                    <div class="item">
                        <div class="testimony text-center">
                            <span class="img-user" style="background-image: url(images/{{$item->thumbnail}});"></span>
                            <span class="user">{{$item->name}}</span>
                            <small>{{$item->location}}</small>
                            <blockquote>
                                <p>{{$item->body}}</p>
                            </blockquote>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
