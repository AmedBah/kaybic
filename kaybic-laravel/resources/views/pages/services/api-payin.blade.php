@extends('layouts.app')

@section('title', 'API PayIN - Encaissement Mobile Money | KAYBIC AFRICA')

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
											API PayIN
										</span>
									</span>
								</div>							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<h1 class="text-light text-9 text-lg-12 font-weight-semibold line-height-1 mb-2">API d'Encaissement Multi-Opérateurs</h1>
							</div>								<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<ul class="breadcrumb d-flex text-3-5 font-weight-semi-bold pb-2 mb-3">
									<li><a href="{{ route('home') }}" class="text-light text-decoration-none">Accueil</a></li>
									<li><a href="{{ route('services') }}" class="text-light text-decoration-none">Produits</a></li>
								   	<li class="active text-light">API PayIN</li>
								</ul>
							</div>
							</div>
							<div class="col-4 col-md-5 p-relative">
								<div class="opacity-2 p-absolute w-100 rotate-r-50 custom-pos-5 d-none d-lg-block">
									<img src="{{ asset('img/icons/abstract-bg-1.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary w-100'}" />
								</div>
								<div class="custom-mask-img custom-mask-img-4 custom-el-6">
									<img src="{{ asset('img/generic/generic-3.jpg') }}" loading="lazy" class="img-fluid" alt="" />
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
										<li class="nav-item"><a href="{{ route('services.api-payin') }}" class="nav-link active text-dark">API PayIN</a></li>
										<li class="nav-item"><a href="{{ route('services.api-payout') }}" class="nav-link text-dark">API PayOUT</a></li>
										<li class="nav-item"><a href="{{ route('services.api-transfert') }}" class="nav-link text-dark">Transfert International</a></li>
										<li class="nav-item"><a href="{{ route('services.qr-pay') }}" class="nav-link text-dark">QR PAY</a></li>
										<li class="nav-item"><a href="{{ route('solutions') }}" class="nav-link text-dark">Solutions Entreprises</a></li>
										<li class="nav-item"><a href="{{ route('process.integration-support') }}" class="nav-link text-dark">Intégration & Support</a></li>
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
										<div class="pe-3">
											<div class="feature-box feature-box-secondary align-items-center">
												<div class="feature-box-icon feature-box-icon-lg p-static box-shadow-7">
													<img src="{{ asset('img/icons/phone-2.svg') }}" width="30" height="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary'}" />
												</div>
												<div class="feature-box-info ps-2">
													<strong class="d-block text-uppercase text-color-secondary p-relative top-2">Appelez-nous</strong>
													<a href="tel:+2252530000869" class="text-decoration-none font-secondary text-3 font-weight-semibold text-color-light text-color-hover-primary transition-2ms negative-ls-05 ws-nowrap p-relative bottom-2">+2252530000869</a>
												</div>
											</div>
										</div>
										<div class="pe-3 pt-4">
											<div class="feature-box feature-box-secondary align-items-center">
												<div class="feature-box-icon feature-box-icon-lg p-static box-shadow-7">
													<img src="{{ asset('img/icons/email.svg') }}" width="30" height="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary'}" />
												</div>
												<div class="feature-box-info ps-1">
													<strong class="d-block text-uppercase text-color-secondary p-relative top-2">Email</strong>
													<a href="mailto:Contact@kaybicafrica.ci" class="text-decoration-none font-secondary text-3 font-weight-semibold text-color-light text-color-hover-primary transition-2ms negative-ls-05 ws-nowrap p-relative bottom-2">Contact@kaybicafrica.ci</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-8">
							<p>Collectez les paiements depuis tous les portefeuilles Mobile Money avec une seule API. Notre solution PayIN unifie Orange Money, MTN, Moov Money et Wave pour simplifier vos intégrations.</p>

							<div class="row mt-5">
								<div class="col-lg-6 mb-4 mb-lg-0 pe-lg-5">
									<h2 class="text-7 font-weight-semibold line-height-1 mb-4">Fonctionnalités clés</h2>
									<p>Notre API PayIN vous permet de collecter les paiements de vos clients avec une intégration technique unique pour tous les opérateurs.</p>
									<ul class="list list-icons list-icons-lg list-icons-style-3 text-3-5">
										<li><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i> API REST unifiée</li>
										<li><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i> Webhook temps réel</li>
										<li><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i> Multi-opérateurs</li>
										<li><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i> Sécurité PCI-DSS</li>
										<li><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i> Gestion des échecs</li>
										<li><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i> Réconciliation automatique</li>
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
										<p class="mb-0 pt-2 text-3-5 line-height-7">Sur toutes nos transactions PayIN.</p>
									</div>
								</div>
							</div>

							<div class="row p-2">
									<div class="col-md-6 mb-4">
										<div class="feature-box feature-box-primary">
											<div class="feature-box-icon">
												<i class="fas fa-credit-card"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="font-weight-bold text-4 mb-2">Intégration Unifiée</h4>
												<p class="text-3">Une seule API pour tous les opérateurs Mobile Money de la CEDEAO</p>
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
												<h4 class="font-weight-bold text-4 mb-2">Traitement Instantané</h4>
												<p class="text-3">Transactions en temps réel avec confirmation immédiate</p>
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
												<p class="text-3">99.5% de taux de succès grâce à notre infrastructure robuste</p>
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
										<h2 class="text-9 font-weight-semibold line-height-1 mb-4">
											<span class="p-relative z-index-1">Automatisez vos Versements avec</span> 
											<mark class="text-light mark mark-color mark-color-primary mark-pos-2 mark-height-100 p-0 appear-animation" data-appear-animation data-appear-animation-delay="0">Rapidité</mark> 
											et <mark class="text-light mark mark-color mark-color-primary mark-pos-2 mark-height-100 p-0 appear-animation" data-appear-animation data-appear-animation-delay="1500">Sécurité</mark>
										</h2>
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
											<img src="{{ asset('img/generic/generic-15.jpg') }}" alt="" class="w-100 border-radius-2" />
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
													<p class="mb-0">Our expert team of certified accountants brings years of experience and deep industry knowledge to help you navigate complex financial landscapes. We’re dedicated to providing personalized, reliable, and results-driven services, ensuring your business thrives with our strategic financial guidance.</p>
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
												<a class="toggle-title text-4 text-dark">How do you charge for your services?</a>
												<div class="toggle-content"><p class="mb-0">Our pricing is flexible and depends on the scope of work required. We offer competitive hourly rates, flat fees for specific services, and custom packages tailored to your business’s needs.</p></div>
										</section>
										<section class="toggle">
												<a class="toggle-title text-4 text-dark">What accounting software do you use?</a>
												<div class="toggle-content"><p class="mb-0">We use industry-leading software like QuickBooks, Xero, and Sage, but we’re also proficient in a variety of other platforms. We can work with your existing system or recommend the best software for your needs.</p></div>
										</section>
										<section class="toggle">                                                <a class="toggle-title text-4 text-dark">Y a-t-il des limites de montant ?</a>
												<div class="toggle-content"><p class="mb-0">Les limites dépendent de l'opérateur et du pays. Généralement, vous pouvez envoyer entre 500 FCFA et 2 000 000 FCFA par transaction. Contactez-nous pour des limites personnalisées selon vos besoins business.</p></div>
										</section>
										<section class="toggle">
												<a class="toggle-title text-4 text-dark">How often will I receive financial reports?</a>
												<div class="toggle-content"><p class="mb-0">The frequency of reporting is up to you. We can provide monthly, quarterly, or annual reports, depending on your needs. Regular communication ensures that you’re always informed about your financial standing.</p></div>
										</section>
										<section class="toggle">                                                <a class="toggle-title text-4 text-dark">L'API est-elle sécurisée ?</a>
												<div class="toggle-content"><p class="mb-0">Absolument. Nous utilisons un chiffrement SSL de niveau bancaire, une authentification OAuth 2.0 et une validation multi-niveau. Toutes les transactions sont conformes aux normes PCI DSS et aux réglementations financières de la CEDEAO.</p></div>
										</section>
										<section class="toggle">
												<a class="toggle-title text-4 text-dark">What makes your firm different from others?</a>
												<div class="toggle-content"><p class="mb-0">Our firm is distinguished by our personalized approach, deep industry knowledge, and commitment to building long-term relationships with our clients. We’re not just accountants—we’re your business partners.</p></div>
										</section>
										<section class="toggle">                                                <a class="toggle-title text-4 text-dark">Puis-je tester l'API avant l'intégration ?</a>
												<div class="toggle-content"><p class="mb-0">Oui, nous proposons un environnement de test (sandbox) gratuit et illimité. Vous pouvez tester toutes les fonctionnalités de l'API PayOUT sans frais et avec des données simulées réalistes.</p></div>
										</section>
										<section class="toggle">                                                <a class="toggle-title text-4 text-dark">Comment intégrer l'API PayOUT ?</a>
												<div class="toggle-content"><p class="mb-0">L'intégration est simple avec notre API REST bien documentée. Nous fournissons des SDKs en plusieurs langages, une documentation interactive et un support technique dédié pour vous accompagner étape par étape.</p></div>
										</section>
										<section class="toggle">
												<a class="toggle-title text-4 text-dark">How do I get started with your services?</a>
												<div class="toggle-content"><p class="mb-0">Getting started is easy! Simply contact us to schedule an initial consultation, where we’ll discuss your needs and how we can best support your business.</p></div>
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
						<a href="{{ route('services.api-payin') }}" class="btn btn-arrow-effect-1 bg-transparent text-light border-0 text-lg-3-5 py-2 py-lg-0">Découvrir l'API PayIN <i class="fas fa-arrow-right ms-2"></i></a>
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
