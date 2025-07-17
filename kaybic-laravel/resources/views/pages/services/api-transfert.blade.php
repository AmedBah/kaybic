@extends('layouts.app')

@section('title', 'API Transfert International | KAYBIC AFRICA')

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
                            <div class="col-8 col-md-7">                                <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                                    <span class="badge bg-color-dark-rgba-10 text-light rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-3"><span class="d-inline-flex py-1 px-2">Solutions de Transfert</span></span>
                                </div>                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                <h1 class="text-light text-9 text-lg-12 font-weight-semibold line-height-1 mb-2">Transfert International</h1>
                            </div>
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                <ul class="breadcrumb d-flex text-3-5 font-weight-semi-bold pb-2 mb-3">
                                    <li><a href="{{ route('home') }}" class="text-light text-decoration-none">Accueil</a></li>
                                    <li><a href="{{ route('services') }}" class="text-light text-decoration-none">Services</a></li>
                                    <li class="active text-light">Transfert International</li>
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

                <div class="container pb-5 pt-lg-5 mt-5">
                    <div class="row">
                        <div class="col-lg-4 order-1 order-lg-0 pe-lg-5 mt-4 mt-lg-0">
                            <div class="bg-grey-100 p-4 border-radius-2 mb-4">                                <div class="m-3">
                                    <h4 class="text-5 font-weight-semibold line-height-1 mb-4">Nos Services</h4>

                                    <ul class="nav nav-list nav-list-arrows flex-column mb-0">
                                        <li class="nav-item"><a href="service-api-payin.html" class="nav-link text-dark">API PayIN</a></li>
                                        <li class="nav-item"><a href="service-api-payout.html" class="nav-link text-dark">API PayOUT</a></li>
                                        <li class="nav-item"><a href="service-transfert-international.html" class="nav-link active text-dark">Transfert International</a></li>
                                        <li class="nav-item"><a href="service-qr-pay.html" class="nav-link text-dark">QR PAY</a></li>
                                        <li class="nav-item"><a href="{{ route('solutions') }}" class="nav-link text-dark">Solutions Entreprises</a></li>
                                        <li class="nav-item"><a href="process-integration-support.html" class="nav-link text-dark">Intégration & Support</a></li>
                                    
                                    </ul>

                                </div>
                            </div>

                            <div class="bg-tertiary text-light p-4 border-radius-2 mb-4">
								<div class="m-2">
									<h4 class="text-5 font-weight-semibold line-height-1 mb-4 text-light">Contactez-nous</h4>

									<div class="d-flex flex-column pt-2">
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
                            <p>KAYBIC Transfert International facilite vos envois d'argent dans toute la sous-région africaine avec des solutions rapides, sécurisées et à des tarifs compétitifs. Connectez-vous à un réseau étendu de partenaires pour vos transferts transfrontaliers.</p>

                            <div class="row mt-5">
                                <div class="col-lg-6 mb-4 mb-lg-0 pe-lg-5">
                                    <h2 class="text-7 font-weight-semibold line-height-1 mb-4">Ce Que Nous Proposons</h2>
                                    <p>Une solution complète de transfert d'argent international adaptée aux besoins spécifiques de la sous-région africaine, avec une couverture étendue et des délais optimisés.</p>
                                    <ul class="list list-icons list-icons-lg list-icons-style-3 text-3-5">
                                        <li><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i> Transferts instantanés sous-régionaux</li>
                                        <li><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i> Tarifs préférentiels compétitifs</li>
                                        <li><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i> Réseau de partenaires étendu</li>
                                        <li><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i> Suivi temps réel des transactions</li>
                                        <li><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i> Conformité réglementaire totale</li>
                                        <li><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i> Support multilingue 24/7</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <img class="img-fluid border-radius-2 mb-2" src="{{ asset('img/generic/generic-9.jpg') }}" alt="">
    
                                    <div class="appear-animation mt-2 animated blurIn appear-animation-visible" data-appear-animation="blurIn" data-appear-animation-delay="300" style="animation-delay: 300ms;">
                                        <div class="d-flex align-items-center pt-4">
                                            <strong class="d-inline-flex text-12 text-dark n-ls-5">10+</strong>
                                            <div class="p-2 ps-3">
                                                <div class="animated-icon animated fadeIn svg-fill-color-secondary"><svg fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 5 24 14" id="icon_221725475921235" data-filename="icon-6.svg" width="48" height="48"><clipPath id="clip0_246_1849"><path d="m0 0h24v24h-24z"></path></clipPath><g clip-path="url(#clip0_246_1849)" clip-rule="evenodd" fill="rgb(0,0,0)" fill-rule="evenodd"><path d="m23.7071 5.29289c.3905.39053.3905 1.02369 0 1.41422l-9.5 9.49999c-.3905.3905-1.0237.3905-1.4142 0l-4.2929-4.2929-6.79289 6.7929c-.39053.3905-1.023693.3905-1.414217 0-.3905241-.3905-.3905241-1.0237 0-1.4142l7.499997-7.50001c.39053-.39052 1.02369-.39052 1.41422 0l4.29289 4.29291 8.7929-8.79291c.3905-.39052 1.0237-.39052 1.4142 0z"></path><path d="m16 6c0-.55228.4477-1 1-1h6c.5523 0 1 .44772 1 1v6c0 .5523-.4477 1-1 1s-1-.4477-1-1v-5h-5c-.5523 0-1-.44772-1-1z"></path></g></svg></div>
                                            </div>
                                        </div>
                                        <span class="custom-font-tertiary text-7 text-dark n-ls-1 fst-italic">Pays Couverts</span>
                                        <p class="mb-0 pt-2 text-3-5 line-height-7">Couverture complète sous-régionale.</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                            <!-- Delivering Excellence -->
                            <div class="bg-quaternary border-radius-2 mt-4 mt-lg-5 p-relative overflow-hidden">
                                <div class="container p-relative z-index-1">
                                    <div class="row px-3 px-lg-5 py-5 py-lg-0 align-items-center">
                                        <div class="col-lg-7">                                                 <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                                            <h2 class="text-9 font-weight-semibold line-height-1 mb-4">
                                                <span class="p-relative z-index-1">Excellence dans les</span> 
                                                <mark class="text-light mark mark-color mark-color-primary mark-pos-2 mark-height-100 p-0 appear-animation" data-appear-animation data-appear-animation-delay="0">Transferts</mark> 
                                                <mark class="text-light mark mark-color mark-color-primary mark-pos-2 mark-height-100 p-0 appear-animation" data-appear-animation data-appear-animation-delay="1500">Internationaux</mark>
                                            </h2>
                                        </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="600">
                                                        <div class="d-flex align-items-center pt-4">
                                                            <strong class="d-inline-flex text-15 text-dark n-ls-5">2min</strong>
                                                            <div class="p-2 ps-3">
                                                                <img src="{{ asset('img/icons/icon-6.svg') }}" width="48" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary'}" />
                                                            </div>
                                                        </div>
                                                        <span class="custom-font-tertiary text-7 text-dark n-ls-1 fst-italic">Temps de Transfert</span>
                                                        <div class="pe-lg-5">
                                                            <p class="mb-0 pt-2 text-3-5 line-height-7 pe-lg-5">Transferts ultra-rapides dans la sous-région.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                    <div class="col-lg-5 p-5">
                                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                                            <img src="{{ asset('img/generic/generic-30.jpg') }}" alt="" height="200%" class="w-100  border-radius-2" />
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Why Choose Us -->
                            <div class="row align-items-center mt-3 py-5">
                                <div class="col">
                                    <h2 class="text-7 font-weight-semibold line-height-1 mb-4">Pourquoi Choisir KAYBIC ?</h2>

                                    <div class="accordion accordion-modern-status accordion-modern-status-arrow accordion-modern-status-arrow-dark" id="accordionWhyChooseUs">
                                        <div class="card card-default box-shadow-8 border-radius-2 bg-light">
                                            <div class="card-header bg-transparent" id="collapseWhyChooseUsHeadingOne">
                                                <h4 class="card-title m-0">
                                                    <a class="accordion-toggle bg-transparent text-3-5 text-color-dark font-weight-semi-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapseWhyChooseUsOne" aria-expanded="false" aria-controls="collapseWhyChooseUsOne">
                                                        Équipe d'Experts
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseWhyChooseUsOne" class="collapse" aria-labelledby="collapseWhyChooseUsHeadingOne" data-bs-parent="#accordionWhyChooseUs">
                                                <div class="card-body pt-0">
                                                    <p class="mb-0">Notre équipe d'experts en transfert et en fintech met à votre disposition son expérience et sa connaissance approfondie du secteur pour garantir la réussite de vos opérations internationales. Nous vous accompagnons avec des conseils personnalisés et un suivi de qualité.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-default box-shadow-8 border-radius-2 bg-light">
                                            <div class="card-header bg-transparent" id="collapseWhyChooseUsHeadingTwo">
                                                <h4 class="card-title m-0">
                                                    <a class="accordion-toggle bg-transparent text-3-5 text-color-dark font-weight-semi-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapseWhyChooseUsTwo" aria-expanded="false" aria-controls="collapseWhyChooseUsTwo">
                                                        Approche Personnalisée
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseWhyChooseUsTwo" class="collapse" aria-labelledby="collapseWhyChooseUsHeadingTwo" data-bs-parent="#accordionWhyChooseUs">
                                                <div class="card-body pt-0">
                                                    <p class="mb-0">Nous adaptons nos solutions à vos besoins spécifiques. Chaque client bénéficie d'un accompagnement sur-mesure, d'une écoute attentive et de stratégies personnalisées pour optimiser ses transferts internationaux.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-default box-shadow-8 border-radius-2 bg-light">
                                            <div class="card-header bg-transparent" id="collapseWhyChooseUsHeadingThree">
                                                <h4 class="card-title m-0">
                                                    <a class="accordion-toggle bg-transparent text-3-5 text-color-dark font-weight-semi-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapseWhyChooseUsThree" aria-expanded="false" aria-controls="collapseWhyChooseUsThree">
                                                        Service Fiable
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseWhyChooseUsThree" class="collapse" aria-labelledby="collapseWhyChooseUsHeadingThree" data-bs-parent="#accordionWhyChooseUs">
                                                <div class="card-body pt-0">
                                                    <p class="mb-0">Nous nous engageons à fournir un service fiable et sécurisé. Grâce à notre rigueur et à notre réactivité, vos transferts sont traités rapidement et en toute confiance, pour une tranquillité d'esprit totale.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-default box-shadow-8 border-radius-2 bg-light">
                                            <div class="card-header bg-transparent" id="collapseWhyChooseUsHeadingFour">
                                                <h4 class="card-title m-0">
                                                    <a class="accordion-toggle bg-transparent text-3-5 text-color-dark font-weight-semi-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapseWhyChooseUsFour" aria-expanded="false" aria-controls="collapseWhyChooseUsFour">
                                                        Priorité Client
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseWhyChooseUsFour" class="collapse" aria-labelledby="collapseWhyChooseUsHeadingFour" data-bs-parent="#accordionWhyChooseUs">
                                                <div class="card-body pt-0">
                                                    <p class="mb-0">Votre satisfaction est notre priorité. Nous construisons une relation de confiance avec chaque client et restons disponibles à chaque étape pour répondre à vos attentes et dépasser vos objectifs.</p>
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
                                        <section class="toggle">
                                            <a class="toggle-title text-4 text-dark">Quels types d'entreprises peuvent utiliser vos services&nbsp;?</a>
                                            <div class="toggle-content"><p class="mb-0">Nous accompagnons tous types d'entreprises, des startups aux grands groupes, dans la gestion de leurs transferts internationaux en Afrique. Nos solutions s'adaptent à chaque secteur d'activité.</p></div>
                                        </section>
                                        <section class="toggle">
                                            <a class="toggle-title text-4 text-dark">Comment sont facturés vos services&nbsp;?</a>
                                            <div class="toggle-content"><p class="mb-0">Nos tarifs sont transparents et compétitifs, adaptés au volume et à la fréquence de vos transferts. Contactez-nous pour un devis personnalisé.</p></div>
                                        </section>
                                        <section class="toggle">
                                            <a class="toggle-title text-4 text-dark">Quels outils ou logiciels utilisez-vous&nbsp;?</a>
                                            <div class="toggle-content"><p class="mb-0">Nous utilisons des plateformes sécurisées et des outils de pointe pour garantir la rapidité et la sécurité de vos transactions. Nous pouvons également nous adapter à vos systèmes existants.</p></div>
                                        </section>
                                        <section class="toggle">
                                            <a class="toggle-title text-4 text-dark">Proposez-vous un accompagnement fiscal et réglementaire&nbsp;?</a>
                                            <div class="toggle-content"><p class="mb-0">Oui, nous vous aidons à respecter toutes les obligations réglementaires et fiscales liées aux transferts internationaux, pour une conformité totale et une gestion sereine.</p></div>
                                        </section>
                                        <section class="toggle">
                                            <a class="toggle-title text-4 text-dark">À quelle fréquence recevrai-je des rapports sur mes transferts&nbsp;?</a>
                                            <div class="toggle-content"><p class="mb-0">Nous vous fournissons des rapports détaillés à la fréquence souhaitée (mensuelle, trimestrielle, annuelle) pour un suivi optimal de vos opérations.</p></div>
                                        </section>
                                        <section class="toggle">
                                            <a class="toggle-title text-4 text-dark">Proposez-vous un service de gestion complète&nbsp;?</a>
                                            <div class="toggle-content"><p class="mb-0">Absolument. Nous prenons en charge l'ensemble du processus, de l'enregistrement des transactions au suivi, pour vous permettre de vous concentrer sur votre activité principale.</p></div>
                                        </section>
                                        <section class="toggle">
                                            <a class="toggle-title text-4 text-dark">Qu'est-ce qui distingue KAYBIC des autres&nbsp;?</a>
                                            <div class="toggle-content"><p class="mb-0">Notre approche personnalisée, notre expertise régionale et notre engagement envers la satisfaction client font de nous un partenaire de confiance pour vos transferts internationaux.</p></div>
                                        </section>
                                        <section class="toggle">
                                            <a class="toggle-title text-4 text-dark">Comment garantissez-vous la sécurité de mes données&nbsp;?</a>
                                            <div class="toggle-content"><p class="mb-0">Nous appliquons les meilleures pratiques de sécurité et utilisons des technologies de chiffrement avancées pour protéger toutes vos informations et transactions.</p></div>
                                        </section>
                                        <section class="toggle">
                                            <a class="toggle-title text-4 text-dark">Aidez-vous à la planification financière et budgétaire&nbsp;?</a>
                                            <div class="toggle-content"><p class="mb-0">Oui, nous proposons un accompagnement stratégique pour la planification, le budget et l'optimisation de vos flux financiers internationaux.</p></div>
                                        </section>
                                        <section class="toggle">
                                            <a class="toggle-title text-4 text-dark">Comment démarrer avec KAYBIC&nbsp;?</a>
                                            <div class="toggle-content"><p class="mb-0">C'est simple&nbsp;! Contactez-nous pour une première consultation gratuite et découvrez comment nous pouvons accompagner votre développement à l'international.</p></div>
                                        </section>
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
                            <div class="col px-0 text-center text-color-light">
                                <div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-lg-center">                                    <div class="me-lg-4 flex-grow-1 flex-lg-grow-0">
                                        <span class="d-inline-block text-3 py-4 px-5 text-uppercase font-weight-medium">Découvrez Plus :</span>
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
