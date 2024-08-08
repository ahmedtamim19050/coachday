<x-frontend.app>
    <section class="container mb-5 pb-md-5 mt-4 mt-md-5">
        <!-- Page title-->
        <div class="text-center pb-4 mb-3">
            <h1 class="h2 text-primary">Checkout</h1>
        </div>
        <!-- Steps-->
        <div class="bg-light rounded-3 px-md-4 mb-3">
            <div class="step-nav multistep-nav" data-multi-step-nav>
                <div class="steps pt-4 pb-1">
                    <div class="step active" data-edit-step="1">
                        <div class="step-progress">
                            <span class="step-progress-start"></span><span class="step-progress-end"></span><span
                                class="step-number">1</span>
                        </div>
                        <div class="step-label">Tarif wählen</div>
                    </div>
                    <div class="step" data-edit-step="2">
                        <div class="step-progress">
                            <span class="step-progress-start"></span><span class="step-progress-end"></span><span
                                class="step-number">2</span>
                        </div>
                        <div class="step-label">Termin festlegen</div>
                    </div>
                    <div class="step" data-edit-step="3">
                        <div class="step-progress">
                            <span class="step-progress-start"></span><span class="step-progress-end"></span><span
                                class="step-number">3</span>
                        </div>
                        <div class="step-label">Bezahlung</div>
                    </div>
                </div>
            </div>
        </div>

        <form class="bg-light shadow-sm rounded-3 p-3 p-md-4 multi-step-form" data-multi-step method="post"
            action="/">
            <div class="step-form" data-step>
                <h2 class="mb-4">Tarif wählen</h2>
                <h3 class="h6 text-gray-900 mt-5">Coach:in</h3>
                <div class="card p-3 mb-5 d-flex align-items-center flex-row bg-gray-200 border-gray-200">
                    <div class="position-relative flex-shrink-0">
                        <img style="object-fit: cover; aspect-ratio: 1/1" class="rounded-circle"
                            src="{{asset('frontend-assets/img/sample-images/user.png')}}" width="48" height="48px"
                            alt="Dr. Agathe Maria Musterfrau" />
                    </div>

                    <div class="ps-3 ps-sm-4">
                        <h3 class="h5 mb-1 text-gray-800">Mental Health</h3>
                        <p class="mb-0 fs-sm">Dr. Agathe Maria Musterfrau</p>
                    </div>
                </div>

                <h3 class="h6 text-gray-900">Tarife</h3>
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="card p-3 p-md-4 mb-3">
                            <div class="form-check package">
                                <input class="form-check-input" id="form-radio-1" type="radio" name="checkout-coach"
                                    checked />
                                <label class="form-check-label w-100" for="form-radio-1">
                                    <div
                                        class="d-flex justify-content-sm-between flex-column flex-sm-row align-items-sm-center">
                                        <div class="d-block">
                                            <h5 class="mb-1">Einzeltarif</h5>
                                            <div class="d-flex">
                                                <span class="package-price">2000.00€</span>
                                                <span>/Stunde</span>
                                            </div>
                                        </div>
                                        <div class="d-block" style="max-width: 100px">
                                            <input class="form-control price-multiply-by" type="number" placeholder="6"
                                                value="1" />
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-3 p-md-4 mb-3">
                            <div class="form-check package">
                                <input class="form-check-input" id="form-radio-2" type="radio"
                                    name="checkout-coach" />
                                <label class="form-check-label w-100" for="form-radio-2">
                                    <div
                                        class="d-flex justify-content-sm-between flex-column flex-sm-row align-items-sm-center">
                                        <div class="d-block">
                                            <h5 class="mb-1">Gruppentarif</h5>
                                            <div class="d-flex">
                                                <span class="package-price">1000.00€</span>
                                                <span>/Stunde</span>
                                            </div>
                                        </div>
                                        <div class="d-block" style="max-width: 100px">
                                            <input class="form-control price-multiply-by" type="number" placeholder="6"
                                                value="1" />
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-3 p-md-4 mb-3">
                            <div class="form-check package">
                                <input class="form-check-input" id="form-radio-3" type="radio"
                                    name="checkout-coach" />
                                <label class="form-check-label w-100" for="form-radio-3">
                                    <div
                                        class="d-flex justify-content-sm-between flex-column flex-sm-row align-items-sm-center">
                                        <div class="d-block">
                                            <h5 class="mb-1">Wochenendtarif</h5>
                                            <div class="d-flex">
                                                <span class="package-price">500.00€</span>
                                                <span>/Stunde</span>
                                            </div>
                                        </div>
                                        <div class="d-block" style="max-width: 100px">
                                            <input class="form-control price-multiply-by" type="number"
                                                placeholder="6" value="1" />
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="h6 text-gray-900">Zusammenfassung</h3>
                <div class="card px-3 pt-3 pb-2 px-md-4 mb-3">
                    <div
                        class="d-flex justify-content-sm-between flex-column flex-sm-row align-items-sm-center border-bottom pb-2">
                        <div class="d-block">
                            <p class="mb-1 text-gray-900">
                                Nettopreis: <span class="package-name"></span>
                            </p>
                        </div>
                        <div class="h5 text-gray-900 mb-1" id="nettopreis"></div>
                        <input type="hidden" name="nettopreis" id="nettopreis-input" />
                    </div>
                    <div
                        class="d-flex justify-content-sm-between flex-column flex-sm-row align-items-sm-center border-bottom py-2">
                        <div class="d-block">
                            <p class="mb-1 text-gray-900">Umsatzsteuer (19%)</p>
                        </div>
                        <div class="h5 text-gray-900 mb-1" id="umsatzsteuer"></div>
                        <input type="hidden" name="umsatzsteuer" id="umsatzsteuer-input" />
                    </div>
                    <div class="d-flex justify-content-sm-between flex-column flex-sm-row align-items-sm-center py-2">
                        <div class="d-block">
                            <p class="mb-1 text-gray-900">Gesamtbetrag</p>
                        </div>
                        <div class="h5 text-primary mb-1" id="gesamtbetrag"></div>
                        <input type="hidden" name="gesamtbetrag" id="gesamtbetrag-input" />
                    </div>
                </div>

                <div class="d-flex justify-content-md-end justify-content-center my-4">
                    <button type="button" class="btn btn-primary rounded-pill" data-next>
                        Termin festlegen <i class="fi-chevron-right fs-sm ms-2"></i>
                    </button>
                </div>
            </div>
            <div class="step-form" data-step>
                <script src="../files/fullcalendar-6.1.14/dist/index.global.min.js?_v=20240806170230"></script>
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        let calendarEl = document.getElementById("calendar");
                        let calendar = new FullCalendar.Calendar(calendarEl, {
                            initialView: "dayGridMonth",
                        });
                        calendar.render();
                    });
                </script>
                <div id="calendar"></div>

                <div class="d-flex flex-column flex-sm-row align-items-center bg-light rounded-3 py-3">
                    <button type="button"
                        class="btn btn-outline-primary btn-lg rounded-pill mb-sm-0 order-2 order-sm-1" data-previous>
                        <i class="fi-chevron-left fs-sm me-2"></i>Zurück
                    </button>
                    <button type="button"
                        class="btn btn-primary btn-lg rounded-pill ms-sm-auto order-1 order-sm-2 mb-3" data-next>
                        Speichern & Weiter<i class="fi-chevron-right fs-sm ms-2"></i>
                    </button>
                </div>
            </div>

            <div class="step-form" data-step>
                Kasse
                <div class="d-flex flex-column flex-sm-row align-items-center bg-light rounded-3 py-3">
                    <button type="button"
                        class="btn btn-outline-primary btn-lg rounded-pill mb-sm-0 order-2 order-sm-1" data-previous>
                        <i class="fi-chevron-left fs-sm me-2"></i>Zurück
                    </button>
                    <button type="submit"
                        class="btn btn-primary btn-lg rounded-pill ms-sm-auto order-1 order-sm-2 mb-3">
                        Verbindlich bestellen
                    </button>
                </div>
            </div>
        </form>
    </section>


</x-frontend.app>
@push('js')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const packages = document.querySelectorAll(".form-check-input");
            const packageNameElements = document.querySelectorAll(".package-name");
            const nettopreisElement = document.getElementById("nettopreis");
            const umsatzsteuerElement = document.getElementById("umsatzsteuer");
            const gesamtbetragElement = document.getElementById("gesamtbetrag");

            const nettopreisInput = document.getElementById("nettopreis-input");
            const umsatzsteuerInput = document.getElementById("umsatzsteuer-input");
            const gesamtbetragInput = document.getElementById("gesamtbetrag-input");

            function updatePrices() {
                const selectedPackage = document.querySelector(
                    ".form-check-input:checked"
                );
                if (!selectedPackage) {
                    console.error("No package selected");
                    return;
                }

                const selectedLabelId = selectedPackage.id;
                const selectedLabel = document.querySelector(
                    `label[for="${selectedLabelId}"]`
                );

                if (!selectedLabel) {
                    console.error("Selected package has no label");
                    return;
                }

                const packageName = selectedLabel.querySelector("h5").textContent;
                const packagePriceText =
                    selectedLabel.querySelector(".package-price").textContent;
                const packagePrice = parseFloat(
                    packagePriceText.replace("€", "").replace(",", ".")
                );
                const multiplyByInput =
                    selectedLabel.querySelector(".price-multiply-by");
                const multiplyBy = parseFloat(multiplyByInput.value);

                if (isNaN(packagePrice) || isNaN(multiplyBy) || multiplyBy <= 0) {
                    console.error(
                        "Invalid package price or multiplier:",
                        packagePriceText,
                        multiplyBy
                    );
                    return;
                }

                const totalPrice = packagePrice * multiplyBy;
                const nettopreis = totalPrice / 1.19;
                const umsatzsteuer = totalPrice - nettopreis;

                packageNameElements.forEach((el) => (el.textContent = packageName));
                nettopreisElement.textContent = nettopreis.toFixed(2) + "€";
                umsatzsteuerElement.textContent = umsatzsteuer.toFixed(2) + "€";
                gesamtbetragElement.textContent = totalPrice.toFixed(2) + "€";

                // Set hidden input values
                nettopreisInput.value = nettopreis.toFixed(2);
                umsatzsteuerInput.value = umsatzsteuer.toFixed(2);
                gesamtbetragInput.value = totalPrice.toFixed(2);
            }

            packages.forEach((pkg) => {
                pkg.addEventListener("change", updatePrices);
            });

            const multiplyInputs = document.querySelectorAll(".price-multiply-by");
            multiplyInputs.forEach((input) => {
                input.addEventListener("input", updatePrices);
            });

            updatePrices();
        });
    </script>
@endpush
