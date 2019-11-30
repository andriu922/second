@extends('layouts.app')

@section('title', 'blog')

@section('content')
    @foreach ($poem_name as $i)
        <div class='blog-div'><span class='poem-name'><a href="/blog/{{ $i->id }}" class='img-mng'>{{ $i->name }}</a></span>
        <br>
        <span class='vlasne-poem'>{{ $i->poem }}</span></div>
        <hr>
    @endforeach
@endsection