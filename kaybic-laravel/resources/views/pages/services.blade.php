@extends('layouts.app')

@section('title', 'Nos Solutions - Kaybic')

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
                            <span class="badge bg-color-dark-rgba-10 text-light rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-3"><span class="d-inline-flex py-1 px-2">Nos Solutions</span></span>
                        </div>                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <h1 class="text-light text-9 text-lg-12 font-weight-semibold line-height-1 mb-2">Produits & Services</h1>
                    </div>
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <ul class="breadcrumb d-flex text-3-5 font-weight-semi-bold pb-2 mb-3">
                            <li><a href="{{ route('home') }}" class="text-light text-decoration-none">Accueil</a></li>
                            <li class="active text-light">Produits</li>
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

        <!-- Intro -->
        <div class="container" id="intro">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center p-relative pt-0 pb-2 py-lg-5 pe-lg-5">
                    <div class="w-100 border-radius-2 overflow-hidden appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                        <img src="{{ asset('img/generic/generic-13.jpg') }}" alt=""  />
                    </div>
                </div>
                <div class="col-lg-6 py-lg-5 ps-lg-4">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4">Solutions de paiement mobile complètes pour l'Afrique de l'Ouest</h2>
                    </div>
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        <p class="pe-lg-5">Nous proposons une gamme complète de solutions de paiement mobile conçues pour répondre aux besoins diversifiés de nos clients. Que vous soyez un particulier, une entreprise ou un professionnel, notre équipe d'experts expérimentés est là pour vous fournir l'expertise et le support dont vous avez besoin pour atteindre vos objectifs financiers.</p>
                    </div>

                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                        <div class="d-flex flex-column flex-lg-row pt-3 align-items-lg-center">
                            <div>
                                <a href="{{ route('about') }}" class="btn btn-rounded box-shadow-7 font-weight-medium btn-swap-1" style="background-color: #d33636; color: white;"  data-clone-element="1">
                                    <span>En savoir plus <i class="fa-solid fa-arrow-right ms-2 p-relative left-10"></i></span>
                                </a>
                            </div>
                            <div class="text-4 px-3 d-none d-lg-block">-</div>
                            <div class="pt-4 pt-lg-0">
                                <div class="feature-box feature-box-secondary align-items-center">
                                    <div class="feature-box-icon feature-box-icon-lg p-static box-shadow-7">
                                        <img src="{{ asset('img/icons/phone-2.svg') }}" width="30" height="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary'}" />
                                    </div>
                                    <div class="feature-box-info ps-2">
                                        <strong class="d-block text-uppercase text-color-secondary p-relative top-2">Appelez-nous</strong>
                                        <a href="tel:+2252530000869" class="text-decoration-none font-secondary text-3 font-weight-semibold text-color-dark text-color-hover-primary transition-2ms negative-ls-05 ws-nowrap p-relative bottom-2">+225 25 30 00 08 69</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Services -->
        <div class="bg-tertiary px-3 px-xl-0 border-radius-2 text-light mt-5 mt-lg-0 p-relative overflow-hidden">
            <div class="custom-el-3 custom-pos-6 opacity-1">
                <img class="img-fluid opacity-5" src="{{ asset('img/svg/waves-2.svg') }}" alt="">
            </div>
            <div class="container p-relative z-index-1">
                <div class="row align-items-center py-5">
                    <div class="col py-4">
                        <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                            <span class="badge bg-gradient-tertiary-dark text-light rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-4"><span class="d-inline-flex py-1 px-2">Nos Solutions</span></span>
                        </div>
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                            <h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-2 text-light">Solutions Mobile Money</h2>
                        </div>
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                            <p class="pe-lg-5 text-light opacity-7">Des solutions complètes pour tous vos besoins de paiement mobile en Afrique de l'Ouest.</p>
                        </div>
                        
                        <div class="pt-2 pb-4">
                            <div class="row">
                                <div class="col-lg-4 mb-4 pb-1 h-100">
                                    <div class="box-shadow-7 border-radius-2 overflow-hidden h-100 d-flex flex-column">
                                        <span class="thumb-info thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                            <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                                                <a href="{{ route('services.api-payin') }}" title="">
                                                    <img src="{{ asset('img/services/service-1.jpg') }}" loading="lazy" class="img-fluid" alt="">
                                                </a>
                                            </span>											
                                            <span class="thumb-info-content">
                                                <span class="thumb-info-content-inner bg-light p-4">
                                                    <h4 class="text-5 mb-2">API PayIN</h4>
                                                    <span class="badge text-3 mb-1 badge-sm bg-success text-white rounded-pill">Encaissement</span>
                                                    <p class="line-height-7 text-3 mb-0">Solution d'encaissement robuste pour collecter les paiements depuis tous les portefeuilles Mobile Money de la région CEDEAO.</p>
                                                    <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                                        <a href="{{ route('services.api-payin') }}" class="text-uppercase text-color-secondary text-color-hover-primary font-weight-semibold text-decoration-underline">Voir détails</a>
                                                        <a href="{{ route('services.api-payin') }}" class="btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7"><span class="p-static bg-transparent transform-none"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4 pb-1 h-100">
                                    <div class="box-shadow-7 border-radius-2 overflow-hidden h-100 d-flex flex-column">
                                        <span class="thumb-info thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                            <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                                                <a href="{{ route('services.api-payout') }}" title="">
                                                    <img src="{{ asset('img/services/service-2.jpg') }}" loading="lazy" class="img-fluid" alt="">
                                                </a>
                                            </span>											
                                            <span class="thumb-info-content">
                                                <span class="thumb-info-content-inner bg-light p-4">
                                                    <h4 class="text-5 mb-2">API PayOUT</h4>
                                                    <span class="badge text-3 mb-1 badge-sm bg-danger text-white rounded-pill">Décaissement</span>
                                                    <p class="line-height-7 text-3 mb-0">Solution de décaissement sécurisée pour effectuer des virements vers tous les portefeuilles Mobile Money de la région CEDEAO.</p>
                                                    <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                                        <a href="{{ route('services.api-payout') }}" class="text-uppercase text-color-secondary text-color-hover-primary font-weight-semibold text-decoration-underline">Voir détails</a>
                                                        <a href="{{ route('services.api-payout') }}" class="btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7"><span class="p-static bg-transparent transform-none"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 mb-4 pb-1 h-100">
                                    <div class="box-shadow-7 border-radius-2 overflow-hidden h-100 d-flex flex-column">
                                        <span class="thumb-info thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                            <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                                                <a href="{{ route('services.qr-pay') }}" title="">
                                                    <img src="{{ asset('img/services/service-4.jpg') }}" loading="lazy" class="img-fluid" alt="">
                                                </a>
                                            </span>											
                                            <span class="thumb-info-content">
                                                <span class="thumb-info-content-inner bg-light p-4">
                                                    <h4 class="text-5 mb-2">QR PAY</h4>
                                                    <span class="badge text-3 mb-1 badge-sm bg-info text-white rounded-pill">Universel</span>
                                                    <p class="line-height-7 text-3 mb-0">Solution de paiement par QR Code universelle compatible avec tous les opérateurs Mobile Money pour des transactions rapides et sécurisées.</p>
                                                    <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                                        <a href="{{ route('services.qr-pay') }}" class="text-uppercase text-color-secondary text-color-hover-primary font-weight-semibold text-decoration-underline">Voir détails</a>
                                                        <a href="{{ route('services.qr-pay') }}" class="btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7"><span class="p-static bg-transparent transform-none"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-lg-4 mb-4 pb-1 h-100">
                                    <div class="box-shadow-7 border-radius-2 overflow-hidden h-100 d-flex flex-column">
                                        <span class="thumb-info thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                            <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                                                <a href="{{ route('services.api-transfert') }}" title="">
                                                    <img src="{{ asset('img/services/service-3.jpg') }}" loading="lazy" class="img-fluid" alt="">
                                                </a>
                                            </span>											
                                            <span class="thumb-info-content">
                                                <span class="thumb-info-content-inner bg-light p-4">
                                                    <h4 class="text-5 mb-2">TRANSFERT INTERNATIONAL</h4>
                                                    <span class="badge text-3 mb-1 badge-sm bg-warning text-dark rounded-pill">Transfrontalier</span>
                                                    <p class="line-height-7 text-3 mb-0">Service de transfert d'argent instantané entre tous les pays de la CEDEAO avec les meilleurs taux de change du marché.</p>
                                                    <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                                        <a href="{{ route('services.api-transfert') }}" class="text-uppercase text-color-secondary text-color-hover-primary font-weight-semibold text-decoration-underline">Voir détails</a>
                                                        <a href="{{ route('services.api-transfert') }}" class="btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7"><span class="p-static bg-transparent transform-none"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-lg-4 mb-4 pb-1 h-100">
                                    <div class="box-shadow-7 border-radius-2 overflow-hidden h-100 d-flex flex-column">
                                        <span class="thumb-info thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                            <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                                                <a href="{{ route('solutions') }}" title="">
                                                    <img src="{{ asset('img/services/service-5.jpg') }}" loading="lazy" class="img-fluid" alt="">
                                                </a>
                                            </span>											
                                            <span class="thumb-info-content">
                                                <span class="thumb-info-content-inner bg-light p-4">
                                                    <h4 class="text-5 mb-2">SOLUTIONS ENTREPRISES</h4>
                                                    <span class="badge text-3 mb-1 badge-sm bg-dark text-white rounded-pill">B2B</span>
                                                    <p class="line-height-7 text-3 mb-0">Suite complète d'outils et APIs personnalisées pour les entreprises avec tableaux de bord avancés et support technique dédié.</p>
                                                    <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                                        <a href="{{ route('solutions') }}" class="text-uppercase text-color-secondary text-color-hover-primary font-weight-semibold text-decoration-underline">Voir détails</a>
                                                        <a href="{{ route('solutions') }}" class="btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7"><span class="p-static bg-transparent transform-none"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4 pb-1 h-100">
                                    <div class="box-shadow-7 border-radius-2 overflow-hidden h-100 d-flex flex-column">
                                        <span class="thumb-info thumb-info-no-overlay thumb-info-show-hidden-content-hover">
                                            <span class="thumb-info-wrapper overlay overlay-show overlay-gradient-bottom-content border-radius-0 rounded-top">
                                                <a href="{{ route('process.integration-support') }}" title="">
                                                    <img src="{{ asset('img/services/service-6.jpg') }}" loading="lazy" class="img-fluid" alt="">
                                                </a>
                                            </span>											
                                            <span class="thumb-info-content">
                                                <span class="thumb-info-content-inner bg-light p-4">
                                                    <h4 class="text-5 mb-2">INTÉGRATION & SUPPORT</h4>
                                                    <span class="badge text-3 mb-1 badge-sm bg-secondary text-white rounded-pill">Technique</span>
                                                    <p class="line-height-7 text-3 mb-0">Accompagnement technique complet avec formation, documentation détaillée et support 24/7 pour une intégration réussie.</p>
                                                    <span class="thumb-info-content-inner-hidden p-absolute d-block w-100 py-3">
                                                        <a href="{{ route('process.integration-support') }}" class="text-uppercase text-color-secondary text-color-hover-primary font-weight-semibold text-decoration-underline">Voir détails</a>
                                                        <a href="{{ route('process.integration-support') }}" class="btn btn-light btn-rounded box-shadow-7 btn-xl border-0 text-3 p-0 btn-with-arrow-solid p-absolute right-0 transform3dx-n100 bottom-7"><span class="p-static bg-transparent transform-none"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                            <p class="mb-0 text-light d-flex justify-content-center">
                                <img src="{{ asset('img/icons/icon-5.svg') }}" width="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary me-2'}" />
                                24/7 Disponibilité - Support continu pour tous vos besoins de paiement mobile, à tout moment.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Secteurs d'activité -->
        <div class="container py-4">
            <div class="row align-items-center py-5 my-3">
                <div class="col">
                    <div class="row justify-content-center">
                        <div class="col-9 text-center">                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                            <h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4">Secteurs d'Activité Couverts</h2>
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                                <p>Nous comprenons que chaque secteur d'activité a ses propres besoins financiers et défis. Notre équipe de professionnels expérimentés se dédie à fournir des solutions de paiement mobile sur mesure qui répondent aux besoins spécifiques des entreprises de divers secteurs en Afrique de l'Ouest.</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-6 mb-2">
                            <div class="d-grid gap-2">
                                <a href="#" class="btn btn-light border-0 border-radius-2 text-start box-shadow-6 btn-xl text-3 py-4 btn-with-arrow-solid btn-with-arrow-sm mb-3 anim-hover-translate-top-5px transition-3ms">
                                    <strong class="d-inline-flex font-weight-semibold text-dark me-3">E-commerce</strong>
                                    <span class="bg-dark box-shadow-6"><i class="fa-solid fa-arrow-right text-light"></i></span>
                                </a>
                                <a href="#" class="btn btn-light border-0 border-radius-2 text-start box-shadow-6 btn-xl text-3 py-4 btn-with-arrow-solid btn-with-arrow-sm mb-3 anim-hover-translate-top-5px transition-3ms">
                                    <strong class="d-inline-flex font-weight-semibold text-dark me-3">Services Financiers</strong>
                                    <span class="bg-dark box-shadow-6"><i class="fa-solid fa-arrow-right text-light"></i></span>
                                </a>
                                <a href="#" class="btn btn-light border-0 border-radius-2 text-start box-shadow-6 btn-xl text-3 py-4 btn-with-arrow-solid btn-with-arrow-sm mb-3 anim-hover-translate-top-5px transition-3ms">
                                    <strong class="d-inline-flex font-weight-semibold text-dark me-3">Télécommunications</strong>
                                    <span class="bg-dark box-shadow-6"><i class="fa-solid fa-arrow-right text-light"></i></span>
                                </a>
                                <a href="#" class="btn btn-light border-0 border-radius-2 text-start box-shadow-6 btn-xl text-3 py-4 btn-with-arrow-solid btn-with-arrow-sm mb-3 anim-hover-translate-top-5px transition-3ms">
                                    <strong class="d-inline-flex font-weight-semibold text-dark me-3">Éducation</strong>
                                    <span class="bg-dark box-shadow-6"><i class="fa-solid fa-arrow-right text-light"></i></span>
                                </a>
                                <a href="#" class="btn btn-light border-0 border-radius-2 text-start box-shadow-6 btn-xl text-3 py-4 btn-with-arrow-solid btn-with-arrow-sm mb-3 anim-hover-translate-top-5px transition-3ms">
                                    <strong class="d-inline-flex font-weight-semibold text-dark me-3">Transport</strong>
                                    <span class="bg-dark box-shadow-6"><i class="fa-solid fa-arrow-right text-light"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-grid gap-2">
                                <a href="#" class="btn btn-light border-0 border-radius-2 text-start box-shadow-6 btn-xl text-3 py-4 btn-with-arrow-solid btn-with-arrow-sm mb-3 anim-hover-translate-top-5px transition-3ms">
                                    <strong class="d-inline-flex font-weight-semibold text-dark me-3">Fintech</strong>
                                    <span class="bg-dark box-shadow-6"><i class="fa-solid fa-arrow-right text-light"></i></span>
                                </a>
                                <a href="#" class="btn btn-light border-0 border-radius-2 text-start box-shadow-6 btn-xl text-3 py-4 btn-with-arrow-solid btn-with-arrow-sm mb-3 anim-hover-translate-top-5px transition-3ms">
                                    <strong class="d-inline-flex font-weight-semibold text-dark me-3">Santé</strong>
                                    <span class="bg-dark box-shadow-6"><i class="fa-solid fa-arrow-right text-light"></i></span>
                                </a>
                                <a href="#" class="btn btn-light border-0 border-radius-2 text-start box-shadow-6 btn-xl text-3 py-4 btn-with-arrow-solid btn-with-arrow-sm mb-3 anim-hover-translate-top-5px transition-3ms">
                                    <strong class="d-inline-flex font-weight-semibold text-dark me-3">Gouvernement</strong>
                                    <span class="bg-dark box-shadow-6"><i class="fa-solid fa-arrow-right text-light"></i></span>
                                </a>
                                <a href="#" class="btn btn-light border-0 border-radius-2 text-start box-shadow-6 btn-xl text-3 py-4 btn-with-arrow-solid btn-with-arrow-sm mb-3 anim-hover-translate-top-5px transition-3ms">
                                    <strong class="d-inline-flex font-weight-semibold text-dark me-3">Agriculture</strong>
                                    <span class="bg-dark box-shadow-6"><i class="fa-solid fa-arrow-right text-light"></i></span>
                                </a>
                                <a href="#" class="btn btn-light border-0 border-radius-2 text-start box-shadow-6 btn-xl text-3 py-4 btn-with-arrow-solid btn-with-arrow-sm mb-3 anim-hover-translate-top-5px transition-3ms">
                                    <strong class="d-inline-flex font-weight-semibold text-dark me-3">Retail</strong>
                                    <span class="bg-dark box-shadow-6"><i class="fa-solid fa-arrow-right text-light"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Explorer plus -->
        <div class="bg-secondary border-radius-2 p-relative overflow-hidden">
            <div class="container-fluid">
                <div class="row">
                    <div class="col px-0 text-center text-color-light">
                        <div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-lg-center">
                            <div class="me-lg-4 flex-grow-1 flex-lg-grow-0">
                                <span class="d-inline-block text-3 py-4 px-5 text-uppercase font-weight-medium">Aller plus loin :</span>
                            </div>
                            <div class="me-3 ps-3 p-relative bottom-1 pt-3 pt-lg-0">
                                <a href="{{ route('process.integration-support') }}" class="btn btn-arrow-effect-1 bg-transparent text-light border-0 text-lg-3-5 py-2 py-lg-0">Découvrir notre processus d'intégration <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                            <div class="py-3 py-lg-0 p-relative bottom-1 border-start border-color-light-rgba-20">
                                <a href="{{ route('contact') }}" class="btn btn-arrow-effect-1 bg-transparent text-light border-0 text-lg-3-5 py-2 py-lg-0">Obtenir une démonstration gratuite <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>               

    </div>

@endsection
