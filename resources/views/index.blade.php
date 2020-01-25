@extends('layouts.app')


@section('content')
@include('partials.message', ['errors' => $errors])
@include('partials.hero')
@include('partials.featuredProduct', ['featuredProducts' => $featuredProducts])
@include('partials.products', ['products' => $newArrival])
@include('partials.intro', ['intro' => $intro])
@include('partials.products', ['products' => $latestProducts])
@include('partials.testimony', ['testimony' => $testimony])
@include('partials.blog', ['blogPosts' => $latestPosts])

@endsection


@section('goToTop')
@include('partials.goToTop')
@endsection
