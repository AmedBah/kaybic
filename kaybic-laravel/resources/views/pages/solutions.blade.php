@extends('layouts.app')

@section('title', 'Solutions - KAYBIC AFRICA | Solutions sur mesure pour l\'Afrique')

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
                            <span class="badge bg-color-dark-rgba-10 text-light rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-3"><span class="d-inline-flex py-1 px-2">Nos domaines d'expertise</span></span>
                        </div>                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <h1 class="text-light text-9 text-lg-12 font-weight-semibold line-height-1 mb-2">Nos Solutions</h1>
                    </div>
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <ul class="breadcrumb d-flex text-3-5 font-weight-semi-bold pb-2 mb-3">
                            <li><a href="{{ route('home') }}" class="text-light text-decoration-none">Accueil</a></li>
                            <li class="active text-light">Nos Solutions</li>
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

        <!-- Icons -->
        <div class="border-bottom border-bottom-color-grey-100 mb-4">
            <div class="container">
                <div class="row py-5">
                    <div class="col-lg-4 py-3 py-lg-0 mb-4 mb-sm-5 mb-lg-0">
                        <div class="feature-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                            <div class="feature-box-icon bg-transparent w-auto h-auto p-0 top-0 align-items-center">
                                <img src="{{ asset('img/icons/icon-5.svg') }}" width="44" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary'}" />
                            </div>
                            <div class="feature-box-info w-100 ps-4 ms-1">
                                <h4 class="mt-2 mb-0">Développement de Solutions</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 py-3 py-lg-0 mb-4 mb-sm-5 mb-lg-0">
                        <div class="feature-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                            <div class="feature-box-icon bg-transparent w-auto h-auto p-0 top-0 align-items-center">
                                <img src="{{ asset('img/icons/icon-1.svg') }}" width="44" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary'}" />
                            </div>
                            <div class="feature-box-info w-100 ps-4 ms-1">
                                <h4 class="mt-2 mb-0">Agrégation Mobile Money</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 py-3 py-lg-0">
                        <div class="feature-box appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                            <div class="feature-box-icon bg-transparent w-auto h-auto p-0 top-0 align-items-center">
                                <img src="{{ asset('img/icons/icon-6.svg') }}" width="44" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary'}" />
                            </div>
                            <div class="feature-box-info w-100 ps-4 ms-1">
                                <h4 class="mt-2 mb-0">Audit & Reprise de Code</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-4 pb-4" id="intro">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4">Notre expertise au service de votre transformation digitale</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        <p class="pe-lg-5 mb-4">KAYBIC AFRICA propose une approche intégrée et complète pour accompagner votre croissance digitale. Notre expertise s'articule autour de trois pôles complémentaires : le développement de solutions informatiques sur mesure, l'agrégation de paiement mobile money en Afrique de l'Ouest, et les services d'audit et de reprise de code pour optimiser vos applications existantes.</p>
                    </div>

                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        <p class="mb-0 text-dark d-flex justify-content-center">
                            <img width="29" height="29" src="{{ asset('img/icons/icon-8.svg') }}" class="w-auto d-inline-flex p-relative bottom-2 me-2" alt="">
                            Découvrez nos solutions adaptées aux enjeux spécifiques du marché africain
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio - Fixed the isotope initialization and filtering -->
        <div class="bg-grey-100 solutions-spacing-fix px-3 px-xl-0 border-radius-2 p-relative overflow-hidden">
            <div class="container solutions-container-spacing">
                <div class="row py-3">
                    <div class="col">
                        <div class="d-flex align-items-center justify-content-center">
                            <ul class="nav nav-pills nav-pills-dark sort-source justify-content-center d-inline-flex border-lg border-2 p-1 rounded-pill" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                                <li class="nav-item active" data-option-value="*"><a class="nav-link text-3 px-4 py-2 font-weight-medium rounded-pill active" href="#">Tout afficher</a></li>
                                <li class="nav-item" data-option-value=".developpement"><a class="nav-link text-3 px-4 py-2 font-weight-medium rounded-pill" href="#">Développement de Solutions</a></li>
                                <li class="nav-item" data-option-value=".agregation"><a class="nav-link text-3 px-4 py-2 font-weight-medium rounded-pill" href="#">Agrégation Mobile Money</a></li>
                                <li class="nav-item" data-option-value=".audit"><a class="nav-link text-3 px-4 py-2 font-weight-medium rounded-pill" href="#">Audit & Reprise de Code</a></li>
                            </ul>
                        </div>

                        <div class="sort-destination-loader sort-destination-loader-showing mt-3 pt-1">
                            <div class="row portfolio-list portfolio-grid sort-destination overflow-visible" data-sort-id="portfolio">
                                <div class="col-12 col-sm-6 col-lg-4 isotope-item developpement">
                                    <div class="portfolio-item">
                                        <div class="box-shadow-1 border-radius-2">
                                            <span class="thumb-info border-radius-2 bg-color-light thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                                <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                                                    <a href="#" title="">
                                                        <img src="{{ asset('img/projects/project-thumb-1.jpg') }}" class="img-fluid" alt="">
                                                    </a>
                                                </span>											
                                                
                                                <span class="thumb-info-content">
                                                    <span class="thumb-info-content-inner bg-light p-4">
                                                        <h4 class="mb-1">Développement Web</h4>
                                                        <p class="line-height-7 mb-0">Applications sur mesure</p>
                                                        <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                                            <a href="#" class="text-uppercase font-weight-semibold text-decoration-underline">Voir détails</a>
                                                            <a href="#" class="btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7"><span class="p-static bg-transparent transform-none"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-4 isotope-item agregation">
                                    <div class="portfolio-item">
                                        <div class="box-shadow-1 border-radius-2">
                                            <span class="thumb-info border-radius-2 bg-color-light thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                                <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                                                    <a href="#" title="">
                                                        <img src="{{ asset('img/projects/project-thumb-2.jpg') }}" class="img-fluid" alt="">
                                                    </a>
                                                </span>											
                                                
                                                <span class="thumb-info-content">
                                                    <span class="thumb-info-content-inner bg-light p-4">
                                                        <h4 class="mb-1">EasyTransfert</h4>
                                                        <p class="line-height-7 mb-0">Paiement Mobile Money</p>
                                                        <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                                            <a href="" class="text-uppercase font-weight-semibold text-decoration-underline">Voir détails</a>
                                                            <a href="#" class="btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7"><span class="p-static bg-transparent transform-none"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-4 isotope-item audit">
                                    <div class="portfolio-item">
                                        <div class="box-shadow-1 border-radius-2">
                                            <span class="thumb-info border-radius-2 bg-color-light thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                                <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                                                    <a href="#" title="">
                                                        <img src="{{ asset('img/projects/project-thumb-3.jpg') }}" class="img-fluid" alt="">
                                                    </a>
                                                </span>											
                                                
                                                <span class="thumb-info-content">
                                                    <span class="thumb-info-content-inner bg-light p-4">
                                                        <h4 class="mb-1">Audit de Performance</h4>
                                                        <p class="line-height-7 mb-0">Optimisation de code</p>
                                                        <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                                            <a href="#" class="text-uppercase font-weight-semibold text-decoration-underline">Voir détails</a>
                                                            <a href="#" class="btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7"><span class="p-static bg-transparent transform-none"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-4 isotope-item developpement">
                                    <div class="portfolio-item">
                                        <div class="box-shadow-1 border-radius-2">
                                            <span class="thumb-info border-radius-2 bg-color-light thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                                <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                                                    <a href="#" title="">
                                                        <img src="{{ asset('img/projects/project-thumb-4.jpg') }}" class="img-fluid" alt="">
                                                    </a>
                                                </span>											
                                                
                                                <span class="thumb-info-content">
                                                    <span class="thumb-info-content-inner bg-light p-4">
                                                        <h4 class="mb-1">Applications Mobiles</h4>
                                                        <p class="line-height-7 mb-0">Développement mobile</p>
                                                        <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                                            <a href="#" class="text-uppercase font-weight-semibold text-decoration-underline">Voir détails</a>
                                                            <a href="#" class="btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7"><span class="p-static bg-transparent transform-none"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-4 isotope-item agregation">
                                    <div class="portfolio-item">
                                        <div class="box-shadow-1 border-radius-2">
                                            <span class="thumb-info border-radius-2 bg-color-light thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                                <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                                                    <a href="#" title="">
                                                        <img src="{{ asset('img/projects/project-thumb-5.jpg') }}" class="img-fluid" alt="">
                                                    </a>
                                                </span>											
                                               
                                                <span class="thumb-info-content">
                                                    <span class="thumb-info-content-inner bg-light p-4">
                                                        <h4 class="mb-1">EasyForBusiness</h4>
                                                        <p class="line-height-7 mb-0">API pour entreprises</p>
                                                        <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                                            <a href="https://easytransfert.ci/" class="text-uppercase font-weight-semibold text-decoration-underline">Voir détails</a>
                                                            <a href="https://easytransfert.ci/" class="btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7"><span class="p-static bg-transparent transform-none"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-4 isotope-item audit">
                                    <div class="portfolio-item">
                                        <div class="box-shadow-1 border-radius-2">
                                            <span class="thumb-info border-radius-2 bg-color-light thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                                <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                                                    <a href="#" title="">
                                                        <img src="{{ asset('img/projects/project-thumb-6.jpg') }}" class="img-fluid" alt="">
                                                    </a>
                                                </span>											
                                                
                                                <span class="thumb-info-content">
                                                    <span class="thumb-info-content-inner bg-light p-4">
                                                        <h4 class="mb-1">Reprise de Code</h4>
                                                        <p class="line-height-7 mb-0">Maintenance & évolution</p>
                                                        <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                                            <a href="#" class="text-uppercase font-weight-semibold text-decoration-underline">Voir détails</a>
                                                            <a href="#" class="btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7"><span class="p-static bg-transparent transform-none"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detailed Solutions -->
        <div class="container solutions-container-spacing">
            <div class="row py-3">
                <div class="col text-center">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <h2 class="text-9 font-weight-semibold line-height-1 mb-4">Nos domaines d'expertise</h2>
                    </div>
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        <p class="lead mb-4">Découvrez en détail nos services adaptés aux besoins des entreprises africaines</p>
                    </div>
                </div>
            </div>

            <!-- Développement de Solutions -->
            <div class="row align-items-center solutions-detailed-section mb-4">
                <div class="col-lg-6 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                    <div class="bg-light p-4 p-lg-5 border-radius-2">
                        <span class="badge bg-primary text-uppercase font-weight-bold text-px-3 py-2 mb-3">Développement de Solutions</span>
                        <h3 class="font-weight-bold text-6 mb-3">Applications sur mesure adaptées à vos besoins</h3>
                        <p class="text-3-5 line-height-9 mb-4">Notre équipe de développeurs expérimentés crée des applications web et mobiles adaptées aux spécificités du marché africain. Nous utilisons les technologies les plus récentes pour garantir des solutions évolutives, performantes et sécurisées.</p>
                        <ul class="list list-icons list-icons-style-2 list-icons-lg font-weight-medium">
                            <li><i class="fas fa-check text-primary"></i>Applications web sur mesure</li>
                            <li><i class="fas fa-check text-primary"></i>Applications mobiles Android et iOS</li>
                            <li><i class="fas fa-check text-primary"></i>Développement d'API personnalisées</li>
                            <li><i class="fas fa-check text-primary"></i>Interfaces utilisateur modernes et intuitives</li>
                            <li><i class="fas fa-check text-primary"></i>Accompagnement à toutes les étapes du projet</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                    <img src="{{ asset('img/generic/generic-1.jpg') }}" class="img-fluid border-radius-2" alt="Développement de Solutions KAYBIC">
                </div>
            </div>

            <!-- Agrégation Mobile Money -->
            <div class="row align-items-center solutions-detailed-section mb-4">
                <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                    <div class="bg-light p-4 p-lg-5 border-radius-2">
                        <span class="badge bg-primary text-uppercase font-weight-bold text-px-3 py-2 mb-3">Agrégation Mobile Money</span>
                        <h3 class="font-weight-bold text-6 mb-3">La solution complète pour vos paiements mobiles en Afrique</h3>
                        <p class="text-3-5 line-height-9 mb-4">KAYBIC facilite l'intégration des moyens de paiement mobile money pour votre entreprise. Notre API EasyTransfert vous permet d'accepter tous les moyens de paiement mobile d'Afrique de l'Ouest en toute simplicité.</p>
                        <ul class="list list-icons list-icons-style-2 list-icons-lg font-weight-medium">
                            <li><i class="fas fa-check text-primary"></i>API d'encaissement et de décaissement</li>
                            <li><i class="fas fa-check text-primary"></i>Compatibilité avec tous les opérateurs mobile money</li>
                            <li><i class="fas fa-check text-primary"></i>Tableau de bord complet pour suivre vos transactions</li>
                            <li><i class="fas fa-check text-primary"></i>Documentation détaillée et support technique</li>
                            <li><i class="fas fa-check text-primary"></i>Solution sécurisée et conforme aux normes</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                    <img src="{{ asset('img/generic/generic-2.jpg') }}" class="img-fluid border-radius-2" alt="Agrégation Mobile Money KAYBIC">
                </div>
            </div>

            <!-- Audit & Reprise de Code -->
            <div class="row pb-5 align-items-center solutions-detailed-section">
                <div class="col-lg-6 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                    <div class="bg-light p-4 p-lg-5 border-radius-2">
                        <span class="badge bg-primary text-uppercase font-weight-bold text-px-3 py-2 mb-3">Audit & Reprise de Code</span>
                        <h3 class="font-weight-bold text-6 mb-3">Optimisez vos applications existantes</h3>
                        <p class="text-3-5 line-height-9 mb-4">Notre équipe d'experts analyse et améliore vos applications existantes pour en optimiser les performances, la sécurité et la maintenabilité. Nous vous accompagnons dans l'évolution de vos systèmes informatiques.</p>
                        <ul class="list list-icons list-icons-style-2 list-icons-lg font-weight-medium">
                            <li><i class="fas fa-check text-primary"></i>Audit de performance et de sécurité</li>
                            <li><i class="fas fa-check text-primary"></i>Refactoring et optimisation de code</li>
                            <li><i class="fas fa-check text-primary"></i>Migration vers des technologies modernes</li>
                            <li><i class="fas fa-check text-primary"></i>Documentation technique complète</li>
                            <li><i class="fas fa-check text-primary"></i>Formation de vos équipes techniques</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                    <img src="{{ asset('img/generic/generic-3.jpg') }}" class="img-fluid border-radius-2" alt="Audit & Reprise de Code KAYBIC">
                </div>
            </div>
        </div>

        <!-- Explore Further -->
        <div class="bg-secondary border-radius-2 p-relative overflow-hidden solutions-spacing-fix">
            <div class="container-fluid">
                <div class="row">
                    <div class="col px-0 text-center text-color-light">
                        <div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-lg-center">
                            <div class="me-lg-4 flex-grow-1 flex-lg-grow-0">
                                <span class="d-inline-block text-3 py-4 px-5 text-uppercase font-weight-medium">Pour aller plus loin :</span>
                            </div>
                            <div class="me-3 ps-3 p-relative bottom-1 pt-3 pt-lg-0">
                                <a href="{{ route('process.integration-support') }}" class="btn btn-arrow-effect-1 bg-transparent text-light border-0 text-lg-3-5 py-2 py-lg-0">Découvrir notre processus d'intégration <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                            <div class="py-3 py-lg-0 p-relative bottom-1 border-start border-color-light-rgba-20">
                                <a href="{{ route('contact') }}" class="btn btn-arrow-effect-1 bg-transparent text-light border-0 text-lg-3-5 py-2 py-lg-0">Demander une démonstration <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
