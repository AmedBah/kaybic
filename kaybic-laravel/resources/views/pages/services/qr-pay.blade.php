@extends('layouts.app')

@section('title', 'QR PAY KAYBIC | KAYBIC AFRICA')

@section('content')
    
    <div role="main" class="main px-3 px-lg-5">

                <div class="page-header py-0 bg-primary px-3 px-xl-0 border-radius-2 p-relative mb-5">
                    <div class="overflow-hidden p-absolute top-0 left-0 bottom-0 h-100 w-100">
                        <div class="custom-el-5 custom-pos-4">
                            <img class="img-fluid opacity-2 opacity-hover-2" src="img/svg/waves.svg" alt="">
                        </div>
                    </div>                    
                    <div class="container p-relative z-index-1 py-2">
                        <div class="row align-items-center py-4">
                            <div class="col-8 col-md-7">                                
                                <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                                    <span class="badge bg-color-dark-rgba-10 text-light rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-3"><span class="d-inline-flex py-1 px-2">Solutions de Paiement</span></span>
                                </div>                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                <h1 class="text-light text-9 text-lg-12 font-weight-semibold line-height-1 mb-2">QR PAY KAYBIC</h1>
                            </div>
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                <ul class="breadcrumb d-flex text-3-5 font-weight-semi-bold pb-2 mb-3">
                                    <li><a href="Accueil.html" class="text-light text-decoration-none">Accueil</a></li>
                                    <li><a href="services.html" class="text-light text-decoration-none">Services</a></li>
                                    <li class="active text-light">QR PAY</li>
                                </ul>
                            </div>
                            </div>
                            <div class="col-4 col-md-5 p-relative">
                                
                                <div class="custom-mask-img custom-mask-img-4 custom-el-6">
                                    <img src="img/generic/generic-11.jpg" loading="lazy" class="img-fluid" alt="" />
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
                                        <li class="nav-item"><a href="service-transfert-international.html" class="nav-link text-dark">Transfert International</a></li>
                                        <li class="nav-item"><a href="service-qr-pay.html" class="nav-link active text-dark">QR PAY</a></li>
                                        <li class="nav-item"><a href="solutions.html" class="nav-link text-dark">Solutions Entreprises</a></li>
                                        <li class="nav-item"><a href="process-integration-support.html" class="nav-link text-dark">Intégration & Support</a></li>
                                  
                                    </ul>

                                </div>
                            </div>

                            <div class="bg-tertiary text-light p-4 border-radius-2 mb-4">                                <div class="m-3">
                                    <h4 class="text-5 font-weight-semibold line-height-1 mb-4 text-light">Notre Équipe</h4>

                                    <div class="border-radius-2 overflow-hidden">
                                        <span class="thumb-info thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                            <span class="thumb-info-wrapper border-radius-0 rounded-top">
                                                <img src="img/team/team-3.jpg" loading="lazy" class="img-fluid" alt="">
                                            </span>											
                                            <span class="thumb-info-content">
                                                <span class="thumb-info-content-inner bg-light p-4">
                                                    <h4 class="text-5 mb-1">Équipe KAYBIC</h4>
                                                    <p class="line-height-7 text-3 mb-0">Experts Fintech</p>
                                                    <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                                        <ul class="social-icons social-icons-clean social-icons-medium">
                                                            <li class="social-icons-instagram">
                                                                <a href="http://www.instagram.com/" target="_blank" title="Instagram">
                                                                    <i class="fab fa-instagram"></i>
                                                                </a>
                                                            </li>
                                                            <li class="social-icons-x">
                                                                <a href="http://www.x.com/" target="_blank" title="X">
                                                                    <i class="fab fa-x-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <li class="social-icons-facebook">
                                                                <a href="http://www.facebook.com/" target="_blank" title="Facebook">
                                                                    <i class="fab fa-facebook-f"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </div>

                                    <div class="d-flex flex-column pt-4">
                                        <div class="pe-4">
                                            <div class="feature-box feature-box-secondary align-items-center">
                                                <div class="feature-box-icon feature-box-icon-lg p-static box-shadow-7">
                                                    <img src="img/icons/phone-2.svg" width="30" height="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary'}" />
                                                </div>
                                                <div class="feature-box-info ps-2">
                                                    <strong class="d-block text-uppercase text-color-secondary p-relative top-2">Appelez-nous</strong>
                                                    <a href="tel:+2252530000869" class="text-decoration-none font-secondary text-5 font-weight-semibold text-color-light text-color-hover-primary transition-2ms negative-ls-05 ws-nowrap p-relative bottom-2">+225 25 30 00 08 69</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pe-4 pt-4">
                                            <div class="feature-box feature-box-secondary align-items-center">
                                                <div class="feature-box-icon feature-box-icon-lg p-static box-shadow-7">
                                                    <img src="img/icons/email.svg" width="30" height="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary'}" />
                                                </div>
                                                <div class="feature-box-info ps-2">
                                                    <strong class="d-block text-uppercase text-color-secondary p-relative top-2">Email</strong>
                                                    <a href="mailto:Christmerari@easytransfert.ci" class="text-decoration-none font-secondary text-5 font-weight-semibold text-color-light text-color-hover-primary transition-2ms negative-ls-05 ws-nowrap p-relative bottom-2">Christmerari@easytransfert.ci</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                        <div class="col-lg-8">
                            <p>KAYBIC QR PAY révolutionne le paiement mobile en Afrique avec une solution de paiement par QR Code simple, sécurisée et instantanée. Transformez votre smartphone en terminal de paiement et facilitez les transactions pour vos clients.</p>

                            <div class="row mt-5">
                                <div class="col-lg-6 mb-4 mb-lg-0 pe-lg-5">
                                    <h2 class="text-7 font-weight-semibold line-height-1 mb-4">Fonctionnalités QR PAY</h2>
                                    <p>Une solution complète de paiement par QR Code adaptée aux besoins du marché africain, offrant simplicité et sécurité pour tous vos paiements.</p>
                                    <ul class="list list-icons list-icons-lg list-icons-style-3 text-3-5">
                                        <li><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i> Paiement instantané par scan QR</li>
                                        <li><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i> Compatible tous mobiles</li>
                                        <li><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i> Sécurité blockchain avancée</li>
                                        <li><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i> Notifications temps réel</li>
                                        <li><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i> Historique détaillé</li>
                                        <li><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i> Support 24/7</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <img class="img-fluid border-radius-2 mb-2" src="img/generic/generic-9.jpg" alt="">
    
                                    <div class="appear-animation mt-2 animated blurIn appear-animation-visible" data-appear-animation="blurIn" data-appear-animation-delay="300" style="animation-delay: 300ms;">
                                        <div class="d-flex align-items-center pt-4">
                                            <strong class="d-inline-flex text-12 text-dark n-ls-5">99%</strong>
                                            <div class="p-2 ps-3">
                                                <div class="animated-icon animated fadeIn svg-fill-color-secondary"><svg fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 5 24 14" id="icon_221725475921235" data-filename="icon-6.svg" width="48" height="48"><clipPath id="clip0_246_1849"><path d="m0 0h24v24h-24z"></path></clipPath><g clip-path="url(#clip0_246_1849)" clip-rule="evenodd" fill="rgb(0,0,0)" fill-rule="evenodd"><path d="m23.7071 5.29289c.3905.39053.3905 1.02369 0 1.41422l-9.5 9.49999c-.3905.3905-1.0237.3905-1.4142 0l-4.2929-4.2929-6.79289 6.7929c-.39053.3905-1.023693.3905-1.414217 0-.3905241-.3905-.3905241-1.0237 0-1.4142l7.499997-7.50001c.39053-.39052 1.02369-.39052 1.41422 0l4.29289 4.29291 8.7929-8.79291c.3905-.39052 1.0237-.39052 1.4142 0z"></path><path d="m16 6c0-.55228.4477-1 1-1h6c.5523 0 1 .44772 1 1v6c0 .5523-.4477 1-1 1s-1-.4477-1-1v-5h-5c-.5523 0-1-.44772-1-1z"></path></g></svg></div>
                                            </div>
                                        </div>
                                        <span class="custom-font-tertiary text-7 text-dark n-ls-1 fst-italic">Taux de Réussite</span>
                                        <p class="mb-0 pt-2 text-3-5 line-height-7">Des transactions fiables et sécurisées.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Delivering Excellence -->
                            <div class="bg-quaternary border-radius-2 mt-4 mt-lg-5 p-relative overflow-hidden">
                                <div class="container p-relative z-index-1">
                                    <div class="row px-3 px-lg-5 py-5 py-lg-0 align-items-center">
                                        <div class="col-lg-7">                                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                                            <h2 class="text-9 font-weight-semibold line-height-1 mb-4"><span class="p-relative z-index-1">Excellence</span> <mark class="text-dark mark mark-color mark-color-primary mark-pos-2 mark-height-100 p-0 appear-animation" data-appear-animation data-appear-animation-delay="0">QR PAY</mark> par <mark class="text-dark mark mark-color mark-color-primary mark-pos-2 mark-height-100 p-0 appear-animation" data-appear-animation data-appear-animation-delay="1500">KAYBIC</mark></h2>
                                        </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="600">                                                        <div class="d-flex align-items-center pt-4">
                                                            <strong class="d-inline-flex text-15 text-dark n-ls-5">24h</strong>
                                                            <div class="p-2 ps-3">
                                                                <img src="img/icons/icon-6.svg" width="48" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary'}" />
                                                            </div>
                                                        </div>
                                                        <span class="custom-font-tertiary text-7 text-dark n-ls-1 fst-italic">Disponibilité 24/7</span>
                                                        <div class="pe-lg-5">
                                                            <p class="mb-0 pt-2 text-3-5 line-height-7 pe-lg-5">Paiements instantanés à toute heure du jour et de la nuit.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                    <div class="col-lg-5 p-5">
                                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                                            <img src="{{ asset('img/generic/generic-18.jpg') }}" alt="" class="w-100 border-radius-2" />
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Why Choose Us -->
                            <div class="row align-items-center mt-3 py-5">
                                <div class="col">
                                    <h2 class="text-7 font-weight-semibold line-height-1 mb-4">Pourquoi Choisir QR PAY KAYBIC ?</h2>

                                    <div class="accordion accordion-modern-status accordion-modern-status-arrow accordion-modern-status-arrow-dark" id="accordionWhyChooseUs">
                                        <div class="card card-default box-shadow-8 border-radius-2 bg-light">
                                            <div class="card-header bg-transparent" id="collapseWhyChooseUsHeadingOne">
                                                <h4 class="card-title m-0">                                                    <a class="accordion-toggle bg-transparent text-3-5 text-color-dark font-weight-semi-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapseWhyChooseUsOne" aria-expanded="false" aria-controls="collapseWhyChooseUsOne">
                                                        Simplicité d'utilisation
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseWhyChooseUsOne" class="collapse" aria-labelledby="collapseWhyChooseUsHeadingOne" data-bs-parent="#accordionWhyChooseUs">
                                                <div class="card-body pt-0">
                                                    <p class="mb-0">Notre solution QR PAY KAYBIC est conçue pour être simple et accessible à tous. Générez, scannez et payez en quelques secondes, sans complexité technique. Idéal pour commerçants et clients recherchant la rapidité et la simplicité au quotidien.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-default box-shadow-8 border-radius-2 bg-light">
                                            <div class="card-header bg-transparent" id="collapseWhyChooseUsHeadingTwo">
                                                <h4 class="card-title m-0">                                                    <a class="accordion-toggle bg-transparent text-3-5 text-color-dark font-weight-semi-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapseWhyChooseUsTwo" aria-expanded="false" aria-controls="collapseWhyChooseUsTwo">
                                                        Sécurité maximale
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseWhyChooseUsTwo" class="collapse" aria-labelledby="collapseWhyChooseUsHeadingTwo" data-bs-parent="#accordionWhyChooseUs">
                                                <div class="card-body pt-0">
                                                    <p class="mb-0">Chaque transaction est protégée par notre technologie blockchain avancée et nos protocoles de sécurité renforcés. Vos données financières sont cryptées et sécurisées selon les standards internationaux.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-default box-shadow-8 border-radius-2 bg-light">
                                            <div class="card-header bg-transparent" id="collapseWhyChooseUsHeadingThree">
                                                <h4 class="card-title m-0">
                                                    <a class="accordion-toggle bg-transparent text-3-5 text-color-dark font-weight-semi-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapseWhyChooseUsThree" aria-expanded="false" aria-controls="collapseWhyChooseUsThree">
                                                        Service Fiable et Instantané
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseWhyChooseUsThree" class="collapse" aria-labelledby="collapseWhyChooseUsHeadingThree" data-bs-parent="#accordionWhyChooseUs">
                                                <div class="card-body pt-0">
                                                    <p class="mb-0">QR PAY KAYBIC garantit des paiements instantanés et une disponibilité continue. Notre plateforme assure la fiabilité des transactions, pour que chaque paiement soit validé en temps réel, sans interruption.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-default box-shadow-8 border-radius-2 bg-light">
                                            <div class="card-header bg-transparent" id="collapseWhyChooseUsHeadingFour">
                                                <h4 class="card-title m-0">                                                    <a class="accordion-toggle bg-transparent text-3-5 text-color-dark font-weight-semi-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapseWhyChooseUsFour" aria-expanded="false" aria-controls="collapseWhyChooseUsThree">
                                                        Support dédié
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseWhyChooseUsFour" class="collapse" aria-labelledby="collapseWhyChooseUsHeadingFour" data-bs-parent="#accordionWhyChooseUs">
                                                <div class="card-body pt-0">
                                                    <p class="mb-0">Notre équipe d'experts en fintech vous accompagne 24h/7j. Bénéficiez d'un support technique réactif et d'une assistance personnalisée pour optimiser votre utilisation de QR PAY KAYBIC et développer votre activité.</p>
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
                                        <section class="toggle">                                            <a class="toggle-title text-4 text-dark">Comment fonctionne QR PAY KAYBIC ?</a>
                                            <div class="toggle-content"><p class="mb-0">QR PAY KAYBIC fonctionne par scan de QR Code. Le commerçant génère un QR Code, le client le scanne avec son smartphone, saisit le montant et confirme le paiement. La transaction est instantanée et sécurisée.</p></div>
                                        </section>
                                        <section class="toggle">
                                                <a class="toggle-title text-4 text-dark">Quels sont les frais d’utilisation de QR PAY KAYBIC&nbsp;?</a>
                                                <div class="toggle-content"><p class="mb-0">Nos frais sont transparents et adaptés à chaque type d’utilisateur. Vous bénéficiez de tarifs compétitifs, sans frais cachés, et d’une grille claire selon le volume de transactions. Contactez-nous pour une offre personnalisée.</p></div>
                                        </section>
                                        <section class="toggle">
                                                <a class="toggle-title text-4 text-dark">Avec quels smartphones ou applications QR PAY est-il compatible&nbsp;?</a>
                                                <div class="toggle-content"><p class="mb-0">QR PAY KAYBIC fonctionne sur tous les smartphones équipés d’un appareil photo et d’une connexion internet. Aucune application spécifique n’est requise&nbsp;: un simple lecteur QR ou l’appareil photo suffit pour payer ou encaisser.</p></div>
                                        </section>
                                        <section class="toggle">                                                <a class="toggle-title text-4 text-dark">Comment garantissez-vous la sécurité des transactions ?</a>
                                                <div class="toggle-content"><p class="mb-0">Chaque transaction est sécurisée par notre technologie blockchain et nos protocoles de cryptage avancés. Vos données sont protégées selon les standards internationaux PCI DSS et les réglementations locales.</p></div>
                                        </section>
                                        <section class="toggle">
                                                <a class="toggle-title text-4 text-dark">Comment suivre mes paiements et mon historique&nbsp;?</a>
                                                <div class="toggle-content"><p class="mb-0">Vous accédez à un historique détaillé de toutes vos transactions via votre espace personnel. Des rapports et notifications sont disponibles en temps réel pour un suivi optimal de votre activité.</p></div>
                                        </section>
                                        <section class="toggle">                                                <a class="toggle-title text-4 text-dark">Puis-je utiliser QR PAY sans connexion internet ?</a>
                                                <div class="toggle-content"><p class="mb-0">Une connexion internet est nécessaire pour effectuer les transactions QR PAY, afin de garantir la sécurité et la validation en temps réel des paiements. Notre système fonctionne même avec une connexion 2G.</p></div>
                                        </section>
                                        <section class="toggle">
                                                <a class="toggle-title text-4 text-dark">Qu’est-ce qui distingue QR PAY KAYBIC des autres solutions&nbsp;?</a>
                                                <div class="toggle-content"><p class="mb-0">QR PAY KAYBIC se distingue par sa simplicité d’utilisation, sa sécurité renforcée et son support client réactif. Notre solution est pensée pour le marché africain et s’adapte à tous les profils d’utilisateurs.</p></div>
                                        </section>
                                        <section class="toggle">                                                <a class="toggle-title text-4 text-dark">Comment protégez-vous mes données personnelles ?</a>
                                                <div class="toggle-content"><p class="mb-0">Nous appliquons les plus hauts standards de protection des données. Vos informations personnelles sont cryptées, stockées de manière sécurisée et ne sont jamais partagées avec des tiers sans votre consentement explicite.</p></div>
                                        </section>
                                        <section class="toggle">                                                <a class="toggle-title text-4 text-dark">Puis-je suivre mes transactions en temps réel ?</a>
                                                <div class="toggle-content"><p class="mb-0">Oui, notre plateforme vous permet de suivre toutes vos transactions en temps réel. Vous recevez des notifications instantanées et avez accès à un historique détaillé de tous vos paiements via notre interface.</p></div>
                                        </section>
                                        <section class="toggle">
                                                <a class="toggle-title text-4 text-dark">Comment démarrer avec QR PAY KAYBIC&nbsp;?</a>
                                                <div class="toggle-content"><p class="mb-0">C’est simple&nbsp;! Contactez-nous pour activer votre compte marchand ou utilisateur, et commencez à accepter ou effectuer des paiements par QR Code en quelques minutes.</p></div>
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
                                <div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-lg-center">
                                    <div class="me-lg-4 flex-grow-1 flex-lg-grow-0">                                        <span class="d-inline-block text-3 py-4 px-5 text-uppercase font-weight-medium">Découvrez Plus :</span>
                                    </div>
                                    <div class="me-3 ps-3 p-relative bottom-1 pt-3 pt-lg-0">
                                        <a href="services.html" class="btn btn-arrow-effect-1 bg-transparent text-light border-0 text-lg-3-5 py-2 py-lg-0">Nos Services <i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="py-3 py-lg-0 p-relative bottom-1 border-start border-color-light-rgba-20">
                                        <a href="contact.html" class="btn btn-arrow-effect-1 bg-transparent text-light border-0 text-lg-3-5 py-2 py-lg-0">Contactez-nous <i class="fas fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                

            </div>			
            

@endsection
