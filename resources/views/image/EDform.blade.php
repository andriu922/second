@extends('layouts.app')
@section('content')
<form action="/image-manager/{{ $img->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT') 
    <label for="im_title">
        Title
    </label>
    <input type="text" name="im_title" id="im_title" value="{{ $img->title }}"><br>
    <label for="im_alt">
        Alt
    </label>
    <input type="text" name="im_alt" id="im_alt" value="{{ $img->alt }}"><br>
    <label for="im_file">
       URL
   </label>
    <input type="file" name="im_file" id="im_file" value=""><br>

    <input type="submit">
</form>
<img src="{{ $img->url }}" alt="">

@endsection