@extends('layouts.app')
@section('content')


@foreach($imgs as $i)
<!-- <table >
    <tr>
        <td>ID : {{ $i->id }}</td>
        <td>[[E]]</td>
    </tr>
    <tr>
        <td>Filename : {{ $i->filename }}</td>
        <td>@component('btn_del')@endcomponent</td>
    </tr>
    <tr>
        <td><img src="{{ $i->url }}" alt="" class="used-images"></td>
    </tr>

</table> -->

<div class='tabloid'>
    <div class='inner-tabloid'>
    <span class="tabl edit">{{ $i->id }}<button class='manage-bt'>  [[E]]</button> </span>
    <span class="tabl descript"><a href="/image-manager/{{ $i->id }}" class='img-mng'>{{ $i->filename }}</a></span>
    <span class="tabl del"><button class='manage-bt'>[[X]]</button></span>
    </div>
    <div class="prew"><img src="{{ $i->url }}" alt="" class='used-images'></div>
</div>
@endforeach

@endsection


