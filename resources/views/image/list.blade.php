@extends('layouts.app')
@section('content')
<button><a href="/image-manager/create">[[CREATE]]</a></button>

<!-- create table -->
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>File name</th>
        <th>DEL</th>
        <th>ED</th>
        <th>Preview</th>
    </tr>
@foreach($imgs as $i)
<tr>
    <th>{{ $i->id }}</th>
    <th>{{ $i->title }}</th>
    <th><a href="/image-manager/{{ $i->id }}" class='img-mng'>{{ $i->filename }}</a></th>
    <th>        <form action="/image-manager/{{ $i->id }}" method='POST'>
            @csrf
            @method('DELETE')
            <button class='manage-bt' type='submit'>[[X]]</button>
        </form></th>
    <th> <button><a href="/image-manager/{{ $i->id }}/edit">[[E]]</a></button></th>
    <th><img src="{{ $i->url }}" alt="" class='used-images'></th>
</tr>

@endforeach
</table>
@endsection