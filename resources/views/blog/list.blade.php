@extends('layouts.app')

@section('title', 'blog')

@section('content')
    @foreach ($poem_name as $i)
        <div class='blog-div'><span class='poem-name'><a href="/blog/{{ $i->id }}" class='img-mng'>{{ $i->name }}</a></span>
        <form action="/blog/{{ $i->id }}" method='POST'>
            @csrf
            @method('DELETE')
            <button class='manage-bt' type='submit'>[[X]]</button>
        </form>
        <br>
        <span class='vlasne-poem'>{{ $i->poem }}</span></div>
        <hr>
    @endforeach
@endsection