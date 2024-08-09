<x-frontend.app>

    @push('css')
       <style>
        .invalid-feedback{
            display: block;
        }
       </style>
    @endpush
    <section class="container mb-5 pb-md-5 mt-4 mt-md-5">
        <div class="row">
            <div class="col-lg-5 order-2 order-lg-1">
                <img src="{{ asset('frontend-assets/img/register-login/register-illu.png') }}" class="img-fluid rounded"
                    alt="Bei Coachday registrieren" />
            </div>
            <div class="col-lg-6 offset-lg-1 mb-3 mb-lg-0 order-1 order-lg-2 d-flex flex-column">
                <h1>Sichern Sie sich professionelles Coaching für Ihren Erfolg!</h1>
                <p class="mb-4 mt-md-4">
                    Entdecken Sie alle Funktionen unserer Plattform, um das passende
                    Coaching für Sie zu finden.
                </p>
                <form class="needs-validation pb-md-5" novalidate="" action="{{route('register')}}" method="post">

                    @csrf
                    <div class="d-flex flex-column flex-sm-row justify-content-start gap-2 mb-2">
                        <div class="mb-4 w-100">
                            <label class="form-label mb-2" for="register-email">E-Mail Adresse</label>
                            <input class="form-control  @error('name') is-invalid @enderror" name="email"
                                type="email" id="email" value="{{old('email')}}" placeholder="Geben sie ihre E-Mail Adresse ein"
                                 required />

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 w-100">
                            <label class="form-label mb-2" for="register-password">Passwort
                                <span class="text-gray-600">(min. 8 Zeichen)</span></label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="password"
                                    placeholder="Geben sie ihr Passwort ein" required name="password" />

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
                    <div class="form-check">
                        <input class="form-check-input" id="dataProtextionAndNutzungsbedingungen" type="checkbox" />
                        <label class="form-check-label" for="dataProtextionAndNutzungsbedingungen">Durch die Anmeldung
                            stimme ich den
                            <a href="" title="Nutzungsbedingungen" target="_blank">Nutzungsbedingungen</a>
                            und
                            <a href="" title="Datenschutzbestimmungen"
                                target="_blank">Datenschutzbestimmungen</a>
                            zu.</label>
                    </div>
                    <input type="hidden" name="role" value="user">
                    <button class="btn btn-primary rounded-pill mt-3 mb-5" type="submit">
                        Registrieren
                    </button>
                </form>
                <div class="d-flex flex-wrap justify-content-between align-items-center mt-auto">
                    <span>Sie möchten Ihr Coaching anbieten?</span>
                    <a href="{{ route('registration_coach') }}" title="Als Coach registrieren"
                        class="btn btn-gray-300 text-gray-800 btn-sm rounded-pill mt-4 md-md-0 mb-4">Als Coach
                        registrieren</a>
                </div>
            </div>
        </div>
    </section>
</x-frontend.app>
