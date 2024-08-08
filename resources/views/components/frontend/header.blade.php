 <!-- Navbar with user account dropdown -->
 <header class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top px-0">
    <div class="container">
      <a href="/" class="navbar-brand flex-shrink-0 me-2 me-xl-4">
          <img class="header-logo" src="{{asset('frontend-assets/img/logos/coachday-logo-accent.svg')}}" width="225" alt="Coachday Logo">
      </a>
      <button type="button" class="navbar-toggler ms-auto position-relative collapsed" data-bs-toggle="collapse" data-bs-target="#navbarUserNav" aria-controls="navbarUserNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span> 
      </button>
      <a href="/coaching-suchen.html" class="btn btn-primary rounded-pill d-none d-md-block btn-sm ms-2 ms-md-4 order-lg-3">
          Coaching suchen <i class="fi-search ms-2 fs-sm"></i>
        </a>
      <div class="dropdown order-lg-3 ps-2 ps-md-4">
          <a href="#" class="d-none d-md-block py-1 text-accent fs-lg" title="Profil" data-bs-toggle="dropdown">
                <i class="fi-user-check"></i>
          </a>
          <!--If user not logged in <a href="" class="py-1 text-accent fs-lg"><i class="fi-user"></i></a> -->

          <div class="dropdown-menu dropdown-menu-end">
          <div class="d-flex align-items-center border-bottom px-3 py-1 mb-2" style="width: 16rem;">
              <picture><source srcset="{{asset('frontend-assets/img/sample-images/user.webp')}}" type="image/webp"><img class="rounded-circle image-user-header" src=".{{asset('frontend-assets/img/sample-images/user.webp')}}" width="48" alt="User"></picture>
              <div class="ps-2">
                  <h6 class="fs-sm mb-0">Dr. Agathe Musterfrau</h6>
              </div>
          </div>
          <a href="/profil-coach-nutzer.html" class="dropdown-item d-flex align-items-center">
              <i class="bx bx-user opacity-60 me-2"></i>
              Profil
          </a>
          <a href="/profil-coach-einstellungen.html" class="dropdown-item d-flex align-items-center">
            <i class="bx bx-cog opacity-60 me-2"></i> Einstellungen
          </a>
          <a href="/profil-coach-coachings.html" class="dropdown-item d-flex align-items-center">
              <i class="bx bx-user-voice opacity-60 me-2"></i>
            Coachings
          </a>
          <a href="/profil-coach-kalender.html" class="dropdown-item d-flex align-items-center">
            <i class='bx bx-calendar opacity-60 me-2'></i>
            Kalender
        </a>
          <a href="/profil-coach-beitraege.html" class="dropdown-item d-flex align-items-center">
              <i class='bx bx-receipt opacity-60 me-2'></i>
              Beiträge
          </a>
          <a href="/profil-coach-nachrichten.html" class="dropdown-item d-flex align-items-center">
              <i class="bx bx-envelope opacity-60 me-2"></i>
            Nachrichten<span class="new-messages-profile rounded-pill">2</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="/hilfe-und-support.html" class="dropdown-item">Hilfe & Support</a>
          <a href="#" class="dropdown-item">Logout</a>
          </div>
      </div>
      <div class="collapse navbar-collapse order-lg-2" id="navbarUserNav">
          <ul class="navbar-nav ms-auto">
              <li class="nav-item dropdown active">
                <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Coaching Bereiche</a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="#" class="dropdown-item">Business</a>
                  </li>
                  <li>
                    <a href="#" class="dropdown-item">Karriere</a>
                  </li>
                  <li>
                    <a href="#" class="dropdown-item">Coaching Bereich anfragen</a>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li>
                    <a href="{{ route('login') }}" class="dropdown-item">Login</a>
                  </li>
                  <li>
                    <a href="/registrierung-coach.html" class="dropdown-item">Registrierung Coach</a>
                  </li>
                  <li>
                    <a href="{{ route('registration') }}" class="dropdown-item">Registrierung</a>
                  </li>
                  
                  <li>
                    <a href="/checkout-coach.html" class="dropdown-item">Checkout Coach</a>
                  </li>
                  <li>
                    <a href="/checkout-coachee.html" class="dropdown-item">Checkout Coachee</a>
                  </li>
                  <li>
                    <a href="/profil-coachee-buchungen.html" class="dropdown-item">Profil Coachee</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                  <a href="/coach-suchen.html" class="nav-link">Coach suchen</a>
                </li>
              <li class="nav-item">
              <a href="/coach-werden.html" class="nav-link">Coach werden</a>
              </li>
              <li class="nav-item">
                  <a href="/magazin.html" class="nav-link">Magazin</a>
              </li>
              <!--Before Login visible -->
              <li class="nav-item d-block d-md-none">
                  <a href="#" class="nav-link"><i class="fi-user"></i> Login/ Registrierung</a>
              </li>
              <!--Before Login visible -->

              <!--After Login visible -->
              <li class="nav-item dropdown d-block d-md-none">
                  <a href="/profil-coach-nutzer.html" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fi-user opacity-60 me-1"></i> Profil</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="/profil-coach-nutzer.html" class="dropdown-item d-flex align-items-center">
                          <i class="bx bx-user opacity-60 ms-1 me-2"></i>
                          Mein Profil
                      </a>
                    </li>
                    <li>
                      <a href="/profil-coach-einstellungen.html" class="dropdown-item d-flex align-items-center">
                        <i class="bx bx-cog opacity-60 ms-1 me-2"></i> Einstellungen
                      </a>
                    </li>
                    <li>
                      <a href="/profil-coach-coachings.html" class="dropdown-item d-flex align-items-center">
                          <i class="bx bx-user-voice opacity-60 ms-1 me-2"></i> Coachings
                      </a>
                    </li>
                    <li>
                      <a href="/profil-coach-beitraege.html" class="dropdown-item d-flex align-items-center">
                          <i class="bx bx-receipt opacity-60 ms-1 me-2"></i> Beiträge
                      </a>
                    </li>
                    <li>
                      <a href="/profil-coach-kalender.html" class="dropdown-item d-flex align-items-center">
                          <i class="bx bx-calendar opacity-60 ms-1 me-2"></i> Kalender
                      </a>
                    </li>
                    <li>
                      <a href="/profil-coach-nachrichten.html" class="dropdown-item d-flex align-items-center">
                          <i class="bx bx-envelope opacity-60 ms-1 me-2"></i>
                          Nachrichten<span class="new-messages-profile rounded-pill">2</span>
                      </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li>
                      <a href="#" class="dropdown-item">
                          Hilfe & Support
                      </a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-item">
                          Logout
                      </a>
                    </li>
                  </ul>
                </li>

              <!--After Login visible -->
              <li class="d-block d-md-none pt-3">
                  <a href="/coaching-suchen.html" class="btn btn-primary rounded-pill w-100">
                      Coaching suchen <i class="fi-search ms-2 fs-sm"></i>
                  </a>
              </li>
            </ul>
      </div>
    </div>
</header>