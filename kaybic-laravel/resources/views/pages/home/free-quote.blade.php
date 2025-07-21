<!-- Free Quote Section -->
<div class="container pt-5">
	<div class="row align-items-center pt-4 pb-5 pt-lg-5">
		<div class="col-lg-12 mb-5 mb-lg-0 pe-lg-5">
			<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
				<span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-4"><span class="d-inline-flex py-1 px-2">Utiliser nos API</span></span>
			</div>
			<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
				<h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4">Commencer le processus d'intégration
				</h2>
			</div>
			<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
				<p>Chez KAYBIC AFRICA, nous mettons nos API de paiement mobile à votre disposition. Intégrez facilement nos solutions dans votre système et commencez à traiter des transactions Mobile Money en quelques minutes. Documentation complète, sandbox et support technique inclus.</p>
			</div>
			
			<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
				<div class="d-flex flex-column flex-xl-row py-4 align-items-xl-center">
					<div class="pe-4">
						<div class="feature-box feature-box-secondary align-items-center">
							<div class="feature-box-icon feature-box-icon-lg p-static box-shadow-7">
								<img src="{{ asset('img/icons/phone-2.svg') }}" width="30" height="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary'}" />
							</div>
							<div class="feature-box-info ps-2">
								<strong class="d-block text-uppercase text-color-secondary p-relative top-2">Support Technique</strong>
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
								<strong class="d-block text-uppercase text-color-secondary p-relative top-2">Documentation API</strong>
								<a href="mailto:Contact@kaybicafrica.ci" class="text-decoration-none font-secondary text-3 font-weight-semibold text-color-dark text-color-hover-primary transition-2ms negative-ls-05 ws-nowrap p-relative bottom-2">Contact@kaybicafrica.ci</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
				<p class="text-2-5 pt-3">*En vous inscrivant, vous acceptez les termes de notre <a href="#" class="text-decoration-underline text-color-secondary text-color-hover-primary">Politique de Confidentialité.</a></p>
			</div>
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
