@extends('layouts.app')

@section('content')
<img src="image/user-blank.jpg" alt="" class='acc_logo'>
<div class='acc_name'>
@foreach($acc_name as $i)  
{{ $i->name }}
@endforeach
</div>
@endsection