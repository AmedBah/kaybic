@extends('layouts.app')

@section('title', 'API PayOUT - Décaissement Mobile Money | KAYBIC AFRICA')

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
									<span class="badge bg-color-dark-rgba-10 text-light rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-3">
										<span class="d-inline-flex py-1 px-2">
											API PayOUT
										</span>
									</span>
								</div>							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<h1 class="text-light text-9 text-lg-12 font-weight-semibold line-height-1 mb-2">API de Décaissement Multi-Opérateurs</h1>
							</div>
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<ul class="breadcrumb d-flex text-3-5 font-weight-semi-bold pb-2 mb-3">
									<li><a href="{{ route('home') }}" class="text-light text-decoration-none">Accueil</a></li>
									<li><a href="{{ route('services') }}" class="text-light text-decoration-none">Produits</a></li>
								   <li class="active text-light">API PayOUT</li>
								</ul>
							</div>
							</div>
							<div class="col-4 col-md-5 p-relative">
								
								<div class="custom-mask-img custom-mask-img-4 custom-el-6">
									<img src="{{ asset('img/generic/generic-15.jpg') }}" loading="lazy" class="img-fluid" alt="" />
								</div>
							</div>
						</div>
					</div>				
				</div>

				<div class="container pb-5 pt-lg-5 mt-5">
					<div class="row">
						<div class="col-lg-4 order-1 order-lg-0 pe-lg-5 mt-4 mt-lg-0">
							<div class="bg-grey-100 p-4 border-radius-2 mb-4">
								<div class="m-3">
									<h4 class="text-5 font-weight-semibold line-height-1 mb-4">Nos Services</h4>									<ul class="nav nav-list nav-list-arrows flex-column mb-0">
										<li class="nav-item"><a href="service-api-payin.html" class="nav-link text-dark">API PayIN</a></li>
										<li class="nav-item"><a href="service-api-payout.html" class="nav-link active text-dark">API PayOUT</a></li>
										<li class="nav-item"><a href="service-transfert-international.html" class="nav-link text-dark">Transfert International</a></li>
										<li class="nav-item"><a href="service-qr-pay.html" class="nav-link text-dark">QR PAY</a></li>
										<li class="nav-item"><a href="{{ route('solutions') }}" class="nav-link text-dark">Solutions Entreprises</a></li>
										<li class="nav-item"><a href="process-integration-support.html" class="nav-link text-dark">Intégration & Support</a></li>
									</ul>

								</div>
							</div>

							<div class="bg-tertiary text-light p-4 border-radius-2 mb-4">
								<div class="m-3">
									<h4 class="text-5 font-weight-semibold line-height-1 mb-4 text-light">Performance</h4>

									<div class="d-flex flex-column pt-4">
										<div class="pe-4">
											<div class="feature-box feature-box-secondary align-items-center">
												<div class="feature-box-icon">
													<i class="fas fa-clock text-light"></i>
												</div>
												<div class="feature-box-info ps-3">
													<span class="text-light font-weight-semibold">Temps de traitement</span>
													<p class="text-light text-2 mb-0 opacity-7">Moins de 30 secondes</p>
												</div>
											</div>
										</div>
										<div class="pe-4 pt-4">
											<div class="feature-box feature-box-secondary align-items-center">
												<div class="feature-box-icon">
													<i class="fas fa-percentage text-light"></i>
												</div>
												<div class="feature-box-info ps-3">
													<span class="text-light font-weight-semibold">Taux de succès</span>
													<p class="text-light text-2 mb-0 opacity-7">98.5% de réussite</p>
												</div>
											</div>
										</div>
									</div>

									<div class="d-flex flex-column pt-4">
										<div class="pe-4">
											<div class="feature-box feature-box-secondary align-items-center">
												<div class="feature-box-icon feature-box-icon-lg p-static box-shadow-7">
													<img src="{{ asset('img/icons/phone-2.svg') }}" width="30" height="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary'}" />
												</div>
												<div class="feature-box-info ps-2">
													<strong class="d-block text-uppercase text-color-secondary p-relative top-2">Appelez-nous</strong>
													<a href="tel:+2252530000869" class="text-decoration-none font-secondary text-3 font-weight-semibold text-color-light text-color-hover-primary transition-2ms negative-ls-05 ws-nowrap p-relative bottom-2">+225 25 30 00 08 69</a>
												</div>
											</div>
										</div>
										<div class="pe-4 pt-4">
											<div class="feature-box feature-box-secondary align-items-center">
												<div class="feature-box-icon feature-box-icon-lg p-static box-shadow-7">
													<img src="{{ asset('img/icons/email.svg') }}" width="30" height="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary'}" />
												</div>
												<div class="feature-box-info ps-1">
													<strong class="d-block text-uppercase text-color-secondary p-relative top-2">Email</strong>
													<a href="mailto:Christmerari@easytransfert.ci" class="text-decoration-none font-secondary text-3 font-weight-semibold text-color-light text-color-hover-primary transition-2ms negative-ls-05 ws-nowrap p-relative bottom-2">Christmerari@easytransfert.ci</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-8">
							<p>Automatisez vos paiements vers tous les portefeuilles Mobile Money avec une seule API. Notre solution PayOUT permet d'envoyer de l'argent instantanément vers Orange Money, MTN, Moov Money et Wave pour simplifier vos décaissements.</p>

							<div class="row mt-5">
								<div class="col-lg-6 mb-4 mb-lg-0 pe-lg-5">
									<h2 class="text-7 font-weight-semibold line-height-1 mb-4">Fonctionnalités clés</h2>
									<p>Notre API PayOUT vous permet d'envoyer des paiements à vos bénéficiaires avec une intégration technique unique pour tous les opérateurs.</p>
									<ul class="list list-icons list-icons-lg list-icons-style-3 text-3-5">
										<li><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i> Versements automatisés</li>
										<li><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i> Webhook temps réel</li>
										<li><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i> Multi-opérateurs</li>
										<li><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i> Sécurité renforcée</li>
										<li><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i> Gestion des retentatives</li>
										<li><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i> Rapports détaillés</li>
									</ul>
								</div>
								<div class="col-lg-6 mb-4 mb-lg-0">
									<img class="img-fluid border-radius-2 mb-2" src="{{ asset('img/services/service-1.jpg') }}" alt="">

									<div class="appear-animation mt-2 animated blurIn appear-animation-visible" data-appear-animation="blurIn" data-appear-animation-delay="300" style="animation-delay: 300ms;">
										<div class="d-flex align-items-center pt-4">
											<strong class="d-inline-flex text-12 text-dark n-ls-5">98.5%</strong>
											<div class="p-2 ps-3">
												<i class="fas fa-credit-card text-color-primary text-4"></i>
											</div>
										</div>
										<span class="custom-font-tertiary text-7 text-dark n-ls-1 fst-italic">Taux de Succès</span>
										<p class="mb-0 pt-2 text-3-5 line-height-7">Sur toutes nos transactions PayOUT.</p>
									</div>
								</div>
							</div>

							<div class="row p-2">
									<div class="col-md-6 mb-4">
										<div class="feature-box feature-box-primary">
											<div class="feature-box-icon">
												<i class="fas fa-money-bill-transfer"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="font-weight-bold text-4 mb-2">Transferts Instantanés</h4>
												<p class="text-3">Envoyez de l'argent en temps réel vers tous les opérateurs Mobile Money</p>
											</div>
										</div>
									</div>
									<div class="col-md-6 mb-4">
										<div class="feature-box feature-box-primary">
											<div class="feature-box-icon">
												<i class="fas fa-shield-alt"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="font-weight-bold text-4 mb-2">Sécurité Renforcée</h4>
												<p class="text-3">Chiffrement SSL, conformité BCEAO et monitoring 24/7</p>
											</div>
										</div>
									</div>
									<div class="col-md-6 mb-4">
										<div class="feature-box feature-box-primary">
											<div class="feature-box-icon">
												<i class="fas fa-bolt"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="font-weight-bold text-4 mb-2">Traitement Ultra-Rapide</h4>
												<p class="text-3">Décaissements en moins de 30 secondes avec confirmation instantanée</p>
											</div>
										</div>
									</div>
									<div class="col-md-6 mb-4">
										<div class="feature-box feature-box-primary">
											<div class="feature-box-icon">
												<i class="fas fa-chart-line"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="font-weight-bold text-4 mb-2">Taux de Succès Élevé</h4>
												<p class="text-3">98.5% de taux de succès grâce à notre infrastructure robuste</p>
											</div>
										</div>
									</div>
							</div>

							
						</div>

						<!-- Delivering Excellence -->
							<div class="bg-quaternary border-radius-2 mt-4 mt-lg-5 p-relative overflow-hidden">
								<div class="container p-relative z-index-1">
									<div class="row px-3 px-lg-5 py-5 py-lg-0 align-items-center">
										<div class="col-lg-7">									<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
										<h2 class="text-9 font-weight-semibold line-height-1 mb-4"><span class="p-relative z-index-1">Automatisez vos Versements avec</span> <mark class="text-light mark mark-color mark-color-primary mark-pos-2 mark-height-100 p-0 appear-animation" data-appear-animation data-appear-animation-delay="0">Rapidité</mark> et <mark class="text-light mark mark-color mark-color-primary mark-pos-2 mark-height-100 p-0 appear-animation" data-appear-animation data-appear-animation-delay="1500">Sécurité</mark></h2>
									</div>
											<div class="row">
												<div class="col">
													<div class="appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="600">
														<div class="d-flex align-items-center pt-4">
															<strong class="d-inline-flex text-15 text-dark n-ls-5">30s</strong>
															<div class="p-2 ps-3">
																<i class="fas fa-clock text-color-primary text-6"></i>
															</div>
														</div>
														<span class="custom-font-tertiary text-7 text-dark n-ls-1 fst-italic">Délai Moyen</span>
														<div class="pe-lg-5">
															<p class="mb-0 pt-2 text-3-5 line-height-7 pe-lg-5">Pour tous vos versements Mobile Money automatisés.</p>
														</div>
													</div>
												</div>
											</div>
										</div>									<div class="col-lg-5 p-5">
										<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
											<img src="{{ asset('img/generic/generic-16.jpg') }}" alt="" class="w-100 border-radius-2" />
										</div>
									</div>
									</div>
								</div>
							</div>

							<!-- Why Choose Us -->
							<div class="row align-items-center mt-3 py-5">
								<div class="col">
									<h2 class="text-7 font-weight-semibold line-height-1 mb-4">Pourquoi Choisir Notre API PayOUT ?</h2>

									<div class="accordion accordion-modern-status accordion-modern-status-arrow accordion-modern-status-arrow-dark" id="accordionWhyChooseUs">
										<div class="card card-default box-shadow-8 border-radius-2 bg-light">
											<div class="card-header bg-transparent" id="collapseWhyChooseUsHeadingOne">
												<h4 class="card-title m-0">                                                    <a class="accordion-toggle bg-transparent text-3-5 text-color-dark font-weight-semi-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapseWhyChooseUsOne" aria-expanded="false" aria-controls="collapseWhyChooseUsOne">
														Versements Instantanés
													</a>
												</h4>
											</div>
											<div id="collapseWhyChooseUsOne" class="collapse" aria-labelledby="collapseWhyChooseUsHeadingOne" data-bs-parent="#accordionWhyChooseUs">
												<div class="card-body pt-0">
													<p class="mb-0">Notre technologie de pointe permet d'effectuer des paiements en temps réel vers n'importe quel compte Mobile Money. Vos bénéficiaires reçoivent les fonds en moins de 30 secondes, garantissant une expérience utilisateur exceptionnelle.</p>
												</div>
											</div>
										</div>
										<div class="card card-default box-shadow-8 border-radius-2 bg-light">
											<div class="card-header bg-transparent" id="collapseWhyChooseUsHeadingTwo">
												<h4 class="card-title m-0">                                                    <a class="accordion-toggle bg-transparent text-3-5 text-color-dark font-weight-semi-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapseWhyChooseUsTwo" aria-expanded="false" aria-controls="collapseWhyChooseUsTwo">
														Couverture Complète
													</a>
												</h4>
											</div>
											<div id="collapseWhyChooseUsTwo" class="collapse" aria-labelledby="collapseWhyChooseUsHeadingTwo" data-bs-parent="#accordionWhyChooseUs">
												<div class="card-body pt-0">
													<p class="mb-0">Connectez-vous à tous les opérateurs Mobile Money de la CEDEAO avec une seule API. Orange Money, MTN, Moov Money, Wave - nous couvrons l'ensemble de l'écosystème financier mobile de la région.</p>
												</div>
											</div>
										</div>
										<div class="card card-default box-shadow-8 border-radius-2 bg-light">
											<div class="card-header bg-transparent" id="collapseWhyChooseUsHeadingThree">
												<h4 class="card-title m-0">
													<a class="accordion-toggle bg-transparent text-3-5 text-color-dark font-weight-semi-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapseWhyChooseUsThree" aria-expanded="false" aria-controls="collapseWhyChooseUsThree">
														Sécurité Maximale
													</a>
												</h4>
											</div>
											<div id="collapseWhyChooseUsThree" class="collapse" aria-labelledby="collapseWhyChooseUsHeadingThree" data-bs-parent="#accordionWhyChooseUs">
												<div class="card-body pt-0">
													<p class="mb-0">Toutes les transactions sont sécurisées par un chiffrement SSL de niveau bancaire et une authentification multi-facteurs. Conformité totale aux réglementations financières et protection contre la fraude.</p>
												</div>
											</div>
										</div>
										<div class="card card-default box-shadow-8 border-radius-2 bg-light">
											<div class="card-header bg-transparent" id="collapseWhyChooseUsHeadingFour">
												<h4 class="card-title m-0">
													<a class="accordion-toggle bg-transparent text-3-5 text-color-dark font-weight-semi-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapseWhyChooseUsFour" aria-expanded="false" aria-controls="collapseWhyChooseUsThree">
														Support Dédié
													</a>
												</h4>
											</div>
											<div id="collapseWhyChooseUsFour" class="collapse" aria-labelledby="collapseWhyChooseUsHeadingFour" data-bs-parent="#accordionWhyChooseUs">
												<div class="card-body pt-0">
													<p class="mb-0">Notre équipe technique vous accompagne 24/7 avec une assistance personnalisée. Documentation complète, sandbox de test et support technique réactif pour une intégration réussie.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- FAQ's -->
							<div class="row align-items-center mt-3">
								<div class="col">
									<h2 class="text-7 font-weight-semibold line-height-1 mb-4 pb-2">Questions Fréquentes</h2>

									<div class="toggle toggle-minimal toggle-faqs toggle-dark m-0" data-plugin-toggle>
										<section class="toggle">                                            <a class="toggle-title text-4 text-dark">Comment fonctionne l'API PayOUT ?</a>
											<div class="toggle-content"><p class="mb-0">L'API PayOUT vous permet d'envoyer de l'argent directement vers les comptes Mobile Money de vos bénéficiaires. Envoyez une requête avec les détails du versement, et nous nous chargons du transfert instantané vers le compte du bénéficiaire.</p></div>
										</section>
										<section class="toggle">
												<a class="toggle-title text-4 text-dark">Quels sont les frais associés à l'API PayOUT ?</a>
												<div class="toggle-content"><p class="mb-0">Notre tarification est transparente et compétitive. Vous payez uniquement pour les transactions réussies, avec des frais dégressifs selon votre volume mensuel. Contactez-nous pour obtenir une offre personnalisée adaptée à vos besoins.</p></div>
										</section>
										<section class="toggle">
												<a class="toggle-title text-4 text-dark">Quels opérateurs Mobile Money sont supportés ?</a>
												<div class="toggle-content"><p class="mb-0">Nous supportons tous les principaux opérateurs Mobile Money en Afrique de l'Ouest : Orange Money, MTN Mobile Money, Moov Money, Wave et autres. Notre couverture s'étend à l'ensemble des pays de la CEDEAO.</p></div>
										</section>
										<section class="toggle">                                                <a class="toggle-title text-4 text-dark">Y a-t-il des limites de montant ?</a>
												<div class="toggle-content"><p class="mb-0">Les limites dépendent de l'opérateur et du pays. Généralement, vous pouvez envoyer entre 500 FCFA et 2 000 000 FCFA par transaction. Contactez-nous pour des limites personnalisées selon vos besoins business.</p></div>
										</section>
										<section class="toggle">
												<a class="toggle-title text-4 text-dark">Quels rapports et analyses sont disponibles ?</a>
												<div class="toggle-content"><p class="mb-0">Nous fournissons des tableaux de bord détaillés avec des rapports en temps réel sur toutes vos transactions. Suivez les taux de succès, les temps de traitement et accédez à des analyses avancées pour optimiser vos opérations de paiement.</p></div>
										</section>
										<section class="toggle">                                                <a class="toggle-title text-4 text-dark">L'API est-elle sécurisée ?</a>
												<div class="toggle-content"><p class="mb-0">Absolument. Nous utilisons un chiffrement SSL de niveau bancaire, une authentification OAuth 2.0 et une validation multi-niveau. Toutes les transactions sont conformes aux normes PCI DSS et aux réglementations financières de la CEDEAO.</p></div>
										</section>
										<section class="toggle">
												<a class="toggle-title text-4 text-dark">Qu'est-ce qui distingue votre API PayOUT ?</a>
												<div class="toggle-content"><p class="mb-0">Notre API se distingue par sa fiabilité exceptionnelle, sa rapidité d'exécution et notre support technique dédié. Nous sommes les seuls à offrir une garantie de service avec un taux de disponibilité de 99,9% et un support 24/7.</p></div>
										</section>
										<section class="toggle">                                                <a class="toggle-title text-4 text-dark">Puis-je tester l'API avant l'intégration ?</a>
												<div class="toggle-content"><p class="mb-0">Oui, nous proposons un environnement de test (sandbox) gratuit et illimité. Vous pouvez tester toutes les fonctionnalités de l'API PayOUT sans frais et avec des données simulées réalistes.</p></div>
										</section>
										<section class="toggle">                                                <a class="toggle-title text-4 text-dark">Comment intégrer l'API PayOUT ?</a>
												<div class="toggle-content"><p class="mb-0">L'intégration est simple avec notre API REST bien documentée. Nous fournissons des SDKs en plusieurs langages, une documentation interactive et un support technique dédié pour vous accompagner étape par étape.</p></div>
										</section>
										<section class="toggle">
												<a class="toggle-title text-4 text-dark">Comment démarrer avec votre service ?</a>
												<div class="toggle-content"><p class="mb-0">C'est simple ! Contactez-nous pour planifier une démonstration personnalisée. Notre équipe vous guidera à travers le processus d'inscription, la configuration de votre compte et les premières étapes d'intégration.</p></div>
										</section>
									</div>
								</div>
							</div>
						
					</div>
				</div>

				<div class="bg-secondary border-radius-2 p-relative overflow-hidden">
					<div class="container-fluid">
						<div class="row">
							<div class="col px-0 text-center text-color-light">
								<div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-lg-center">
									<div class="me-lg-4 flex-grow-1 flex-lg-grow-0">
										<span class="d-inline-block text-3 py-4 px-5 text-uppercase font-weight-medium">Découvrez Plus :</span>
									</div>
									<div class="me-3 ps-3 p-relative bottom-1 pt-3 pt-lg-0">
										<a href="service-api-payin.html" class="btn btn-arrow-effect-1 bg-transparent text-light border-0 text-lg-3-5 py-2 py-lg-0">Découvrir l'API PayIN <i class="fas fa-arrow-right ms-2"></i></a>
									</div>
									<div class="py-3 py-lg-0 p-relative bottom-1 border-start border-color-light-rgba-20">
										<a href="{{ route('contact') }}" class="btn btn-arrow-effect-1 bg-transparent text-light border-0 text-lg-3-5 py-2 py-lg-0">Demander une Démonstration <i class="fas fa-arrow-right ms-2"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>     

			</div>

@endsection
