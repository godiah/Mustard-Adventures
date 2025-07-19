@extends('layouts.landing')

@section('content')
    <!-- Navigation -->
    @include('components.navbar')

    <!-- Home Section -->
    <section id="home">
        @include('components.hero-section')
    </section>

    <!-- Adventure Categories Section -->
    <section id="adventures">
        <x-adventure-categories />
        <x-upcoming-adventures />
    </section>

    <!-- Why Choose Us Section -->
    @include('components.why-choose-us')

    <!-- Gallery Section -->
    <section id="gallery">
        @include('components.past-adventures-gallery')
        <x-reviews-testimonials />
    </section>

    <!-- About Section -->
    <section id="about">
        @include('components.about-mustard-adventures')
    </section>

    <!-- Contact Section -->
    <section id="contact">
        @include('components.contact-booking')
    </section>

    <!-- Footer -->
    @include('components.footer')
@endsection
