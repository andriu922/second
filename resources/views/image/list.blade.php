@extends('layouts.app')
@section('content')
<button><a href="/image-manager/create">[[CREATE]]</a></button>


@foreach($imgs as $i)

<div class='tabloid'>
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
</div>
@endforeach

@endsection


