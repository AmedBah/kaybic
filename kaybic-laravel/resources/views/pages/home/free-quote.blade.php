<!-- Free Quote Section -->
<div class="container pt-5">
	<div class="row align-items-center pt-4 pb-5 pt-lg-5">
		<div class="col-lg-6 mb-5 mb-lg-0 pe-lg-5">
			<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
				<span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-4"><span class="d-inline-flex py-1 px-2">Consultation Gratuite</span></span>
			</div>
			<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
				<h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4">Obtenez une Consultation 
						<mark class="text-white mark mark-color mark-color-primary mark-pos-2 mark-height-100 p-0 appear-animation" data-appear-animation data-appear-animation-delay="1500">Gratuite</mark>
				</h2>
			</div>
			<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
				<p>Chez KAYBIC AFRICA, nous savons que chaque entreprise est unique, avec des besoins financiers spécifiques. C'est pourquoi nous proposons une consultation gratuite et sans engagement pour vous accompagner dans l'optimisation de vos paiements mobiles et vous aider à tirer le meilleur parti de nos solutions sur-mesure.</p>
			</div>
			<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
				<div class="d-flex align-items-center py-3">
					<span class="badge bg-light text-dark border custom-font-secondary border-all-light box-shadow-8 n-ls-05 rounded-pill text-uppercase font-weight-semibold text-2 px-3 py-2 px-1 me-1"><span class="d-inline-flex py-1 px-2">Réponse Rapide</span></span>
					<p class="mb-0 text-dark ps-2 ms-1 text-3-5">Généralement sous 24h en jours ouvrables.</p>
				</div>
			</div>
			<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
				<div class="d-flex flex-column flex-xl-row py-4 align-items-xl-center">
					<div class="pe-4">
						<div class="feature-box feature-box-secondary align-items-center">
							<div class="feature-box-icon feature-box-icon-lg p-static box-shadow-7">
								<img src="{{ asset('img/icons/phone-2.svg') }}" width="30" height="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary'}" />
							</div>
							<div class="feature-box-info ps-2">
								<strong class="d-block text-uppercase text-color-secondary p-relative top-2">Appelez-nous</strong>
								<a href="tel:+2252530000869" class="text-decoration-none font-secondary text-3 font-weight-semibold text-color-dark text-color-hover-primary transition-2ms negative-ls-05 ws-nowrap p-relative bottom-2">+2252530000869</a>
							</div>
						</div>
					</div>
					<div class="pe-4 pt-4 pt-xl-0">
						<div class="feature-box feature-box-secondary align-items-center">
							<div class="feature-box-icon feature-box-icon-lg p-static box-shadow-7">
								<img src="{{ asset('img/icons/email.svg') }}" width="30" height="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary'}" />
							</div>
							<div class="feature-box-info ps-2">
								<strong class="d-block text-uppercase text-color-secondary p-relative top-2">Envoyez un E-mail</strong>
								<a href="mailto:Christmerari@easytransfert.ci" class="text-decoration-none font-secondary text-3 font-weight-semibold text-color-dark text-color-hover-primary transition-2ms negative-ls-05 ws-nowrap p-relative bottom-2">Christmerari@easytransfert.ci</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
				<p class="text-2-5 pt-3">*En soumettant vos informations, vous acceptez les termes de notre <a href="#" class="text-decoration-underline text-color-secondary text-color-hover-primary">Politique de Confidentialité.</a></p>
			</div>
		</div>
		<div class="col-lg-6 p-relative">
			<form class="contact-form" action="{{ route('contact.submit') }}" method="POST">
				@csrf
				<div class="mb-2"><span style="color:#e74c3c">*</span> <span class="text-dark">Champs obligatoires</span></div>
				<div class="contact-form-success alert alert-success d-none mt-4">
					<strong>Succès!</strong> Votre message nous a été envoyé.
				</div>

				<div class="contact-form-error alert alert-danger d-none mt-4">
					<strong>Erreur!</strong> Il y a eu une erreur lors de l'envoi de votre message.
					<span class="mail-error-message text-1 d-block"></span>
				</div>

				<div class="row">
					<div class="form-group col-lg-6">
						<label class="form-label font-weight-bold text-uppercase text-dark mb-1 text-2">Votre Nom <span style="color:#e74c3c">*</span></label>
						<input type="text" value="" placeholder="Entrez votre nom" data-msg-required="Veuillez entrer votre nom." maxlength="100" class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200 py-2" name="name" required>
					</div>
					<div class="form-group col-lg-6">
						<label class="form-label font-weight-bold text-uppercase text-dark mb-1 text-2">Adresse E-mail <span style="color:#e74c3c">*</span></label>
						<input type="email" value="" placeholder="Entrez votre adresse e-mail" data-msg-required="Veuillez entrer votre adresse e-mail." data-msg-email="Veuillez entrer une adresse e-mail valide." maxlength="100" class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200 py-2" name="email" required>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-lg-6">
						<label class="form-label font-weight-bold text-uppercase text-dark mb-1 text-2">Numéro de Téléphone <span style="color:#e74c3c">*</span></label>
						<input type="tel" value="" placeholder="Entrez votre numéro de téléphone" class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200 py-2" name="phone" required>
					</div>
					<div class="form-group col-lg-6">
						<label class="form-label font-weight-bold text-uppercase text-dark mb-1 text-2">Nom de l'Entreprise <span style="color:#e74c3c">*</span></label>
						<input type="text" value="" placeholder="Entrez le nom de votre entreprise" class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200 py-2" name="company" required>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-lg-6">
						<label class="form-label font-weight-bold text-uppercase text-dark mb-1 text-2">Secteur d'Activité <span style="color:#e74c3c">*</span></label>
						<input type="text" value="" placeholder="Entrez votre secteur d'activité" class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200 py-2" name="industry" required>
					</div>
					
				</div>									
				<div class="row">
					<div class="form-group col">
						<label class="form-label font-weight-bold text-uppercase text-dark mb-1 text-2">Informations Complémentaires <span style="color:#e74c3c">*</span></label>
						<textarea maxlength="5000" placeholder="Entrez des informations complémentaires ou vos questions" rows="8" class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200 py-2" name="message" required></textarea>
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<button type="submit" class="btn btn-rounded box-shadow-7 font-weight-medium btn-swap-1" style="background-color: #d24a4a; color: white;" data-clone-element="1">
							<span>Envoyer <i class="fa-solid fa-arrow-right ms-2 p-relative left-10"></i></span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.querySelector('.contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const submitBtn = this.querySelector('button[type="submit"]');
            const successDiv = this.querySelector('.contact-form-success');
            const errorDiv = this.querySelector('.contact-form-error');
            const errorMessage = errorDiv.querySelector('.mail-error-message');
            
            // Désactiver le bouton et changer le texte
            submitBtn.disabled = true;
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<span>Envoi en cours... <i class="fas fa-spinner fa-spin ms-2"></i></span>';
            
            // Masquer les messages précédents
            successDiv.classList.add('d-none');
            errorDiv.classList.add('d-none');
            
            fetch(this.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    successDiv.classList.remove('d-none');
                    successDiv.innerHTML = '<strong>Succès!</strong> ' + data.message;
                    contactForm.reset();
                    
                    // Faire défiler vers le message de succès
                    successDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
                } else {
                    errorDiv.classList.remove('d-none');
                    errorMessage.textContent = data.message || 'Une erreur est survenue.';
                    
                    // Afficher les erreurs de validation si disponibles
                    if (data.errors) {
                        let errorText = '';
                        Object.values(data.errors).forEach(error => {
                            errorText += error[0] + ' ';
                        });
                        errorMessage.textContent = errorText;
                    }
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                errorDiv.classList.remove('d-none');
                errorMessage.textContent = 'Une erreur réseau est survenue. Veuillez réessayer.';
            })
            .finally(() => {
                // Réactiver le bouton et restaurer le texte original
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
            });
        });
    }
});
</script>
