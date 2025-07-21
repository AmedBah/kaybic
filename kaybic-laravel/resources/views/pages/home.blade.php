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

<!-- Africa Coverage Section -->
@include('pages.home.africa-coverage')

<!-- Partners Logos Section -->
@include('pages.home.partners-logos')

<!-- Testimonials Section -->
@include('pages.home.testimonials')

<!-- Parallax Section -->
@include('pages.home.parallax-section')

<!-- Free Quote Section -->
@include('pages.home.free-quote')
<!-- Explorer plus -->
				 
				<div class="bg-secondary--200 border-radius-2 p-relative overflow-hidden">
					<div class="container-fluid">
						<div class="row">
							<div class="col px-0 text-center text-color-light">
								<div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-lg-center">
									<div class="me-lg-4 flex-grow-1 flex-lg-grow-0">
										<span class="d-inline-block text-3 py-4 px-5 text-uppercase font-weight-medium">Aller plus loin :</span>
									</div>
									<div class="me-3 ps-3 p-relative bottom-1 pt-3 pt-lg-0">
										<a href="process-integration-support.html" class="btn btn-arrow-effect-1 bg-transparent text-light border-0 text-lg-3-5 py-2 py-lg-0">Découvrir notre processus d'intégration <i class="fas fa-arrow-right ms-2"></i></a>
									</div>
									<div class="py-3 py-lg-0 p-relative bottom-1 border-start border-color-light-rgba-20">
										<a href="contact.html" class="btn btn-arrow-effect-1 bg-transparent text-light border-0 text-lg-3-5 py-2 py-lg-0">Obtenir une démonstration gratuite <i class="fas fa-arrow-right ms-2"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>  
@endsection
