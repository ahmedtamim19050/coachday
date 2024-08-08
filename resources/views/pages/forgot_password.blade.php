<x-frontend.app>
    <section class="container mb-5 pb-md-5 mt-4 mt-md-5">

        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1">
                <h1>Passwort zurücksetzen</h1>
                <form class="needs-validation my-md-5" novalidate="">
                    <div class="d-flex flex-column flex-sm-row justify-content-start gap-2">
                        <div class="mb-4 w-100">
                            <label class="form-label mb-2" for="signin-email">E-Mail Adresse</label>
                            <input class="form-control" type="email" id="signin-email"
                                placeholder="Geben sie ihre E-Mail Adresse ein" required="">
                        </div>
                    </div>

                    <button class="btn btn-primary btn-lg rounded-pill my-3" type="submit">Zurücksetzen</button>
                </form>
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <span>Sie haben noch kein Konto? <a href="{{ route('registration') }}" title="Konto erstellen">Konto
                            erstellen</a></span>
                    <a href="{{ route('registration_coach') }}" title="Als Coach registrieren"
                        class="btn btn-gray-300 text-gray-800 btn-sm rounded-pill">Als Coach registrieren</a>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 login-intro-image order-1 order-lg-2 mb-3 mb-lg-0">
                <picture>
                    <source srcset="{{asset('frontend-assets/img/register-login/login-illu.webp')}}" type="image/webp"><img
                        src="{{asset('frontend-assets/img/register-login/login-illu.png')}}" class="img-fluid rounded" alt="Willkommen bei Coachday">
                </picture>
            </div>
        </div>
    </section>
</x-frontend.app>
