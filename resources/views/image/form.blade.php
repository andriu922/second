@extends('layouts.app') @section('content')
<form action="/image-manager" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="im_title">
        Title
    </label>
    <input type="text" name="im_title" id="im_title"><br>
    <label for="im_alt">
        Alt
    </label>
    <input type="text" name="im_alt" id="im_alt"><br>
    <label for="im_file">
       URL
   </label>
    <input type="file" name="im_file" id="im_file"><br>

    <input type="submit">
</form>

<form>
    @endsection