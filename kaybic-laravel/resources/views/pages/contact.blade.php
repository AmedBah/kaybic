@extends('layouts.app')

@section('title', 'Contact - KAYBIC AFRICA | Solutions de Paiement Mobile')

@section('content')
    
    <div role="main" class="main px-3 px-lg-5">

                <div class="page-header py-0 bg-tertiary px-3 px-xl-0 border-radius-2 p-relative mb-0 overflow-hidden bg-size-cover bg-position-center overlay overlay-color-dark overlay-show overlay-op-5" style="background-image: url(img/bg/bg-2.jpg);">>                 
                    <div class="container p-relative z-index-5 py-2">
                        <div class="row mh-200px mh-lg-300px align-items-center py-4">
                            <div class="col">
                                <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                                    <span class="badge bg-color-dark-rgba-30 text-light rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-3"><span class="d-inline-flex py-1 px-2">Contactez-nous</span></span>
                                </div>                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                <h1 class="text-dark text-9 text-lg-12 text-color-light font-weight-semibold line-height-1 mb-2">Contact KAYBIC</h1>
                            </div>
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                <ul class="breadcrumb d-flex text-3-5 font-weight-semi-bold pb-2 mb-3">
                                    <li><a href="{{ route('home') }}" class="text-light text-decoration-none">Accueil</a></li>
                                    <li class="active text-light opacity-7">Contact</li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>                

				<!-- Intro -->
				<div class="container pt-4 pt-lg-5 pb-4" id="intro">
					<div class="row pt-4">
						<div class="col">
							<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
								<span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-4"><span class="d-inline-flex py-1 px-2">Commençons ensemble</span></span>
							</div>
                        </div>
                    </div>
					<div class="row align-items-center">
						<div class="col-lg-6 mb-5 mb-lg-0">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-2">Contactez notre équipe commerciale dès aujourd'hui :</h2>
							</div>
						</div>
						<div class="col-lg-6 p-relative">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
								<p class="mb-0">Que vous ayez une question sur nos APIs de paiement mobile, besoin d'une consultation technique, ou souhaitiez intégrer nos solutions, notre équipe d'experts est prête à vous accompagner dans votre transformation digitale.</p>
							</div>
						</div>
					</div>
					<div class="row mt-5 pt-2">
						<div class="col-lg-4 mb-5 mb-lg-0">
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">

                                <div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'autoplay': true, 'dots': false, 'autoplayTimeout': 5000, 'margin': 10, 'animateOut': 'fadeOut'}">
                                    <div>
                                        <img class="img-fluid border-radius-2" src="{{ asset('img/generic/generic-14.jpg') }}" alt="">
                                    </div>
                                    <div>
                                        <img class="img-fluid border-radius-2" src="{{ asset('img/generic/generic-15.jpg') }}" alt="">
                                    </div>
                                    <div>
                                        <img class="img-fluid border-radius-2" src="{{ asset('img/generic/generic-16.jpg') }}" alt="">
                                    </div>
                                </div>                              
								
							</div>
						</div>
                        <div class="col-lg-4 mb-3 mb-lg-0">

                            <div class="feature-box feature-box-secondary">
                                <div class="feature-box-icon feature-box-icon-lg p-static box-shadow-7">
                                    <img src="{{ asset('img/icons/pin-light.svg') }}" width="30" height="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary'}" />
                                </div>
                                <div class="feature-box-info ps-3">
                                    <strong class="d-block text-4-5 text-dark mb-1">Adresse du Bureau</strong>
                                    <p class="mb-0 text-3-5 line-height-7">Riviera Palmeraie, Cité du Bonheur</p>
                                    <p class="mb-0 text-3-5 line-height-7">Abidjan, Côte d'Ivoire</p>
                                    <p class="mb-0 text-3-5 line-height-7">Région Afrique de l'Ouest</p>
                                    <p class="mb-0 text-3-5 line-height-7"><a href="https://www.google.com/maps/place/Riviera+Palmeraie,+Abidjan,+C%C3%B4te+d'Ivoire/@5.3599517,-3.9648731,15z" target="_blank" class="text-color-secondary text-color-hover-primary font-weight-semi-bold text-decoration-underline">Voir sur la carte</a></p>
                                </div>
                            </div>

                            <div class="feature-box feature-box-secondary mt-4 pt-2">
                                <div class="feature-box-icon feature-box-icon-lg p-static box-shadow-7">
                                    <img src="{{ asset('img/icons/email.svg') }}" width="30" height="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary'}" />
                                </div>
                                <div class="feature-box-info ps-3">
                                    <strong class="d-block text-4-5 text-dark mb-1">E-mail</strong>
                                    <p class="mb-0 text-2 line-height-7"><a href="mailto:Christmerari@easytransfert.ci" class="text-color-secondary text-color-hover-primary font-weight-semi-bold text-decoration-underline">Christmerari@easytransfert.ci</a></p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4">

                            <div class="feature-box feature-box-secondary mt-4 pt-2">
                                <div class="feature-box-icon feature-box-icon-lg p-static box-shadow-7">
                                    <img src="{{ asset('img/icons/phone-2.svg') }}" width="30" height="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary'}" />
                                </div>
                                <div class="feature-box-info ps-3">
                                    <strong class="d-block text-4-5 text-dark mb-1">Téléphone</strong>
                                    <p class="mb-0 text-2 line-height-7"><a href="tel:+2252530000869" class="text-color-secondary text-color-hover-primary font-weight-semi-bold text-decoration-underline">+2252530000869</a></p>
                                </div>
                            </div>

                            <div class="feature-box feature-box-secondary mt-4 pt-2">
                                <div class="feature-box-icon feature-box-icon-lg p-static box-shadow-7">
                                    <img src="{{ asset('img/icons/clock.svg') }}" width="30" height="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary'}" />
                                </div>
                                <div class="feature-box-info ps-3">
                                    <strong class="d-block text-4-5 text-dark mb-1">Heures d'ouverture</strong>
                                    <p class="mb-0 text-3-5 line-height-7">Lundi au Vendredi : 8h00 - 18h00</p>
                                    <p class="mb-0 text-3-5 line-height-7">Samedi : 9h00 - 13h00</p>
                                    <p class="mb-0 text-3-5 line-height-7">Support 24/7 disponible</p>
                                </div>
                            </div>

                        </div>
					</div>

					<div class="row pt-4">
						<div class="col pt-4">
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                                <p class="mb-0 text-dark d-flex justify-content-center">
                                    <img src="{{ asset('img/icons/icon-5.svg') }}" width="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary me-2'}" />
                                    Support 24/7 - Assistance technique disponible en permanence pour tous vos besoins d'intégration.
                                </p>
                            </div>
                        </div>
                    </div>
                   
                   
				</div>
                
                <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div class="bg-grey-100 px-3 px-xl-0 border-radius-2 p-relative overflow-hidden mt-5">
                    <div id="googlemaps" class="google-map m-0" style="min-height: 580px;"></div>
				</div>

				<!-- Free Quote -->
				<div class="container pt-5">
					<div class="row pt-4 pt-lg-5">
						<div class="col-lg-7 mb-5 mb-lg-0">
							<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
								<span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-4"><span class="d-inline-flex py-1 px-2">Formulaire de Contact</span></span>
							</div>
							<h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4">Demander une consultation gratuite</h2>
							<p class="text-3-5 text-color-grey mb-4"><span class="text-color-secondary">*</span> Champs obligatoires</p>

                            <form class="contact-form pt-3" action="#" method="POST">
								<div class="contact-form-success alert alert-success d-none mt-4">
									<strong>Succès !</strong> Votre message a été envoyé avec succès.
								</div>

								<div class="contact-form-error alert alert-danger d-none mt-4">
									<strong>Erreur !</strong> Une erreur s'est produite lors de l'envoi de votre message.
									<span class="mail-error-message text-1 d-block"></span>
								</div>

								<div class="row">
									<div class="form-group col-lg-6">
										<label class="form-label font-weight-bold text-uppercase text-dark mb-1 text-2">Prénom <span class="text-color-secondary">*</span></label>
										<input type="text" value="" placeholder="Entrez votre prénom" data-msg-required="Veuillez entrer votre prénom." maxlength="100" class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200 py-2" name="name" required>
									</div>
									<div class="form-group col-lg-6">
										<label class="form-label font-weight-bold text-uppercase text-dark mb-1 text-2">Nom <span class="text-color-secondary">*</span></label>
										<input type="text" value="" placeholder="Entrez votre nom" data-msg-required="Veuillez entrer votre nom." maxlength="100" class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200 py-2" name="lastname" required>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-lg-6">
										<label class="form-label font-weight-bold text-uppercase text-dark mb-1 text-2">Email professionnel <span class="text-color-secondary">*</span></label>
										<input type="email" value="" placeholder="Entrez votre email professionnel" data-msg-required="Veuillez entrer votre adresse email." data-msg-email="Veuillez entrer une adresse email valide." maxlength="100" class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200 py-2" name="email" required>
									</div>
									<div class="form-group col-lg-6">
										<label class="form-label font-weight-bold text-uppercase text-dark mb-1 text-2">Téléphone <span class="text-color-secondary">*</span></label>
										<input type="tel" value="" placeholder="Entrez votre numéro de téléphone" data-msg-required="Veuillez entrer votre numéro de téléphone." class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200 py-2" name="phone" required>
									</div>
								</div>						
								<div class="row">
									<div class="form-group col-lg-6">
										<label class="form-label font-weight-bold text-uppercase text-dark mb-1 text-2">Nom de l'entreprise <span class="text-color-secondary">*</span></label>
										<input type="text" value="" placeholder="Entrez le nom de votre entreprise" data-msg-required="Veuillez entrer le nom de votre entreprise." class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200 py-2" name="company" required>
									</div>
									<div class="form-group col-lg-6">
										<label class="form-label font-weight-bold text-uppercase text-dark mb-1 text-2">Secteur d'activité <span class="text-color-secondary">*</span></label>
										<select class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200 py-2" name="sector" data-msg-required="Veuillez sélectionner votre secteur d'activité." required>
											<option value="">Sélectionnez votre secteur</option>
											<option value="fintech">Fintech</option>
											<option value="ecommerce">E-commerce</option>
											<option value="telecom">Télécoms</option>
											<option value="banque">Banque</option>
											<option value="assurance">Assurance</option>
											<option value="autre">Autre</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<label class="form-label font-weight-bold text-uppercase text-dark mb-1 text-2">Message <span class="text-color-secondary">*</span></label>
										<textarea maxlength="5000" placeholder="Décrivez vos besoins d'intégration et vos questions" rows="8" class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200 py-2" name="message" data-msg-required="Veuillez décrire vos besoins ou poser votre question." required></textarea>
									</div>
								</div>
								<div class="row">
									<div class="form-group col">
										<button type="submit" class="btn btn-rounded box-shadow-7 font-weight-medium btn-swap-1" style="background-color: #d24a4a; color: white;" data-clone-element="1">
											<span>Envoyer le message <i class="fa-solid fa-arrow-right ms-2 p-relative left-10"></i></span>
										</button>
									</div>
								</div>
							</form>
                            
						</div>
						<div class="col-lg-5 ps-lg-5">

							<div class="appear-animation pt-lg-5 mt-lg-2" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
								<div class="d-flex align-items-center pt-2 pb-4">
									<p class="d-inline-block mb-0 font-weight-bold line-height-1"><mark class="text-dark mark mark-pos-2 mark-height-50 mark-color bg-color-before-primary-rgba-30 font-secondary text-15 mark-height-30 n-ls-5 p-0">20+</mark></p>
									<span class="custom-font-tertiary text-6 text-dark n-ls-1 fst-italic ps-2">Entreprises Connectées</span>
								</div>
							</div>

                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                                <div class="py-2 d-flex align-items-center text-4-5 n-ls-1 text-dark">
                                    <div>
                                        <img src="{{ asset('img/icons/icon-4.svg') }}" width="48" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary me-md-2 p-relative top-2'}" />
                                    </div>
                                    <div class="ps-1">
                                        <p class="mb-0 text-3-5 p-relative bottom-2"><i class="fas fa-star custom-text-color-2 text-2"></i><i class="fas fa-star custom-text-color-2 text-2"></i><i class="fas fa-star custom-text-color-2 text-2"></i><i class="fas fa-star custom-text-color-2 text-2"></i><i class="fas fa-star custom-text-color-2 text-2"></i></p>
                                        <strong class="custom-font-secondary pe-2">Rejoignez-nous</strong><span class="d-none d-md-inline-block pe-2"> | </span>Leader Mobile Money Afrique de l'Ouest !
                                    </div>
                                </div>
                            </div>

							<div class="appear-animation pt-4" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
								<span class="badge bg-light text-dark border custom-font-secondary border-all-light box-shadow-8 n-ls-05 rounded-pill text-uppercase font-weight-semibold text-2 px-3 py-2 px-1 me-1"><span class="d-inline-flex py-1 px-2">Réponse Rapide</span></span>
								<p class="mb-0 text-dark mt-2 text-3-5">Généralement sous 24h en jours ouvrés.</p>
							</div>

                            <!-- Explore Further -->
                            <div class="bg-secondary border-radius-2 p-relative overflow-hidden mt-5">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col px-0 text-center text-color-light">
                                            <div class="d-flex flex-column">
                                                <div class="flex-grow-1">
                                                    <span class="d-inline-block text-3 py-4 px-5 text-uppercase font-weight-medium custom-bg-gradient-1 w-100">Explorer davantage :</span>
                                                </div>
                                                <div class="me-3 ps-3 p-relative bottom-1 pt-3">
                                                    <a href="process-integration-support.html" class="btn btn-arrow-effect-1 bg-transparent text-light border-0 text-lg-3-5 py-2">Découvrir notre processus d'intégration <i class="fas fa-arrow-right ms-2"></i></a>
                                                </div>
                                                <div class="py-3 p-relative bottom-1 border-start border-color-light-rgba-20">
                                                    <a href="{{ route('solutions') }}" class="btn btn-arrow-effect-1 bg-transparent text-light border-0 text-lg-3-5 py-2">Voir nos solutions de paiement <i class="fas fa-arrow-right ms-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

						</div>
					</div>
				</div>

			</div>
@endsection

@push('scripts')
<!-- Google Maps -->
<script>
    function initMap() {
        console.log('Initialisation de la carte...');
        
        // Position de KAYBIC AFRICA à Abidjan, Côte d'Ivoire
        var kaybicLocation = { lat: 5.3599517, lng: -3.9648731 };
        
        try {
            // Créer la carte centrée sur KAYBIC AFRICA
            var map = new google.maps.Map(document.getElementById('googlemaps'), {
                zoom: 14,
                center: kaybicLocation,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            
            console.log('Carte créée avec succès');
            
            // Marqueur pour KAYBIC AFRICA
            var kaybicMarker = new google.maps.Marker({
                position: kaybicLocation,
                map: map,
                title: 'KAYBIC AFRICA - Abidjan',
                animation: google.maps.Animation.DROP
            });
            
            // Info window pour KAYBIC AFRICA
            var kaybicInfo = new google.maps.InfoWindow({
                content: '<div style="padding: 10px;"><h4>KAYBIC AFRICA</h4><p>Riviera Palmeraie, Cité du Bonheur<br>Abidjan, Côte d\'Ivoire<br><strong>Tél:</strong> +2252530000869<br><strong>Email:</strong> Christmerari@easytransfert.ci</p></div>'
            });
            
            // Clic sur le marqueur KAYBIC
            kaybicMarker.addListener('click', function() {
                kaybicInfo.open(map, kaybicMarker);
            });
            
            console.log('Marqueur KAYBIC AFRICA ajouté');
            
        } catch (error) {
            console.error('Erreur lors de la création de la carte:', error);
        }
    }
    
    // Message si Google Maps ne se charge pas
    window.addEventListener('load', function() {
        setTimeout(function() {
            if (typeof google === 'undefined') {
                console.error('Google Maps API non chargée');
                document.getElementById('googlemaps').innerHTML = '<div style="padding: 20px; text-align: center; background: #f8f9fa; border-radius: 8px;"><h4>Carte temporairement indisponible</h4><p>La carte Google Maps ne peut pas être chargée pour le moment.</p><p><strong>Adresse:</strong> Riviera Palmeraie, Cité du Bonheur, Abidjan, Côte d\'Ivoire</p></div>';
            }
        }, 3000);
    });
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZaHjy32TPVMxl1BgQRfulm2PKpbwCdR4&callback=initMap&loading=async" defer></script>
@endpush
