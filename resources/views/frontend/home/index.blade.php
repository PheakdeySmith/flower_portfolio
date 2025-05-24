@extends('frontend.layouts.app')
@section('content')
    @include('frontend.partials.sections.header')
    @include('frontend.partials.sections.detail')
    @include('frontend.partials.sections.about')
    @include('frontend.partials.sections.vision')
    @include('frontend.partials.sections.service')
    {{-- @include('frontend.partials.sections.portfolio') --}}
@endsection
