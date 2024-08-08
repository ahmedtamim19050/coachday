<x-frontend.app>
    @push('css')
        <style>
            .invalid-feedback {
                display: block;
            }
        </style>
    @endpush
    <section class="container mb-5 pb-md-5 mt-4 mt-md-5">
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1">
                <h1 class="mb-4">Willkommen bei Coachday!</h1>
                <form class="needs-validation mb-md-5" novalidate="" action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="d-flex flex-column flex-sm-row justify-content-start gap-2">
                        <div class="mb-4 w-100">
                            <label class="form-label mb-2" for="signin-email">E-Mail Adresse</label>
                            <input class="form-control @error('email') is-invalid @enderror" type="email"
                                name="email" id="eamil" placeholder="Geben sie ihre E-Mail Adresse ein"
                                required="" value="{{ old('email') }}" />

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 w-100">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <label class="form-label mb-0" for="signin-password">Passwort</label><a class="fs-sm"
                                    href="/passwort-zuruecksetzen.html">Passwort vergessen?</a>
                            </div>
                            <div class="password-toggle">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" id="password" placeholder="Geben sie ihr Passwort ein"
                                    required="" />

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label class="password-toggle-btn" aria-label="Passwort anzeigen/verstecken">
                                    <input class="password-toggle-check" type="checkbox" /><span
                                        class="password-toggle-indicator"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary rounded-pill my-3" type="submit">
                        Anmelden
                    </button>
                </form>
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <span>Sie haben noch kein Konto?
                        <a href="/registrierung.html" title="Konto erstellen">Konto erstellen</a></span>
                    <a href="/registrierung-coach.html" title="Als Coach registrieren"
                        class="btn btn-gray-300 text-gray-800 btn-sm rounded-pill mt-3 mt-md-0">Als Coach
                        registrieren</a>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 order-1 order-lg-2 mb-3 mb-lg-0 login-intro-image">
                <img src="{{ asset('frontend-assets/img/register-login/login-illu.png') }}" class="img-fluid rounded"
                    alt="Willkommen bei Coachday" />
            </div>
        </div>
    </section>
</x-frontend.app>
