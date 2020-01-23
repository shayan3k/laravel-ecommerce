<div id="shop-intro" class="shop-intro" style="background-image: url(images/cover-img-1.jpg);"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-12">
                        <div class="sale-box">
                            <div class="sale-box-top">
                                <h2 class="display-3 text-capitalize intro-title">{{$intro->title}}</h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="text-rights">
                            <h3 class="title">{{$intro->subtitle}}</h3>
                            <p>{{$intro->body}}</p>
                            <div><a href="{{$intro->btn1_link }}" class="btn-intro">{{$intro->btn1_text}}</a></div>
                            <div> <a href="{{$intro->btn2_link }}" class="btn-intro">{{$intro->btn2_text }}</a></div>
                        </div>
                    </div>


                </div>




            </div>
        </div>
    </div>
</div>
