<x-frontend.app>
    <section class="container mb-5 pb-md-5 mt-4 mt-md-5">
        <picture><source srcset="{{asset('frontend-assets/img/front-page/coachday-header-2.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/front-page/coachday-header-2.webp')}}" height="590" width="1296" class="img-fluid mb-3 mb-lg-5" alt="Coaching beginnt hier"></picture>

        <h1 class="text-center text-primary display-5 mb-2 mb-md-3">Coaching beginnt hier</h1>
        <h3 class="text-center fs-5 text-accent mb-3 mb-md-5">Für jedes Thema den passenden<br class="d-block d-md-none"> Coach buchen.</h3>
        <!-- Form group: Multiple controls (Responsive) -->
        <form class="form-group d-block mx-auto mb-5 rounded-lg-pill" style="max-width:1200px;">
            <div class="row g-0 ms-sm-n2">
            <div class="col-lg-6 d-sm-flex align-items-center">
                <div class="input-group w-sm-50 border-end-sm">
                <span class="input-group-text text-muted">
                    <i class="fi-search"></i>
                </span>
                <input class="form-control" type="text" placeholder="Coaching suchen...">
                </div>
                <hr class="d-sm-none my-2">
                <div class="dropdown w-sm-50 border-end-md" data-bs-toggle="select">
                <button class="btn btn-link dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    <i class="fi-list me-2"></i>
                    <span class="dropdown-toggle-label">Coaching Bereiche</span>
                </button>
                <input type="hidden">
                <ul class="dropdown-menu">
                    <li>
                    <a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="dropdown-item">
                        <span class="dropdown-item-label">Business</span>
                    </a>
                    </li>
                    <li>
                    <a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="dropdown-item">
                        <span class="dropdown-item-label">Karriere</span>
                    </a>
                    </li>
                    <li>
                    <a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="dropdown-item">
                        <span class="dropdown-item-label">Finanzen</span>
                    </a>
                    </li>
                    <li>
                    <a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="dropdown-item">
                        <span class="dropdown-item-label">Gesundheit</span>
                    </a>
                    </li>
                    <li>
                    <a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="dropdown-item">
                        <span class="dropdown-item-label">Life Coaching</span>
                    </a>
                    </li>
                </ul>
            </div>
            </div>
            <hr class="d-md-none mt-2">
            <div class="col-lg-6 d-sm-flex align-items-center pt-2 pt-md-0">
                <div class="dropdown w-sm-50 border-end-sm" data-bs-toggle="select">
                    <button class="btn btn-link dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <i class="fi-map-pin me-2"></i>
                        <span class="dropdown-toggle-label">Ort</span>
                    </button>
                    <input type="hidden">
                    <ul class="dropdown-menu">
                        <li><a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="dropdown-item"><span class="dropdown-item-label">Deutschlandweit</span></a></li>
                        <li><a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="dropdown-item"><span class="dropdown-item-label">Baden-Württemberg</span></a></li>
                        <li><a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="dropdown-item"><span class="dropdown-item-label">Bayern</span></a></li>
                        <li><a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="dropdown-item"><span class="dropdown-item-label">Berlin</span></a></li>
                        <li><a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="dropdown-item"><span class="dropdown-item-label">Brandenburg</span></a></li>
                        <li><a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="dropdown-item"><span class="dropdown-item-label">Bremen</span></a></li>
                        <li><a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="dropdown-item"><span class="dropdown-item-label">Hamburg</span></a></li>
                        <li><a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="dropdown-item"><span class="dropdown-item-label">Hessen</span></a></li>
                        <li><a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="dropdown-item"><span class="dropdown-item-label">Mecklenburg-Vorpommern</span></a></li>
                        <li><a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="dropdown-item"><span class="dropdown-item-label">Niedersachsen</span></a></li>
                        <li><a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="dropdown-item"><span class="dropdown-item-label">Nordrhein-Westfalen</span></a></li>
                        <li><a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="dropdown-item"><span class="dropdown-item-label">Rheinland-Pfalz</span></a></li>
                        <li><a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="dropdown-item"><span class="dropdown-item-label">Saarland</span></a></li>
                        <li><a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="dropdown-item"><span class="dropdown-item-label">Sachsen</span></a></li>
                        <li><a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="dropdown-item"><span class="dropdown-item-label">Sachsen-Anhalt</span></a></li>
                        <li><a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="dropdown-item"><span class="dropdown-item-label">Schleswig-Holstein</span></a></li>
                        <li><a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="dropdown-item"><span class="dropdown-item-label">Thüringen</span></a></li>
                    </ul>
                    
                </div>
                <hr class="d-sm-none my-3">
                <div class="form-check form-switch mb-4 mb-sm-0 ms-3">
                    <input class="form-check-input" id="form-switch-1" type="checkbox" checked>
                    <label class="form-check-label" for="form-switch-1">Online Coaching</label>
                  </div>
                  
                <button type="button" class="btn btn-primary rounded-pill ms-auto btn-search"> <span>Coaching finden</span><i class="fi-search"></i></button>
            </div>
            </div>
        </form>
    </section>

    <section class="container mb-5 pb-md-5">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h4 class="h3 mb-0">Nach Kategorie suchen</h4><a class="btn btn-link fw-normal p-0" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Alle zeigen<i class="fi-arrow-long-right ms-2"></i></a>
        </div>

        <!-- Categorys -->
        <ul class="nav nav-tabs nav-pills-categorys">
            <li class="nav-item text-center">
                <a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="nav-link">
                    <div class="icon-container">
                        <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.043 31.2108L16.2169 35.5586L20.5647 29.0369L24.9125 35.5586L29.2604 29.0369L33.6082 35.5586L36.6734 30.4716" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.913 13.8201L1 50.7766H51L24.913 13.8201Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M24.9131 0.7771V13.8206" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M37.9566 9.47071H24.9131V2.94897H37.9566L35.7826 6.20984L37.9566 9.47071Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    Beruf & Karriere
                </a>
            </li>
            <li class="nav-item text-center">
                <a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="nav-link">
                    <div class="icon-container">
                        <svg width="52" height="48" viewBox="0 0 52 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.69531 29.0397L18.391 18.1701L29.2605 26.8658L42.304 7.30054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M1 0.7771H51" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M3.17383 0.7771H48.826V33.3858C48.826 34.5815 47.8477 35.5597 46.6521 35.5597H5.34774C4.15209 35.5597 3.17383 34.5815 3.17383 33.3858V0.7771Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M22.7386 35.5583L14.043 46.4279" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M37.9564 46.4279L29.2607 35.5583" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                Business
                </a>
            </li>
            <li class="nav-item text-center">
                <a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="nav-link">
                    <div class="icon-container">
                        <svg width="52" height="32" viewBox="0 0 52 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.0003 24.6918C30.2025 24.6918 33.609 21.2852 33.609 17.0831C33.609 12.8809 30.2025 9.47437 26.0003 9.47437C21.7981 9.47437 18.3916 12.8809 18.3916 17.0831C18.3916 21.2852 21.7981 24.6918 26.0003 24.6918Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M51 0.7771H1V31.2119H51V0.7771Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M42.3037 0.7771C42.3037 5.58145 46.195 9.47275 50.9994 9.47275" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M42.3047 31.213C42.3047 26.4086 46.196 22.5173 51.0003 22.5173" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M1 9.47275C5.80435 9.47275 9.69565 5.58145 9.69565 0.7771" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M1 22.5173C5.80435 22.5173 9.69565 26.4086 9.69565 31.213" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>								
                Finanzen
                </a>
            </li>
            <li class="nav-item text-center">
                <a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="nav-link text-center">
                    <div class="icon-container">
                        <svg width="60" height="57" viewBox="0 0 60 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_479_2229)">
                            <path d="M15.0559 0.789062C15.0559 0.789062 22.2258 0.789062 24.4254 6.52386C25.4297 9.17587 25.6505 13.1741 25.4593 15.2284" stroke="#E64658" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M49.9251 25.3893C48.6139 15.694 43.6195 11.2138 35.852 10.7723C30.6907 10.2688 28.2352 15.6966 25.4566 15.4274C22.6781 15.6966 20.2334 10.3738 15.064 10.7723C7.30721 11.37 2.30205 15.694 0.988164 25.3893C-0.635349 37.3866 7.82415 52.4586 14.8567 55.2183C18.3756 56.5995 21.278 54.0606 25.4566 54.1979C29.2368 54.319 32.5349 56.5995 36.0566 55.2183" stroke="#E64658" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M45.0275 27.3708C45.0275 30.1198 42.7982 32.3517 40.0493 32.3517C37.3004 32.3517 35.0684 30.1224 35.0684 27.3708C35.0684 24.6192 37.2977 22.3926 40.0493 22.3926C42.8009 22.3926 45.0275 24.6219 45.0275 27.3708Z" stroke="#E64658" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M32.7556 51.7907V43.0701C32.7556 39.0422 36.0215 35.7764 40.0493 35.7764C44.0771 35.7764 47.343 39.0422 47.343 43.0701V51.7907" stroke="#E64658" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M30.7041 32.2553C30.7041 34.4549 28.9217 36.24 26.7194 36.24C24.517 36.24 22.7346 34.4576 22.7346 32.2553C22.7346 30.0529 24.5197 28.2705 26.7194 28.2705C28.919 28.2705 30.7041 30.0529 30.7041 32.2553Z" stroke="#E64658" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M20.885 51.7916V44.8156C20.885 41.5928 23.4966 38.9785 26.7194 38.9785C29.9422 38.9785 32.5538 41.5901 32.5538 44.8156V51.7916" stroke="#E64658" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M57.3613 32.5541C57.3613 34.7538 55.5763 36.5388 53.3766 36.5388C51.1769 36.5388 49.3918 34.7565 49.3918 32.5541C49.3918 30.3517 51.1769 28.5693 53.3766 28.5693C55.5763 28.5693 57.3613 30.3517 57.3613 32.5541Z" stroke="#E64658" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M47.5422 51.7909V44.8149C47.5422 41.5921 50.1539 38.9805 53.3767 38.9805C56.5994 38.9805 59.2111 41.5921 59.2111 44.8176V51.7936" stroke="#E64658" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_479_2229">
                            <rect width="60" height="56.4487" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>
                            
                            
                    </div>								
                    Gesundheit & Familie
                </a>
            </li>
            <li class="nav-item text-center">
                <a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="nav-link">
                    <div class="icon-container">
                        <svg width="52" height="59" viewBox="0 0 52 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.5948 30.4113C27.6749 30.4113 30.9826 27.1036 30.9826 23.0235C30.9826 18.9434 27.6749 15.6357 23.5948 15.6357C19.5146 15.6357 16.207 18.9434 16.207 23.0235C16.207 27.1036 19.5146 30.4113 23.5948 30.4113Z" stroke="#E64658" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M23.5935 13.2873V9.48926" stroke="#E64658" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M23.5935 36.5578V32.7598" stroke="#E64658" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16.7089 16.1249L14.0244 13.4404" stroke="#E64658" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M33.1637 32.5892L30.4768 29.9023" stroke="#E64658" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13.8566 23.0146H10.0586" stroke="#E64658" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M37.1272 23.0146H33.3291" stroke="#E64658" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16.7089 29.9023L14.0244 32.5892" stroke="#E64658" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M33.1637 13.4404L30.4768 16.1249" stroke="#E64658" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.8368 58C10.6137 58 10.4265 57.8953 10.2898 57.703C10.1674 57.5107 10.1506 57.3038 10.2202 57.0969C10.2538 56.9922 14.4743 45.4977 8.92213 39.0128C7.93118 37.8858 7.0242 36.6711 6.22281 35.3712C4.52883 32.5815 2.35978 28.2291 1.74553 23.3046C0.992122 17.2895 2.6837 12.0194 6.78666 7.61339C6.90663 7.49168 9.57236 4.75314 14.2032 2.82765C16.9385 1.70059 19.7746 1.09446 22.6635 1.00926C26.253 0.907023 29.9264 1.6519 33.5495 3.21226C33.6695 3.26581 33.8063 3.3145 33.9238 3.36805C34.0438 3.42161 34.1614 3.47029 34.2813 3.52385C35.0492 3.83543 37.7485 5.03065 40.2102 7.26773C43.3703 10.128 44.9251 13.5262 44.8411 17.3577C44.7739 19.6289 45.4913 21.8805 46.8758 23.6673L49.9206 27.5694C49.9374 27.5694 49.9374 27.5864 49.9542 27.6035L50.0238 27.7057C50.758 28.8157 50.4677 30.3396 49.3591 31.1039L47.1877 32.5791C47.1877 32.5961 47.1709 32.5961 47.1541 32.6132H47.1373C47.1037 32.6667 47.0845 32.7519 47.1373 32.786L49.0664 34.7431C49.6831 35.3663 49.6831 36.3887 49.0664 37.0143L47.8379 38.2801C47.5788 38.543 47.5476 38.9398 47.7683 39.2003C48.2314 39.7382 48.4354 40.3273 48.385 40.9164C48.3178 41.542 47.9411 42.1311 47.2573 42.6496C47.2573 42.6666 47.2405 42.6666 47.2405 42.6666C47.1709 42.7178 47.1541 42.82 47.1709 42.8906C47.598 44.3657 48.1307 47.0532 46.7774 48.577C45.94 49.5142 44.6059 49.8063 42.7776 49.4436C41.8562 49.2513 40.8965 49.2026 39.9415 49.2878C38.4875 49.4436 36.5248 49.9645 35.3779 51.5249C34.4037 52.8418 34.147 54.7673 34.6245 57.2113C34.658 57.4012 34.6101 57.591 34.4877 57.7493C34.3653 57.9075 34.1806 57.9903 33.991 57.9903H10.8368V58Z" stroke="#E64658" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            
                            
                    </div>								
                    Life Coaching
                </a>
            </li>
            <li class="nav-item text-center">
                <a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="nav-link">
                    <div class="icon-container">
                        <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.3913 35.5597C27.9963 35.5597 35.7826 27.7734 35.7826 18.1684C35.7826 8.56345 27.9963 0.7771 18.3913 0.7771C8.78635 0.7771 1 8.56345 1 18.1684C1 27.7734 8.78635 35.5597 18.3913 35.5597Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M50.9998 50.7759L31.4346 31.2107" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18.3916 9.47046V26.8618" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M27.0866 18.1677H9.69531" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            
                    </div>								
                    Mehr
                </a>
            </li>

        </ul>
    </section>


    <!-- Side Logo Section-->
    <div class="position-relative">
    <!-- Side Logo-->
        <div class="rellax content-overlay pt-5 position-absolute"  style="right:0;z-index:-999;" data-rellax-percentage="0.5" data-rellax-speed="-2.5">
            <img src="img/front-page/sidelogo-right.svg')}}" alt="Logo Coachday" height="220px">
        </div>
    
            <section class="container card border-0 shadow-sm p-3 p-md-4 mb-5">
                <h3 class="mb-3">Coaching entdecken</h3>

                <div class="row mb-4">
                    <div class="col-12 col-sm-6 col-md-4 mb-2">
                        <!-- Carousel inside card -->
                            <div class="card card-hover border-0 px-2 pt-2 pb-0">
                                <div class="tns-carousel-wrapper card-img-top card-img-hover mb-3">
                                    <a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="img-overlay rounded"></a>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3">
                                        <span class="d-table badge rounded-pill bg-success-light mb-1">Gepusht</span>
                                        <span class="d-table badge rounded-pill bg-info">Neu</span>
                                    </div>
                                    <div class="content-overlay end-0 top-0 pt-3 pe-3">

                                    <!-- if not logged in -->
                                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" data-bs-toggle="modal" data-bs-target="#notLoggedInModal" title="Zu Favoriten hinzufügen">
                                        <i class="fi-heart"></i>
                                    </button>
        

                                    <!-- if logged in should be able to add favorites
                                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Zu Favoriten hinzufügen">
                                    <i class="fi-heart"></i>
                                    </button> -->


                                    </div>
                                    <div class="tns-carousel-inner">
                                        <picture><source srcset="{{asset('frontend-assets/img/sample-images/image.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/sample-images/image.webp')}}" alt="Image"></picture>
                                        <picture><source srcset="{{asset('frontend-assets/img/sample-images/image2.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/sample-images/image2.webp')}}" alt="Image"></picture>
                                        <picture><source srcset="{{asset('frontend-assets/img/sample-images/image3.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/sample-images/image3.webp')}}" alt="Image"></picture>
                                    </div>
                                </div>
                                <div class="position-relative pb-2">
                                    <h3 class="fs-lg mb-0"><a class="nav-link stretched-link" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Mental Health</a></h3>
                                    <p>Johanna Musterfrau</p>
                                    <ul class="list-inline mb-0 fs-xs">
                                    <li class="list-inline-item pe-1"><i class="fi-star-filled mt-n1 me-1 fs-base text-accent align-middle"></i><b>5.0</b><span class="text-muted">&nbsp;(48)</span></li>
                                    <li class="list-inline-item pe-1"><i class="fi-map-pin mt-n1 me-1 fs-base text-muted align-middle"></i>Berlin</li>
                                    </ul>
                                </div>
                            </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 mb-2">
                        <!-- Carousel inside card -->
                            <div class="card card-hover border-0 px-2 pt-2 pb-0">
                                <div class="tns-carousel-wrapper card-img-top card-img-hover mb-3">
                                    <a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="img-overlay rounded"></a>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3">
                                        <span class="d-table badge rounded-pill bg-success-light mb-1">Gepusht</span>
                                        <span class="d-table badge rounded-pill bg-info">Neu</span>
                                    </div>
                                    <div class="content-overlay end-0 top-0 pt-3 pe-3">
                                        <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle active" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Zu Favoriten hinzufügen">
                                        <i class="fi-heart"></i>
                                        </button>
                                    </div>
                                    <div class="tns-carousel-inner">
                                        <picture><source srcset="{{asset('frontend-assets/img/sample-images/image.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/sample-images/image.webp')}}" alt="Image"></picture>
                                        <picture><source srcset="{{asset('frontend-assets/img/sample-images/image2.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/sample-images/image2.webp')}}" alt="Image"></picture>
                                        <picture><source srcset="{{asset('frontend-assets/img/sample-images/image3.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/sample-images/image3.webp')}}" alt="Image"></picture>
                                    </div>
                                </div>
                                <div class="position-relative pb-2">
                                    <h3 class="fs-lg mb-0"><a class="nav-link stretched-link" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Mental Health</a></h3>
                                    <p>Johanna Musterfrau</p>
                                    <ul class="list-inline mb-0 fs-xs">
                                    <li class="list-inline-item pe-1"><i class="fi-star-filled mt-n1 me-1 fs-base text-accent align-middle"></i><b>5.0</b><span class="text-muted">&nbsp;(48)</span></li>
                                    <li class="list-inline-item pe-1"><i class="fi-map-pin mt-n1 me-1 fs-base text-muted align-middle"></i>Berlin</li>
                                    </ul>
                                </div>
                            </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 mb-2">
                        <!-- Carousel inside card -->
                            <div class="card card-hover border-0 px-2 pt-2 pb-0">
                                <div class="tns-carousel-wrapper card-img-top card-img-hover mb-3">
                                    <a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="img-overlay rounded"></a>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3">
                                        <span class="d-table badge rounded-pill bg-success-light mb-1">Gepusht</span>
                                        <span class="d-table badge rounded-pill bg-info">Neu</span>
                                    </div>
                                    <div class="content-overlay end-0 top-0 pt-3 pe-3">
                                        <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle active" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Zu Favoriten hinzufügen">
                                        <i class="fi-heart"></i>
                                        </button>
                                    </div>
                                    <div class="tns-carousel-inner">
                                        <picture><source srcset="{{asset('frontend-assets/img/sample-images/image.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/sample-images/image.webp')}}" alt="Image"></picture>
                                        <picture><source srcset="{{asset('frontend-assets/img/sample-images/image2.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/sample-images/image2.webp')}}" alt="Image"></picture>
                                        <picture><source srcset="{{asset('frontend-assets/img/sample-images/image3.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/sample-images/image3.webp')}}" alt="Image"></picture>
                                    </div>
                                </div>
                                <div class="position-relative pb-2">
                                    <h3 class="fs-lg mb-0"><a class="nav-link stretched-link" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Mental Health</a></h3>
                                    <p>Johanna Musterfrau</p>
                                    <ul class="list-inline mb-0 fs-xs">
                                    <li class="list-inline-item pe-1"><i class="fi-star-filled mt-n1 me-1 fs-base text-accent align-middle"></i><b>5.0</b><span class="text-muted">&nbsp;(48)</span></li>
                                    <li class="list-inline-item pe-1"><i class="fi-map-pin mt-n1 me-1 fs-base text-muted align-middle"></i>Berlin</li>
                                    </ul>
                                </div>
                            </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 mb-2 d-none d-sm-block">
                        <!-- Carousel inside card -->
                            <div class="card card-hover border-0 px-2 pt-2 pb-0">
                                <div class="tns-carousel-wrapper card-img-top card-img-hover mb-3">
                                    <a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="img-overlay rounded"></a>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3">
                                        <span class="d-table badge rounded-pill bg-success-light mb-1">Gepusht</span>
                                        <span class="d-table badge rounded-pill bg-info">Neu</span>
                                    </div>
                                    <div class="content-overlay end-0 top-0 pt-3 pe-3">
                                        <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle active" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Zu Favoriten hinzufügen">
                                        <i class="fi-heart"></i>
                                        </button>
                                    </div>
                                    <div class="tns-carousel-inner">
                                        <picture><source srcset="{{asset('frontend-assets/img/sample-images/image.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/sample-images/image.webp')}}" alt="Image"></picture>
                                        <picture><source srcset="{{asset('frontend-assets/img/sample-images/image2.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/sample-images/image2.webp')}}" alt="Image"></picture>
                                        <picture><source srcset="{{asset('frontend-assets/img/sample-images/image3.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/sample-images/image3.webp')}}" alt="Image"></picture>
                                    </div>
                                </div>
                                <div class="position-relative pb-2">
                                    <h3 class="fs-lg mb-0"><a class="nav-link stretched-link" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Mental Health</a></h3>
                                    <p>Johanna Musterfrau</p>
                                    <ul class="list-inline mb-0 fs-xs">
                                    <li class="list-inline-item pe-1"><i class="fi-star-filled mt-n1 me-1 fs-base text-accent align-middle"></i><b>5.0</b><span class="text-muted">&nbsp;(48)</span></li>
                                    <li class="list-inline-item pe-1"><i class="fi-map-pin mt-n1 me-1 fs-base text-muted align-middle"></i>Berlin</li>
                                    </ul>
                                </div>
                            </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 mb-2 d-none d-sm-block">
                        <!-- Carousel inside card -->
                            <div class="card card-hover border-0 px-2 pt-2 pb-0">
                                <div class="tns-carousel-wrapper card-img-top card-img-hover mb-3">
                                    <a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="img-overlay rounded"></a>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3">
                                        <span class="d-table badge rounded-pill bg-success-light mb-1">Gepusht</span>
                                        <span class="d-table badge rounded-pill bg-info">Neu</span>
                                    </div>
                                    <div class="content-overlay end-0 top-0 pt-3 pe-3">
                                        <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle active" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Zu Favoriten hinzufügen">
                                        <i class="fi-heart"></i>
                                        </button>
                                    </div>
                                    <div class="tns-carousel-inner">
                                        <picture><source srcset="{{asset('frontend-assets/img/sample-images/image.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/sample-images/image.webp')}}" alt="Image"></picture>
                                        <picture><source srcset="{{asset('frontend-assets/img/sample-images/image2.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/sample-images/image2.webp')}}" alt="Image"></picture>
                                        <picture><source srcset="{{asset('frontend-assets/img/sample-images/image3.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/sample-images/image3.webp')}}" alt="Image"></picture>
                                    </div>
                                </div>
                                <div class="position-relative pb-2">
                                    <h3 class="fs-lg mb-0"><a class="nav-link stretched-link" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Mental Health</a></h3>
                                    <p>Johanna Musterfrau</p>
                                    <ul class="list-inline mb-0 fs-xs">
                                    <li class="list-inline-item pe-1"><i class="fi-star-filled mt-n1 me-1 fs-base text-accent align-middle"></i><b>5.0</b><span class="text-muted">&nbsp;(48)</span></li>
                                    <li class="list-inline-item pe-1"><i class="fi-map-pin mt-n1 me-1 fs-base text-muted align-middle"></i>Berlin</li>
                                    </ul>
                                </div>
                            </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 mb-2 d-none d-sm-block">
                        <!-- Carousel inside card -->
                            <div class="card card-hover border-0 px-2 pt-2 pb-0">
                                <div class="tns-carousel-wrapper card-img-top card-img-hover mb-3">
                                    <a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="img-overlay rounded"></a>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3">
                                        <span class="d-table badge rounded-pill bg-success-light mb-1">Gepusht</span>
                                        <span class="d-table badge rounded-pill bg-info">Neu</span>
                                    </div>
                                    <div class="content-overlay end-0 top-0 pt-3 pe-3">
                                        <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle active" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Zu Favoriten hinzufügen">
                                        <i class="fi-heart"></i>
                                        </button>
                                    </div>
                                    <div class="tns-carousel-inner">
                                        <picture><source srcset="{{asset('frontend-assets/img/sample-images/image.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/sample-images/image.webp')}}" alt="Image"></picture>
                                        <picture><source srcset="{{asset('frontend-assets/img/sample-images/image2.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/sample-images/image2.webp')}}" alt="Image"></picture>
                                        <picture><source srcset="{{asset('frontend-assets/img/sample-images/image3.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/sample-images/image3.webp')}}" alt="Image"></picture>
                                    </div>
                                </div>
                                <div class="position-relative pb-2">
                                    <h3 class="fs-lg mb-0"><a class="nav-link stretched-link" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Mental Health</a></h3>
                                    <p>Johanna Musterfrau</p>
                                    <ul class="list-inline mb-0 fs-xs">
                                    <li class="list-inline-item pe-1"><i class="fi-star-filled mt-n1 me-1 fs-base text-accent align-middle"></i><b>5.0</b><span class="text-muted">&nbsp;(48)</span></li>
                                    <li class="list-inline-item pe-1"><i class="fi-map-pin mt-n1 me-1 fs-base text-muted align-middle"></i>Berlin</li>
                                    </ul>
                                </div>
                            </div>
                    </div>

                </div>
                <div class="d-block">
                    <a href="/" title="lorem ipsum" aria-label="Lorem ipsum" class="btn btn-primary rounded-pill btn-sm">Coachings entdecken</a>
                </div>

            </section>

            <section class="container mb-5 pb-md-5 pt-md-5">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="h3 mb-0">Top Bereiche</h4><a class="btn btn-link fw-normal p-0" href="/" title="Alle Bereiche anzeigen" aria-label="Alle Bereiche anzeigen">Alle zeigen<i class="fi-arrow-long-right ms-2"></i></a>
                </div>

                <!-- Responsive with multiple items + Controls and nav outside -->
                <div class="tns-carousel-wrapper  tns-controls-inside-lg tns-nav-inside ">
                    <div class="tns-carousel-inner" data-carousel-options='{"items": 3, "nav": false, "responsive": {"0":{"items":1},"500":{"items":2, "gutter": 18},"768":{"items":3, "gutter": 20}, "1100":{"gutter": 24}}}'>

                        <div class="card card-hover border-0 pe-4 pt-2 pb-0 ">
                            <a href="/" title="Finanzen & Wirtschaft" aria-label="Finanzen & Wirtschaft" class="text-decoration-none" aria-hidden="true">	
                                <div class="card-img-top card-img-hover">
                                    <picture><source srcset="{{asset('frontend-assets/img/sample-images/image4.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/sample-images/image4.webp')}}" class="mb-2 w-100" alt="Image"></picture>
                                    <h5 class="px-2 py-2 text-gray-800">Finanzen & Wirtschaft</h5>
                                </div>
                            </a>
                        </div>

                        
                        <div class="card card-hover border-0 pe-4 pt-2 pb-0 ">
                            <a href="/" title="Finanzen & Wirtschaft" aria-label="Finanzen & Wirtschaft" class="text-decoration-none" aria-hidden="true">	
                                <div class="card-img-top card-img-hover">
                                    <picture><source srcset="{{asset('frontend-assets/img/sample-images/image4.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/sample-images/image4.webp')}}" class="mb-2 w-100" alt="Image"></picture>
                                    <h5 class="px-2 py-2 text-gray-800">Finanzen & Wirtschaft</h5>
                                </div>
                            </a>
                        </div>

                        
                        <div class="card card-hover border-0 pe-4 pt-2 pb-0 ">
                            <a href="/" title="Finanzen & Wirtschaft" aria-label="Finanzen & Wirtschaft" class="text-decoration-none" aria-hidden="true">	
                                <div class="card-img-top card-img-hover">
                                    <picture><source srcset="{{asset('frontend-assets/img/sample-images/image4.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/sample-images/image4.webp')}}" class="mb-2 w-100" alt="Image"></picture>
                                    <h5 class="px-2 py-2 text-gray-800">Finanzen & Wirtschaft</h5>
                                </div>
                            </a>
                        </div>

                        
                        <div class="card card-hover border-0 pe-4 pt-2 pb-0 ">
                            <a href="/" title="Finanzen & Wirtschaft" aria-label="Finanzen & Wirtschaft" class="text-decoration-none" aria-hidden="true">	
                                <div class="card-img-top card-img-hover">
                                    <picture><source srcset="{{asset('frontend-assets/img/sample-images/image4.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/sample-images/image4.webp')}}" class="mb-2 w-100" alt="Image"></picture>
                                    <h5 class="px-2 py-2 text-gray-800">Finanzen & Wirtschaft</h5>
                                </div>
                            </a>
                        </div>

                        
                        <div class="card card-hover border-0 pe-4 pt-2 pb-0 ">
                            <a href="/" title="Finanzen & Wirtschaft" aria-label="Finanzen & Wirtschaft" class="text-decoration-none" aria-hidden="true">	
                                <div class="card-img-top card-img-hover">
                                    <picture><source srcset="{{asset('frontend-assets/img/sample-images/image4.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/sample-images/image4.webp')}}" class="mb-2 w-100" alt="Image"></picture>
                                    <h5 class="px-2 py-2 text-gray-800">Finanzen & Wirtschaft</h5>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </section>

    </div>


    <section class="container mb-5 pb-md-5 pt-md-5">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h4 class="h3 mb-0">Beliebte Coachings</h4><a class="btn btn-link fw-normal p-0" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Alle zeigen<i class="fi-arrow-long-right ms-2"></i></a>
        </div>

        <!-- Responsive with multiple items + Controls and nav outside -->
        <div class="tns-carousel-wrapper tns-controls-inside-lg tns-nav-inside position-relative">
            <div class="tns-carousel-inner" data-carousel-options='{"items": 3, "nav": false, "responsive": {"0":{"items":1},"500":{"items":2, "gutter": 18},"768":{"items":4, "gutter": 20}, "1100":{"gutter": 24}}}'>
                <!--Card-->
                <div class="card border-0 pe-4 pt-2 pb-0">
                    <div class="card-img-top card-img-hover mb-3">
                        <a href="#" title="lorem ipsum" aria-label="Lorem ipsum" aria-hidden="true" class="img-overlay rounded"></a>
                        <div class="position-absolute start-0 top-0 pt-3 ps-3">
                            <span class="d-table badge rounded-pill bg-success-light mb-1">Gepusht</span>
                            <span class="d-table badge rounded-pill bg-info">Neu</span>
                        </div>
                        <div class="content-overlay end-0 top-0 pt-3 pe-3">
                            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle active" type="button" data-bs-toggle="tooltip" aria-hidden="true" data-bs-placement="left" title="Zu Favoriten hinzufügen">
                            <i class="fi-heart"></i>
                            </button>
                        </div>
                        <picture><source srcset="{{asset('frontend-assets/img/sample-images/image.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/sample-images/image.webp')}}" class="img-fluid w-100" alt="Image"></picture>
                    </div>
                    <div class="position-relative pb-2">
                        <h3 class="fs-lg mb-0"><a class="nav-link stretched-link" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Mental Health</a></h3>
                        <p>Johanna Musterfrau</p>
                        <ul class="list-inline mb-0 fs-xs mb-4">
                        <li class="list-inline-item pe-1"><i class="fi-star-filled mt-n1 me-1 fs-base text-accent align-middle"></i><b>5.0</b><span class="text-muted">&nbsp;(48)</span></li>
                        <li class="list-inline-item pe-1"><i class="fi-map-pin mt-n1 me-1 fs-base text-muted align-middle"></i>Berlin</li>
                        </ul>
                    <a href="" class="btn btn-primary rounded-pill btn-sm" aria-hidden="true"> Erfahre mehr</a>
                    </div>
                </div>

                <!--Card-->
                <div class="card border-0 pe-4 pt-2 pb-0">
                    <div class="card-img-top card-img-hover mb-3">
                        <a href="#" title="lorem ipsum" aria-label="Lorem ipsum" aria-hidden="true" class="img-overlay rounded"></a>
                        <div class="position-absolute start-0 top-0 pt-3 ps-3">
                            <span class="d-table badge rounded-pill bg-success-light mb-1">Gepusht</span>
                            <span class="d-table badge rounded-pill bg-info">Neu</span>
                        </div>
                        <div class="content-overlay end-0 top-0 pt-3 pe-3">
                            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle active" type="button" data-bs-toggle="tooltip" aria-hidden="true" data-bs-placement="left" title="Zu Favoriten hinzufügen">
                            <i class="fi-heart"></i>
                            </button>
                        </div>
                        <picture><source srcset="{{asset('frontend-assets/img/sample-images/image.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/sample-images/image.webp')}}" class="img-fluid w-100" alt="Image"></picture>
                    </div>
                    <div class="position-relative pb-2">
                        <h3 class="fs-lg mb-0"><a class="nav-link stretched-link" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Mental Health</a></h3>
                        <p>Johanna Musterfrau</p>
                        <ul class="list-inline mb-0 fs-xs mb-4">
                        <li class="list-inline-item pe-1"><i class="fi-star-filled mt-n1 me-1 fs-base text-accent align-middle"></i><b>5.0</b><span class="text-muted">&nbsp;(48)</span></li>
                        <li class="list-inline-item pe-1"><i class="fi-map-pin mt-n1 me-1 fs-base text-muted align-middle"></i>Berlin</li>
                        </ul>
                    <a href="" class="btn btn-primary rounded-pill btn-sm" aria-hidden="true"> Erfahre mehr</a>
                    </div>
                </div>

                <!--Card-->
                <div class="card border-0 pe-4 pt-2 pb-0">
                    <div class="card-img-top card-img-hover mb-3">
                        <a href="#" title="lorem ipsum" aria-label="Lorem ipsum" aria-hidden="true" class="img-overlay rounded"></a>
                        <div class="position-absolute start-0 top-0 pt-3 ps-3">
                            <span class="d-table badge rounded-pill bg-success-light mb-1">Gepusht</span>
                            <span class="d-table badge rounded-pill bg-info">Neu</span>
                        </div>
                        <div class="content-overlay end-0 top-0 pt-3 pe-3">
                            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle active" type="button" data-bs-toggle="tooltip" aria-hidden="true" data-bs-placement="left" title="Zu Favoriten hinzufügen">
                            <i class="fi-heart"></i>
                            </button>
                        </div>
                        <picture><source srcset="{{asset('frontend-assets/img/sample-images/image.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/sample-images/image.webp')}}" class="img-fluid w-100" alt="Image"></picture>
                    </div>
                    <div class="position-relative pb-2">
                        <h3 class="fs-lg mb-0"><a class="nav-link stretched-link" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Mental Health</a></h3>
                        <p>Johanna Musterfrau</p>
                        <ul class="list-inline mb-0 fs-xs mb-4">
                        <li class="list-inline-item pe-1"><i class="fi-star-filled mt-n1 me-1 fs-base text-accent align-middle"></i><b>5.0</b><span class="text-muted">&nbsp;(48)</span></li>
                        <li class="list-inline-item pe-1"><i class="fi-map-pin mt-n1 me-1 fs-base text-muted align-middle"></i>Berlin</li>
                        </ul>
                    <a href="" class="btn btn-primary rounded-pill btn-sm" aria-hidden="true"> Erfahre mehr</a>
                    </div>
                </div>

                <!--Card-->
                <div class="card border-0 pe-4 pt-2 pb-0">
                    <div class="card-img-top card-img-hover mb-3">
                        <a href="#" title="lorem ipsum" aria-label="Lorem ipsum" aria-hidden="true" class="img-overlay rounded"></a>
                        <div class="position-absolute start-0 top-0 pt-3 ps-3">
                            <span class="d-table badge rounded-pill bg-success-light mb-1">Gepusht</span>
                            <span class="d-table badge rounded-pill bg-info">Neu</span>
                        </div>
                        <div class="content-overlay end-0 top-0 pt-3 pe-3">
                            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle active" type="button" data-bs-toggle="tooltip" aria-hidden="true" data-bs-placement="left" title="Zu Favoriten hinzufügen">
                            <i class="fi-heart"></i>
                            </button>
                        </div>
                        <picture><source srcset="{{asset('frontend-assets/img/sample-images/image.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/sample-images/image.webp')}}" class="img-fluid w-100" alt="Image"></picture>
                    </div>
                    <div class="position-relative pb-2">
                        <h3 class="fs-lg mb-0"><a class="nav-link stretched-link" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Mental Health</a></h3>
                        <p>Johanna Musterfrau</p>
                        <ul class="list-inline mb-0 fs-xs mb-4">
                        <li class="list-inline-item pe-1"><i class="fi-star-filled mt-n1 me-1 fs-base text-accent align-middle"></i><b>5.0</b><span class="text-muted">&nbsp;(48)</span></li>
                        <li class="list-inline-item pe-1"><i class="fi-map-pin mt-n1 me-1 fs-base text-muted align-middle"></i>Berlin</li>
                        </ul>
                    <a href="" class="btn btn-primary rounded-pill btn-sm" aria-hidden="true"> Erfahre mehr</a>
                    </div>
                </div>

                <!--Card-->
                <div class="card border-0 pe-4 pt-2 pb-0">
                    <div class="card-img-top card-img-hover mb-3">
                        <a href="#" title="lorem ipsum" aria-label="Lorem ipsum" aria-hidden="true" class="img-overlay rounded"></a>
                        <div class="position-absolute start-0 top-0 pt-3 ps-3">
                            <span class="d-table badge rounded-pill bg-success-light mb-1">Gepusht</span>
                            <span class="d-table badge rounded-pill bg-info">Neu</span>
                        </div>
                        <div class="content-overlay end-0 top-0 pt-3 pe-3">
                            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle active" type="button" data-bs-toggle="tooltip" aria-hidden="true" data-bs-placement="left" title="Zu Favoriten hinzufügen">
                            <i class="fi-heart"></i>
                            </button>
                        </div>
                        <picture><source srcset="{{asset('frontend-assets/img/sample-images/image.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/sample-images/image.webp')}}" class="img-fluid w-100" alt="Image"></picture>
                    </div>
                    <div class="position-relative pb-2">
                        <h3 class="fs-lg mb-0"><a class="nav-link stretched-link" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Mental Health</a></h3>
                        <p>Johanna Musterfrau</p>
                        <ul class="list-inline mb-0 fs-xs mb-4">
                        <li class="list-inline-item pe-1"><i class="fi-star-filled mt-n1 me-1 fs-base text-accent align-middle"></i><b>5.0</b><span class="text-muted">&nbsp;(48)</span></li>
                        <li class="list-inline-item pe-1"><i class="fi-map-pin mt-n1 me-1 fs-base text-muted align-middle"></i>Berlin</li>
                        </ul>
                    <a href="" class="btn btn-primary rounded-pill btn-sm" aria-hidden="true"> Erfahre mehr</a>
                    </div>
                </div>
                
                
            
            </div>
        </div>
    </section>

    <section class="container mb-5 pb-md-5 pt-md-5">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h4 class="h3 mb-0">Coachings in deiner Stadt</h4><a class="btn btn-link fw-normal p-0" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Alle zeigen<i class="fi-arrow-long-right ms-2"></i></a>
        </div>

        <!-- Responsive with multiple items + Controls and nav outside -->
        <div class="tns-carousel-wrapper tns-controls-inside-lg tns-nav-inside ">
            <div class="tns-carousel-inner" data-carousel-options='{"items": 4, "nav": false, "responsive": {"0":{"items":1},"500":{"items":2, "gutter": 18},"768":{"items":4, "gutter": 20}, "1100":{"gutter": 24}}}'>

                <div class="card card-hover me-4 p-0  my-3 shadow-sm border-0">
                    <a href="/" title="lorem ipsum" aria-label="Lorem ipsum" class="text-decoration-none">							
                        <div class="card-img-top card-img-hover">
                            <span class="img-overlay"></span>
                            <picture><source srcset="{{asset('frontend-assets/img/front-page/berlin.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/front-page/berlin.webp')}}" class="img-fluid w-100 object-fit-cover" alt="Image"></picture>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title text-gray-800">Berlin</h5>
                        </div>
                    </a>
                </div>

                <div class="card card-hover me-4 p-0  my-3 shadow-sm border-0">
                    <a href="/" title="lorem ipsum" aria-label="Lorem ipsum" class="text-decoration-none">							
                        <div class="card-img-top card-img-hover">
                            <span class="img-overlay"></span>
                            <picture><source srcset="{{asset('frontend-assets/img/front-page/berlin.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/front-page/berlin.webp')}}" class="img-fluid w-100 object-fit-cover" alt="Image"></picture>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title text-gray-800">Berlin</h5>
                        </div>
                    </a>
                </div>

                
                <div class="card card-hover me-4 p-0  my-3 shadow-sm border-0">
                    <a href="/" title="lorem ipsum" aria-label="Lorem ipsum" class="text-decoration-none">							
                        <div class="card-img-top card-img-hover">
                            <span class="img-overlay"></span>
                            <picture><source srcset="{{asset('frontend-assets/img/front-page/berlin.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/front-page/berlin.webp')}}" class="img-fluid w-100 object-fit-cover" alt="Image"></picture>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title text-gray-800">Berlin</h5>
                        </div>
                    </a>
                </div>

                
                <div class="card card-hover me-4 p-0  my-3 shadow-sm border-0">
                    <a href="/" title="lorem ipsum" aria-label="Lorem ipsum" class="text-decoration-none">							
                        <div class="card-img-top card-img-hover">
                            <span class="img-overlay"></span>
                            <picture><source srcset="{{asset('frontend-assets/img/front-page/berlin.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/front-page/berlin.webp')}}" class="img-fluid w-100 object-fit-cover" alt="Image"></picture>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title text-gray-800">Berlin</h5>
                        </div>
                    </a>
                </div>

                
                <div class="card card-hover me-4 p-0  my-3 shadow-sm border-0">
                    <a href="/" title="lorem ipsum" aria-label="Lorem ipsum" class="text-decoration-none">							
                        <div class="card-img-top card-img-hover">
                            <span class="img-overlay"></span>
                            <picture><source srcset="{{asset('frontend-assets/img/front-page/berlin.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/front-page/berlin.webp')}}" class="img-fluid w-100 object-fit-cover" alt="Image"></picture>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title text-gray-800">Berlin</h5>
                        </div>
                    </a>
                </div>

                
                <div class="card card-hover me-4 p-0  my-3 shadow-sm border-0">
                    <a href="/" title="lorem ipsum" aria-label="Lorem ipsum" class="text-decoration-none">							
                        <div class="card-img-top card-img-hover">
                            <span class="img-overlay"></span>
                            <picture><source srcset="{{asset('frontend-assets/img/front-page/berlin.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/front-page/berlin.webp')}}" class="img-fluid w-100 object-fit-cover" alt="Image"></picture>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title text-gray-800">Berlin</h5>
                        </div>
                    </a>
                </div>



            </div>
        </div>
    </section>

    <section class="container mb-5 pb-2 pb-lg-4">

          <div class="d-flex flex-wrap position-relative py-5">
            <div class="row bg-accent rounded-md text-white w-md-100">
                <div class="col-12 text-center d-block d-lg-none">
                    <picture><source srcset="{{asset('frontend-assets/img/front-page/coachday-illu-1.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/front-page/coachday-illu-1.webp')}}" width="459" height="484" class="img-fluid"  alt="Image" style="margin-top: -50px;"></picture>
                </div>

                <div class="col-12 col-lg-5 p-4 p-lg-5 my-md-5">
                    <h3 class="text-white h-2">Werden Sie jetzt Teil unserer Coaching-Community!</h3>
                    <p class="pb-3 fs-lg w-100">Registrieren Sie sich und starten Sie Ihre Reise als Coach auf Coachday!</p><a class="btn btn-lg btn-primary rounded-pill" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Coaching anbieten</a>
                </div>
            </div>
            <picture><source srcset="{{asset('frontend-assets/img/front-page/coachday-illu-1.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/front-page/coachday-illu-1.webp')}}" width="462" class="img-fluid coach-werden-image"  alt="Image"></picture>
        </div>

    </section>

    <section class="container mb-5 pb-2 pb-lg-4">
        <h2 class="h3 mb-4 pb-3 text-center text-md-start">Top Coaches</h2>
        <div class="tns-carousel-wrapper">
            <div class="tns-carousel-inner" data-carousel-options='{"items": 1, "mode": "gallery", "controlsContainer": "#top-coaches-carousel-controlls", "nav": false}'>


                <div>
                    <div class="row align-items-center">
                        <div class="col-xl-4 d-none d-xl-block">
                            <picture><source srcset="{{asset('frontend-assets/img/sample-images/image-5.webp')}}" type="image/webp"><img src="img/sample-images/image-5.webp')}}" alt="Agent picture" class="rounded-3"></picture>
                        </div>
                        <div class="col-xl-4 col-md-5 col-sm-4">
                            <picture><source srcset="{{asset('frontend-assets/img/sample-images/image-6.webp')}}" type="image/webp"><img src="img/sample-images/image-6.webp')}}" alt="Agent picture" class="rounded-3"></picture>
                        </div>
                        <div class="col-xl-4 col-md-7 col-sm-8 px-4 px-sm-3 px-md-0 ms-md-n4 mt-n5 mt-sm-0 py-3">
                            <div class="card border-0 shadow-sm ms-sm-n5">
                                <blockquote class="blockquote card-body">
                                    <h4 class="text-gray-800" style="max-width: 22rem;">Business-Exzellenz durch fokussiertes Mentoring</h4>
                                    <p class="d-sm-none d-lg-block">Als erfahrener Business Mentor und Keynote Speaker teile ich praxisnahe Einblicke und bewährte Geschäftsstrategien. In meinem Mentoring-Programm begleite ich dich auf dem Weg zu nachhaltigem unternehmerischem Erfolg. </p>
                                    <footer class="d-flex justify-content-between">
                                        <div class="pe-3">
                                            <a href="/" title="lorem ipsum" aria-label="Lorem ipsum" class="text-decoration-none">
                                                <h6 class="mb-0 text-gray-800">George Franziskus Mustermann</h6>
                                                <div class="text-muted fw-normal fs-sm mb-3">Business Mentor & Keynote Speaker</div>
                                            </a>
                                            <a href="" class="btn btn-primary rounded-pill btn-sm">Zum Profil</a>
                                        </div>
                                        <div>
                                            <!-- Star rating would go here -->
                                             <div class="d-flex align-items-center">
                                                <div class="star-rating star-rating-sm me-1">
                                                    <i class="star-rating-icon fi-star-filled text-accent active"></i>
                                                    <i class="star-rating-icon fi-star-filled text-accent active"></i>
                                                    <i class="star-rating-icon fi-star-filled text-accent active"></i>
                                                    <i class="star-rating-icon fi-star-filled text-accent active"></i>
                                                    <i class="star-rating-icon fi-star-filled text-accent active"></i>
                                                </div>
                                                <span class="fs-sm text-muted">(450)</span>
                                             </div>
                                        </div>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row align-items-center">
                        <div class="col-xl-4 d-none d-xl-block">
                            <picture><source srcset="{{asset('frontend-assets/img/sample-images/image-5.webp')}}" type="image/webp"><img src="img/sample-images/image-5.webp')}}" alt="Agent picture" class="rounded-3"></picture>
                        </div>
                        <div class="col-xl-4 col-md-5 col-sm-4">
                            <picture><source srcset="{{asset('frontend-assets/img/sample-images/image-6.webp')}}" type="image/webp"><img src="img/sample-images/image-6.webp')}}" alt="Agent picture" class="rounded-3"></picture>
                        </div>
                        <div class="col-xl-4 col-md-7 col-sm-8 px-4 px-sm-3 px-md-0 ms-md-n4 mt-n5 mt-sm-0 py-3">
                            <div class="card border-0 shadow-sm ms-sm-n5">
                                <blockquote class="blockquote card-body">
                                    <h4 class="text-gray-800" style="max-width: 22rem;">Business-Exzellenz durch fokussiertes Mentoring</h4>
                                    <p class="d-sm-none d-lg-block">Als erfahrener Business Mentor und Keynote Speaker teile ich praxisnahe Einblicke und bewährte Geschäftsstrategien. In meinem Mentoring-Programm begleite ich dich auf dem Weg zu nachhaltigem unternehmerischem Erfolg. </p>
                                    <footer class="d-flex justify-content-between">
                                        <div class="pe-3">
                                            <a href="/" title="lorem ipsum" aria-label="Lorem ipsum" class="text-decoration-none">
                                                <h6 class="mb-0 text-gray-800">George Franziskus Mustermann</h6>
                                                <div class="text-muted fw-normal fs-sm mb-3">Business Mentor & Keynote Speaker</div>
                                            </a>
                                            <a href="" class="btn btn-primary rounded-pill btn-sm">Zum Profil</a>
                                        </div>
                                        <div>
                                            <!-- Star rating would go here -->
                                             <div class="d-flex align-items-center">
                                                <div class="star-rating star-rating-sm me-1">
                                                    <i class="star-rating-icon fi-star-filled text-accent active"></i>
                                                    <i class="star-rating-icon fi-star-filled text-accent active"></i>
                                                    <i class="star-rating-icon fi-star-filled text-accent active"></i>
                                                    <i class="star-rating-icon fi-star-filled text-accent active"></i>
                                                    <i class="star-rating-icon fi-star-filled text-accent active"></i>
                                                </div>
                                                <span class="fs-sm text-muted">(450)</span>
                                             </div>
                                        </div>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>


        </div>
        <div id="top-coaches-carousel-controlls" class="tns-carousel-controls justify-content-center justify-content-md-start my-2 mt-md-4">
            <button type="button" class="mx-2">
                <i class="fi-chevron-left"></i>
            </button>
            <button type="button" class="mx-2">
                <i class="fi-chevron-right"></i>
            </button>
        </div>
    </section>
    
    <section class="bg-accent my-5 py-5">

        <div class="container my-5">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-12 col-md-6">
                    <!-- Horizontal card layout -->
                    <div class="card card-horizontal m-2">
                        <div class="card-img-top bg-contain" style="background-image: url('{{asset('frontend-assets/img/front-page/neu-hinzugefuegt.svg')}}');"></div>
                        <div class="card-body">
                            <h5 class="card-title">Neu hinzugefügte Coaches</h5>
                            <p class="card-text fs-sm">Nulla sit congue nunc lacus, laoreet nulla iaculis faucibus. Ut morbi enim.</p>
                            <a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="btn btn-xs btn-primary rounded-pill">Coach finden</a>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-12">
                    <div class="card card-horizontal m-2">
                        <div class="card-img-top bg-contain" style="background-image: url('{{asset('frontend-assets/img/front-page/ciachings-im-angebot.svg')}}');"></div>
                        <div class="card-body">
                            <h5 class="card-title">Coachings im Angebot</h5>
                            <p class="card-text fs-sm">Nulla sit congue nunc lacus, laoreet nulla iaculis faucibus. Ut morbi enim.</p>
                            <a href="#" title="lorem ipsum" aria-label="Lorem ipsum" class="btn btn-xs btn-primary rounded-pill">Angebote anzeigen</a>
                        </div>
                    </div>
                </div> -->


            </div>
        </div>
    </section>

    <section class="container mb-5 pb-2 pb-lg-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h4 class="h3 mb-0">Magazin</h4><a class="btn btn-link fw-normal p-0" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Alle zeigen<i class="fi-arrow-long-right ms-2"></i></a>
        </div>

        <!-- Mobile View -->
        <div class="tns-carousel-wrapper tns-controls-inside-lg tns-nav-inside d-block d-lg-none">
            <div class="tns-carousel-inner" data-carousel-options='{"items": 1, "nav": false, "responsive": {"0":{"items":1, "gutter": 20},"992":{"items":2, "gutter": 20}}}'>

                <div class="d-block px-3">
                    <article class="card border-0 shadow-sm card-hover card-horizontal mb-4"><a class="card-img-top" href="#" title="lorem ipsum" aria-label="Lorem ipsum" style="background-image: url(img/sample-images/user.webp')}});"></a>
                        <div class="card-body"><a class="fs-xs text-uppercase text-decoration-none text-accent" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Interview</a>
                          <h3 class="fs-base pt-1 mb-2"><a class="nav-link" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Persönliches Wachstum im Job</a></h3>
                          <p class="fs-sm text-muted mb-5">Max Mustermann erzählt, wie individuelle Begleitung ihm half, berufliche Höhen zu erreichen.</p>
                          <a href="/" title="lorem ipsum" aria-label="Lorem ipsum" class="btn btn-outline-primary rounded-pill  btn-sm">Jetzt entdecken </a>
                        </div>
                      </article>
                </div>

                <div class="d-block">
                    <article class="card border-0 shadow-sm card-hover card-horizontal mb-4"><a class="card-img-top" href="#" title="lorem ipsum" aria-label="Lorem ipsum" style="background-image: url(img/sample-images/user.webp')}});"></a>
                        <div class="card-body"><a class="fs-xs text-uppercase text-decoration-none text-accent" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Interview</a>
                          <h3 class="fs-base pt-1 mb-2"><a class="nav-link" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Persönliches Wachstum im Job</a></h3>
                          <p class="fs-sm text-muted mb-5">Max Mustermann erzählt, wie individuelle Begleitung ihm half, berufliche Höhen zu erreichen.</p>
                          <a href="/" title="lorem ipsum" aria-label="Lorem ipsum" class="btn btn-outline-primary rounded-pill  btn-sm">Jetzt entdecken </a>
                        </div>
                      </article>
                </div>

                <div class="d-block">
                    <article class="card border-0 shadow-sm card-hover card-horizontal mb-4"><a class="card-img-top" href="#" title="lorem ipsum" aria-label="Lorem ipsum" style="background-image: url(img/sample-images/user.webp')}});"></a>
                        <div class="card-body"><a class="fs-xs text-uppercase text-decoration-none text-accent" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Interview</a>
                          <h3 class="fs-base pt-1 mb-2"><a class="nav-link" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Persönliches Wachstum im Job</a></h3>
                          <p class="fs-sm text-muted mb-5">Max Mustermann erzählt, wie individuelle Begleitung ihm half, berufliche Höhen zu erreichen.</p>
                          <a href="/" title="lorem ipsum" aria-label="Lorem ipsum" class="btn btn-outline-primary rounded-pill  btn-sm">Jetzt entdecken </a>
                        </div>
                      </article>
                </div>

                <div class="d-block">
                    <article class="card border-0 shadow-sm card-hover card-horizontal mb-4"><a class="card-img-top" href="#" title="lorem ipsum" aria-label="Lorem ipsum" style="background-image: url(img/sample-images/user.webp')}});"></a>
                        <div class="card-body"><a class="fs-xs text-uppercase text-decoration-none text-accent" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Interview</a>
                          <h3 class="fs-base pt-1 mb-2"><a class="nav-link" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Persönliches Wachstum im Job</a></h3>
                          <p class="fs-sm text-muted mb-5">Max Mustermann erzählt, wie individuelle Begleitung ihm half, berufliche Höhen zu erreichen.</p>
                          <a href="/" title="lorem ipsum" aria-label="Lorem ipsum" class="btn btn-outline-primary rounded-pill  btn-sm">Jetzt entdecken </a>
                        </div>
                      </article>
                </div>

            </div>
        </div>
        <!-- Mobile View -->

        <!-- Desktop View -->
        <div class="row d-none d-lg-flex">
            <div class="col-12 col-md-6">
                <article class="card border-0 shadow-sm card-hover card-horizontal mb-4"><a class="card-img-top" href="#" title="lorem ipsum" aria-label="Lorem ipsum" style="background-image: url({{asset('frontend-assets/img/sample-images/user.webp')}});"></a>
                    <div class="card-body"><a class="fs-xs text-uppercase text-decoration-none text-accent" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Interview</a>
                      <h3 class="fs-base pt-1 mb-2"><a class="nav-link" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Persönliches Wachstum im Job</a></h3>
                      <p class="fs-sm text-muted mb-5">Max Mustermann erzählt, wie individuelle Begleitung ihm half, berufliche Höhen zu erreichen.</p>
                      <a href="/" title="lorem ipsum" aria-label="Lorem ipsum" class="btn btn-outline-primary rounded-pill  btn-sm">Jetzt entdecken </a>
                    </div>
                  </article>
            </div>

            <div class="col-12 col-md-6">
                <article class="card border-0 shadow-sm card-hover card-horizontal mb-4"><a class="card-img-top" href="#" title="lorem ipsum" aria-label="Lorem ipsum" style="background-image: url({{asset('frontend-assets/img/sample-images/user.webp')}});"></a>
                    <div class="card-body"><a class="fs-xs text-uppercase text-decoration-none text-accent" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Interview</a>
                      <h3 class="fs-base pt-1 mb-2"><a class="nav-link" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Persönliches Wachstum im Job</a></h3>
                      <p class="fs-sm text-muted mb-5">Max Mustermann erzählt, wie individuelle Begleitung ihm half, berufliche Höhen zu erreichen.</p>
                      <a href="/" title="lorem ipsum" aria-label="Lorem ipsum" class="btn btn-outline-primary rounded-pill  btn-sm">Jetzt entdecken </a>
                    </div>
                  </article>
            </div>

            <div class="col-12 col-md-6">
                <article class="card border-0 shadow-sm card-hover card-horizontal mb-4"><a class="card-img-top" href="#" title="lorem ipsum" aria-label="Lorem ipsum" style="background-image: url({{asset('frontend-assets/img/sample-images/user.webp')}});"></a>
                    <div class="card-body"><a class="fs-xs text-uppercase text-decoration-none text-accent" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Interview</a>
                      <h3 class="fs-base pt-1 mb-2"><a class="nav-link" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Persönliches Wachstum im Job</a></h3>
                      <p class="fs-sm text-muted mb-5">Max Mustermann erzählt, wie individuelle Begleitung ihm half, berufliche Höhen zu erreichen.</p>
                      <a href="/" title="lorem ipsum" aria-label="Lorem ipsum" class="btn btn-outline-primary rounded-pill  btn-sm">Jetzt entdecken </a>
                    </div>
                  </article>
            </div>

            <div class="col-12 col-md-6">
                <article class="card border-0 shadow-sm card-hover card-horizontal mb-4"><a class="card-img-top" href="#" title="lorem ipsum" aria-label="Lorem ipsum" style="background-image: url({{asset('frontend-assets/img/sample-images/user.webp')}});"></a>
                    <div class="card-body"><a class="fs-xs text-uppercase text-decoration-none text-accent" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Interview</a>
                      <h3 class="fs-base pt-1 mb-2"><a class="nav-link" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Persönliches Wachstum im Job</a></h3>
                      <p class="fs-sm text-muted mb-5">Max Mustermann erzählt, wie individuelle Begleitung ihm half, berufliche Höhen zu erreichen.</p>
                      <a href="/" title="lorem ipsum" aria-label="Lorem ipsum" class="btn btn-outline-primary rounded-pill  btn-sm">Jetzt entdecken </a>
                    </div>
                  </article>
            </div>
        </div>
        <!-- Desktop View -->

        <div class="d-block">
            <a href="/" title="lorem ipsum" aria-label="Lorem ipsum" class="btn btn-accent rounded-pill btn-sm">Weitere Artikel entdecken</a>
        </div>
    </section>

    <section class="container mb-5 pb-2 pb-lg-4">

        <div class="d-flex flex-wrap align-items-center justify-content-center position-relative">
          <div class="row bg-accent rounded text-white w-md-100 position-relative justify-content-center">
              <div class="col-8 col-md-5 text-center order-1 order-md-2 mt-5 mt-md-0 p-4 p-lg-5">
                  <picture><source srcset="{{asset('frontend-assets/img/front-page/newsletter.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/front-page/newsletter.webp')}}" width="353" class="img-fluid"  alt="Image" ></picture>
              </div>

              <div class="col-12 col-md-7 order-2 order-md-1  p-4 p-lg-5 my-md-5">
                  <h3 class="text-white h-2">Werden Sie jetzt Teil unserer Coaching-Community!</h3>
                  <p class="pb-3 fs-lg w-100">Erfahre exklusive Einblicke, Tipps und Updates direkt in deinem Posteingang. Melde dich für unseren Newsletter an und bleibe stets auf dem Laufenden</p><a class="btn btn-lg btn-primary rounded-pill" href="/" title="lorem ipsum" aria-label="Lorem ipsum">Newsletter abonieren</a>
              </div>
          </div>
      </div>

      </section>

    <section class="container mb-5 pb-2 pb-lg-4">
        <div class="row my-5">
            <div class="col-12 col-md-5 text-center p-5">
                <picture><source srcset="{{asset('frontend-assets/img/front-page/testimonials-main.webp')}}" type="image/webp"><img src="{{asset('frontend-assets/img/front-page/testimonials-main.webp')}}" class="img-fluid" alt="Coachday Nutzer:innen sagen"></picture>
            </div>

            <div class="col-12 col-md-7">

                <h4 class="ms-3 ms-md-5">Coachday Nutzer:innen sagen</h4>
                <!-- Carouel linked to external controls -->
                <div class="tns-carousel-wrapper">
                    <div class="tns-carousel-inner" data-carousel-options='{"controlsContainer": "#external-controls-reviews", "nav": false, "gutter": 20}'>
                
                        <!-- Item -->
                        <div class="card border-0 shadow-sm p-2 mx-3 mx-md-5 my-3">
                            <blockquote class="blockquote card-body">
                            <p>Das Coaching war herausragend! Der Coach übertraf meine Erwartungen und half mir, nicht nur Klarheit in meinen beruflichen Zielen zu finden, sondern mich auch nachhaltig zu stärken. Die individuelle Betreuung und praxisnahen Ratschläge haben mir eine neue Perspektive eröffnet. Dank diesem Coaching fühle ich mich besser vorbereitet, und motiviert, meine Ziele zu erreichen. Absolut empfehlenswert!</p>
                            <footer class="d-flex align-items-center">
                                <div class="d-block">
                                <h6 class="fs-base mb-0 text-gray-800">Marie Musterfrau</h6>
                                <div class="text-muted fw-normal fs-sm">Berlin</div>
                                </div>
                            </footer>
                            </blockquote>
                        </div>
                
                        <!-- Item -->
                        <div class="card border-0 shadow-sm p-2 mx-3 mx-md-5 my-3">
                            <blockquote class="blockquote card-body">
                            <p>Das Coaching war herausragend! Der Coach übertraf meine Erwartungen und half mir, nicht nur Klarheit in meinen beruflichen Zielen zu finden, sondern mich auch nachhaltig zu stärken. Die individuelle Betreuung und praxisnahen Ratschläge haben mir eine neue Perspektive eröffnet. Dank diesem Coaching fühle ich mich besser vorbereitet, und motiviert, meine Ziele zu erreichen. Absolut empfehlenswert!</p>
                            <footer class="d-flex align-items-center">
                                <div class="d-block">
                                <h6 class="fs-base mb-0 text-gray-800">Marie Musterfrau</h6>
                                <div class="text-muted fw-normal fs-sm">Berlin</div>
                                </div>
                            </footer>
                            </blockquote>
                        </div>
    
                        
                    </div>
                </div>
                
                <!-- External controls (prev/next buttons) -->
                <div class="tns-carousel-controls justify-content-start ps-3 ps-md-5" id="external-controls-reviews">
                    <button type="button" class="mx-2" aria-hidden="true">
                        <i class="fi-chevron-left"></i>
                    </button>
                    <button type="button" class="mx-2" aria-hidden="true">
                        <i class="fi-chevron-right"></i>
                    </button>
                </div>



            </div>
        </div>
    </section>
<!-- Modal for Business Hours -->
<div class="modal fade" id="notLoggedInModal" tabindex="-1" aria-labelledby="notLoggedInModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="notLoggedInModalLabel">Willkommen zurück</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Schließen">
            </button>
        </div>
        <div class="modal-body">
            
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <form class="needs-validation" novalidate="">
                        <div class="d-flex flex-column justify-content-start gap-2">
                            <div class="mb-3 w-100">
                                <label class="form-label mb-2" for="signin-email">E-Mail Adresse</label>
                                <input class="form-control" type="email" id="signin-email" placeholder="Geben sie ihre E-Mail Adresse ein" required="">
                              </div>
                              <div class="mb-3 w-100">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                  <label class="form-label mb-0" for="signin-password">Passwort</label><a class="fs-sm" href="/passwort-zuruecksetzen.html">Passwort vergessen?</a>
                                </div>
                                <div class="password-toggle">
                                  <input class="form-control" type="password" id="signin-password" placeholder="Geben sie ihr Passwort ein" required="">
                                  <label class="password-toggle-btn" aria-label="Passwort anzeigen/verstecken">
                                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                                  </label>
                                </div>
                              </div>
                        </div>

                        <button class="btn btn-primary rounded-pill my-3" type="submit">Anmelden</button>
                      </form>
                      <div class="d-flex d-md-none flex-wrap justify-content-between align-items-center">
                        <span class="mb-2">Sie haben noch kein Konto? <a href="/registrierung.html" title="Konto erstellen">Konto erstellen</a></span>
                      </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2  mb-3 mb-lg-0 login-intro-image">
                    <picture><source srcset="img/register-login/login-illu.webp')}}" type="image/webp"><img src="img/register-login/login-illu.webp')}}" class="img-fluid rounded mb-3" alt="Willkommen bei Coachday"></picture>
                    <div class="d-none d-md-flex flex-wrap justify-content-between align-items-center">
                        <span class="mb-2"> Sie haben noch kein Konto? <a href="/registrierung.html" title="Konto erstellen">Konto erstellen</a></span>
                      </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</x-frontend.app>