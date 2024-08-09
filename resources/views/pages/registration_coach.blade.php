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
            <div class="col-lg-5 mb-3 mb-lg-0 order-2 order-lg-1">
                <img src="{{ asset('frontend-assets/img/register-login/register-illu.png') }}" class="img-fluid rounded"
                    alt="Bei Coachday registrieren" />
            </div>
            <div class="col-lg-6 offset-lg-1 d-flex flex-column order-1 order-lg-2">
                <h1>Sichern Sie sich Ihren professionellen Erfolg!!</h1>
                <p class="mb-4">
                    Entdecken Sie alle Funktionen unserer Plattform, für Ihr
                    professionelles Erfolg.
                </p>
                <form class="needs-validation" novalidate="" action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="d-flex flex-column flex-sm-row justify-content-start gap-2 mb-2">
                        <div class="mb-4 w-100">
                            <label class="form-label mb-2" for="f_name">Vorname</label>
                            <input class="form-control  @error('meta.f_name') is-invalid @enderror" type="text"
                                name="meta[f_name]" id="f_name" placeholder="Max" required="" value="{{old('meta.f_name')}}" />
                            @error('meta.f_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 w-100">
                            <label class="form-label mb-2" for="l_name">Nachname</label>
                            <input class="form-control @error('meta.l_name') is-invalid @enderror" name="meta[l_name]"
                                value="{{ old('meta.l_name') }}" type="text" id="l_name" placeholder="Mustermann"
                                required />
                            @error('meta.l_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex flex-column flex-sm-row justify-content-start gap-2 mb-2">
                        <div class="mb-4 w-100">
                            <label class="form-label mb-2" for="register-email">E-Mail Adresse</label>
                            <input class="form-control @error('email') is-invalid @enderror" name="email" type="email"
                                id="email" placeholder="Geben sie ihre E-Mail Adresse ein" required=""
                                value="{{ old('email') }}" />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 w-100">
                            <label class="form-label mb-2" for="email_confirmation">E-Mail Bestätigen</label>
                            <input class="form-control" name="email_confirmation" type="email" id="email_confirmation"
                                placeholder="Bestätigen sie ihre E-Mail Adresse" required="" />
                        </div>
                    </div>

                    <div class="d-flex flex-column flex-sm-row justify-content-start gap-2 mb-2">
                        <div class="mb-4 w-100">
                            <label class="form-label mb-2" for="register-password">Passwort
                                <span class="text-gray-600">(min. 8 Zeichen)</span></label>
                            <div class="password-toggle">
                                <input class="form-control @error('email') is-invalid @enderror" type="password"
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
                    <input type="hidden" name="role" value="coach">
                    <button class="btn btn-primary rounded-pill mt-3 mb-5" type="submit">
                        Registrieren
                    </button>
                </form>
            </div>
        </div>
    </section>
</x-frontend.app>
