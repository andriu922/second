@extends('layouts.app')

@section('title','1st')


@section('content')
<div class="col-6">
    <h3>Company Name --- {{$name}} </h3>
    <h3> Our Number --- {{$num}}</h3>
    <h3> Our Mail --- {{$mail}}</h3> 
</div>
<div class="col-6">
    <a href="/git"><img src="/image/logo.png" alt="" class ='logo_git'></a>
</div>
@endsection

