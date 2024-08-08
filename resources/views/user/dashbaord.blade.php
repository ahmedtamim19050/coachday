<x-user.app>
    <h1 class="h2 mb-3">Kalender & Buchungen</h1>
    <div class="bg-light shadow-sm rounded-3 px-3 px-md-4 py-3">
        <div class="row">
            <div class="col-md-6 col-lg-4 order-2 order-md-1 mb-4">
                <h4>Buchungen</h4>
                <!-- Item-->
                <div class="card bg-secondary card-hover mb-2 mt-md-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between w-100">
                            <div class="d-flex align-items-start w-100">
                                <div class="w-100">
                                    <div class="fs-sm py-2 w-100">
                                        <div class="d-flex align-items-center mb-3 pb-2 border-bottom">
                                            <img style="object-fit: cover; aspect-ratio: 1/1"
                                                class="rounded-circle me-3" src="{{asset('frontend-assets/img/sample-images/user.png')}}"
                                                width="50" alt="Max Mustermann" />

                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-gray-800">Menthal Health</h6>
                                                <p class="mb-0 fs-sm">
                                                    Dr. Agathe Maria Musterfrau
                                                </p>
                                            </div>
                                        </div>
                                        <div class="text-primary fw-semibold mb-2">
                                            <i class="fi-calendar text-primary me-1"> </i>24.08.2024 um 13:00Uhr
                                        </div>
                                        <div class="mb-2">
                                            <i class="fi-map-pin text-muted me-1"> </i>Berlin
                                        </div>
                                        <div class="mb-2">
                                            <i class="fi-cash fs-base text-muted me-1"></i>2.000,00€
                                        </div>
                                    </div>
                                    <span class="d-table badge rounded-pill bg-success-light mb-1">Bezahlt</span>
                                </div>
                            </div>
                            <div class="d-flex flex-column align-items-end justify-content-between">
                                <div class="dropdown position-relative zindex-10 mb-3">
                                    <button class="btn btn-icon btn-light btn-xs rounded-circle shadow-sm"
                                        type="button" id="contextMenu1" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fi-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu my-1" aria-labelledby="contextMenu1">
                                        <li>
                                            <button class="dropdown-item" type="button">
                                                <i class="fi-chat-circle opacity-60 me-2"></i>In
                                                Kontakt treten
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item" type="button" data-bs-toggle="modal"
                                                data-bs-target="#modalReview">
                                                <i class="fi-star opacity-60 me-2"></i>Coaching
                                                Bewerten
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item-->

                <!-- Item-->
                <div class="card bg-secondary card-hover mb-2 mt-md-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between w-100">
                            <div class="d-flex align-items-start w-100">
                                <div class="w-100">
                                    <div class="fs-sm py-2 w-100">
                                        <div class="d-flex align-items-center mb-3 pb-2 border-bottom">
                                            <img style="object-fit: cover; aspect-ratio: 1/1"
                                                class="rounded-circle me-3" src="{{asset('frontend-assets/img/sample-images/user.png')}}"
                                                width="50" alt="Max Mustermann" />

                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-gray-800">Menthal Health</h6>
                                                <p class="mb-0 fs-sm">
                                                    Dr. Agathe Maria Musterfrau
                                                </p>
                                            </div>
                                        </div>
                                        <div class="text-primary fw-semibold mb-2">
                                            <i class="fi-calendar text-primary me-1"> </i>24.08.2024 um 13:00Uhr
                                        </div>
                                        <div class="mb-2">
                                            <i class="fi-map-pin text-muted me-1"> </i>Berlin
                                        </div>
                                        <div class="mb-2">
                                            <i class="fi-cash fs-base text-muted me-1"></i>2.000,00€
                                        </div>
                                    </div>
                                    <a href="/checkout-coachee.html"
                                        class="text-decoration-none d-table badge rounded-pill bg-warning mb-1">Offen</a>
                                </div>
                            </div>
                            <div class="d-flex flex-column align-items-end justify-content-between">
                                <div class="dropdown position-relative zindex-10 mb-3">
                                    <button class="btn btn-icon btn-light btn-xs rounded-circle shadow-sm"
                                        type="button" id="contextMenu1" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fi-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu my-1" aria-labelledby="contextMenu1">
                                        <li>
                                            <button class="dropdown-item" type="button">
                                                Bezahlen
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item-->
            </div>
            <div class="col-md-6 col-lg-8 order-1 order-md-2 mb-4">
                <div id="calendar"></div>
            </div>
        </div>
    </div>
</x-user.app>