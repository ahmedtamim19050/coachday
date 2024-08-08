<x-user.app>
    <section class="container mb-5 pb-md-5 mt-4 mt-md-5">




        <h1 class="h2 mb-3">Einstellungen</h1>
        <div class="bg-light shadow-sm rounded-3 px-3 px-md-4 py-5">
            <form action="{{ route('user.settings.update') }}" method="post">
                @csrf
        
                  


                <!-- Authorization info-->
                <div class="row">
                    <div class="col-lg-3">
                        <h2 class="h4 text-dark">Anmeldedaten</h2>
                    </div>
                    <div class="col-lg-9">
                        <div class="border rounded-3 p-3" id="auth-info">
                            <!-- Email-->
                            <div class="border-bottom pb-3 mb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="pe-2">
                                        <label class="form-label fw-bold text-dark">E-Mail</label>
                                        <div id="email-value">maxim-mustermann@gmail.com</div>
                                    </div>
                                    <div data-bs-toggle="tooltip" title="Edit"><a class="nav-link py-0"
                                            href="#email-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a>
                                    </div>
                                </div>
                                <div class="collapse" id="email-collapse" data-bs-parent="#auth-info">
                                    <input class="form-control input-editable mt-3" type="email" name="email"
                                        value="maxim-mustermann@gmail.com" disabled>
                                </div>
                            </div>
                            <!-- Password-->
                            <div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="pe-2">
                                        <label class="form-label fw-bold text-dark">Passwort</label>
                                        <div>********</div>
                                    </div>
                                    <div data-bs-toggle="tooltip" title="Edit"><a class="nav-link py-0"
                                            href="#password-collapse" data-bs-toggle="collapse"><i
                                                class="fi-edit"></i></a></div>
                                </div>
                                <div class="collapse" id="password-collapse" data-bs-parent="#auth-info">
                                    <div class="row gx-3 align-items-center my-3">
                                        <label class="col-sm-4 col-md-3 col-form-label"
                                            for="account-password-current">Aktuelles Passwort:</label>
                                        <div class="col-sm-8 col-md-9">
                                            <div class="password-toggle">
                                                <input class="form-control input-editable input-editable" type="password"
                                                    id="account-password-current" name="current_password"
                                                    placeholder="Aktuelles Passwort eingeben" disabled>
                                                <label class="password-toggle-btn"
                                                    aria-label="Passwort anzeigen/verstecken">
                                                    <input class="password-toggle-check" type="checkbox"><span
                                                        class="password-toggle-indicator"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gx-3 align-items-center my-3">
                                        <label class="col-sm-4 col-md-3 col-form-label" for="account-password-new">Neues
                                            Passwort:</label>
                                        <div class="col-sm-8 col-md-9">
                                            <div class="password-toggle">
                                                <input class="form-control input-editable input-editable" name="new_password" type="password" id="account-password-new"
                                                    placeholder="Neues Passwort eingeben " disabled>
                                                <label class="password-toggle-btn"
                                                    aria-label="Passwort anzeigen/verstecken">
                                                    <input class="password-toggle-check" type="checkbox"><span
                                                        class="password-toggle-indicator"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gx-3 align-items-center">
                                        <label class="col-sm-4 col-md-3 col-form-label"
                                            for="account-password-confirm">Neues Passwort bestätigen:</label>
                                        <div class="col-sm-8 col-md-9">
                                            <div class="password-toggle">
                                                <input class="form-control input-editable input-editable" type="password" name="confirm_password"
                                                    id="account-password-confirm" placeholder="Passwort bestätigen" disabled>
                                                <label class="password-toggle-btn"
                                                    aria-label="Passwort anzeigen/verstecken">
                                                    <input class="password-toggle-check" type="checkbox"><span
                                                        class="password-toggle-indicator"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Personal details-->
                <div class="row pt-4 mt-2">
                    <div class="col-lg-3">
                        <h2 class="h4 text-dark">Ihre Angaben</h2>
                    </div>
                    <div class="col-lg-9">
                        <div class="border rounded-3 p-3" id="personal-details">
                            <!-- Name-->
                            <div class="border-bottom pb-3 mb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="pe-2">
                                        <label class="form-label fw-bold text-dark">Name</label>
                                        <div class="d-flex">
                                            <div id="fn-value" class="me-2">Dr. Agathe Maria</div>
                                            <div id="nn-value">Musterfrau</div>
                                        </div>

                                    </div>
                                    <div data-bs-toggle="tooltip" title="Edit"><a class="nav-link py-0"
                                            href="#fn-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a>
                                    </div>
                                </div>
                                <div class="collapse" id="fn-collapse" data-bs-parent="#personal-details">
                                    <div class="d-flex flex-column flex-sm-row">
                                        <input class="form-control input-editable mt-3 me-2" type="email"
                                            data-bs-binded-element="#fn-value" data-bs-unset-value="Leer"
                                            placeholder="Vorname" name="f_name" disabled>
                                        <input class="form-control input-editable mt-3" type="email"
                                            data-bs-binded-element="#fn-value" name="l_name" data-bs-unset-value="Leer"
                                            placeholder="Nachname" disabled>
                                    </div>
                                </div>
                            </div>

                            <!-- Gender-->
                            <div class="border-bottom pb-3 mb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="pe-2">
                                        <label class="form-label fw-bold text-dark">Geschlecht</label>
                                        <div id="gender-value">Weiblich</div>
                                    </div>
                                    <div data-bs-toggle="tooltip" title="Edit"><a class="nav-link py-0"
                                            href="#gender-collapse" data-bs-toggle="collapse"><i
                                                class="fi-edit"></i></a></div>
                                </div>
                                <div class="collapse" id="gender-collapse" data-bs-parent="#personal-details">
                                    <select class="form-select input-editable mt-3" name="gender" data-bs-binded-element="#gender-value" disabled>
                                        <option value="" >Geschlecht wählen</option>
                                        <option value="Weiblich" selected>Weiblich</option>
                                        <option value="Maennlich">Männlich</option>
                                        <option value="Divers">Divers</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Date of birth-->
                            <div class="border-bottom pb-3 mb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="pe-2">
                                        <label class="form-label fw-bold text-dark">Geburtsdatum</label>
                                        <div id="birth-value">24.Juni.1992</div>
                                    </div>
                                    <div data-bs-toggle="tooltip" title="Edit"><a class="nav-link py-0"
                                            href="#birth-collapse" data-bs-toggle="collapse"><i
                                                class="fi-edit"></i></a></div>
                                </div>
                                <div class="collapse" id="birth-collapse" data-bs-parent="#personal-details">
                                    <div class="input-group input-group-lg mt-3">
                                        <input class="form-control input-editable date-picker rounded pe-5" name="dob" type="text"
                                            id="pr-birth-date" placeholder="Datum wählen"
                                            data-datepicker-options="{&quot;altInput&quot;: true, &quot;altFormat&quot;: &quot;j.F.Y&quot;, &quot;dateFormat&quot;: &quot;d-M-Y&quot;}" disabled><i
                                            class="fi-calendar text-muted position-absolute top-50 end-0 translate-middle-y me-3" ></i>
                                    </div>
                                </div>
                            </div>
                            <!-- Phone number-->
                            <div class="border-bottom pb-3 mb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="pe-2">
                                        <label class="form-label fw-bold text-dark">Telefonnummer</label>
                                        <div id="phone-value">017611122233</div>
                                    </div>
                                    <div data-bs-toggle="tooltip" title="Edit"><a class="nav-link py-0"
                                            href="#phone-collapse" data-bs-toggle="collapse"><i
                                                class="fi-edit"></i></a></div>
                                </div>
                                <div class="collapse" id="phone-collapse" data-bs-parent="#personal-details">
                                    <input class="form-control input-editable mt-3" type="text" name="phone"
                                        data-bs-binded-element="#phone-value" data-bs-unset-value="Leer"
                                        value="017611122233" disabled>
                                </div>
                            </div>
                            <!-- Address-->
                            <!-- Street & No -->
                            <div class="border-bottom pb-3 mb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="pe-2">
                                        <label class="form-label fw-bold text-dark">Adresse*</label>
                                        <div id="address-value">Mustertstraße 123</div>
                                        <div class="d-flex">
                                            <div id="plz-value" class="me-2">123456</div>
                                            <div id="ort-value">Berlin</div>
                                        </div>

                                    </div>
                                    <div data-bs-toggle="tooltip" title="Edit"><a class="nav-link py-0"
                                            href="#address-collapse" data-bs-toggle="collapse"><i
                                                class="fi-edit"></i></a></div>
                                </div>
                                <div class="collapse" id="address-collapse" data-bs-parent="#personal-details">

                                    <input class="form-control input-editable mt-3" type="text" name="house_number" 
                                        placeholder="Straße & Hausnummer" disabled >

                                    <div class="d-flex flex-column flex-sm-row">
                                        <input class="form-control input-editable mt-3 me-3" type="text"
                                            name="post_code" 
                                            placeholder="PLZ*" disabled>
                                        <input class="form-control input-editable mt-3" type="text"
                                            data-bs-binded-element="#ort-value" name="ort" data-bs-unset-value="Leer"
                                            placeholder="Ort*" disabled>
                                    </div>


                                </div>
                            </div>

                            <!-- Firma data -->
                            <div class="border-bottom pb-3 mb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="pe-2">
                                        <label class="form-label fw-bold text-dark">Firmenangaben</label>
                                        <div id="firmname-value-firm">Muster GmbH</div>
                                        <div id="address-value-firm">Mustertstraße 123</div>
                                        <div class="d-flex">
                                            <div id="plz-value-firm" class="me-2">123456</div>
                                            <div id="ort-value-firm">Berlin</div>
                                        </div>
                                        <div id="ustidentnr-value-firm">DE21123456</div>
                                        <div id="stnr-value-firm">123125124</div>

                                    </div>
                                    <div data-bs-toggle="tooltip" title="Edit"><a class="nav-link py-0"
                                            href="#firm-collapse" data-bs-toggle="collapse"><i
                                                class="fi-edit"></i></a></div>
                                </div>
                                <div class="collapse" id="firm-collapse" data-bs-parent="#personal-details">

                                    <input class="form-control input-editable mt-3" type="text"
                                        data-bs-binded-element="#firmname-value-firm" data-bs-unset-value="Leer"
                                        placeholder="Firmenname">

                                    <input class="form-control input-editable mt-3" type="text"
                                        data-bs-binded-element="#address-value-firm" data-bs-unset-value="Leer"
                                        placeholder="Straße & Hausnummer">

                                    <div class="d-flex flex-column flex-sm-row">
                                        <input class="form-control input-editable mt-3 me-3" type="text"
                                            data-bs-binded-element="#plz-value-firm" data-bs-unset-value="Leer"
                                            placeholder="PLZ">
                                        <input class="form-control input-editable mt-3" type="text"
                                            data-bs-binded-element="#ort-value-firm" data-bs-unset-value="Leer"
                                            placeholder="Ort">
                                    </div>

                                    <div class="d-flex flex-column flex-sm-row">
                                        <input class="form-control input-editable mt-3 me-3" type="text"
                                            data-bs-binded-element="#ustidentnr-value-firm" data-bs-unset-value="Leer"
                                            placeholder="Umsatzsteuer-Identifikationsnummer">
                                        <input class="form-control input-editable mt-3" type="text"
                                            data-bs-binded-element="#stnr-value-firm" data-bs-unset-value="Leer"
                                            placeholder="Steuernummer">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Payment information-->
                <div class="row pt-4 mt-2">
                    <div class="col-lg-3">
                        <h2 class="h4 text-dark">Zahlungen</h2>
                    </div>
                    <div class="col-lg-9">
                        <div class="border rounded-3 p-3" id="personal-details">
                            <!-- Name-->
                            <div class="border-bottom pb-3 mb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="pe-2">
                                        <label class="form-label fw-bold text-dark">Name</label>
                                        <div class="d-flex">
                                            <div id="fnpayment-value" class="me-2">Dr. Agathe Maria</div>
                                            <div id="nnpayment-value">Musterfrau</div>
                                        </div>

                                    </div>
                                    <div data-bs-toggle="tooltip" title="Edit"><a class="nav-link py-0"
                                            href="#fnpayment-collapse" data-bs-toggle="collapse"><i
                                                class="fi-edit"></i></a></div>
                                </div>
                                <div class="collapse" id="fnpayment-collapse" data-bs-parent="#personal-details">
                                    <div class="d-flex flex-column flex-sm-row">
                                        <input class="form-control input-editable mt-3 me-2" type="email"
                                            data-bs-binded-element="#fnpayment-value" name="payment_f_name" data-bs-unset-value="Leer"
                                            placeholder="Vorname" disabled>
                                        <input class="form-control input-editable mt-3" type="email"
                                            data-bs-binded-element="#fnpayment-value" name="payment_l_name" data-bs-unset-value="Leer"
                                            placeholder="Nachname" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="d-block">
                                <label class="form-label fw-bold text-dark">Zahlungsart</label>
                            </div>

                            <!-- Payment-->
                            <div class="d-flex flex-wrap border-bottom pb-3 mb-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="form-check-sepa" name="payment_type" type="checkbox" value="sepa">
                                    <label class="form-check-label" for="form-check-sepa">SEPA-Lastschrift</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="form-check-paypal" name="payment_type" type="checkbox" value="paypal">
                                    <label class="form-check-label" for="form-check-paypal">PayPal</label>
                                </div>
                            </div>


                            <div class="d-block">
                                <label class="form-label fw-bold text-dark">Rechnungen</label>
                            </div>
                            <!-- Invoices-->
                            <div class="d-block overflow-auto border mb-4" style="max-height:150px">
                                <ul class="list-group fs-sm border-0">
                                    <li class="list-group-item py-1 border-0 border-bottom">
                                        <a href="/rechnung.html" target="_blank"
                                            class="text-decoration-none text-gray-700"
                                            title="Rechnung-Nr.: CD3404072024">Rechnung-Nr.: CD3404072024 <i
                                                class="fi-eye-on ms-1"></i></a>
                                    </li>
                                    <li class="list-group-item py-1 border-0 border-bottom">
                                        <a href="/rechnung.html" target="_blank"
                                            class="text-decoration-none text-gray-700"
                                            title="Rechnung-Nr.: CD3404072024">Rechnung-Nr.: CD3404072024 <i
                                                class="fi-eye-on ms-1"></i></a>
                                    </li>
                                    <li class="list-group-item py-1 border-0 border-bottom">
                                        <a href="/rechnung.html" target="_blank"
                                            class="text-decoration-none text-gray-700"
                                            title="Rechnung-Nr.: CD3404072024">Rechnung-Nr.: CD3404072024 <i
                                                class="fi-eye-on ms-1"></i></a>
                                    </li>
                                    <li class="list-group-item py-1 border-0 border-bottom">
                                        <a href="/rechnung.html" target="_blank"
                                            class="text-decoration-none text-gray-700"
                                            title="Rechnung-Nr.: CD3404072024">Rechnung-Nr.: CD3404072024 <i
                                                class="fi-eye-on ms-1"></i></a>
                                    </li>
                                    <li class="list-group-item py-1 border-0 border-bottom">
                                        <a href="/rechnung.html" target="_blank"
                                            class="text-decoration-none text-gray-700"
                                            title="Rechnung-Nr.: CD3404072024">Rechnung-Nr.: CD3404072024 <i
                                                class="fi-eye-on ms-1"></i></a>
                                    </li>
                                    <li class="list-group-item py-1 border-0 border-bottom">
                                        <a href="/rechnung.html" target="_blank"
                                            class="text-decoration-none text-gray-700"
                                            title="Rechnung-Nr.: CD3404072024">Rechnung-Nr.: CD3404072024 <i
                                                class="fi-eye-on ms-1"></i></a>
                                    </li>
                                    <li class="list-group-item py-1 border-0 border-bottom">
                                        <a href="/rechnung.html" target="_blank"
                                            class="text-decoration-none text-gray-700"
                                            title="Rechnung-Nr.: CD3404072024">Rechnung-Nr.: CD3404072024 <i
                                                class="fi-eye-on ms-1"></i></a>
                                    </li>
                                    <li class="list-group-item py-1 border-0 border-bottom">
                                        <a href="/rechnung.html" target="_blank"
                                            class="text-decoration-none text-gray-700"
                                            title="Rechnung-Nr.: CD3404072024">Rechnung-Nr.: CD3404072024 <i
                                                class="fi-eye-on ms-1"></i></a>
                                    </li>
                                    <li class="list-group-item py-1 border-0 border-bottom">
                                        <a href="/rechnung.html" target="_blank"
                                            class="text-decoration-none text-gray-700"
                                            title="Rechnung-Nr.: CD3404072024">Rechnung-Nr.: CD3404072024 <i
                                                class="fi-eye-on ms-1"></i></a>
                                    </li>
                                </ul>

                            </div>

                            <div class="d-block">
                                <label class="form-label fw-bold text-dark">Gutschriften</label>
                            </div>
                            <!--Payout invoices-->
                            <div class="d-block overflow-auto border" style="max-height:150px">
                                <ul class="list-group fs-sm border-0">
                                    <li class="list-group-item py-1 border-0 border-bottom">
                                        <a href="/gutschrift.html" target="_blank"
                                            class="text-decoration-none text-gray-700"
                                            title="Gutschrift-Nr.: CDG3404072024">Gutschrifts-Nr.: CDG3404072024 <i
                                                class="fi-eye-on ms-1"></i></a>
                                    </li>
                                    <li class="list-group-item py-1 border-0 border-bottom">
                                        <a href="/gutschrift.html" target="_blank"
                                            class="text-decoration-none text-gray-700"
                                            title="Gutschrift-Nr.: CDG3404072024">Gutschrifts-Nr.: CDG3404072024 <i
                                                class="fi-eye-on ms-1"></i></a>
                                    </li>
                                    <li class="list-group-item py-1 border-0 border-bottom">
                                        <a href="/gutschrift.html" target="_blank"
                                            class="text-decoration-none text-gray-700"
                                            title="Gutschrift-Nr.: CDG3404072024">Gutschrifts-Nr.: CDG3404072024 <i
                                                class="fi-eye-on ms-1"></i></a>
                                    </li>
                                    <li class="list-group-item py-1 border-0 border-bottom">
                                        <a href="/gutschrift.html" target="_blank"
                                            class="text-decoration-none text-gray-700"
                                            title="Gutschrift-Nr.: CDG3404072024">Gutschrifts-Nr.: CDG3404072024 <i
                                                class="fi-eye-on ms-1"></i></a>
                                    </li>
                                    <li class="list-group-item py-1 border-0 border-bottom">
                                        <a href="/gutschrift.html" target="_blank"
                                            class="text-decoration-none text-gray-700"
                                            title="Gutschrift-Nr.: CDG3404072024">Gutschrifts-Nr.: CDG3404072024 <i
                                                class="fi-eye-on ms-1"></i></a>
                                    </li>
                                    <li class="list-group-item py-1 border-0 border-bottom">
                                        <a href="/gutschrift.html" target="_blank"
                                            class="text-decoration-none text-gray-700"
                                            title="Gutschrift-Nr.: CDG3404072024">Gutschrifts-Nr.: CDG3404072024 <i
                                                class="fi-eye-on ms-1"></i></a>
                                    </li>
                                    <li class="list-group-item py-1 border-0 border-bottom">
                                        <a href="/gutschrift.html" target="_blank"
                                            class="text-decoration-none text-gray-700"
                                            title="Gutschrift-Nr.: CDG3404072024">Gutschrifts-Nr.: CDG3404072024 <i
                                                class="fi-eye-on ms-1"></i></a>
                                    </li>
                                    <li class="list-group-item py-1 border-0 border-bottom">
                                        <a href="/gutschrift.html" target="_blank"
                                            class="text-decoration-none text-gray-700"
                                            title="Gutschrift-Nr.: CDG3404072024">Gutschrifts-Nr.: CDG3404072024 <i
                                                class="fi-eye-on ms-1"></i></a>
                                    </li>
                                    <li class="list-group-item py-1 border-0 border-bottom">
                                        <a href="/gutschrift.html" target="_blank"
                                            class="text-decoration-none text-gray-700"
                                            title="Gutschrift-Nr.: CDG3404072024">Gutschrifts-Nr.: CDG3404072024 <i
                                                class="fi-eye-on ms-1"></i></a>
                                    </li>
                                </ul>

                            </div>



                        </div>
                    </div>
                </div>

                <!-- Account settings-->
                <div class="row pt-4 mt-2">
                    <div class="col-lg-3">
                        <h2 class="h4 text-dark">Konto Einstellungen</h2>
                    </div>
                    <div class="col-lg-9">
                        <div class="border rounded-3 p-3" id="account-settings">
                            <!-- Account type-->
                            <div class="pb-3 mb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="pe-2">
                                        <label class="form-label fw-bold text-dark">Konto Typ</label>
                                        <div id="type-value">Premium</div>
                                    </div>
                                    <div data-bs-toggle="tooltip" title="Edit"><a class="nav-link py-0"
                                            href="#type-collapse" data-bs-toggle="collapse"><i
                                                class="fi-edit"></i></a></div>
                                </div>
                                <div class="collapse pt-3" id="type-collapse" data-bs-parent="#account-settings">
                                    <a href="/" target="_blank"
                                        class="btn btn-primary btn-sm rounded-pill">Unsere Pläne ansehen</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Action buttons-->
                <div class="row pt-4 mt-2">
                    <div class="col-lg-9 offset-lg-3">
                        <div class="d-flex align-items-center justify-content-between">
                            {{-- <button type="submit">save</button> --}}
                            <button class="btn btn-primary rounded-pill px-3 px-sm-4" type="submit">Anwenden</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </section>

    @push('css')
    <script>
     document.addEventListener('DOMContentLoaded', function () {
        // Function to toggle input fields within a collapse section
        function toggleInputs(collapseId) {
            var collapseElement = document.getElementById(collapseId);
            var inputElements = collapseElement.querySelectorAll('.input-editable');

            collapseElement.addEventListener('show.bs.collapse', function () {
                inputElements.forEach(function (input) {
                    input.disabled = false;
                });
            });

            collapseElement.addEventListener('hide.bs.collapse', function () {
                inputElements.forEach(function (input) {
                    input.disabled = true;
                });
            });
        }

        // Apply the toggle function to each collapse section
        toggleInputs('email-collapse');
        toggleInputs('password-collapse');
        toggleInputs('fn-collapse');
        toggleInputs('gender-collapse');
        toggleInputs('birth-collapse');
        toggleInputs('phone-collapse');
        toggleInputs('address-collapse');
        toggleInputs('fnpayment-collapse');
    });
    </script>
    @endpush
</x-user.app>
