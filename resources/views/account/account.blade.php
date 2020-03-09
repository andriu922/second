@extends('layouts.app')

@section('content')
    First name : {{$acc->FirstName}}
    Last name : {{$acc->LastName}}
    Nickname : {{$acc->Nickname}}
    Age : {{$acc->Age}}
@endsection