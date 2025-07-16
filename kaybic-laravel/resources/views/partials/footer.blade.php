<footer id="footer" class="border-0 bg-light px-3 px-lg-5 pt-0 text-3">
    
    <div class="container pb-lg-4 pt-2">
        <div class="row pt-3">
            <div class="col-lg-4">
                <a href="{{ route('home') }}">
                    <img alt="KAYBIC AFRICA" width="60" src="{{ asset('img/favicon.png') }}" data-img-suffix-primary>
                </a>
                <p class="text-3-5 text-color-grey">Votre passerelle vers l'innovation financière en Afrique. Solutions de paiement modernes, sécurisées et accessibles pour tous.</p>

                <div class="d-flex align-items-center pt-2 pb-4">
                    <p class="d-inline-block mb-0 font-weight-bold line-height-1"><mark class="text-dark mark mark-pos-2 mark-height-50 mark-color bg-color-before-primary-rgba-30 font-secondary text-8 mark-height-30 n-ls-5 p-0">20+</mark></p>
                    <span class="custom-font-tertiary text-5 text-dark n-ls-1 fst-italic ps-2">Entreprises Partenaires</span>
                </div>

                <ul class="social-icons social-icons-clean social-icons-medium">
                    <li class="social-icons-instagram">
                        <a href="https://www.instagram.com/kaybicafrica" target="_blank" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="social-icons-x">
                        <a href="https://www.twitter.com/kaybicafrica" target="_blank" title="X">
                            <i class="fab fa-x-twitter"></i>
                        </a>
                    </li>
                    <li class="social-icons-facebook">
                        <a href="https://www.facebook.com/kaybicafrica" target="_blank" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="social-icons-linkedin">
                        <a href="https://www.linkedin.com/company/kaybicafrica" target="_blank" title="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-2 pt-4 pt-lg-0">
                <h4 class="text-color-dark font-weight-bold mb-3">Navigation</h4>
                <ul class="list list-unstyled">
                    <li>
                        <a href="{{ route('home') }}" class="text-color-grey text-color-hover-primary">
                            Accueil
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="text-color-grey text-color-hover-primary">
                            À propos
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}" class="text-color-grey text-color-hover-primary">
                            Produits
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('solutions') }}" class="text-color-grey text-color-hover-primary">
                            Solutions
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('integration') }}" class="text-color-grey text-color-hover-primary">
                            Intégration
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="text-color-grey text-color-hover-primary">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 pt-4 pt-lg-0">
                <h4 class="text-color-dark font-weight-bold mb-3">Nos Services</h4>
                <ul class="list list-unstyled">
                    <li><a href="{{ route('services.api-payin') }}" class="text-color-grey text-color-hover-primary">API PayIN</a></li>
                    <li><a href="{{ route('services.api-payout') }}" class="text-color-grey text-color-hover-primary">API PayOUT</a></li>
                    <li><a href="{{ route('services.api-transfert') }}" class="text-color-grey text-color-hover-primary">Transfert International</a></li>
                </ul>
            </div>
            <div class="col-lg-3 pt-4 pt-lg-0">
                <h4 class="text-color-dark font-weight-bold mb-3">Newsletter</h4>
                <p class="text-3-5 text-color-grey">Restez informé des dernières innovations et mises à jour de KAYBIC AFRICA.</p>
                <div class="alert alert-success d-none" id="newsletterSuccess">
                    <strong>Succès!</strong> Vous avez été ajouté à notre liste de diffusion.
                </div>
                <div class="alert alert-danger d-none" id="newsletterError"></div>
                <form id="newsletterForm" action="{{ route('newsletter.subscribe') }}" method="POST" class="mb-0">
                    @csrf
                    <div class="row">
                        <div class="form-group col">
                            <div class="position-relative">
                                <i class="icons icon-envelope text-color-grey bg-light text-3-5 position-absolute right-15 top-50pct transform3dy-n50"></i>
                                <input type="email" value="" placeholder="Votre adresse e-mail" class="form-control form-control-icon text-3 h-auto border-width-2 border-radius-2 border-color-grey-200 py-2" name="newsletterEmail" id="newsletterEmail">
                            </div>
                        </div>
                    </div>		
                    <div class="row">
                        <div class="form-group col">
                            <button type="submit" class="btn btn-rounded box-shadow-7 font-weight-medium px-3 py-2 text-2-5 btn-swap-1" style="background-color: #d33636; color: white;" data-clone-element="1">
                                <span>S'abonner <i class="fa-solid fa-arrow-right ms-2"></i></span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
            
    
    <div class="footer-copyright bg-transparent pb-5">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-lg-5 text-center text-lg-start py-3">
                    <p class="text-3 mb-0 opacity-6">© {{ date('Y') }} KAYBIC AFRICA. Tous droits réservés.</p>
                </div>
                <div class="col-lg-7 py-3 text-center text-lg-end">
                    <a href="{{ route('privacy-policy') }}" class="text-color-grey text-color-hover-primary">Politique de Confidentialité</a>
                    <a href="{{ route('legal-mentions') }}" class="text-color-grey text-color-hover-primary ms-3">Mentions Légales</a>
                    <a href="{{ route('data-protection') }}" class="text-color-grey text-color-hover-primary ms-3">DCP</a>
                </div>
            </div>
        </div>
    </div>
    
</footer>
