
@extends('layouts.app')
@section('content')
<h1><a href="/image-manager" class='back'> <img src="/image/arr_left.png" alt="" class='arr'> Go back</a></h1>
@component('btn_edit')
@endcomponent
@component('btn_del')
@endcomponent
<table class="tabloid table">
    <tr class="tabloid">
        <td class="tabloid">ID</td>
        <td class="tabloid">{{ $img->id }}</td>
    </tr>
    <tr class="tabloid">
        <td class="tabloid">Filename</td>
        <td class="tabloid">{{ $img->filename }}</td>
    </tr>
</table>
<img src="{{ $img->url }}" alt="" class='im_g' >
@endsection