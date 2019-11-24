@extends('layouts.app')
@section('content')
@foreach($imgs as $i)
<div class='tabloid'>
    <div class='inner-tabloid'>
    <span class="tabl edit">{{ $i->id }}<button>  [[E]]</button> </span>
    <span class="tabl descript"><a href="/image-manager/{{ $i->id }}">{{ $i->filename }}</a></span>
    <span class="tabl del"><button>[[X]]</button></span>
    </div>
    <div class="prew"><img src="{{ $i->url }}" alt="" class='used-images'></div>
</div>
@endforeach

@endsection


