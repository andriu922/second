@extends('layouts.app')
@section('content')
    <h1>
        hello world
        @foreach($names as $i)
            {{$i->name}}
        @endforeach
    </h1>
@endsection