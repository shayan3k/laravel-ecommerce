<footer id="shop-footer" role="contentinfo">
    <div class="container">
        <div class="row row-pb-md d-felx justify-content-center align-items-center">
            <div class="col-md-3 shop-widget text-center">
                <h4>About Store</h4>
                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta
                    adipisci architecto culpa amet.</p>
                <p>
                    <ul class="shop-social-icons">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    </ul>
                </p>


            </div>
            <div class="col-md-5 text-center">

                <div class="col-12 d-flex flex-column justify-content-center align-items-center padding-0">

                    <h2 class='text-center subscribe-text'><i class="icon-paperplane"></i>Get The News First</h2>

                    <form class="col-12 col form-inline qbstp-header-subscribe py-4 md-0" method='post'
                        action='/subscription'>
                        @csrf
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-3 text-center">
                <h4>Contact Information</h4>
                <ul class="shop-footer-links">
                    <li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
                    <li><a href="tel://1234567920">+ 1235 2355 98</a></li>
                    <li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                    <li><a href="#">yoursite.com</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copy">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    <span class="block">
                        Copyright &copy2019, Shaya<span>NNN<span /></span>
                </p>
            </div>
        </div>
    </div>
</footer>
