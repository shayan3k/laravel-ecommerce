@extends('layouts.app')


@section('content')

@if ($status == 'success')
<div class="container"><div class="alert alert-success">{{$msg}}</div></div>
@endif

@if ($status == 'error')
<div class="container"><div class="alert alert-danger">{{$msg}}</div></div>
@endif
@if ($status == 'warning')
<div class="container"><div class="alert alert-warning">{{$msg}}</div></div>
@endif


@endsection
