@extends('front.master')

@section('title','Service')

@section('service-active','active')

@section('hero')
    <x-hero-section title="Service" subtitle="Service"></x-hero-section>
@endsection

@section('content')


        <!-- Service Start -->
        <x-front-services-component></x-front-services-component>
        <!-- Service End -->

        <!-- Testimonial Start -->
        <x-front-testmonials-component></x-front-testmonials-component>
        <!-- Testimonial End -->


@endsection