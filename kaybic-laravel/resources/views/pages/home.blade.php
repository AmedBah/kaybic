@extends('layouts.app')

@section('title', 'Accueil - KAYBIC AFRICA | Agrégateur de paiement mobile pour l\'Afrique de l\'Ouest')
@section('description', 'Plateforme d\'agrégation Mobile Money leader en Afrique de l\'Ouest. Une API unifiée pour tous les opérateurs Mobile Money.')
@section('keywords', 'Mobile Money, API paiement, Orange Money, MTN Mobile Money, Moov Money, Wave, CEDEAO')

@section(section: 'content')

<!-- Hero Carousel Section -->
@include('pages.home.hero-carousel')

<!-- Icons Section -->
@include('pages.home.icons-section')

<!-- Who We Are Section -->
@include('pages.home.who-we-are')

<!-- Our Services Section -->
@include('pages.home.our-services')

<!-- Why Choose Us Section -->
@include('pages.home.why-choose-us')

<!-- Delivering Excellence Section -->
@include('pages.home.delivering-excellence')

<!-- Partners Logos Section -->
@include('pages.home.partners-logos')

<!-- Testimonials Section -->
@include('pages.home.testimonials')

<!-- Parallax Section -->
@include('pages.home.parallax-section')

<!-- Free Quote Section -->
@include('pages.home.free-quote')

@endsection
