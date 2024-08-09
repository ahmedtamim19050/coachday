<x-frontend.app>
    @push('css')
        <link rel="stylesheet" media="screen" href="{{ asset('frontend-assets/files/simplebar/dist/simplebar.min.css') }}" />
        <link rel="stylesheet" media="screen"
            href="{{ asset('frontend-assets/files/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css') }}" />
        <link rel="stylesheet" media="screen" href="{{ asset('frontend-assets/files/filepond/dist/filepond.min.css') }}" />
    @endpush
    <section class="container mb-5 pb-md-5 mt-4 mt-md-5">


        <!-- Page title-->
        <div class="text-center pb-4 mb-3">
            <h1 class="h2 text-primary">Coach Profil bearbeiten</h1>
        </div>
        <!-- Steps-->
        <div class="bg-light rounded-3 px-md-4 mb-3">
            <div class="step-nav multistep-nav" data-multi-step-nav>
                <div class="steps pt-4 pb-1">
                    <div class="step active" data-edit-step="1">
                        <div class="step-progress"><span class="step-progress-start"></span><span
                                class="step-progress-end"></span><span class="step-number">1</span></div>
                        <div class="step-label d-none d-sm-block">Über Mich</div>
                    </div>
                    <div class="step " data-edit-step="2">
                        <div class="step-progress"><span class="step-progress-start"></span><span
                                class="step-progress-end"></span><span class="step-number">2</span></div>
                        <div class="step-label d-none d-sm-block">Coaching Inhalt</div>
                    </div>
                    <div class="step " data-edit-step="3">
                        <div class="step-progress"><span class="step-progress-start"></span><span
                                class="step-progress-end"></span><span class="step-number">3</span></div>
                        <div class="step-label d-none d-sm-block">Qualifikation &<br> Erfahrung</div>
                    </div>
                    <div class="step " data-edit-step="4">
                        <div class="step-progress"><span class="step-progress-start"></span><span
                                class="step-progress-end"></span><span class="step-number">4</span></div>
                        <div class="step-label d-none d-sm-block">Kontakt</div>
                    </div>
                    <div class="step " data-edit-step="5">
                        <div class="step-progress"><span class="step-progress-start"></span><span
                                class="step-progress-end"></span><span class="step-number">5</span></div>
                        <div class="step-label d-none d-sm-block">Übersicht</div>
                    </div>
                </div>
            </div>
        </div>

        <form class="bg-light shadow-sm rounded-3 px-3 px-md-4 py-md-5 py-4 multi-step-form" data-multi-step
            method="post" action="/">

            <div class="step-form" data-step>
                <h2 class="h4 mb-4">Über mich</h2>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label for="textarea-input" class="form-label fw-bold">Vollständiger Name <span
                                    class="text-danger">*</span></label>
                            <input class="form-control" type="text" placeholder="Vollständiger Name" name="name">
                            <div class="text-danger error-message"></div>
                        </div>
                        <div class="mb-4">
                            <label for="textarea-input" class="form-label fw-bold">Berufsbezeichnung <span
                                    class="text-danger">*</span></label>
                            <input class="form-control" name="job_title" type="text" placeholder="Berufsbezeichnung">
                            <div class="text-danger error-message"></div>
                        </div>
                    </div>
                    <div class="col-md-3 pt-md-4">
                        <input class="file-uploader bg-secondary py-5" type="file" name="image"
                            accept="image/png, image/jpeg"
                            data-label-idle='<i class="d-inline-block fi-camera-plus fs-2 text-muted mb-2 mt-2"></i><br><span class="fw-bold">Beitragsbild hochladen</span>'
                            data-style-panel-layout="compact" data-image-preview-height="160"
                            data-image-crop-aspect-ratio="1:1" data-image-resize-target-width="160"
                            data-image-resize-target-height="160">
                    </div>

                    <div class="col-md-6">
                        <div class="mb-4">
                            <span class="form-label fw-bold">Coaching Formate</span>
                            <div class="dropdown mt-1">
                                <button class="custom-dropdown-toggle dropdown-toggle multiple-checkbox" type="button"
                                    id="dropdownMenuButtonFormate" aria-expanded="false">
                                    Format wählen
                                </button>
                                <div class="multiselect-container" aria-labelledby="dropdownMenuButtonFormate">
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="coachingFormat1" type="checkbox"
                                            name="coaching_formats">
                                        <label class="form-check-label" value="Einzelcoaching"
                                            for="coachingFormat1">Einzelcoaching</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="gruppencoaching" type="checkbox"
                                            name="coaching_formats" value="Gruppencoaching">
                                        <label class="form-check-label" for="gruppencoaching">Gruppencoaching</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="coachingFormat2" type="checkbox"
                                            name="coaching_formats" value="Privatcoaching">
                                        <label class="form-check-label" for="coachingFormat2">Privatcoaching</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" id="firmenCoaching" type="checkbox"
                                            name="coachingFormats">
                                        <label class="form-check-label" for="firmenCoaching"> Firmencoaching</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="mb-4">
                            <span class="form-label fw-bold">Sprachen</span>
                            <div class="dropdown mt-1">
                                <button class="custom-dropdown-toggle dropdown-toggle multiple-checkbox"
                                    type="button" id="dropdownMenuButton" aria-expanded="false">
                                    Sprachen wählen
                                </button>
                                <div class="multiselect-container" aria-labelledby="dropdownMenuButton">
                                    <div class="form-check">
                                        <input class="form-check-input" name="languages[]" id="deutsch"
                                            type="checkbox" value="Deutsch">
                                        <label class="form-check-label" for="deutsch">Deutsch</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="languages[]" id="englisch"
                                            type="checkbox" value="Englisch">
                                        <label class="form-check-label" for="englisch">Englisch</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="languages[]" id="franzoesisch"
                                            type="checkbox" value="Französisch">
                                        <label class="form-check-label" for="franzoesisch">Französisch</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="languages[]" id="hindi"
                                            type="checkbox" value="Hindi">
                                        <label class="form-check-label" for="hindi">Hindi</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="languages[]" id="polnisch"
                                            type="checkbox" value="Polnisch">
                                        <label class="form-check-label" for="polnisch">Polnisch</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="languages[]" id="portugiesisch"
                                            type="checkbox" value="Portugiesisch">
                                        <label class="form-check-label" for="portugiesisch">Portugiesisch</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="languages[]" id="russisch"
                                            type="checkbox" value="Russisch">
                                        <label class="form-check-label" for="russisch">Russisch</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="languages[]" id="spanisch"
                                            type="checkbox" value="Spanisch">
                                        <label class="form-check-label" for="spanisch">Spanisch</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="languages[]" id="tuerkisch"
                                            type="checkbox" value="Türkisch">
                                        <label class="form-check-label" for="tuerkisch">Türkisch</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="languages[]" id="ukrainisch"
                                            type="checkbox" value="Ukrainisch">
                                        <label class="form-check-label" for="ukrainisch">Ukrainisch</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-4">
                            <label for="textarea-input" class="form-label fw-bold">Berufserfahrung</label>

                            <div class="d-flex align-items-center">
                                <input class="form-control" style="max-width:100px;" name="experience"
                                    type="number">
                                <span class="text-gray-600 ms-2">Jahre</span>
                            </div>
                            <div class="text-danger error-message"></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-4">
                            <span class="form-label fw-bold">Region</span>
                            <div class="dropdown mt-1">
                                <button class="dropdown-toggle custom-dropdown-toggle multiple-checkbox"
                                    type="button" id="dropdownMenuButtonRegionen" aria-expanded="false">
                                    Region/en wählen
                                </button>
                                <div class="multiselect-container" aria-labelledby="dropdownMenuButtonRegionen">
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region1" type="checkbox"
                                            name="region[]" value="Aachen">
                                        <label class="form-check-label" for="region1">Aachen</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region2" type="checkbox"
                                            name="region[]" value="Berlin">
                                        <label class="form-check-label" for="region2">Berlin</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region3" type="checkbox"
                                            name="region[]" value="Bremen">
                                        <label class="form-check-label" for="region3">Bremen</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region4" type="checkbox"
                                            name="region[]" value="Dortmund">
                                        <label class="form-check-label" for="region4">Dortmund</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region5" type="checkbox"
                                            name="region[]" value="Dresden">
                                        <label class="form-check-label" for="region5">Dresden</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region6" type="checkbox"
                                            name="region[]" value="Düsseldorf">
                                        <label class="form-check-label" for="region6">Düsseldorf</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region7" type="checkbox"
                                            name="region[]" value="Frankfurt am Main">
                                        <label class="form-check-label" for="region7">Frankfurt am Main</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region8" type="checkbox"
                                            name="region[]" value="Hamburg">
                                        <label class="form-check-label" for="region8">Hamburg</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region9" type="checkbox"
                                            name="region[]" value="Hannover">
                                        <label class="form-check-label" for="region9">Hannover</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region10" type="checkbox"
                                            name="region[]" value="Köln">
                                        <label class="form-check-label" for="region10">Köln</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region11" type="checkbox"
                                            name="region[]" value="Leipzig">
                                        <label class="form-check-label" for="region11">Leipzig</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region12" type="checkbox"
                                            name="region[]" value="München">
                                        <label class="form-check-label" for="region12">München</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region13" type="checkbox"
                                            name="region[]" value="Nürnberg">
                                        <label class="form-check-label" for="region13">Nürnberg</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region14" type="checkbox"
                                            name="region[]" value="Stuttgart">
                                        <label class="form-check-label" for="region14">Stuttgart</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region15" type="checkbox"
                                            name="region[]" value="Baden-Württemberg">
                                        <label class="form-check-label" for="region15">Baden-Württemberg</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region16" type="checkbox"
                                            name="region[]" value="Bayern">
                                        <label class="form-check-label" for="region16">Bayern</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region17" type="checkbox"
                                            name="region[]" value="Berlin">
                                        <label class="form-check-label" for="region17">Berlin</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region18" type="checkbox"
                                            name="region[]" value="Brandenburg">
                                        <label class="form-check-label" for="region18">Brandenburg</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region19" type="checkbox"
                                            name="region[]" value="Bremen">
                                        <label class="form-check-label" for="region19">Bremen</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region20" type="checkbox"
                                            name="region[]" value="Hamburg">
                                        <label class="form-check-label" for="region20">Hamburg</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region21" type="checkbox"
                                            name="region[]" value="Hessen">
                                        <label class="form-check-label" for="region21">Hessen</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region22" type="checkbox"
                                            name="region[]" value="Mecklenburg-Vorpommern">
                                        <label class="form-check-label" for="region22">Mecklenburg-Vorpommern</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region23" type="checkbox"
                                            name="region[]" value="Niedersachsen">
                                        <label class="form-check-label" for="region23">Niedersachsen</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region24" type="checkbox"
                                            name="region[]" value="Nordrhein-Westfalen">
                                        <label class="form-check-label" for="region24">Nordrhein-Westfalen</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region25" type="checkbox"
                                            name="region[]" value="Rheinland-Pfalz">
                                        <label class="form-check-label" for="region25">Rheinland-Pfalz</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region26" type="checkbox"
                                            name="region[]" value="Saarland">
                                        <label class="form-check-label" for="region26">Saarland</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region27" type="checkbox"
                                            name="region[]" value="Sachsen">
                                        <label class="form-check-label" for="region27">Sachsen</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region28" type="checkbox"
                                            name="region[]" value="Sachsen-Anhalt">
                                        <label class="form-check-label" for="region28">Sachsen-Anhalt</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region29" type="checkbox"
                                            name="region[]" value="Schleswig-Holstein">
                                        <label class="form-check-label" for="region29">Schleswig-Holstein</label>
                                    </div>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" id="region30" type="checkbox"
                                            name="region[]" value="Thüringen">
                                        <label class="form-check-label" for="region30">Thüringen</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-4">
                            <label for="beschreibungZumPreis" class="form-label fw-bold">Einleitungstext</label>
                            <textarea class="form-control" placeholder="Text schreiben…" id="beschreibungZumPreis" name="bio"
                                rows="5"></textarea>
                        </div>
                    </div>
                </div>


                <div class="d-flex flex-column flex-sm-row align-items-center bg-light rounded-3 py-3">

                    <button type="button"
                        class="btn btn-primary btn-lg rounded-pill ms-sm-auto order-1 order-sm-2 mb-3" data-next>
                        Speichern & Weiter<i class="fi-chevron-right fs-sm ms-2"></i></button>
                </div>
            </div>

            <div class="step-form" data-step>
                <h2 class="h4 mb-4">Coaching Inhalt</h2>

                <div class="row">
                    <div class="col-12">
                        <div class="form-label fw-bold d-flex align-items-center">Themengebiete
                            <span class="text-gray-600" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Beschreiben Sie Ihre Themengebiete"><i class="fi-alert-circle ms-1"></i></span>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row multirow-in-form-container-themengebiete">
                            <div class="col-md-6 multirow-in-form">
                                <div class="mb-4 d-flex align-items-center">
                                    <i class="fi-check-circle me-2 text-accent"></i>

                                    <input class="form-control" type="text" name="subject_area[]"
                                        placeholder="Themengebiet">
                                    <div class="text-danger error-message"></div>
                                </div>
                            </div>

                            <div class="col-md-6 multirow-in-form">
                                <div class="mb-4 d-flex align-items-center">
                                    <i class="fi-check-circle me-2 text-accent"></i>
                                    <input class="form-control" type="text" name="subject_area[]"
                                        placeholder="Themengebiet">
                                    <div class="text-danger error-message"></div>
                                </div>
                            </div>

                            <div class="col-md-6 multirow-in-form">
                                <div class="mb-4 d-flex align-items-center">
                                    <i class="fi-check-circle me-2 text-accent"></i>
                                    <input class="form-control" type="text" name="subject_area[]"
                                        placeholder="Themengebiet">
                                    <div class="text-danger error-message"></div>
                                </div>
                            </div>

                            <div class="col-md-6 multirow-in-form">
                                <div class="mb-4 d-flex align-items-center">

                                    <div class="dropdown me-2">
                                        <i class="custom-dropdown-toggle multiple-checkbox fi-lock text-primary"
                                            type="button" id="dropdownMenuButtonID4" aria-expanded="false">
                                        </i>
                                        <div class="explanation-container" aria-labelledby="dropdownMenuButtonID4">
                                            <h6 class="mb-1">Nicht in Ihrem Plan enthalten</h6>
                                            <p class="fs-sm mb-1">Jetzt weitere Optionen freischalten und mit Coachday
                                                Premium Ihr Profil optimieren.</p>
                                            <a href="#" rel="nooper"
                                                class="btn btn-sm btn-primary rounded-pill" target="_blank">Jetzt
                                                freischalten</a>
                                        </div>
                                    </div>

                                    <input class="form-control" type="text" name="subject_area[]"
                                        placeholder="Themengebiet" disabled>
                                    <div class="text-danger error-message"></div>
                                </div>
                            </div>


                            <div class="col-12 d-flex align-items-center mt-0 mb-5">

                                <button type="button"
                                    class="btn text-primary rounded-pill add-multirow-in-form-themengebiete px-0"><i
                                        class="fi-plus me-1"></i>Weitere hinzufügen</button>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        document.querySelectorAll(".add-multirow-in-form-themengebiete").forEach(function(button) {
                                            button.addEventListener("click", function() {
                                                var container = this.closest(".multirow-in-form-container-themengebiete");
                                                var newRow = document.createElement("div");
                                                newRow.classList.add("col-md-6", "multirow-in-form");
                                                newRow.innerHTML = `
                                                        <div class="mb-4 d-flex align-items-center">
                                                            <i class="fi-check-circle me-2 text-accent"></i>
                                                            <input class="form-control" name="subject_area[]" type="text" placeholder="Themengebiet">
                                                            <div class="text-danger error-message"></div>
                                                            <button type="button" class="btn text-primary rounded-circle px-0 delete-row-button ms-2" style="aspect-ratio:1/1;">
                                                            <i class="fi-x fs-sm m-0"></i>
                                                        </button>  
                                                        </div>
                                                `;
                                                container.insertBefore(newRow, container.querySelector(
                                                    ".add-multirow-in-form-themengebiete").parentNode);


                                                newRow.querySelector(".delete-row-button").addEventListener("click",
                                                    function() {
                                                        newRow.remove();
                                                    });
                                            });
                                        });
                                    });
                                </script>

                                <div class="dropdown me-2">
                                    <div class="custom-dropdown-toggle multiple-checkbox btn text-primary"
                                        type="button" id="dropdownMenuButtonIDClosed" aria-expanded="false">
                                        <i class="fi-lock me-1"></i>Weitere hinzufügen
                                    </div>
                                    <div class="explanation-container" aria-labelledby="dropdownMenuButtonIDClosed">
                                        <h6 class="mb-1">Nicht in Ihrem Plan enthalten</h6>
                                        <p class="fs-sm mb-1">Jetzt weitere Optionen freischalten und mit Coachday
                                            Premium Ihr Profil optimieren.</p>
                                        <a href="#" rel="nooper" class="btn btn-sm btn-primary rounded-pill"
                                            target="_blank">Jetzt freischalten</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>


                    <div class="col-12">
                        <div class="mb-4">
                            <label for="zielgruppeBranchen" class="form-label fw-bold">Zielgruppe | Branchen</label>
                            <textarea class="form-control word-count-field" placeholder="Text schreiben…" id="industries" name="zielgruppe"
                                rows="5"></textarea>
                            <div class="text-danger error-message"></div>
                        </div>
                    </div>

                    <div class="col-12 ">
                        <div class="mb-4">
                            <label for="zielgruppeBranchen" class="form-label fw-bold">Coaching Methoden</label>
                            <textarea class="form-control word-count-field" placeholder="Text schreiben…" id="methods"
                                name="methodenBeschreibung" rows="5"></textarea>
                            <div class="text-danger error-message"></div>
                        </div>

                        <div class="col-12">
                            <div class="row multirow-in-form-container-methode">


                                <div class="col-md-6 multirow-in-form">
                                    <div class="mb-4 d-flex align-items-center">
                                        <i class="bx bx-right-arrow-alt me-2 text-accent"></i>
                                        <input class="form-control" name="method[]" type="text"
                                            placeholder="Methode">
                                        <div class="text-danger error-message"></div>
                                    </div>
                                </div>

                                <div class="col-12 d-flex align-items-center mt-0 mb-5">

                                    <button type="button"
                                        class="btn text-primary rounded-pill add-multirow-in-form-methode px-0"><i
                                            class="fi-plus me-1"></i>Weitere hinzufügen</button>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            document.querySelectorAll(".add-multirow-in-form-methode").forEach(function(button) {
                                                button.addEventListener("click", function() {
                                                    var container = this.closest(".multirow-in-form-container-methode");
                                                    var newRow = document.createElement("div");
                                                    newRow.classList.add("col-md-6", "multirow-in-form");
                                                    newRow.innerHTML = `
                                                            <div class="mb-4 d-flex align-items-center">
                                                                <i class="bx bx-right-arrow-alt me-2 text-accent"></i>
                                                                <input name="method[]" class="form-control" type="text" placeholder="Methode">
                                                                <div class="text-danger error-message"></div>
                                                                <button type="button" class="btn text-primary rounded-circle px-0 delete-row-button ms-2" style="aspect-ratio:1/1;">
                                                                <i class="fi-x fs-sm m-0"></i>
                                                            </button>  
                                                            </div>
                                                    `;
                                                    container.insertBefore(newRow, container.querySelector(
                                                        ".add-multirow-in-form-methode").parentNode);

                                                    newRow.querySelector(".delete-row-button").addEventListener("click",
                                                        function() {
                                                            newRow.remove();
                                                        });
                                                });
                                            });
                                        });
                                    </script>

                                    <div class="dropdown me-2">
                                        <div class="custom-dropdown-toggle multiple-checkbox btn text-primary"
                                            type="button" id="dropdownMenuButtonIDClosedMethode"
                                            aria-expanded="false">
                                            <i class="fi-lock me-1"></i>Weitere hinzufügen
                                        </div>
                                        <div class="explanation-container"
                                            aria-labelledby="dropdownMenuButtonIDClosedMethode">
                                            <h6 class="mb-1">Nicht in Ihrem Plan enthalten</h6>
                                            <p class="fs-sm mb-1">Jetzt weitere Optionen freischalten und mit Coachday
                                                Premium Ihr Profil optimieren.</p>
                                            <a href="#" rel="nooper"
                                                class="btn btn-sm btn-primary rounded-pill" target="_blank">Jetzt
                                                freischalten</a>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>

                </div>

                <div class="d-flex flex-column flex-sm-row align-items-center bg-light rounded-3 pb-3 pt-0">
                    <button type="button"
                        class="btn btn-outline-primary btn-lg rounded-pill mb-sm-0 order-2 order-sm-1" data-previous><i
                            class="fi-chevron-left fs-sm me-2"></i>Zurück</button>
                    <button type="button"
                        class="btn btn-primary btn-lg rounded-pill ms-sm-auto order-1 order-sm-2 mb-3" data-next>
                        Speichern & Weiter<i class="fi-chevron-right fs-sm ms-2"></i></button>
                </div>
            </div>

            <div class="step-form" data-step>
                <h2 class="h4 mb-4">Qualifikation & Erfahrungen</h2>

                <div class="row">
                    <div class="col-12">
                        <div class="form-label fw-bold d-flex align-items-center">Abschlüsse & Zertifikate</div>
                    </div>

                    <div class="col-12">
                        <div class="row multirow-in-form-container-abschluesse">
                            <div class="col-md-6 multirow-in-form d-flex">
                                <i class="fi-award me-3 mt-1 text-accent"></i>
                                <div class="w-100 mb-4">
                                    <input class="form-control fw-bold" type="text" name="degrees[0][degree]"
                                        placeholder="Abschluss / Zertifikat">
                                    <div class="text-danger error-message"></div>
                                    <input class="form-control mt-3" type="text" name="degrees[0][institution]"
                                        placeholder="Institution">
                                    <div class="text-danger error-message"></div>
                                    <div class="input-group mt-3">
                                        <input class="form-control date-picker rounded pe-5" type="text"
                                            name="degrees[0][join_date]" placeholder="Datum Wählen"
                                            data-datepicker-options='{"altInput": true, "altFormat": "Y", "dateFormat": "Y"}'>
                                        <i
                                            class="fi-calendar position-absolute top-50 end-0 translate-middle-y me-3"></i>
                                    </div>
                                    <label for="textarea-input"
                                        class="form-label fw-bold d-flex align-items-center mt-3 text-gray-700 fw-bold">Nachweis
                                        <span class="text-gray-600" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Laden Sie ein Nachweis für Ihr Abschluss/ Zertifikat hoch."><i
                                                class="fi-alert-circle ms-1"></i></span>
                                    </label>
                                    <input class="file-uploader file-uploader-grid" type="file"
                                        name="degrees[0][proof]" multiple data-max-files="1" data-max-file-size="2MB"
                                        accept="image/png, image/jpeg, application/pdf"
                                        data-label-idle='<div class="btn btn-outline-gray-800 rounded-pill mb-1"><i class="fi-cloud-upload me-1"></i>Nachweis hochladen</div>'>

                                </div>
                            </div>

                            <div class="col-md-6 multirow-in-form d-flex">
                                <div class="dropdown me-2">
                                    <i class="custom-dropdown-toggle multiple-checkbox fi-lock text-primary"
                                        type="button" id="dropdownMenuButtonID4" aria-expanded="false"></i>
                                    <div class="explanation-container" aria-labelledby="dropdownMenuButtonID4">
                                        <h6 class="mb-1">Nicht in Ihrem Plan enthalten</h6>
                                        <p class="fs-sm mb-1">Jetzt weitere Optionen freischalten und mit Coachday
                                            Premium Ihr Profil optimieren.</p>
                                        <a href="#" rel="nooper" class="btn btn-sm btn-primary rounded-pill"
                                            target="_blank">Jetzt freischalten</a>
                                    </div>
                                </div>
                                <div class="w-100 mb-4">
                                    <input class="form-control fw-bold" type="text" name="abschluss"
                                        placeholder="Abschluss / Zertifikat" disabled>
                                    <div class="text-danger error-message"></div>
                                    <input class="form-control mt-3" type="text" name="institution"
                                        placeholder="Institution" disabled>
                                    <div class="text-danger error-message"></div>
                                    <div class="input-group mt-3">
                                        <input class="form-control date-picker rounded pe-5 bg-gray-200"
                                            type="text" name="datum" placeholder="Datum Wählen"
                                            data-datepicker-options='{"altInput": true, "altFormat": "Y", "dateFormat": "Y"}'
                                            disabled>
                                        <i
                                            class="fi-calendar position-absolute top-50 end-0 translate-middle-y me-3"></i>
                                    </div>

                                    <label for="textarea-input"
                                        class="form-label fw-bold d-flex align-items-center mt-3 text-gray-700 fw-bold"
                                        disabled>Nachweis
                                        <span class="text-gray-600" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Laden Sie ein Nachweis für Ihr Abschluss/ Zertifikat hoch."><i
                                                class="fi-alert-circle ms-1"></i></span>
                                    </label>
                                    <input class="file-uploader file-uploader-grid" type="file"
                                        name="nachweisAbschluss" multiple data-max-files="1" data-max-file-size="2MB"
                                        accept="image/png, image/jpeg, application/pdf"
                                        data-label-idle='<div class="btn btn-outline-gray-800 rounded-pill mb-1"><i class="fi-cloud-upload me-1"></i>Nachweis hochladen</div>'
                                        disabled>
                                </div>
                            </div>

                            <div class="col-12 d-flex align-items-center mt-0 mb-5">
                                <button type="button"
                                    class="btn text-primary rounded-pill add-multirow-in-form-abschluesse px-0"><i
                                        class="fi-plus me-1"></i>Weitere hinzufügen</button>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        let index = 0; // Initialize the loop index

                                        document.querySelectorAll(".add-multirow-in-form-abschluesse").forEach(function(button) {
                                            button.addEventListener("click", function() {
                                                var container = this.closest(".multirow-in-form-container-abschluesse");
                                                var newRow = document.createElement("div");
                                                newRow.classList.add("col-md-6", "multirow-in-form", "d-flex");
                                                newRow.innerHTML = `
                <i class="fi-award me-3 mt-1 text-accent"></i>
                <div class="w-100 mb-4">
                    <input class="form-control fw-bold" type="text" name="degrees[${index+1}][degree]" placeholder="Abschluss / Zertifikat">
                    <div class="text-danger error-message"></div>
                    <input class="form-control mt-3" type="text" name="degrees[${index+1}][institution]" placeholder="Institution">
                    <div class="text-danger error-message"></div>
                    <div class="input-group mt-3">
                        <input class="form-control date-picker rounded pe-5" type="text" name="degrees[${index+1}][join_date]" placeholder="Datum Wählen" data-datepicker-options='{"altInput": true, "altFormat": "Y", "dateFormat": "Y"}'>
                        <i class="fi-calendar position-absolute top-50 end-0 translate-middle-y me-3"></i>
                    </div>
                    <label for="textarea-input" class="form-label fw-bold d-flex align-items-center mt-3 text-gray-700 fw-bold" disabled>Nachweis
                        <span class="text-gray-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Laden Sie ein Nachweis für Ihr Abschluss/ Zertifikat hoch."><i class="fi-alert-circle ms-1"></i></span>
                    </label>
                    <input class="file-uploader file-uploader-grid" type="file" name="degrees[${index+1}][proof]" multiple data-max-files="1" data-max-file-size="2MB" accept="image/png, image/jpeg, application/pdf" data-label-idle='<div class="btn btn-outline-gray-800 rounded-pill mb-1"><i class="fi-cloud-upload me-1"></i>Nachweis hochladen</div>' >
                </div>
                <button type="button" class="btn text-primary rounded-circle px-0 delete-row-button ms-2 align-self-start" style="aspect-ratio:1/1;">
                    <i class="fi-x fs-sm m-0"></i>
                </button>
            `;
                                                container.insertBefore(newRow, container.querySelector(
                                                    ".add-multirow-in-form-abschluesse").parentNode);

                                                // Add event listener to the delete button
                                                newRow.querySelector(".delete-row-button").addEventListener("click",
                                                    function() {
                                                        newRow.remove();
                                                    });

                                                // Initialize date picker for the newly added input
                                                newRow.querySelectorAll(".date-picker").forEach(function(input) {
                                                    if (typeof flatpickr !== 'undefined') {
                                                        flatpickr(input, JSON.parse(input.getAttribute(
                                                            'data-datepicker-options')));
                                                    }
                                                });
                                                initializeFileUploader(newRow.querySelector(".file-uploader"));

                                                index++; // Increment the loop index for the next row
                                            });
                                        });

                                        function initializeFileUploader(inputElement) {
                                            if (typeof FilePond !== 'undefined') {
                                                FilePond.create(inputElement);
                                            }
                                        }
                                    });
                                </script>

                                <div class="dropdown me-2">
                                    <div class="custom-dropdown-toggle multiple-checkbox btn text-primary"
                                        type="button" id="dropdownMenuButtonIDClosed" aria-expanded="false">
                                        <i class="fi-lock me-1"></i>Weitere hinzufügen
                                    </div>
                                    <div class="explanation-container" aria-labelledby="dropdownMenuButtonIDClosed">
                                        <h6 class="mb-1">Nicht in Ihrem Plan enthalten</h6>
                                        <p class="fs-sm mb-1">Jetzt weitere Optionen freischalten und mit Coachday
                                            Premium Ihr Profil optimieren.</p>
                                        <a href="#" rel="nooper" class="btn btn-sm btn-primary rounded-pill"
                                            target="_blank">Jetzt freischalten</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="form-label fw-bold d-flex align-items-center">Ausbildung & Berufserfahrung</div>
                    </div>

                    <div class="col-12">
                        <div class="row multirow-in-form-container-ausbildung-zertifikate">
                            <div class="col-md-6 multirow-in-form d-flex">
                                <i class="fi-briefcase me-3 text-accent mt-1"></i>
                                <div class="w-100 mb-4">
                                    <input class="form-control fw-bold" type="text"
                                        name="education_exprience[0][exprience]"
                                        placeholder="Ausbildung / Berufserfahrung">
                                    <div class="text-danger error-message"></div>
                                    <input class="form-control mt-3" type="text"
                                        name="education_exprience[0][institution]" placeholder="Institution">
                                    <div class="text-danger error-message"></div>
                                    <div class="d-flex">
                                        <div class="input-group mt-3 me-2">
                                            <input class="form-control date-picker rounded pe-5" type="text"
                                                name="education_exprience[0][from]" placeholder="von"
                                                data-datepicker-options='{"altInput": true, "altFormat": "Y", "dateFormat": "Y"}'>
                                            <i
                                                class="fi-calendar position-absolute top-50 end-0 translate-middle-y me-3"></i>
                                        </div>
                                        <div class="input-group mt-3">
                                            <input class="form-control date-picker rounded pe-5" type="text"
                                                name="education_exprience[0][to]" placeholder="bis"
                                                data-datepicker-options='{"altInput": true, "altFormat": "Y", "dateFormat": "Y"}'>
                                            <i
                                                class="fi-calendar position-absolute top-50 end-0 translate-middle-y me-3"></i>
                                        </div>
                                    </div>
                                    <label for="textarea-input"
                                        class="form-label fw-bold d-flex align-items-center mt-3 text-gray-700 fw-bold">Nachweis
                                        <span class="text-gray-600" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Laden Sie ein Nachweis für Ihr Abschluss/ Zertifikat hoch."><i
                                                class="fi-alert-circle ms-1"></i></span>
                                    </label>
                                    <input class="file-uploader file-uploader-grid" type="file"
                                        name="education_exprience[0][proof]" name="nachweisAbschluss" multiple
                                        data-max-files="1" data-max-file-size="2MB"
                                        accept="image/png, image/jpeg, application/pdf"
                                        data-label-idle='<div class="btn btn-outline-gray-800 rounded-pill mb-1"><i class="fi-cloud-upload me-1"></i>Nachweis hochladen</div>'>
                                </div>
                            </div>

                            <div class="col-md-6 multirow-in-form d-flex">
                                <div class="dropdown me-2">
                                    <i class="custom-dropdown-toggle multiple-checkbox fi-lock text-primary"
                                        type="button" id="dropdownMenuButtonID5" aria-expanded="false"></i>
                                    <div class="explanation-container" aria-labelledby="dropdownMenuButtonID5">
                                        <h6 class="mb-1">Nicht in Ihrem Plan enthalten</h6>
                                        <p class="fs-sm mb-1">Jetzt weitere Optionen freischalten und mit Coachday
                                            Premium Ihr Profil optimieren.</p>
                                        <a href="#" rel="nooper" class="btn btn-sm btn-primary rounded-pill"
                                            target="_blank">Jetzt freischalten</a>
                                    </div>
                                </div>
                                <div class="w-100 mb-4">
                                    <input class="form-control fw-bold" type="text" name="ausbildung"
                                        placeholder="Ausbildung / Berufserfahrung" disabled>
                                    <div class="text-danger error-message"></div>
                                    <input class="form-control mt-3" type="text" name="institution_ausbildung"
                                        placeholder="Institution" disabled>
                                    <div class="text-danger error-message"></div>
                                    <div class="d-flex">
                                        <div class="input-group mt-3 me-2">
                                            <input class="form-control date-picker rounded pe-5 bg-gray-200"
                                                type="text" name="datum_von" placeholder="von"
                                                data-datepicker-options='{"altInput": true, "altFormat": "Y", "dateFormat": "Y"}'
                                                disabled>
                                            <i
                                                class="fi-calendar position-absolute top-50 end-0 translate-middle-y me-3"></i>
                                        </div>
                                        <div class="input-group mt-3">
                                            <input class="form-control date-picker rounded pe-5 bg-gray-200"
                                                type="text" name="datum_bis" placeholder="bis"
                                                data-datepicker-options='{"altInput": true, "altFormat": "Y", "dateFormat": "Y"}'
                                                disabled>
                                            <i
                                                class="fi-calendar position-absolute top-50 end-0 translate-middle-y me-3"></i>
                                        </div>
                                    </div>

                                    <label for="textarea-input"
                                        class="form-label fw-bold d-flex align-items-center mt-3 text-gray-700 fw-bold"
                                        disabled>Nachweis
                                        <span class="text-gray-600" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Laden Sie ein Nachweis für Ihr Abschluss/ Zertifikat hoch."><i
                                                class="fi-alert-circle ms-1"></i></span>
                                    </label>
                                    <input class="file-uploader file-uploader-grid" type="file"
                                        name="nachweisAbschluss" multiple data-max-files="1" data-max-file-size="2MB"
                                        accept="image/png, image/jpeg, application/pdf"
                                        data-label-idle='<div class="btn btn-outline-gray-800 rounded-pill mb-1"><i class="fi-cloud-upload me-1"></i>Nachweis hochladen</div>'
                                        disabled>
                                </div>
                            </div>

                            <div class="col-12 d-flex align-items-center mt-0 mb-5">
                                <button type="button"
                                    class="btn text-primary rounded-pill add-multirow-in-form-ausbildung-zertifikate px-0"><i
                                        class="fi-plus me-1"></i>Weitere hinzufügen</button>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        let index = 0; // Initialize the loop index

                                        document.querySelectorAll(".add-multirow-in-form-ausbildung-zertifikate").forEach(function(button) {
                                            button.addEventListener("click", function() {
                                                var container = this.closest(
                                                    ".multirow-in-form-container-ausbildung-zertifikate");
                                                var newRow = document.createElement("div");
                                                newRow.classList.add("col-md-6", "multirow-in-form", "d-flex");
                                                newRow.innerHTML = `
                <i class="fi-briefcase me-3 text-accent mt-1"></i>
                <div class="w-100 mb-4">
                    <input class="form-control fw-bold" type="text" name="education_exprience[${index+1}][exprience]" placeholder="Ausbildung / Berufserfahrung">
                    <div class="text-danger error-message"></div>
                    <input class="form-control mt-3" type="text" name="education_exprience[${index+1}][institution]" placeholder="Institution">
                    <div class="text-danger error-message"></div>
                    <div class="d-flex">
                        <div class="input-group mt-3 me-2">
                            <input class="form-control date-picker rounded pe-5" type="text" name="education_exprience[${index+1}][from]" placeholder="von" data-datepicker-options='{"altInput": true, "altFormat": "Y", "dateFormat": "Y"}'>
                            <i class="fi-calendar position-absolute top-50 end-0 translate-middle-y me-3"></i>
                        </div>
                        <div class="input-group mt-3">
                            <input class="form-control date-picker rounded pe-5" type="text" name="education_exprience[${index+1}][to]" placeholder="bis" data-datepicker-options='{"altInput": true, "altFormat": "Y", "dateFormat": "Y"}'>
                            <i class="fi-calendar position-absolute top-50 end-0 translate-middle-y me-3"></i>
                        </div>
                    </div>
                    <label for="textarea-input" class="form-label fw-bold d-flex align-items-center mt-3 text-gray-700 fw-bold">Nachweis
                        <span class="text-gray-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Laden Sie ein Nachweis für Ihr Abschluss/ Zertifikat hoch."><i class="fi-alert-circle ms-1"></i></span>
                    </label>
                    <input class="file-uploader file-uploader-grid" type="file" name="education_exprience[${index+1}][proof]" multiple data-max-files="1" data-max-file-size="2MB" accept="image/png, image/jpeg, application/pdf" data-label-idle='<div class="btn btn-outline-gray-800 rounded-pill mb-1"><i class="fi-cloud-upload me-1"></i>Nachweis hochladen</div>'>
                </div>
                <button type="button" class="btn text-primary rounded-circle px-0 delete-row-button ms-2 align-self-start" style="aspect-ratio:1/1;">
                    <i class="fi-x fs-sm m-0"></i>
                </button>
            `;
                                                container.insertBefore(newRow, container.querySelector(
                                                    ".add-multirow-in-form-ausbildung-zertifikate").parentNode);

                                                // Add event listener to the delete button
                                                newRow.querySelector(".delete-row-button").addEventListener("click",
                                                    function() {
                                                        newRow.remove();
                                                    });

                                                // Initialize date picker for the newly added input
                                                newRow.querySelectorAll(".date-picker").forEach(function(input) {
                                                    if (typeof flatpickr !== 'undefined') {
                                                        flatpickr(input, JSON.parse(input.getAttribute(
                                                            'data-datepicker-options')));
                                                    }
                                                });
                                                initializeFileUploader(newRow.querySelector(".file-uploader"));

                                                index++; // Increment the loop index for the next row
                                            });
                                        });

                                        function initializeFileUploader(inputElement) {
                                            if (typeof FilePond !== 'undefined') {
                                                FilePond.create(inputElement);
                                            }
                                        }
                                    });
                                </script>

                                <div class="dropdown me-2">
                                    <div class="custom-dropdown-toggle multiple-checkbox btn text-primary"
                                        type="button" id="dropdownMenuButtonIDClosedAusbildunguZ"
                                        aria-expanded="false">
                                        <i class="fi-lock me-1"></i>Weitere hinzufügen
                                    </div>
                                    <div class="explanation-container"
                                        aria-labelledby="dropdownMenuButtonIDClosedAusbildunguZ">
                                        <h6 class="mb-1">Nicht in Ihrem Plan enthalten</h6>
                                        <p class="fs-sm mb-1">Jetzt weitere Optionen freischalten und mit Coachday
                                            Premium Ihr Profil optimieren.</p>
                                        <a href="#" rel="nooper" class="btn btn-sm btn-primary rounded-pill"
                                            target="_blank">Jetzt freischalten</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-label fw-bold d-flex align-items-center">Referenzen</div>
                    </div>

                    <div class="col-12">
                        <div class="row multirow-in-form-container-referenzen">
                            <div class="col-md-6 multirow-in-form d-flex">
                                <i class="fi-check me-3 text-accent mt-1"></i>
                                <div class="w-100 mb-4">
                                    <input class="form-control fw-bold" type="text"
                                        name="references[0][reference]" placeholder="Referenz">
                                    <div class="text-danger error-message"></div>
                                    <textarea class="form-control word-count-field mt-3" name="references[0][description]" placeholder="Text schreiben…"
                                        rows="2"></textarea>
                                    <div class="text-danger error-message"></div>
                                    <label for="textarea-input"
                                        class="form-label fw-bold d-flex align-items-center mt-3 text-gray-700 fw-bold">Bestätigung
                                        Referenz
                                        <span class="text-gray-600" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Laden Sie ein Nachweis der Referenz hoch."><i
                                                class="fi-alert-circle ms-1"></i></span>
                                    </label>
                                    <input class="file-uploader file-uploader-grid" type="file"
                                        name="references[0][proof]" multiple data-max-files="1"
                                        data-max-file-size="2MB" accept="image/png, image/jpeg, application/pdf"
                                        data-label-idle='<div class="btn btn-outline-gray-800 rounded-pill mb-1"><i class="fi-cloud-upload me-1"></i>Referenz hochladen</div>'>
                                </div>
                            </div>

                            <div class="col-md-6 multirow-in-form d-flex">
                                <div class="dropdown me-2">
                                    <i class="custom-dropdown-toggle multiple-checkbox fi-lock text-primary"
                                        type="button" id="dropdownMenuButtonID6" aria-expanded="false"></i>
                                    <div class="explanation-container" aria-labelledby="dropdownMenuButtonID6">
                                        <h6 class="mb-1">Nicht in Ihrem Plan enthalten</h6>
                                        <p class="fs-sm mb-1">Jetzt weitere Optionen freischalten und mit Coachday
                                            Premium Ihr Profil optimieren.</p>
                                        <a href="#" rel="nooper" class="btn btn-sm btn-primary rounded-pill"
                                            target="_blank">Jetzt freischalten</a>
                                    </div>
                                </div>
                                <div class="w-100 mb-4">
                                    <input class="form-control fw-bold" type="text" name="referenz"
                                        placeholder="Referenz" disabled>
                                    <div class="text-danger error-message"></div>
                                    <textarea class="form-control word-count-field mt-3" name="references[0][reference]" placeholder="Text schreiben…"
                                        rows="2" disabled></textarea>
                                    <div class="text-danger error-message"></div>
                                    <label for="textarea-input"
                                        class="form-label fw-bold d-flex align-items-center mt-3 text-gray-700 fw-bold">Bestätigung
                                        Referenz
                                        <span class="text-gray-600" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Laden Sie ein Nachweis der Referenz hoch."><i
                                                class="fi-alert-circle ms-1"></i></span>
                                    </label>
                                    <input class="file-uploader file-uploader-grid bg-gray-200" type="file"
                                        name="bestätigungReferenz" multiple data-max-files="1"
                                        data-max-file-size="2MB" accept="image/png, image/jpeg, application/pdf"
                                        data-label-idle='<div class="btn btn-outline-gray-800 rounded-pill mb-1"><i class="fi-cloud-upload me-1"></i>Referenz hochladen</div>'
                                        disabled>
                                </div>
                            </div>

                            <div class="col-12 d-flex align-items-center mt-0 mb-5">
                                <button type="button"
                                    class="btn text-primary rounded-pill add-multirow-in-form-referenzen px-0"><i
                                        class="fi-plus me-1"></i>Weitere hinzufügen</button>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        let index = 0; // Initialize the loop index

                                        document.querySelectorAll(".add-multirow-in-form-referenzen").forEach(function(button) {
                                            button.addEventListener("click", function() {
                                                var container = this.closest(".multirow-in-form-container-referenzen");
                                                var newRow = document.createElement("div");
                                                newRow.classList.add("col-md-6", "multirow-in-form", "d-flex");
                                                newRow.innerHTML = `
                <i class="fi-check me-3 text-accent mt-1"></i>
                <div class="w-100 mb-4">
                    <input class="form-control fw-bold" type="text" name="references[${index+1}][reference]" placeholder="Referenz">
                    <div class="text-danger error-message"></div>
                    <textarea class="form-control word-count-field mt-3" name="references[${index+1}][description]" placeholder="Text schreiben…" rows="2"></textarea>
                    <div class="text-danger error-message"></div>
                    <label for="textarea-input" class="form-label fw-bold d-flex align-items-center mt-3 text-gray-700 fw-bold">Bestätigung Referenz
                        <span class="text-gray-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Laden Sie ein Nachweis der Referenz hoch."><i class="fi-alert-circle ms-1"></i></span>
                    </label>
                    <input class="file-uploader file-uploader-grid" type="file" name="references[${index+1}][proof]" multiple data-max-files="1" data-max-file-size="2MB" accept="image/png, image/jpeg, application/pdf" data-label-idle='<div class="btn btn-outline-gray-800 rounded-pill mb-1"><i class="fi-cloud-upload me-1"></i>Referenz hochladen</div>'>
                </div>
                <button type="button" class="btn text-primary rounded-circle px-0 delete-row-button ms-2 align-self-start" style="aspect-ratio:1/1;">
                    <i class="fi-x fs-sm m-0"></i>
                </button>
            `;
                                                container.insertBefore(newRow, container.querySelector(
                                                    ".add-multirow-in-form-referenzen").parentNode);

                                                newRow.querySelector(".delete-row-button").addEventListener("click",
                                            function() {
                                                    newRow.remove();
                                                });

                                                initializeFileUploader(newRow.querySelector(".file-uploader"));

                                                index++; // Increment the loop index for the next row
                                            });
                                        });

                                        function initializeFileUploader(inputElement) {
                                            if (typeof FilePond !== 'undefined') {
                                                FilePond.create(inputElement);
                                            }
                                        }
                                    });
                                </script>

                                <div class="dropdown me-2">
                                    <div class="custom-dropdown-toggle multiple-checkbox btn text-primary"
                                        type="button" id="dropdownMenuButtonIDClosedReferenzen"
                                        aria-expanded="false">
                                        <i class="fi-lock me-1"></i>Weitere hinzufügen
                                    </div>
                                    <div class="explanation-container"
                                        aria-labelledby="dropdownMenuButtonIDClosedReferenzen">
                                        <h6 class="mb-1">Nicht in Ihrem Plan enthalten</h6>
                                        <p class="fs-sm mb-1">Jetzt weitere Optionen freischalten und mit Coachday
                                            Premium Ihr Profil optimieren.</p>
                                        <a href="#" rel="nooper" class="btn btn-sm btn-primary rounded-pill"
                                            target="_blank">Jetzt freischalten</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="d-flex flex-column flex-sm-row align-items-center bg-light rounded-3 py-3">
                    <button type="button"
                        class="btn btn-outline-primary btn-lg rounded-pill mb-sm-0 order-2 order-sm-1" data-previous><i
                            class="fi-chevron-left fs-sm me-2"></i>Zurück</button>
                    <button type="button"
                        class="btn btn-primary btn-lg rounded-pill ms-sm-auto order-1 order-sm-2 mb-3" data-next>
                        Speichern & Weiter<i class="fi-chevron-right fs-sm ms-2"></i></button>
                </div>
            </div>

            <div class="step-form" data-step>
                <h2 class="h4 mb-4">Kontaktinformationen</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-4 d-flex align-items-center">
                            <i class="fi-phone me-2 text-accent"></i>
                            <input class="form-control" type="tel" name="telefon" placeholder="Telefon">
                            <div class="text-danger error-message"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-4 d-flex align-items-center">
                            <i class="fi-mail me-2 text-accent"></i>
                            <input class="form-control" type="email" name="email" placeholder="E-Mail">
                            <div class="text-danger error-message"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-4 d-flex align-items-center">
                            <i class="fi-map-pin me-2 text-accent"></i>
                            <input class="form-control" type="text" name="anschrift" placeholder="Anschrift">
                            <div class="text-danger error-message"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-label fw-bold d-flex align-items-center">Weitere Kontaktinformationen</div>
                    </div>
                    <div class="col-12">
                        <div class="row multirow-in-form-container-kontaktinformationen">
                            <div class="col-md-6 multirow-in-form">
                                <div class="mb-4 d-flex align-items-center">
                                    <i class="fi-globe me-2 text-accent"></i>
                                    <input class="form-control" type="url" name="webseite"
                                        placeholder="Webseite">
                                    <div class="text-danger error-message"></div>
                                </div>
                            </div>
                            <div class="col-md-6 multirow-in-form">
                                <div class="mb-4 d-flex align-items-center">
                                    <i class="fi-linkedin me-2 text-accent"></i>
                                    <input class="form-control" type="url" name="linkedin"
                                        placeholder="LinkedIn">
                                    <div class="text-danger error-message"></div>
                                </div>
                            </div>
                            <div class="col-md-6 multirow-in-form">
                                <div class="mb-4 d-flex align-items-center">
                                    <i class="fi-facebook me-2 text-accent"></i>
                                    <input class="form-control" type="url" name="facebook"
                                        placeholder="Facebook">
                                    <div class="text-danger error-message"></div>
                                </div>
                            </div>
                            <div class="col-md-6 multirow-in-form">
                                <div class="mb-4 d-flex align-items-center">
                                    <i class="fi-instagram me-2 text-accent"></i>
                                    <input class="form-control" type="url" name="instagram"
                                        placeholder="Instagram">
                                    <div class="text-danger error-message"></div>
                                </div>
                            </div>
                            <div class="col-md-6 multirow-in-form">
                                <div class="mb-4 d-flex align-items-center">
                                    <i class="fi-medium me-2 text-accent"></i>
                                    <input class="form-control" type="url" name="medium"
                                        placeholder="Medium">
                                    <div class="text-danger error-message"></div>
                                </div>
                            </div>
                            <div class="col-md-6 multirow-in-form">
                                <div class="mb-4 d-flex align-items-center">
                                    <i class="fi-telegram me-2 text-accent"></i>
                                    <input class="form-control" type="url" name="telegram"
                                        placeholder="Telegram">
                                    <div class="text-danger error-message"></div>
                                </div>
                            </div>
                            <div class="col-md-6 multirow-in-form">
                                <div class="mb-4 d-flex align-items-center">
                                    <i class="fi-tiktok me-2 text-accent"></i>
                                    <input class="form-control" type="url" name="tiktok"
                                        placeholder="TikTok">
                                    <div class="text-danger error-message"></div>
                                </div>
                            </div>
                            <div class="col-md-6 multirow-in-form">
                                <div class="mb-4 d-flex align-items-center">
                                    <i class="fi-xing me-2 text-accent"></i>
                                    <input class="form-control" type="url" name="xing"
                                        placeholder="Xing">
                                    <div class="text-danger error-message"></div>
                                </div>
                            </div>
                            <div class="col-md-6 multirow-in-form">
                                <div class="mb-4 d-flex align-items-center">
                                    <i class="fi-youtube me-2 text-accent"></i>
                                    <input class="form-control" type="url" name="youtube"
                                        placeholder="Youtube">
                                    <div class="text-danger error-message"></div>
                                </div>
                            </div>
                            <div class="col-12 d-flex align-items-center mt-0 mb-5">
                                <button type="button"
                                    class="btn text-primary rounded-pill add-multirow-in-form-kontaktinformationen px-0"><i
                                        class="fi-plus me-1"></i>Weitere hinzufügen</button>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        document.querySelectorAll(".add-multirow-in-form-kontaktinformationen").forEach(function(button) {
                                            button.addEventListener("click", function() {
                                                var container = this.closest(
                                                    ".multirow-in-form-container-kontaktinformationen");
                                                var newRow = document.createElement("div");
                                                newRow.classList.add("col-md-6", "multirow-in-form");
                                                newRow.innerHTML = `
                                                    <div class="mb-4 d-flex align-items-center">
                                                        <i class="fi-plus-circle me-2 text-accent"></i>
                                                        <input class="form-control" type="text" placeholder="Kontaktinformation">
                                                        <div class="text-danger error-message"></div>
                                                        <button type="button" class="btn text-primary rounded-circle px-0 delete-row-button ms-2" style="aspect-ratio:1/1;">
                                                            <i class="fi-x fs-sm m-0"></i>
                                                        </button>
                                                    </div>
                                                `;
                                                container.insertBefore(newRow, container.querySelector(
                                                    ".add-multirow-in-form-kontaktinformationen").parentNode);

                                                newRow.querySelector(".delete-row-button").addEventListener("click",
                                                    function() {
                                                        newRow.remove();
                                                    });
                                            });
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column flex-sm-row align-items-center bg-light rounded-3 py-3">
                    <button type="button"
                        class="btn btn-outline-primary btn-lg rounded-pill mb-sm-0 order-2 order-sm-1"
                        data-previous><i class="fi-chevron-left fs-sm me-2"></i>Zurück</button>
                    <button type="button"
                        class="btn btn-primary btn-lg rounded-pill ms-sm-auto order-1 order-sm-2 mb-3"
                        data-next>Vorschau<i class="fi-chevron-right fs-sm ms-2"></i></button>
                </div>
            </div>


            <div class="step-form" data-step>
                <h2 class="h4 mb-4">Vorschau</h2>

                <div class="d-sm-flex justify-content-between align-items-start pb-4">
                    <div class="flex-shrink-0 order-sm-2 mb-md-4 image-upload-buttom-1" id="previewImage"></div>
                    <div class="order-sm-1">
                        <h3 class="h4 mb-sm-4 text-gray-800" id="previewName"></h3>
                        <h4 class="h5 text-gray-800">Über mich</h4>
                        <ul class="list-unstyled text-nav">
                            <li><span class='text-muted'>Berufsbezeichnung:</span> <span
                                    id="previewJobTitle"></span></li>
                            <li><span class='text-muted'>Coaching Formate:</span> <span
                                    id="previewCoachingFormats"></span></li>
                            <li><span class='text-muted'>Berufserfahrung:</span> <span
                                    id="previewExperience"></span></li>
                            <li><span class='text-muted'>Sprachen:</span> <span id="previewLanguages"></span></li>
                            <li><span class='text-muted'>Region:</span> <span id="previewRegion"></span></li>
                            <li><span class='text-muted'>Einleitungstext:</span> <span
                                    id="previewEinleitungstext"></span></li>
                        </ul>
                        <a class="d-inline-block fw-bold text-decoration-none py-1" href="#"
                            data-edit-step="1"><i class="fi-edit mt-n1 me-2"></i>Bearbeiten</a>
                    </div>
                </div>
                <div class="border-top py-4">
                    <h4 class="h5 text-gray-800">Coaching Inhalt</h4>
                    <ul class="list-unstyled text-nav">
                        <li>
                            <span class='text-muted'>Themengebiet:</span> <span id="themengebiet"></span>
                        </li>
                        <li>
                            <span class='text-muted'>Zielgruppe:</span> <span id="zielgruppe"></span>
                        </li>
                        <li>
                            <span class='text-muted'>Coaching Methoden:</span>
                            <span id="methodenBeschreibung"></span>
                            <span id="methode"></span>
                        </li>
                    </ul>

                    <a class="d-inline-block fw-bold text-decoration-none py-1" href="#"
                        data-edit-step="2"><i class="fi-edit mt-n1 me-2"></i>Bearbeiten</a>
                </div>
                <div class="border-top py-4">
                    <h4 class="h5 text-gray-800">Qualifikation & Erfahrungen</h4>
                    <h5 class="text-muted">Abschlüsse & Zertifikate</h5>
                    <div class="mt-3" id="previewQualifications"></div>
                    <h5 class="text-muted">Ausbildung & Berufserfahrung</h5>
                    <div class="mt-3" id="previewAusbildungUndBerufserfahrung"></div>
                    <h5 class="text-muted">Referenzen</h5>
                    <div class="mt-3" id="previewReferenzen"></div>
                    <a class="d-inline-block fw-bold text-decoration-none py-1" href="#"
                        data-edit-step="3"><i class="fi-edit mt-n1 me-2"></i>Bearbeiten</a>
                </div>
                <div class="border-top border-bottom py-4">
                    <h4 class="h5 text-gray-800">Kontakt</h4>
                    <div id="previewKontakt"></div>
                </div>

                <div class="d-flex flex-column flex-sm-row align-items-center bg-light rounded-3 py-3">
                    <button type="button"
                        class="btn btn-outline-primary btn-lg rounded-pill mb-sm-0 order-2 order-sm-1"
                        data-previous><i class="fi-chevron-left fs-sm me-2"></i>Zurück</button>
                    <button type="submit"
                        class="btn btn-primary btn-lg rounded-pill ms-sm-auto order-1 order-sm-2 mb-3">Profil
                        aktualisieren<i class="fi-chevron-right fs-sm ms-2"></i></button>
                </div>
            </div>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const form = document.querySelector(".multi-step-form");
                    const steps = form.querySelectorAll("[data-step]");

                    function showStep(stepIndex) {
                        steps.forEach((step, index) => {
                            step.style.display = index === stepIndex ? "block" : "none";
                        });
                    }

                    function gatherFormData() {
                        const getValue = (selector) => form.querySelector(selector)?.value || "";
                        const getCheckedValues = (selector) => Array.from(form.querySelectorAll(selector + ":checked")).map(
                            input => input.nextElementSibling.textContent).join(", ") || "";
                        const getMultiValues = (selector) => Array.from(form.querySelectorAll(selector)).map(input => input
                            .value).filter(value => value !== "").join(", ");

                        const formData = {
                            // first step
                            name: getValue("[name='name']"),
                            jobTitle: getValue("[name='jobTitle']"),
                            coachingFormats: getCheckedValues("[name='coachingFormats']"),
                            experience: getValue("[name='experience']"),
                            languages: getCheckedValues("[name='languages']"),
                            region: getCheckedValues("[name='region']"),
                            einleitungstext: getValue("[name='einleitungstext']"),
                            // second step
                            themengebiete: getMultiValues("[name='themengebiet']"),
                            zielgruppe: getValue("[name='zielgruppe']"),
                            methodenBeschreibung: getValue("[name='methodenBeschreibung']"),
                            methoden: getMultiValues("[name='methode']"),
                            // third step
                            abschluesse: Array.from(form.querySelectorAll(
                                ".multirow-in-form-container-abschluesse .multirow-in-form")).map(row => {
                                return {
                                    abschluss: row.querySelector("[name='abschluss']")?.value || "",
                                    institution: row.querySelector("[name='institution']")?.value || "",
                                    datum: row.querySelector("[name='datum']")?.value || ""
                                };
                            }).filter(entry => entry.abschluss || entry.institution || entry.datum),
                            ausbildung: Array.from(form.querySelectorAll(
                                ".multirow-in-form-container-ausbildung-zertifikate .multirow-in-form")).map(
                                row => {
                                    return {
                                        ausbildung: row.querySelector("[name='ausbildung']")?.value || "",
                                        institution: row.querySelector("[name='institution_ausbildung']")?.value ||
                                            "",
                                        datum_von: row.querySelector("[name='datum_von']")?.value || "",
                                        datum_bis: row.querySelector("[name='datum_bis']")?.value || ""
                                    };
                                }).filter(entry => entry.ausbildung || entry.institution || entry.datum_von || entry
                                .datum_bis),
                            referenzen: Array.from(form.querySelectorAll(
                                ".multirow-in-form-container-referenzen .multirow-in-form")).map(row => {
                                return {
                                    referenz: row.querySelector("[name='referenz']")?.value || "",
                                    kurzbeschreibung: row.querySelector("[name='kurzbeschreibung']")?.value ||
                                        ""
                                };
                            }).filter(entry => entry.referenz || entry.kurzbeschreibung),
                            // fourth step
                            kontaktinformationen: {
                                telefon: getValue("[name='telefon']"),
                                email: getValue("[name='email']"),
                                anschrift: getValue("[name='anschrift']"),
                                weitere: Array.from(form.querySelectorAll(
                                    ".multirow-in-form-container-kontaktinformationen .multirow-in-form")).map(
                                    row => {
                                        return {
                                            url: row.querySelector("input")?.value || "",
                                        };
                                    }).filter(entry => entry.url)
                            }
                        };

                        // first step
                        document.getElementById("previewName").textContent = formData.name;
                        document.getElementById("previewJobTitle").textContent = formData.jobTitle;
                        document.getElementById("previewCoachingFormats").textContent = formData.coachingFormats;
                        document.getElementById("previewExperience").textContent = formData.experience;
                        document.getElementById("previewLanguages").textContent = formData.languages;
                        document.getElementById("previewRegion").textContent = formData.region;
                        document.getElementById("previewEinleitungstext").textContent = formData.einleitungstext;

                        // second step
                        document.getElementById("themengebiet").textContent = formData.themengebiete;
                        document.getElementById("zielgruppe").textContent = formData.zielgruppe;
                        document.getElementById("methodenBeschreibung").textContent = formData.methodenBeschreibung;
                        document.getElementById("methode").textContent = formData.methoden;

                        // third step
                        const qualificationsContainer = document.getElementById("previewQualifications");
                        qualificationsContainer.innerHTML = "";
                        formData.abschluesse.forEach(entry => {
                            const qualificationElement = document.createElement("div");
                            qualificationElement.classList.add("qualification-entry", "mb-3");
                            qualificationElement.innerHTML = `
                                <p class="fw-bold mb-1">${entry.abschluss}</p>
                                <p class="mb-1"><span class="text-muted">Institution: </span>${entry.institution}</p>
                                <p class="mb-1"><span class="text-muted">Datum: </span>${entry.datum}</p>
                            `;
                            qualificationsContainer.appendChild(qualificationElement);
                        });
                        const ausbildungContainer = document.getElementById("previewAusbildungUndBerufserfahrung");
                        ausbildungContainer.innerHTML = "";
                        formData.ausbildung.forEach(entry => {
                            const ausbildungElement = document.createElement("div");
                            ausbildungElement.classList.add("ausbildung-entry", "mb-3");
                            ausbildungElement.innerHTML = `
                                <p class="fw-bold mb-1">${entry.ausbildung}</p>
                                <p class="mb-1"><span class="text-muted">Institution: </span>${entry.institution}</p>
                                <p class="mb-1"><span class="text-muted">Von: </span>${entry.datum_von} <span class="text-muted">Bis: </span>${entry.datum_bis}</p>
                            `;
                            ausbildungContainer.appendChild(ausbildungElement);
                        });
                        const referenzenContainer = document.getElementById("previewReferenzen");
                        referenzenContainer.innerHTML = "";
                        formData.referenzen.forEach(entry => {
                            const referenzElement = document.createElement("div");
                            referenzElement.classList.add("referenz-entry", "mb-3");
                            referenzElement.innerHTML = `
                                <p class="fw-bold mb-1">${entry.referenz}</p>
                                <p class="mb-1"><span class="text-muted">Kurzbeschreibung: </span>${entry.kurzbeschreibung}</p>
                            `;
                            referenzenContainer.appendChild(referenzElement);
                        });

                        // fourth step
                        const kontaktContainer = document.getElementById("previewKontakt");
                        kontaktContainer.innerHTML = `
                            <p class="mb-1"><span class="text-muted">Telefon: </span>${formData.kontaktinformationen.telefon}</p>
                            <p class="mb-1"><span class="text-muted">E-Mail: </span>${formData.kontaktinformationen.email}</p>
                            <p class="mb-1"><span class="text-muted">Anschrift: </span>${formData.kontaktinformationen.anschrift}</p>
                        `;
                        formData.kontaktinformationen.weitere.forEach(entry => {
                            const kontaktElement = document.createElement("p");
                            kontaktElement.classList.add("mb-1");
                            kontaktElement.innerHTML = `<span class="text-muted">Weitere: </span>${entry.url}`;
                            kontaktContainer.appendChild(kontaktElement);
                        });
                    }

                    form.addEventListener("click", function(e) {
                        let incrementor;
                        if (e.target.matches("[data-next]")) {
                            incrementor = 1;
                        } else if (e.target.matches("[data-previous]")) {
                            incrementor = -1;
                        }

                        if (incrementor == null) return;

                        const currentStepIndex = Array.from(steps).findIndex(step => step.style.display ===
                            "block");
                        const inputs = [...steps[currentStepIndex].querySelectorAll("input")];
                        const allValid = inputs.every(input => input.reportValidity());

                        if (allValid) {
                            const nextStepIndex = currentStepIndex + incrementor;
                            if (nextStepIndex >= 0 && nextStepIndex < steps.length) {
                                showStep(nextStepIndex);
                                if (nextStepIndex === steps.length - 1) {
                                    gatherFormData();
                                }
                                window.scrollTo({
                                    top: 0,
                                    behavior: 'smooth'
                                });
                            }
                        }
                    });

                    showStep(0);
                });
            </script>
        </form>

        <a href="/profil-coach-nutzer.html" class="btn btn-gray-400 btn-sm rounded-pill order-2 order-md-1 my-3">
            Abbrechen</a>

        <p>*Pflichtfeld</p>

    </section>
    @push('js')
        <script
            src="{{ asset('frontend-assets/files/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.min.js') }}">
        </script>
        <script
            src="{{ asset('frontend-assets/files/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js') }}">
        </script>
        <script src="{{ asset('frontend-assets/files/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.min.js') }}">
        </script>
        <script
            src="{{ asset('frontend-assets/files/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.min.js') }}">
        </script>
        <script
            src="{{ asset('frontend-assets/files/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.min.js') }}">
        </script>
        <script src="{{ asset('frontend-assets/files/filepond/dist/filepond.min.js') }}"></script>
    @endpush

</x-frontend.app>
