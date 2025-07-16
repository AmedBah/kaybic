@extends('layouts.app')

@section('title', 'Processus d\'Intégration et Support | KAYBIC AFRICA')

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
									<span class="badge bg-color-dark-rgba-10 text-light rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-3"><span class="d-inline-flex py-1 px-2">Comment nous intégrer</span></span>
								</div>							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<h1 class="text-light text-9 text-lg-12 font-weight-semibold line-height-1 mb-2">Processus d'Intégration</h1>
							</div>
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<ul class="breadcrumb d-flex text-3-5 font-weight-semi-bold pb-2 mb-3">
									<li><a href="{{ route('home') }}" class="text-light text-decoration-none">Accueil</a></li>
									<li class="active text-light">Processus d'Intégration</li>
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

				<div class="container pt-lg-5" id="intro">
	<div class="row mb-5">
		<div class="col text-center">
			<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
				<h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4">Comment intégrer KAYBIC AFRICA à votre entreprise</h2>
			</div>
			<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
				<p class="pe-lg-5 mb-0">Chez KAYBIC AFRICA, nous croyons qu'une approche personnalisée et structurée est essentielle pour offrir une intégration de paiement mobile efficace et sécurisée. Notre processus garantit transparence, rapidité et accompagnement à chaque étape, afin de connecter votre entreprise à nos solutions Mobile Money en toute confiance :</p>
			</div>
		</div>
	</div>                    <div class="row counters mb-5">
						<div class="col-md-6 col-lg-3 mb-4 mb-lg-0 text-center">
							<div class="d-flex flex-column pt-2 pb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
								<p class="d-inline-block mb-0 font-weight-bold line-height-1 counter"><mark class="text-dark mark mark-pos-2 mark-height-50 mark-color bg-color-before-primary-rgba-30 font-secondary text-15 mark-height-30 n-ls-5 p-0" data-to="10" data-append="+"></mark></p>
								<span class="custom-font-tertiary text-6 text-dark n-ls-1 fst-italic pt-2">Pays couverts</span>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 mb-4 mb-lg-0 text-center">
							<div class="d-flex flex-column pt-2 pb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<p class="d-inline-block mb-0 font-weight-bold line-height-1 counter"><mark class="text-dark mark mark-pos-2 mark-height-50 mark-color bg-color-before-primary-rgba-30 font-secondary text-15 mark-height-30 n-ls-5 p-0" data-to="500" data-append="+"></mark></p>
								<span class="custom-font-tertiary text-6 text-dark n-ls-1 fst-italic pt-2">Intégrations réussies</span>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 mb-4 mb-lg-0 text-center">
							<div class="d-flex flex-column pt-2 pb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
								<p class="d-inline-block mb-0 font-weight-bold line-height-1 counter"><mark class="text-dark mark mark-pos-2 mark-height-50 mark-color bg-color-before-primary-rgba-30 font-secondary text-15 mark-height-30 n-ls-5 p-0" data-to="8" data-append="+"></mark></p>
								<span class="custom-font-tertiary text-6 text-dark n-ls-1 fst-italic pt-2">Opérateurs partenaires</span>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 mb-4 mb-lg-0 text-center">
							<div class="d-flex flex-column pt-2 pb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
								<p class="d-inline-block mb-0 font-weight-bold line-height-1 counter"><mark class="text-dark mark mark-pos-2 mark-height-50 mark-color bg-color-before-primary-rgba-30 font-secondary text-15 mark-height-30 n-ls-5 p-0" data-to="99.9" data-append="%"></mark></p>
								<span class="custom-font-tertiary text-6 text-dark n-ls-1 fst-italic pt-2">Disponibilité des API</span>
							</div>
						</div>
					</div>

					<div class="row counters mb-lg-5">
						<div class="col">
							<section class="timeline mt-5">
								<div class="timeline-body">
									<div class="timeline-number bg-color-secondary box-shadow-8">
										<h3 class="text-light text-5">1</h3>
									</div>                                    <div class="row mt-5 align-items-center justify-content-around mb-5">
										<div class="col-lg-5 bg-color-light p-3 order-0">
											<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
												<img src="{{ asset('img/process/process-1.jpg') }}" class="img-fluid border-radius-2" alt="">
											</div>
										</div>
										<div class="col-lg-5 bg-color-light p-3 pt-0 text-center text-lg-start">
											<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
												<span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-3">
													<span class="d-inline-flex py-1 px-2">Étape 1</span>
												</span>
											</div>
											<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
												<h4 class="text-6 font-weight-semibold line-height-1 mb-4">Demande d'accès à l'API</h4>
											</div>
											<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
												<p class="pe-lg-5">Commencez par nous contacter pour demander l'accès à notre API. Notre équipe commerciale évaluera vos besoins spécifiques, vous présentera les différentes options d'intégration et vous guidera dans le choix des services adaptés à votre entreprise : encaissement, décaissement ou transferts internationaux.</p>
											</div>
										</div>
									</div>

									<div class="timeline-number bg-color-secondary box-shadow-8">
										<h3 class="text-light text-5">2</h3>
									</div>                                    <div class="row mt-5 align-items-center justify-content-around">
										<div class="col-lg-5 bg-color-light p-3 order-lg-1">
											<div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="0">
												<img src="{{ asset('img/process/process-2.jpg') }}" class="img-fluid border-radius-2" alt="">
											</div>
										</div>
										<div class="col-lg-5 bg-color-light p-3 pt-0 text-center text-lg-start">
											<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
												<span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-3">
													<span class="d-inline-flex py-1 px-2">Étape 2</span>
												</span>
											</div>
											<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
												<h4 class="text-6 font-weight-semibold line-height-1 mb-4">Création et configuration du compte</h4>
											</div>
											<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
												<p class="pe-lg-5">Après validation de votre demande, nous créons votre compte sur notre plateforme et vous fournissons vos identifiants d'accès à l'environnement de test (sandbox). Vous recevrez également les clés API nécessaires et l'accès à notre documentation technique détaillée.</p>
											</div>		
										</div>
									</div>

									<div class="timeline-number bg-color-secondary box-shadow-8">
										<h3 class="text-light text-5">3</h3>
									</div>                                    <div class="row mt-5 align-items-center justify-content-around mb-5">
										<div class="col-lg-5 bg-color-light p-3 order-0">
											<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
												<img src="{{ asset('img/process/process-3.jpg') }}" class="img-fluid border-radius-2" alt="">
											</div>
										</div>
										<div class="col-lg-5 bg-color-light p-3 pt-0 text-center text-lg-start">
											<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
												<span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-3">
													<span class="d-inline-flex py-1 px-2">Étape 3</span>
												</span>
											</div>
											<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
												<h4 class="text-6 font-weight-semibold line-height-1 mb-4">Développement et tests</h4>
											</div>
											<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
												<p class="pe-lg-5">Développez votre intégration en utilisant notre environnement de test. Notre documentation technique complète, nos SDKs (PHP, Java, Node.js, Python) et nos exemples de code facilitent ce processus. Notre équipe technique reste disponible pour vous assister pendant cette phase cruciale, vous aidant à résoudre les problèmes éventuels.</p>
											</div>
										</div>
									</div>

									<div class="timeline-number bg-color-secondary box-shadow-8">
										<h3 class="text-light text-5">4</h3>
									</div>
							
									<div class="row mt-5 align-items-center justify-content-around">
										<div class="col-lg-5 bg-color-light p-3 order-lg-1">
											<div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="0">
												<img src="{{ asset('img/process/process-4.jpg') }}" class="img-fluid border-radius-2" alt="">
											</div>
										</div>
										<div class="col-lg-5 bg-color-light p-3 pt-0 text-center text-lg-start">
											<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
												<span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-3">
													<span class="d-inline-flex py-1 px-2">Étape 4</span>
												</span>
											</div>
											<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
												<h4 class="text-6 font-weight-semibold line-height-1 mb-4">Mise en production et accompagnement continu</h4>
											</div>
											<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
												<p class="pe-lg-5">Après validation des tests, nous activons votre accès en production. Notre équipe assure un suivi régulier, vous fournit des rapports détaillés et reste disponible pour toute question ou optimisation. Nous vous accompagnons pour garantir la fiabilité et la performance de vos transactions.</p>
											</div>		
										</div>
									</div>
								</div>
							
							</section>
						</div>
					</div>
				</div>
				
				<!-- FAQs -->
				<div class="text-center overflow-hidden w-100">
	<div class="appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
		<h2 class="text-resp-150 ws-nowrap font-weight-semi-bold text-overflow-center text-color-grey-100 n-ls-5 mb-5">FAQ</h2>
	</div>
</div>
<div class="bg-grey-100 px-3 px-xl-0 border-radius-2 p-relative overflow-hidden custom-pos-3">
	<div class="container py-5">
		<div class="row pt-5">
			<div class="col">			<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
				<h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4">Questions fréquentes sur l'intégration</h2>
			</div>
			</div>
		</div>
		<div class="row pb-4">
			<div class="col">
				<div class="toggle toggle-minimal toggle-faqs toggle-dark m-0" data-plugin-toggle>
					<section class="toggle">
						<a class="toggle-title text-4 text-dark">Quels sont les prérequis techniques pour intégrer les API KAYBIC ?</a>
						<div class="toggle-content"><p class="mb-0">Pour intégrer nos API, vous avez besoin d'un serveur web sécurisé (HTTPS), d'une connexion internet stable, et de compétences en programmation dans l'un des langages supportés par nos SDKs (PHP, Java, Node.js, Python) ou tout autre langage capable de gérer des requêtes HTTP et le format JSON.</p></div>
					</section>
					<section class="toggle">
						<a class="toggle-title text-4 text-dark">Comment sont facturés vos services ?</a>
						<div class="toggle-content"><p class="mb-0">Notre tarification est flexible et dépend du volume de transactions et des services choisis. Nous proposons des forfaits adaptés à chaque besoin, avec des tarifs compétitifs et transparents. Contactez notre équipe pour un devis personnalisé.</p></div>
					</section>
					<section class="toggle">
						<a class="toggle-title text-4 text-dark">Quels outils ou logiciels recommandez-vous pour la gestion des paiements ?</a>
						<div class="toggle-content"><p class="mb-0">Nous fournissons notre propre portail de gestion KAYBIC AFRICA, mais nos API sont compatibles avec de nombreux systèmes de gestion existants. Nous pouvons vous conseiller sur les meilleures solutions selon vos besoins.</p></div>
					</section>
					<section class="toggle">
						<a class="toggle-title text-4 text-dark">Comment gérez-vous la sécurité des transactions ?</a>
						<div class="toggle-content"><p class="mb-0">La sécurité est notre priorité absolue. Nous utilisons le chiffrement TLS/SSL pour toutes les communications, l'authentification par clés API, la tokenisation des données sensibles, et des systèmes de détection de fraude. Notre plateforme est régulièrement auditée et conforme aux normes PCI DSS.</p></div>
					</section>
					<section class="toggle">
						<a class="toggle-title text-4 text-dark">À quelle fréquence vais-je recevoir des rapports sur mes transactions ?</a>
						<div class="toggle-content"><p class="mb-0">Vous pouvez recevoir des rapports quotidiens, hebdomadaires ou mensuels selon vos préférences. Notre portail vous permet également de consulter vos transactions en temps réel à tout moment.</p></div>
					</section>
					<section class="toggle">
						<a class="toggle-title text-4 text-dark">Proposez-vous une documentation technique détaillée ?</a>
						<div class="toggle-content"><p class="mb-0">Absolument. Nous fournissons une documentation technique complète incluant des guides d'intégration étape par étape, des références d'API, des exemples de code dans plusieurs langages, et des tutoriels vidéo. Notre portail développeur est constamment mis à jour avec les dernières informations.</p></div>
					</section>
					<section class="toggle">
						<a class="toggle-title text-4 text-dark">Qu'est-ce qui différencie KAYBIC AFRICA des autres agrégateurs ?</a>
						<div class="toggle-content"><p class="mb-0">Notre force réside dans notre accompagnement personnalisé, notre expertise locale et notre capacité à connecter votre entreprise à tous les opérateurs majeurs d'Afrique de l'Ouest via une seule API. Nous sommes plus qu'un prestataire, nous sommes votre partenaire de croissance.</p></div>
					</section>
					<section class="toggle">
						<a class="toggle-title text-4 text-dark">Quels sont vos SLA et temps de réponse pour le support technique ?</a>
						<div class="toggle-content"><p class="mb-0">Notre support technique est disponible 24/7 avec un temps de réponse garanti de moins de 30 minutes pour les problèmes critiques. Notre SLA garantit une disponibilité de 99,9% de nos API. Nous proposons plusieurs canaux de support : email, chat, téléphone et portail dédié avec système de tickets.</p></div>
					</section>
					<section class="toggle">
						<a class="toggle-title text-4 text-dark">Peut-on intégrer vos API dans une application mobile native ?</a>
						<div class="toggle-content"><p class="mb-0">Oui, nos API peuvent être intégrées dans des applications mobiles iOS et Android. Pour des raisons de sécurité, nous recommandons d'implémenter une architecture serveur-à-serveur où votre backend communique avec nos API. Nous proposons également des SDKs mobiles pour faciliter cette intégration.</p></div>
					</section>
					<section class="toggle">
						<a class="toggle-title text-4 text-dark">Comment démarrer avec KAYBIC AFRICA ?</a>
						<div class="toggle-content"><p class="mb-0">C'est simple ! Contactez-nous via notre formulaire ou par téléphone pour une première prise de contact. Nous étudierons ensemble vos besoins et vous guiderons dans chaque étape de l'intégration.</p></div>
					</section>
				</div>
			</div>
		</div>
	</div>
</div>

				<!-- Start Your Jorney -->
				<div class="container" id="intro">
	<div class="row align-items-center">
		<div class="col-lg-6 mb-5 mt-5 mt-lg-0 py-lg-5">
			<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
				<span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-4"><span class="d-inline-flex py-1 px-2">Prêt à commencer ?</span></span>
			</div>
			<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
				<h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 pe-lg-5 mb-4">Démarrez votre intégration dès aujourd'hui</h2>
			</div>
			<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
				<p class="pe-lg-5">Notre processus d'intégration éprouvé est conçu pour assurer une connexion rapide, sécurisée et efficace à nos API de paiement mobile money. Prêt à transformer votre entreprise grâce à nos solutions de paiement innovantes ? Contactez-nous dès aujourd'hui pour démarrer votre intégration.</p>
			</div>

			<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
				<div class="py-2 d-flex flex-column flex-md-row align-items-center text-4-5 n-ls-1 text-dark">
					<img src="{{ asset('img/icons/icon-4.svg') }}" width="28" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary me-md-2'}" /> <strong class="custom-font-secondary pe-2">Rejoignez-nous</strong><span class="d-none d-md-inline-block pe-2"> | </span>Plus de 500 entreprises connectées!
					<p class="ms-md-2 mb-0 text-3-5 p-relative bottom-2"><i class="fas fa-star custom-text-color-2 text-2"></i><i class="fas fa-star custom-text-color-2 text-2"></i><i class="fas fa-star custom-text-color-2 text-2"></i><i class="fas fa-star custom-text-color-2 text-2"></i><i class="fas fa-star custom-text-color-2 text-2"></i></p>
				</div>
			</div>							
							
			<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
				<div class="d-flex flex-column flex-lg-row pt-3 mt-2 align-items-lg-center">
					<div class="text-center text-lg-start">
						<a href="{{ route('contact') }}" class="btn btn-rounded box-shadow-7 font-weight-medium btn-swap-1" style="background-color: #d24a4a; color: white;" data-clone-element="1">
							<span>Demander une démo <i class="fa-solid fa-arrow-right ms-2 p-relative left-10"></i></span>
						</a>
					</div>
				</div>
			</div>

		</div>
		<div class="col-lg-6 text-center p-relative py-5">
			<!--
			<div class="opacity-2 p-absolute w-100">
				<img src="{{ asset('img/icons/abstract-bg-1.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary w-100'}" />
			</div> -->
			
			<div class="cascading-images-wrapper custom-cascading-images-wrapper-1">
				<div class="cascading-images p-relative">
					<div class="custom-mask-img custom-mask-img-2">
						<img class="img-fluid" src="{{ asset('img/generic/generic-2.jpg') }}" loading="lazy" alt="">
					</div>
					<div class="p-absolute w-100 custom-mask-img custom-mask-img-3" style="top: 21%; left: -30%;">
						<img src="{{ asset('img/generic/generic-3.jpg') }}" loading="lazy" class="img-fluid" alt="" />
					</div>
				</div>
			</div>
															
		</div>
	</div>
</div>

				<!-- Explore Further -->
				<div class="bg-secondary border-radius-2 p-relative overflow-hidden">
					<div class="container-fluid">
						<div class="row">
							<div class="col px-0 text-center text-color-light">                                <div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-lg-center">
									<div class="me-lg-4 flex-grow-1 flex-lg-grow-0">
										<span class="d-inline-block text-3 py-4 px-5 text-uppercase font-weight-medium">Explorer davantage:</span>
									</div>
									<div class="me-3 ps-3 p-relative bottom-1 pt-3 pt-lg-0">
										<a href="{{ route('services') }}" class="btn btn-arrow-effect-1 bg-transparent text-light border-0 text-lg-3-5 py-2 py-lg-0">Nos Solutions <i class="fas fa-arrow-right ms-2"></i></a>
									</div>
									<div class="py-3 py-lg-0 p-relative bottom-1 border-start border-color-light-rgba-20">
										<a href="{{ route('contact') }}" class="btn btn-arrow-effect-1 bg-transparent text-light border-0 text-lg-3-5 py-2 py-lg-0">Demander une démo <i class="fas fa-arrow-right ms-2"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

@endsection
