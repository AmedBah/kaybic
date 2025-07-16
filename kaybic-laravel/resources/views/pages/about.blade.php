@extends('layouts.app')

@section('title', 'À propos - Kaybic')

@section('content')
    
    <div role="main" class="main px-3 px-lg-5">

				<div class="page-header py-0 bg-primary px-3 px-xl-0 border-radius-2 p-relative mb-5">
					<div class="overflow-hidden p-absolute top-0 left-0 bottom-0 h-100 w-100">
						<div class="custom-el-5 custom-pos-4">
							<img class="img-fluid opacity-2 opacity-hover-2" src="{{ asset('img/svg/waves.svg') }}" alt="">
						</div>
					</div>                    
					<div class="container p-relative z-index-1 py-2">
						<div class="row align-items-center py-4">
							<div class="col-8 col-md-7">
								<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
									<span class="badge bg-color-dark-rgba-10 text-light rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-3"><span class="d-inline-flex py-1 px-2">KAYBIC AFRICA</span></span>
								</div>							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<h1 class="text-light text-9 text-lg-12 font-weight-semibold line-height-1 mb-2">À propos de nous</h1>
							</div>
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<ul class="breadcrumb d-flex text-3-5 font-weight-semi-bold pb-2 mb-3">
									<li><a href="{{ route('home') }}" class="text-light text-decoration-none">Accueil</a></li>
									<li class="active text-light">À propos</li>
								</ul>
							</div>
							</div>
							<div class="col-4 col-md-5 p-relative">
								
								<div class="custom-mask-img custom-mask-img-4 custom-el-6">
									<img src="{{ asset('img/generic/generic-11.jpg') }}" loading="lazy" class="img-fluid" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Qui sommes-nous -->
				<div class="container pt-lg-5" id="intro">
					<div class="row align-items-center">
						<div class="col-lg-6 mb-5 mb-lg-0">
							<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
								<span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-4"><span class="d-inline-flex py-1 px-2">Qui sommes-nous</span></span>
							</div>
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4">Révolutionner les paiements mobiles en Afrique</h2>
							</div>
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
								<p class="pe-lg-5 mb-0">KAYBIC AFRICA est une entreprise innovante spécialisée dans les solutions de paiement mobile et l'agrégation Mobile Money en Afrique de l'Ouest. Nous facilitons l'accès aux services financiers numériques pour les entreprises de toutes tailles.<br><br>KayBic Africa SARL est une entreprise de services financiers spécialisée dans les solutions de paiement mobile et les solutions informatiques innovantes basées sur les technologies de rupture telles que l'intelligence artificielle et la blockchain.</p>
							</div>

						</div>
						<div class="col-lg-6 p-relative">
							<div class="accordion accordion-modern-status accordion-modern-status-arrow accordion-modern-status-arrow-dark mb-4 my-lg-4 pb-3 pb-lg-0" id="accordionWhoWeAre">
								<div class="card card-default box-shadow-8 border-radius-2 bg-light">
									<div class="card-header bg-transparent" id="collapseWhoWeAreHeadingOne">
										<h4 class="card-title m-0">
											<a class="accordion-toggle bg-transparent text-3-5 text-color-dark font-weight-semi-bold" data-bs-toggle="collapse" data-bs-target="#collapseWhoWeAreOne" aria-expanded="true" aria-controls="collapseWhoWeAreOne">
												Notre Entreprise
											</a>
										</h4>
									</div>
									<div id="collapseWhoWeAreOne" class="collapse show" aria-labelledby="collapseWhoWeAreHeadingOne" data-bs-parent="#accordionWhoWeAre">
										<div class="card-body pt-0">
											<p class="mb-0">Basée au Canada et récemment installée en Côte d'Ivoire, la société est enregistrée au RCCM de Grand-Bassam sous le numéro CI-GRDBSM-2021-B-5352 avec un capital d'un million de francs CFA et pour gérant M. N'DRI Martial. Le siège social est situé à Riviera Palmeraie, Cité du Bonheur.</p>
										</div>
									</div>
								</div>
								<div class="card card-default box-shadow-8 border-radius-2 bg-light">
									<div class="card-header bg-transparent" id="collapseWhoWeAreHeadingTwo">
										<h4 class="card-title m-0">
											<a class="accordion-toggle bg-transparent text-3-5 text-color-dark font-weight-semi-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapseWhoWeAreTwo" aria-expanded="false" aria-controls="collapseWhoWeAreTwo">
												Notre Plateforme
											</a>
										</h4>
									</div>
									<div id="collapseWhoWeAreTwo" class="collapse" aria-labelledby="collapseWhoWeAreHeadingTwo" data-bs-parent="#accordionWhoWeAre">
										<div class="card-body pt-0">
											<p class="mb-0">KAYBIC AFRICA a développé une plateforme d'agrégation Mobile Money qui permet aux entreprises d'accéder à tous les services de paiement mobile à travers une API unifiée. Cette approche simplifie considérablement l'intégration des paiements mobiles pour les entreprises de toutes tailles.</p>
										</div>
									</div>
								</div>
								<div class="card card-default box-shadow-8 border-radius-2 bg-light">
									<div class="card-header bg-transparent" id="collapseWhoWeAreHeadingThree">
										<h4 class="card-title m-0">
											<a class="accordion-toggle bg-transparent text-3-5 text-color-dark font-weight-semi-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapseWhoWeAreThree" aria-expanded="false" aria-controls="collapseWhoWeAreThree">
												Nos Partenariats
											</a>
										</h4>
									</div>
									<div id="collapseWhoWeAreThree" class="collapse" aria-labelledby="collapseWhoWeAreHeadingThree" data-bs-parent="#accordionWhoWeAre">
										<div class="card-body pt-0">
											<p class="mb-0">KAYBIC AFRICA a signé des partenariats avec quatre grands opérateurs ivoiriens (MTN, WAVE, ORANGE, TRESORMONEY, MOOV) qui offrent une nouvelle approche au paiement en ligne. Notre plateforme d'agrégation vous permet d'accéder à tous ces services via une seule API.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Nos Services -->
				<div class="container">
					<div class="row pt-3 pt-lg-5 pb-5">
						<div class="col-lg-4 mb-4 mb-sm-5 mb-lg-0">
							<div class="feature-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
								<div class="feature-box-icon bg-transparent w-auto h-auto p-0 top-0 align-items-start">
									
									<img src="{{ asset('img/icons/icon-2.svg') }}" width="55" height="55" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'p-relative top-10 svg-fill-color-secondary'}" />
								</div>
								<div class="feature-box-info w-100 ps-4 ms-1">
									<h4 class="mb-1">API d'Encaissement</h4>
									<p class="mb-0 pt-1 line-height-6">Solutions de paiement mobile sécurisées pour vos entreprises.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 mb-4 mb-sm-5 mb-lg-0">
							<div class="feature-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
								<div class="feature-box-icon bg-transparent w-auto h-auto p-0 top-0 align-items-start">
									
									<img src="{{ asset('img/icons/icon-2.svg') }}" width="55" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'p-relative top-10 svg-fill-color-secondary'}" />
								</div>
								<div class="feature-box-info w-100 ps-4 ms-1">
									<h4 class="mb-1">API de Décaissement</h4>
									<p class="mb-0 pt-1 line-height-6">Facilitez les transferts d'argent avec notre API unifiée.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="feature-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
								<div class="feature-box-icon bg-transparent w-auto h-auto p-0 top-0 align-items-start">
									
									<img src="{{ asset('img/icons/icon-1.svg') }}" width="55" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'p-relative top-10 svg-fill-color-secondary'}" />
								</div>
								<div class="feature-box-info w-100 ps-4 ms-1">
									<h4 class="mb-1">Transfert International</h4>
									<p class="mb-0 pt-1 line-height-6">Effectuez des transferts d'argent à l'étranger en toute simplicité.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="row py-3">
						<div class="col">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
								<div class="py-2 d-flex flex-column flex-md-row align-items-center justify-content-center text-4-5 n-ls-1 text-dark">
									<img src="{{ asset('img/icons/icon-4.svg') }}" width="28" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary me-md-2'}" /> <strong class="custom-font-secondary pe-2">Rejoignez-nous</strong><span class="d-none d-md-inline-block pe-2"> | </span>20+ entreprises connectées !
									<p class="ms-md-2 mb-0 text-3-5 p-relative bottom-2"><i class="fas fa-star custom-text-color-2 text-2"></i><i class="fas fa-star custom-text-color-2 text-2"></i><i class="fas fa-star custom-text-color-2 text-2"></i><i class="fas fa-star custom-text-color-2 text-2"></i><i class="fas fa-star custom-text-color-2 text-2"></i></p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container pt-5 pb-4">
					<div class="row text-center">
						<div class="col-6 col-md-3 mb-4">
							<div class="partner-logo">
								<img src="{{ asset('img/logos/MTN.jpeg') }}" class="img-fluid border-radius-2" alt="MTN" style="max-height: 80px;">
								<h6 class="mt-3">MTN</h6>
							</div>
						</div>
						<div class="col-6 col-md-2 mb-4">
							<div class="partner-logo">
								<img src="{{ asset('img/logos/wave.webp') }}" class="img-fluid border-radius-2" alt="WAVE" style="max-height: 80px;">
								<h6 class="mt-3">WAVE</h6>
							</div>
						</div>
						<div class="col-6 col-md-2 mb-4">
							<div class="partner-logo">
								<img src="{{ asset('img/logos/ORG.jpeg') }}" class="img-fluid border-radius-2" alt="ORANGE" style="max-height: 80px;">
								<h6 class="mt-3">ORANGE</h6>
							</div>
						</div>
						 <div class="col-6 col-md-2 mb-4">
							<div class="partner-logo">
								<img src="{{ asset('img/logos/tremo.JPG') }}" class="img-fluid border-radius-2" alt="TRESORMONEY" style="max-height: 80px;">
								<h6 class="mt-3">TRESORMONEY</h6>
							</div>
						</div>
						<div class="col-6 col-md-3 mb-4">
							<div class="partner-logo">
								<img src="{{ asset('img/logos/moov-africa.png') }}" class="img-fluid border-radius-2" alt="MOOV" style="max-height: 80px;">
								<h6 class="mt-3">MOOV</h6>
							</div>
						</div>
					</div>
				</div>

				<!-- Nos Valeurs -->
				<div class="border-top border-top-color-grey-100 mt-5">
					<div class="container pt-4">
						<div class="row py-5">
							
							<div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 p-relative">
								<div class="accordion accordion-modern-status accordion-modern-status-arrow accordion-modern-status-arrow-dark" id="accordionWhyChooseUs">
									<div class="card card-default box-shadow-8 border-radius-2 bg-light">
										<div class="card-header bg-transparent" id="collapseWhyChooseUsHeadingOne">
											<h4 class="card-title m-0">
												<a class="accordion-toggle bg-transparent text-3-5 text-color-dark font-weight-semi-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapseWhyChooseUsOne" aria-expanded="false" aria-controls="collapseWhyChooseUsOne">
													Innovation
												</a>
											</h4>
										</div>
										<div id="collapseWhyChooseUsOne" class="collapse" aria-labelledby="collapseWhyChooseUsHeadingOne" data-bs-parent="#accordionWhyChooseUs">
											<div class="card-body pt-0">
												<p class="mb-0">Notre équipe d'experts apporte des années d'expérience et une connaissance approfondie du secteur pour vous aider à naviguer dans un paysage financier complexe. Nous nous engageons à fournir des services personnalisés, fiables et axés sur les résultats, garantissant le succès de votre entreprise grâce à nos conseils financiers stratégiques.</p>
											</div>
										</div>
									</div>
									<div class="card card-default box-shadow-8 border-radius-2 bg-light">
										<div class="card-header bg-transparent" id="collapseWhyChooseUsHeadingTwo">
											<h4 class="card-title m-0">
												<a class="accordion-toggle bg-transparent text-3-5 text-color-dark font-weight-semi-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapseWhyChooseUsTwo" aria-expanded="false" aria-controls="collapseWhyChooseUsTwo">
													Sécurité
												</a>
											</h4>
										</div>
										<div id="collapseWhyChooseUsTwo" class="collapse" aria-labelledby="collapseWhyChooseUsHeadingTwo" data-bs-parent="#accordionWhyChooseUs">
											<div class="card-body pt-0">
												<p class="mb-0">La sécurité de nos systèmes et des données de nos clients est notre priorité absolue. Nous appliquons les standards de sécurité les plus élevés de l'industrie.</p>
											</div>
										</div>
									</div>
									<div class="card card-default box-shadow-8 border-radius-2 bg-light">
										<div class="card-header bg-transparent" id="collapseWhyChooseUsHeadingThree">
											<h4 class="card-title m-0">
												<a class="accordion-toggle bg-transparent text-3-5 text-color-dark font-weight-semi-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapseWhyChooseUsThree" aria-expanded="false" aria-controls="collapseWhyChooseUsThree">
													Fiabilité
												</a>
											</h4>
										</div>
										<div id="collapseWhyChooseUsThree" class="collapse" aria-labelledby="collapseWhyChooseUsHeadingThree" data-bs-parent="#accordionWhyChooseUs">
											<div class="card-body pt-0">
												<p class="mb-0">Nos services sont conçus pour être disponibles 24h/24 et 7j/7, garantissant une fiabilité maximale pour vos opérations financières.</p>
											</div>
										</div>
									</div>
									<div class="card card-default box-shadow-8 border-radius-2 bg-light">
										<div class="card-header bg-transparent" id="collapseWhyChooseUsHeadingFour">
											<h4 class="card-title m-0">
												<a class="accordion-toggle bg-transparent text-3-5 text-color-dark font-weight-semi-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapseWhyChooseUsFour" aria-expanded="false" aria-controls="collapseWhyChooseUsThree">
													Support Client
												</a>
											</h4>
										</div>
										<div id="collapseWhyChooseUsFour" class="collapse" aria-labelledby="collapseWhyChooseUsHeadingFour" data-bs-parent="#accordionWhyChooseUs">
											<div class="card-body pt-0">
												<p class="mb-0">Notre équipe de support technique est disponible pour vous accompagner dans vos intégrations et répondre à toutes vos questions rapidement.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
									<span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-4"><span class="d-inline-flex py-1 px-2">Travaillons Ensemble</span></span>
								</div>
								<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
									<h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4">Pourquoi KAYBIC AFRICA ?</h2>
								</div>
								<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
									<p>Que vous soyez une petite entreprise, une startup en croissance ou une grande organisation, KAYBIC AFRICA est là pour vous accompagner. Contactez-nous dès aujourd'hui pour découvrir comment nous pouvons transformer votre approche des paiements mobiles.</p>
								</div>
								<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
									<div class="d-flex pt-3 align-items-center">
										<a href="{{ route('contact') }}" class="btn btn-rounded font-weight-medium btn-swap-1" style="background-color: #d24a4a; color: white;" data-clone-element="1">
											<span>Contactez-nous <i class="fa-solid fa-arrow-right ms-2 p-relative left-10"></i></span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Notre Mission et Vision -->
				<div class="bg-quaternary border-radius-2 p-relative overflow-hidden mt-5">
					<div class="container p-relative z-index-1 py-4">
						<div class="row px-3 px-xl-0 align-items-center py-5">
							<div class="col">
								<div class="row justify-content-center">
									<div class="col-lg-10 text-center">									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
										<h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4"><span class="p-relative z-index-1">Notre</span> <mark class="text-light mark mark-color mark-color-primary mark-pos-2 mark-height-100 p-0 appear-animation" data-appear-animation data-appear-animation-delay="0">Mission</mark> et <mark class="text-light mark mark-color mark-color-primary mark-pos-2 mark-height-100 p-0 appear-animation" data-appear-animation data-appear-animation-delay="1500">Vision</mark></h2>
									</div>
									</div>
								</div>

								<div class="row pt-4 pb-2">
									<div class="col-lg-6 mb-4 mb-lg-0">
										<div class="text-center text-lg-start">
											<div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
												<h3 class="text-5 text-dark font-weight-bold mb-3">Notre Mission</h3>
												<p class="text-3-5 mb-4 text-black">
													Faciliter l'inclusion financière en Afrique en offrant des solutions de paiement mobile innovantes, sécurisées et accessibles à tous. Nous nous engageons à démocratiser l'accès aux services financiers numériques pour accélérer le développement économique du continent.
												</p>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="text-center text-lg-start">
											<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
												<h3 class="text-5 text-dark font-weight-bold mb-3">Notre Vision</h3>
												<p class="text-3-5 mb-4 text-black">
													Devenir le leader de l'agrégation de paiements mobiles en Afrique de l'Ouest, en créant un écosystème financier numérique où chaque entreprise, quelle que soit sa taille, peut prospérer grâce à des solutions technologiques de pointe.
												</p>
											</div>
										</div>
									</div>
								</div>

								<div class="row pt-4">
									<div class="col-12 text-center">
										<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
											<h3 class="text-5 text-dark font-weight-bold mb-3">Nos Objectifs</h3>
											<div class="row justify-content-center">
												<div class="col-lg-7">
													<ul class="list list-icons list-icons-style-2 list-icons-lg text-start">
														<li class="text-3-5 text-black mb-2"><i class="fas fa-check text-color-primary"></i> Simplifier l'intégration des solutions de paiement mobile pour toutes les entreprises</li>
														<li class="text-3-5 text-black mb-2"><i class="fas fa-check text-color-primary"></i> Garantir la sécurité et la fiabilité de toutes les transactions financières</li>
														<li class="text-3-5 text-black mb-2"><i class="fas fa-check text-color-primary"></i> Développer des partenariats stratégiques avec les principaux acteurs du secteur</li>
														<li class="text-3-5 text-black mb-2"><i class="fas fa-check text-color-primary"></i> Contribuer activement à la transformation numérique de l'Afrique</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Notre engagement envers vous -->
				<div class="container py-4">
					<div class="row align-items-center py-5 my-3">
						<div class="col">
							<div class="row justify-content-center">
								<div class="col-9 text-center">								<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
									<h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4">Notre engagement envers vous</h2>
									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
										<p>Nous sommes plus que vos fournisseurs de solutions de paiement ; nous sommes vos partenaires dans le succès numérique. Nous travaillons sans relâche pour fournir des solutions qui sont non seulement efficaces, mais aussi alignées sur vos objectifs à long terme.</p>
									</div>
								</div>
								</div>
							</div>
							<div class="row text-center justify-content-center pt-4">
								<div class="col-lg-3 col-sm-6 mb-4">
									<div class="appear-animation px-lg-4" data-appear-animation="blurIn" data-appear-animation-delay="300">
										<div class="d-flex justify-content-center align-items-center pt-4">
											<strong class="d-inline-flex text-15 text-dark n-ls-5">98.9%</strong>
											<div class="p-2 ps-3">
												<img src="{{ asset('img/icons/icon-6.svg') }}" width="48" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
											</div>
										</div>
										<span class="custom-font-tertiary text-7 text-dark n-ls-1 fst-italic">Taux de disponibilité</span>
										<p class="mb-0 pt-2 text-3-5 line-height-7">Grâce à notre infrastructure robuste et fiable.</p>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6 mb-4">
									<div class="appear-animation px-lg-4" data-appear-animation="blurIn" data-appear-animation-delay="600">
										<div class="d-flex justify-content-center align-items-center pt-4">
											<strong class="d-inline-flex text-15 text-dark n-ls-5">20+</strong>
											<div class="p-2 ps-3">
												<img src="{{ asset('img/icons/icon-6.svg') }}" width="48" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
											</div>
										</div>
										<span class="custom-font-tertiary text-7 text-dark n-ls-1 fst-italic">Entreprises connectées</span>
										<p class="mb-0 pt-2 text-3-5 line-height-7">Faisant confiance à notre plateforme.</p>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6 mb-4">
									<div class="appear-animation px-lg-4" data-appear-animation="blurIn" data-appear-animation-delay="900">
										<div class="d-flex justify-content-center align-items-center pt-4">
											<strong class="d-inline-flex text-15 text-dark n-ls-5">5+</strong>
											<div class="p-2 ps-3">
												<img src="{{ asset('img/icons/icon-6.svg') }}" width="48" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
											</div>
										</div>
										<span class="custom-font-tertiary text-7 text-dark n-ls-1 fst-italic">Opérateurs partenaires</span>
										<p class="mb-0 pt-2 text-3-5 line-height-7">MTN, WAVE, ORANGE, MOOV, TRESORMONEY.</p>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6 mb-4">
									<div class="appear-animation px-lg-4" data-appear-animation="blurIn" data-appear-animation-delay="1200">
										<div class="d-flex justify-content-center align-items-center pt-4">
											<strong class="d-inline-flex text-15 text-dark n-ls-5">24/7</strong>
											<div class="p-2 ps-3">
												<img src="{{ asset('img/icons/icon-6.svg') }}" width="48" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
											</div>
										</div>
										<span class="custom-font-tertiary text-7 text-dark n-ls-1 fst-italic">Support technique</span>
										<p class="mb-0 pt-2 text-3-5 line-height-7">Assistance continue pour vos besoins.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Découvrez plus -->
				<div class="bg-secondary border-radius-2 p-relative overflow-hidden">
					<div class="container-fluid">
						<div class="row">
							<div class="col px-0 text-center text-color-light">
								<div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-lg-center">
									<div class="me-lg-4 flex-grow-1 flex-lg-grow-0">
										<span class="d-inline-block text-3 py-4 px-5 text-uppercase font-weight-medium">Découvrez plus :</span>
									</div>
									<div class="me-3 ps-3 p-relative bottom-1 pt-3 pt-lg-0">
										<a href="{{ route('services') }}" class="btn btn-arrow-effect-1 bg-transparent text-light border-0 text-lg-3-5 py-2 py-lg-0">Nos Services <i class="fas fa-arrow-right ms-2"></i></a>
									</div>
									<div class="py-3 py-lg-0 p-relative bottom-1 border-start border-color-light-rgba-20">
										<a href="{{ route('contact') }}" class="btn btn-arrow-effect-1 bg-transparent text-light border-0 text-lg-3-5 py-2 py-lg-0">Contactez-nous <i class="fas fa-arrow-right ms-2"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>                

			</div>

@endsection
