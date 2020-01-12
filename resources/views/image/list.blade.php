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

<div class="card bg-secondary" style="width: 18rem;">
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

@endforeach
</table>
@endsection


