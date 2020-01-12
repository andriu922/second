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
<!-- <div class='tabloid'>
    <div class='inner-tabloid'>
    <span class="tabl edit">{{ $i->id }}<button class='manage-bt'>[[E]]</button> </span>
    <span class="tabl descript"><a href="/image-manager/{{ $i->id }}" class='img-mng'>{{ $i->filename }}</a></span>
    <span class="tabl del">
        <form action="/image-manager/{{ $i->id }}" method='POST'>
            @csrf
            @method('DELETE')
            <button class='manage-bt' type='submit'>[[X]]</button>
        </form>
    </span>
    </div>
    <div class="prew"><img src="{{ $i->url }}" alt="" class='used-images'></div>
</div> -->
@endforeach
</table>
@endsection


