@extends('layouts.app')


@section('content')

@include('partials.hero')
@include('partials.featuredProduct')
@include('partials.newArrival', ['newArrival' => $newArrival])
@include('partials.intro')
@include('partials.popularProducts', ['latestProducts' => $latestProducts])
@include('partials.testimony')
@include('partials.blog', ['latestPosts' => $latestPosts])

@endsection


@section('contents')

@include('partials.goToTop')

@endsection
