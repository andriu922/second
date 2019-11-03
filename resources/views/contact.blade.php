@extends('layouts.app')

@section('title','1st')


@section('content')
    <h3>Company Name --- {{$name}} </h3>
    <h3> Our Number --- {{$num}}</h3>
    <h3> Our Mail --- {{$mail}}</h3> 
    <a href="/git"><img src="/image/logo.png" alt="" class = 'logo_git'></a>
@endsection

