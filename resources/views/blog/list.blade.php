@extends('layouts.app')

@section('title', 'blog')

@section('content')
    @foreach ($poem_name as $i)
        <div class='blog-div'><span class='poem-name'>{{ $i->name }}</span><br><span class='vlasne-poem'>{{ $i->poem }}</span></div>
    @endforeach
@endsection