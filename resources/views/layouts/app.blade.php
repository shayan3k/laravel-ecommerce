@include('partials.header')

<body>
    <div class="shop-loader"></div>

    <div id="page">
        @include('partials.navbar');
        @section('content')
        @show
        @include('partials.footer')
    </div>

    @section('goToTop')
    @show
    @include('partials.scripts')
    @section('custom-scripts')
    @show

</body>

</html>
