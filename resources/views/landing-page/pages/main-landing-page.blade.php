@extends('landing-page.layouts.default')
@section('content')

@include('landing-page.includes.landing-navbar')
@include('landing-page.includes.landing-header')
@include('landing-page.includes.landing-content')
@include('landing-page.includes.landing-content_project')
{{-- @include('landing-page.includes.landing-map') --}}
@include('landing-page.includes.landing-footer')

@stop