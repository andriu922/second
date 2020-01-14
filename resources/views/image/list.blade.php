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
<<<<<<< HEAD

<div class="imCard card bg-secondary" style="width: 18rem;">
    <img src="{{ $i->url }}" alt="" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title text-center">ID: {{ $i->id }}</h5>
        <p class="card-text text-center">
            A way to image:  <br>
            {{ $i->filename }}
        </p>
        <div class="ctrl-area">    
            <form action="/image-manager/{{ $i->id }}" method="POST" class="ctrl-btn">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-danger ">[[X]]</button>
            </form><br>
            <form action="" class="ctrl-btn">
                <button class="bg-success ">[[E]]</button>
            </form>
        </div>
    </div>
</div>
=======
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
>>>>>>> c8a8d515079d8f8af0d668d72cc80777489d78d5

@endforeach
</table>
@endsection