@extends('backendtemplate')
@section('title', 'Dashboard')
@section('username')
    <span>{{$username}}</span>
@endsection
@section('content')
<img <img id="logo" src="{{ URL::asset('img/admin.jpg')}}" style="max-width: 1534px">
@endsection