
@extends('layouts.app')
@section('content')
<h1><a href="/image-manager" class='back'> <img src="/image/arr_left.png" alt="" class='arr'> Go back</a></h1>
@component('btn_edit')
@endcomponent
@component('btn_del')
@endcomponent
<table >
    <tr >
        <td>ID</td>
        <td>{{ $img->id }}</td>
    </tr>
    <tr >
        <td>Filename</td>
        <td>{{ $img->filename }}</td>
    </tr>
    <tr>
        <td>Title</td>
        <td>{{ $img->title }}</td>
    </tr>
</table>
<img src="{{ $img->url }}" alt="" class='used-images' >
@endsection