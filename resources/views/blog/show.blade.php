@extends('layouts.app')
@section('content')
<h1>Title: {{$bl->name}} </h1>

<div class='blog-div'> {{ $bl->poem }} </div>

@endsection