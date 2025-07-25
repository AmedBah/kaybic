<header id="header" data-plugin-options="{'stickyScrollUp': true, 'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': false, 'stickyStartAt': 100, 'stickyHeaderContainerHeight': 100}">
    <div class="header-body border-top-0 h-auto box-shadow-none">
        <div class="container-fluid px-3 px-lg-5 p-static">
            <div class="row align-items-center py-3">
                <div class="col-auto col-lg-2 col-xxl-3 me-auto me-lg-0">
                    <div class="header-logo" data-clone-element-to="#offCanvasLogo">
                        <a href="{{ route('home') }}">
                            <img alt="kaybicafrica" width="120" src="{{ asset('img/logo.png') }}" data-img-suffix-primary>
                        </a>
                    </div>
                </div>
                <div class="col-auto col-lg-8 col-xxl-6 justify-content-lg-center">
                    <div class="header-nav header-nav-links justify-content-lg-center">
                        <div class="header-nav-main header-nav-main-text-capitalize header-nav-main-arrows header-nav-main-effect-2">
                            <nav class="collapse">
                                <ul class="nav nav-pills" id="mainNav">
                                    <li>
                                        <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                                            Accueil
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                                            À propos
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ route('services') }}" class="nav-link dropdown-toggle {{ request()->routeIs('services*') ? 'active' : '' }}">Produits</a>
                                        <ul class="dropdown-menu">
                                            
                                            <li><a href="https://easytransfert.ci/" class="dropdown-item anim-hover-translate-right-5px transition-3ms bg-transparent text-color-hover-primary text-lg-2 py-lg-2">Easytransfert</a></li>
                                            <li><a href="{{ route('services.api-payin') }}" class="dropdown-item anim-hover-translate-right-5px transition-3ms bg-transparent text-color-hover-primary text-lg-2 py-lg-2">API PayIN</a></li>
                                            <li><a href="{{ route('services.api-payout') }}" class="dropdown-item anim-hover-translate-right-5px transition-3ms bg-transparent text-color-hover-primary text-lg-2 py-lg-2">API PayOUT</a></li>
                                            <li><a href="{{ route('services.api-transfert') }}" class="dropdown-item anim-hover-translate-right-5px transition-3ms bg-transparent text-color-hover-primary text-lg-2 py-lg-2">API de Transferts Internationaux</a></li>
                                            <li><a href="{{ route('services') }}" class="dropdown-item anim-hover-translate-right-5px transition-3ms bg-transparent text-color-hover-primary text-lg-2 py-lg-2">Tous nos produits</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a class="nav-link {{ request()->routeIs('solutions') ? 'active' : '' }}" href="{{ route('solutions') }}">
                                            Solutions
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link {{ request()->routeIs('integration') ? 'active' : '' }}" href="{{ route('process.integration-support') }}">
                                            Intégration
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                                            Contact
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-auto col-lg-2 col-xxl-3">
                    <div class="d-flex justify-content-end align-items-center">
                        <div class="d-none d-sm-flex d-lg-none d-xxl-flex">
                            <img src="{{ asset('img/icons/phone-2.svg') }}" width="24" height="24" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary pe-1'}" />
                            <a href="tel:+2252530000869" class="text-decoration-none font-secondary text-3 font-weight-semibold text-color-dark text-color-hover-primary transition-2ms negative-ls-05 ws-nowrap">+2252530000869</a>
                        </div>
                        <a href="#" class="btn btn-rounded box-shadow-7 font-weight-medium px-3 py-2 text-2-5 btn-swap-1 ms-3 d-none d-md-flex" style="background-color: #d33636; color: white;" data-clone-element="1">
                            <span>Démo <i class="fa-solid fa-arrow-right ms-2"></i></span>
                        </a>
                        <button class="btn header-btn-collapse-nav rounded-pill" data-bs-toggle="offcanvas" href="#offcanvasMain" role="button" aria-controls="offcanvasMain">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
