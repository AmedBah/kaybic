@extends('layouts.app')

@section('title', 'Politique de Confidentialité | Kaybic Africa')

@section('content')
    
  <div role="main" class="main px-3 px-lg-5">

    <div class="page-header py-0 bg-secondary px-3 px-xl-0 border-radius-2 p-relative mb-0 overflow-hidden">
        <div class="overflow-hidden p-absolute top-0 left-0 bottom-0 h-100 w-100">
            <div class="custom-el-5 custom-pos-4">
                <img class="img-fluid opacity-2 opacity-hover-2" src="{{ asset('img/svg/waves.svg') }}" alt="">
            </div>
        </div>                    
        <div class="container p-relative z-index-1 py-2">
            <div class="row mh-200px mh-lg-300px align-items-center py-4">
                <div class="col">
                    <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                        <span class="badge bg-color-dark-rgba-30 text-light rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-3"><span class="d-inline-flex py-1 px-2">Confidentialité</span></span>
                    </div>                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <h1 class="text-9 text-lg-12 text-color-light font-weight-semibold line-height-1 mb-2">Politique de Confidentialité</h1>
                </div>
                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <ul class="breadcrumb d-flex text-3-5 font-weight-semi-bold pb-2 mb-3">
                        <li><a href="{{ route('home') }}" class="text-light text-decoration-none">Accueil</a></li>
                        <li class="active text-color-light opacity-7">Confidentialité</li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-lg-5 pt-5">
        <div class="row">
            <div class="col-lg-12 mb-5 mb-lg-0">
                <article>
                    <div class="card border-0">
                        <div class="card-body z-index-1 p-0">
                            <div class="card-body p-0">
                                <h2 class="mb-4">Politique de Confidentialité de Kaybic</h2>
                                <p>
                                    Cette politique de confidentialité décrit comment Kaybic, agrégateur de services numériques, collecte, utilise, protège et partage vos données personnelles conformément à la législation de la Côte d’Ivoire (notamment la loi n° 2013-450 du 19 juin 2013 relative à la protection des données à caractère personnel) et aux standards de la sous-région UEMOA/CEDEAO.
                                </p>
                                <h3 class="mt-4">1. Collecte des données personnelles</h3>
                                <p>
                                    Nous collectons les informations suivantes lors de l’utilisation de nos services :
                                    <ul>
                                        <li>Données d’identification (nom, prénom, numéro de téléphone, adresse email, etc.)</li>
                                        <li>Données de connexion et de navigation (adresse IP, logs, cookies, etc.)</li>
                                        <li>Données relatives à l’utilisation des services agrégés (transactions, préférences, etc.)</li>
                                    </ul>
                                </p>
                                <h3 class="mt-4">2. Utilisation des données</h3>
                                <p>
                                    Vos données sont utilisées pour :
                                    <ul>
                                        <li>Fournir et améliorer nos services d’agrégation</li>
                                        <li>Gérer votre compte utilisateur</li>
                                        <li>Assurer la sécurité et la conformité légale</li>
                                        <li>Vous informer sur les nouveautés et offres (avec votre consentement)</li>
                                    </ul>
                                </p>
                                <h3 class="mt-4">3. Partage des données</h3>
                                <p>
                                    Kaybic ne partage vos données personnelles qu’avec :
                                    <ul>
                                        <li>Ses partenaires techniques et prestataires de services, dans le strict cadre de l’exécution des services</li>
                                        <li>Les autorités compétentes, sur demande légale</li>
                                    </ul>
                                    Aucun transfert de données hors de la Côte d’Ivoire ou de la sous-région n’est effectué sans garanties adéquates.
                                </p>
                                <h3 class="mt-4">4. Sécurité des données</h3>
                                <p>
                                    Nous mettons en œuvre des mesures techniques et organisationnelles appropriées pour protéger vos données contre tout accès non autorisé, perte ou divulgation.
                                </p>
                                <h3 class="mt-4">5. Conservation des données</h3>
                                <p>
                                    Vos données sont conservées pendant la durée nécessaire à la finalité du traitement, conformément à la législation ivoirienne et aux recommandations de l’Autorité de Protection des Données Personnelles (APDP).
                                </p>
                                <h3 class="mt-4">6. Vos droits</h3>
                                <p>
                                    Conformément à la loi, vous disposez des droits suivants :
                                    <ul>
                                        <li>Droit d’accès, de rectification et de suppression de vos données</li>
                                        <li>Droit d’opposition au traitement pour motifs légitimes</li>
                                        <li>Droit à la portabilité de vos données</li>
                                        <li>Droit d’introduire une réclamation auprès de l’APDP</li>
                                    </ul>
                                    Pour exercer vos droits, contactez-nous à l’adresse indiquée ci-dessous.
                                </p>
                                <h3 class="mt-4">7. Cookies et traceurs</h3>
                                <p>
                                    Kaybic utilise des cookies pour améliorer l’expérience utilisateur et analyser l’audience. Vous pouvez gérer vos préférences via les paramètres de votre navigateur.
                                </p>
                                <h3 class="mt-4">8. Modifications de la politique</h3>
                                <p>
                                    Cette politique peut être modifiée à tout moment. Toute modification sera publiée sur cette page avec la date de mise à jour.
                                </p>
                                <h3 class="mt-4">9. Contact et responsable du traitement</h3>
                                <p>
                                    <strong>Responsable du traitement :</strong> KAY BIC AFRICA SARL<br>
                                    <strong>Siège social :</strong> Abidjan, Cocody, Riviera Palmeraie, lot 4142, ilot 192, 30 logements<br>
                                    <strong>RCCM :</strong> CI-ABJ-2024-B-4752<br>
                                    <strong>Email :</strong> <a href="mailto:Contact@kaybicafrica.ci" class="text-2">Contact@kaybicafrica.ci</a><br>
                                    <strong>Téléphone :</strong> <span class="text-2">+2252530000869</span>
                                </p>
                                <p>
                                    Pour toute question ou demande relative à vos données personnelles, veuillez nous contacter aux coordonnées ci-dessus.
                                </p>
                                <p class="mt-5 text-muted"><small>Dernière mise à jour : Décembre 2024</small></p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>

@endsection
