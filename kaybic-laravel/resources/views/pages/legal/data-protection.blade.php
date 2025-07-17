@extends('layouts.app')

@section('title', 'Politique de Protection des Données Personnelles | Kaybic Africa')

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
								<span class="badge bg-color-dark-rgba-30 text-light rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-3"><span class="d-inline-flex py-1 px-2">Documentation Légale</span></span>
							</div>						<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
							<h1 class="text-9 text-lg-12 text-color-light font-weight-semibold line-height-1 mb-2">Politique de Protection des Données Personnelles</h1>
						</div>
						<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
							<ul class="breadcrumb d-flex text-3-5 font-weight-semi-bold pb-2 mb-3">
								<li><a href="{{ route('home') }}" class="text-light text-decoration-none">Accueil</a></li>
								<li class="active text-color-light opacity-7">Politique de Protection des Données</li>
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
										<h2 class="text-color-dark font-weight-bold mb-3">Introduction</h2>
										<p>La présente Politique de Protection des Données Personnelles décrit comment Kaybic Africa, agrégateur de paiement mobile opérant en Côte d'Ivoire et en Afrique de l'Ouest, collecte, utilise, partage et protège les données personnelles de ses utilisateurs. Chez Kaybic Africa, nous accordons une importance primordiale à la protection de votre vie privée et au respect des réglementations en vigueur, notamment la loi ivoirienne relative à la protection des données à caractère personnel.</p>
										
										<p>Cette politique s'applique à l'ensemble de nos services, y compris notre plateforme d'agrégation de paiement mobile, notre site web, nos applications mobiles et tout autre service associé à Kaybic Africa.</p>
										
										<h2 class="text-color-dark font-weight-bold mt-5 mb-3">Données Personnelles Collectées</h2>
										<p>Dans le cadre de nos services d'agrégation de paiement mobile, nous collectons différents types de données personnelles, notamment :</p>
										
										<ul class="list list-icons list-icons-style-2 mt-2">
											<li><i class="fas fa-check"></i>Informations d'identification : nom, prénom, date de naissance, genre, copie de pièce d'identité</li>
											<li><i class="fas fa-check"></i>Coordonnées : adresse postale, adresse e-mail, numéro de téléphone</li>
											<li><i class="fas fa-check"></i>Données financières : numéro de compte mobile money, historique des transactions, opérateurs de paiement mobile utilisés</li>
											<li><i class="fas fa-check"></i>Données de connexion : adresse IP, identifiants de connexion, type d'appareil, système d'exploitation</li>
											<li><i class="fas fa-check"></i>Données de localisation : informations géographiques lors de l'utilisation de nos services</li>
											<li><i class="fas fa-check"></i>Informations professionnelles : pour les clients professionnels, des informations sur votre entreprise et activité</li>
										</ul>
										
										<h2 class="text-color-dark font-weight-bold mt-5 mb-3">Finalités du Traitement</h2>
										<p>Nous collectons et traitons vos données personnelles pour les finalités suivantes :</p>
										
										<ul class="list list-icons list-icons-style-2 mt-2">
											<li><i class="fas fa-check"></i>Fournir, exploiter et améliorer nos services d'agrégation de paiement mobile</li>
											<li><i class="fas fa-check"></i>Traiter et sécuriser les transactions financières</li>
											<li><i class="fas fa-check"></i>Respecter nos obligations légales et réglementaires, notamment en matière de lutte contre la fraude et le blanchiment d'argent</li>
											<li><i class="fas fa-check"></i>Personnaliser votre expérience utilisateur et vous proposer des services adaptés</li>
											<li><i class="fas fa-check"></i>Communiquer avec vous concernant nos services, promotions ou événements</li>
											<li><i class="fas fa-check"></i>Résoudre les problèmes techniques et assurer la maintenance de nos services</li>
											<li><i class="fas fa-check"></i>Réaliser des analyses statistiques et améliorer continuellement la qualité de nos services</li>
										</ul>
										
										<h2 class="text-color-dark font-weight-bold mt-5 mb-3">Base Juridique du Traitement</h2>
										<p>Le traitement de vos données personnelles repose sur les bases juridiques suivantes :</p>
										
										<ul class="list list-icons list-icons-style-2 mt-2">
											<li><i class="fas fa-check"></i><strong>Exécution d'un contrat :</strong> Lorsque le traitement est nécessaire à l'exécution du contrat que vous avez conclu avec Kaybic Africa ou à l'exécution de mesures précontractuelles prises à votre demande.</li>
											<li><i class="fas fa-check"></i><strong>Obligation légale :</strong> Lorsque le traitement est nécessaire au respect d'une obligation légale à laquelle Kaybic Africa est soumise (comme les obligations en matière de lutte contre le blanchiment d'argent).</li>
											<li><i class="fas fa-check"></i><strong>Consentement :</strong> Lorsque vous avez donné votre consentement explicite pour le traitement de vos données à des fins spécifiques.</li>
											<li><i class="fas fa-check"></i><strong>Intérêt légitime :</strong> Lorsque le traitement est nécessaire aux fins des intérêts légitimes poursuivis par Kaybic Africa (comme l'amélioration de nos services ou la prévention de la fraude).</li>
										</ul>
										
										<h2 class="text-color-dark font-weight-bold mt-5 mb-3">Partage et Transfert de Données</h2>
										<p>Dans le cadre de notre activité d'agrégation de paiement mobile, nous pouvons être amenés à partager vos données avec :</p>
										
										<ul class="list list-icons list-icons-style-2 mt-2">
											<li><i class="fas fa-check"></i><strong>Partenaires de paiement :</strong> Opérateurs de mobile money, institutions financières et systèmes de paiement avec lesquels nous collaborons pour traiter vos transactions.</li>
											<li><i class="fas fa-check"></i><strong>Prestataires de services :</strong> Entreprises qui nous aident à fournir nos services (hébergement, maintenance, support client, etc.).</li>
											<li><i class="fas fa-check"></i><strong>Autorités publiques :</strong> Lorsque la loi l'exige ou dans le cadre d'une procédure légale.</li>
											<li><i class="fas fa-check"></i><strong>Partenaires commerciaux :</strong> Dans le cadre de partenariats visant à améliorer nos services ou vous proposer des offres complémentaires, avec votre consentement préalable lorsque cela est requis.</li>
										</ul>
										
										<p>Kaybic Africa opère principalement en Afrique de l'Ouest, mais peut transférer des données vers d'autres pays. Dans ce cas, nous mettons en place des garanties appropriées pour assurer la protection de vos données conformément aux réglementations applicables.</p>
										
										<h2 class="text-color-dark font-weight-bold mt-5 mb-3">Conservation des Données</h2>
										<p>Nous conservons vos données personnelles aussi longtemps que nécessaire pour atteindre les finalités pour lesquelles elles ont été collectées, sauf si une durée de conservation plus longue est requise ou permise par la loi. En particulier :</p>
										
										<ul class="list list-icons list-icons-style-2 mt-2">
											<li><i class="fas fa-check"></i>Les données relatives aux transactions sont conservées pendant une durée de 10 ans conformément aux obligations légales en matière financière et comptable.</li>
											<li><i class="fas fa-check"></i>Les données relatives à votre compte client sont conservées tant que votre compte est actif, puis archivées pendant une durée de 5 ans après sa fermeture.</li>
											<li><i class="fas fa-check"></i>Les données de connexion et d'utilisation du service sont conservées pendant 12 mois.</li>
										</ul>
										
										<h2 class="text-color-dark font-weight-bold mt-5 mb-3">Sécurité des Données</h2>
										<p>Kaybic Africa met en œuvre des mesures de sécurité appropriées pour protéger vos données personnelles contre tout accès, divulgation, altération ou destruction non autorisés. Ces mesures comprennent :</p>
										
										<ul class="list list-icons list-icons-style-2 mt-2">
											<li><i class="fas fa-check"></i>Le chiffrement des données sensibles</li>
											<li><i class="fas fa-check"></i>L'authentification à deux facteurs pour l'accès aux comptes</li>
											<li><i class="fas fa-check"></i>Des contrôles d'accès stricts pour notre personnel</li>
											<li><i class="fas fa-check"></i>Des audits de sécurité réguliers</li>
											<li><i class="fas fa-check"></i>Des procédures de gestion des incidents de sécurité</li>
											<li><i class="fas fa-check"></i>La formation de notre personnel aux bonnes pratiques en matière de sécurité des données</li>
										</ul>
										
										<h2 class="text-color-dark font-weight-bold mt-5 mb-3">Vos Droits</h2>
										<p>Conformément aux lois applicables en matière de protection des données, vous disposez des droits suivants concernant vos données personnelles :</p>
										
										<ul class="list list-icons list-icons-style-2 mt-2">
											<li><i class="fas fa-check"></i><strong>Droit d'accès :</strong> Vous pouvez demander à accéder aux données personnelles que nous détenons vous concernant.</li>
											<li><i class="fas fa-check"></i><strong>Droit de rectification :</strong> Vous pouvez demander la correction des données inexactes ou incomplètes.</li>
											<li><i class="fas fa-check"></i><strong>Droit à l'effacement :</strong> Dans certains cas, vous pouvez demander la suppression de vos données personnelles.</li>
											<li><i class="fas fa-check"></i><strong>Droit à la limitation du traitement :</strong> Vous pouvez demander la limitation du traitement de vos données dans certaines circonstances.</li>
											<li><i class="fas fa-check"></i><strong>Droit à la portabilité :</strong> Vous pouvez demander à recevoir vos données dans un format structuré et couramment utilisé.</li>
											<li><i class="fas fa-check"></i><strong>Droit d'opposition :</strong> Vous pouvez vous opposer au traitement de vos données à des fins de marketing direct ou pour des raisons tenant à votre situation particulière.</li>
											<li><i class="fas fa-check"></i><strong>Droit de retirer votre consentement :</strong> Lorsque le traitement est fondé sur votre consentement, vous pouvez le retirer à tout moment.</li>
										</ul>
										
										<p>Pour exercer l'un de ces droits, veuillez nous contacter à l'adresse suivante : <a href="mailto:Contact@kaybicafrica.ci" class="text-2">Contact@kaybicafrica.ci</a> ou par courrier postal à notre siège social.</p>
										
										<h2 class="text-color-dark font-weight-bold mt-5 mb-3">Cookies et Technologies Similaires</h2>
										<p>Notre site web et nos applications utilisent des cookies et des technologies similaires pour améliorer votre expérience utilisateur, analyser le trafic et personnaliser notre contenu. Pour plus d'informations sur notre utilisation des cookies, veuillez consulter notre <a href="{{ route('privacy-policy') }}">Politique relative aux cookies</a>.</p>
										
										<h2 class="text-color-dark font-weight-bold mt-5 mb-3">Modifications de la Politique</h2>
										<p>Nous pouvons modifier cette politique de confidentialité de temps à autre pour refléter les changements dans nos pratiques ou pour d'autres raisons opérationnelles, légales ou réglementaires. En cas de modification substantielle, nous vous en informerons par e-mail ou par une notification sur notre site web avant que ces modifications ne prennent effet. Nous vous encourageons à consulter régulièrement cette page pour rester informé des dernières mises à jour.</p>
										
										<h2 class="text-color-dark font-weight-bold mt-5 mb-3">Contact</h2>
										<p>Si vous avez des questions, des préoccupations ou des demandes concernant cette politique de confidentialité ou le traitement de vos données personnelles, veuillez nous contacter :</p>
										
										<ul class="list list-icons list-icons-style-2 mt-2 mb-5">
											<li><i class="fas fa-envelope"></i>Par email : <a href="mailto:Contact@kaybicafrica.ci" class="text-2">Contact@kaybicafrica.ci</a></li>
											<li><i class="fas fa-map-marker-alt"></i>Par courrier postal : Kaybic Africa, Riviera Palmeraie, lot 4142, ilot 192, 30 logements, Abidjan, Côte d'Ivoire</li>
											<li><i class="fas fa-phone"></i>Par téléphone : <a href="tel:+2252530000869" class="text-2">+2252530000869</a></li>
										</ul>
										
										<p class="text-center font-italic">Dernière mise à jour : Juin 2025</p>
										
										<div class="alert alert-info mt-5">
											<strong>Note importante :</strong> Cette politique de confidentialité a été conçue pour être conforme aux réglementations en vigueur en Côte d'Ivoire et dans les pays d'Afrique de l'Ouest où Kaybic Africa opère. Nous nous engageons à respecter toutes les lois applicables en matière de protection des données.
										</div>
									</div>
								</div>
							</div>
						</article>
					</div>
				</div>
			</div>
		</div>

@endsection
