@extends('layouts.app')
@section('content')
<h1>
Hello world
</h1>
@foreach($imgs as $i)
<img src="{{ $i->url }}" alt="" class='used-images'>
@endforeach

@endsection