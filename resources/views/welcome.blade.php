@extends('layouts.landing')

@section('content')
    @include('components.hero-section')

    @include('components.adventure-categories')

    @include('components.upcoming-adventures')

    @include('components.why-choose-us')

    @include('components.past-adventures-gallery')

    @include('components.reviews-testimonials')

    @include('components.about-mustard-adventures')

    @include('components.contact-booking')

    <!-- Footer -->
    @include('components.footer')
@endsection
