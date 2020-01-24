@extends('layouts.app')


@section('content')

@include('partials.hero')
@include('partials.featuredProduct', ['featuredProducts' => $featuredProducts])
@include('partials.newArrival', ['newArrival' => $newArrival])
@include('partials.intro', ['intro' => $intro])
@include('partials.popularProducts', ['latestProducts' => $latestProducts])
@include('partials.testimony', ['testimony' => $testimony])
@include('partials.blog', ['blogPosts' => $latestPosts])

@endsection


@section('goToTop')
@include('partials.goToTop')
@endsection
