<div class="shop-blog">
    <div class="container">
        <div class="row   d-felx justify-content-center align-items-center flex-column">
            <div class="col-md-8 col-md-offset-2 text-center shop-heading">
                <h2>Recent Blog</h2>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                    unorthographic life One day however a small line of blind text by the name</p>
            </div>
        </div>
        <div class="row">

            @foreach ($blogPosts as $item)
            <div class="col-md-4">
                <article class="article-entry">
                    <a href="blog.html" class="blog-img" style="background-image: url(images/{{ $item->thumbnail}});">
                        <p class="meta"><span class="day">{{ $item->created_at->format('d') }}
                            </span><span class="month">{{ $item->created_at->format('M') }}
                            </span></p>
                        <div class="mask d-flex justify-content-center align-items-center">
                            <button class='btn-blog'>Read</button>
                        </div>

                    </a>
                    <div class="desc">
                        <p class="admin"><span>Posted by:</span> <span>Noah Henderson</span></p>
                        <h2><a href="blog.html" class='text-capitalize'>{{$item->title}}</a></h2>
                        <p class='text-capitalize'>{{$item->body}}</p>
                    </div>
                </article>
            </div>
            @endforeach



        </div>
    </div>
</div>
