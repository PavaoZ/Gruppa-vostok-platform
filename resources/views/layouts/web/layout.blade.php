@extends('app')

@section('layout')
    @include('layouts.web.content.header')

    @yield('content')

    @include('layouts.web.content.footer')
@endsection
