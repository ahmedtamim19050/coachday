<x-frontend.app>
    <section class="container mb-5 pb-md-5 mt-4 mt-md-5 content-overlay">
        <!-- Account header-->
        <div class="d-flex align-items-start justify-content-between pb-4">
            <div class="d-flex align-items-center">
                <div class="position-relative flex-shrink-0 user-image-account-1">
                    <img style="object-fit: cover; aspect-ratio: 1/1" class="rounded-circle"
                        src="{{asset('frontend-assets/img/systemwide/avatar-placeholder.png')}}" width="70" alt="Max Mustermann" />
                    <!-- <button class="btn btn-icon btn-light btn-xs rounded-circle shadow-sm position-absolute end-0 bottom-0" type="button" data-bs-toggle="tooltip" title="Fotos tauschen"><i class="fi-pencil fs-xs"></i></button> -->
                </div>

                <div class="ps-3">
                    <h3 class="h5 mb-1 text-gray-800">Max Mustermann</h3>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end mb-3">
            <a class="nav-link" href=""><i class="fi-logout mt-n1 me-2"></i>Abmelden</a>
        </div>
        <div class="tns-carousel-wrapper w-100 mb-4 ms-n2">
            <div class="tns-carousel-inner slider-nav"
                data-carousel-options='
                {"items": 3, 
                "nav": false, 
                "controls": false,
                "loop": false,
                "responsive": 
                    {"0":{"items":3.5},
                    "400":{"items":2.5},
                    "600":{"items":3.5},
                    "1100":{"items":4.5, "controls": true},
                    "1200":{"items": 6.5}
                }}'>
                <div class="my-2 mx-2">
                    <a class="slider-nav__item rounded-pill d-flex p-2 align-items-center d-flex justify-content-center"
                        href="/profil-coachee-buchungen.html">
                        <i class="bx bx-calendar bx-sm me-1"></i>
                        <span class="d-none d-md-block fs-sm text-center">Buchungen</span></a>
                </div>

                <div class="my-2 mx-2">
                    <a class="slider-nav__item rounded-pill d-flex p-2 align-items-center d-flex justify-content-center"
                        href="/profil-coachee-favoriten.html">
                        <i class="bx bx-heart bx-sm me-1"></i>
                        <span class="d-none d-md-block fs-sm text-center">Favoriten</span></a>
                </div>

                <div class="my-2 mx-2 position-relative">
                    <a class="slider-nav__item rounded-pill d-flex p-2 align-items-center d-flex justify-content-center"
                        href="/profil-coachee-nachrichten.html">
                        <i class="bx bx-envelope bx-sm me-1"></i>
                        <span class="d-none d-md-block fs-sm text-center">Nachrichten</span>
                        <span class="new-messages-profile rounded-pill">2</span></a>
                </div>

                <div class="my-2 mx-2">
                    <a class="slider-nav__item rounded-pill d-flex p-2 align-items-center d-flex justify-content-center"
                        href="/profil-coachee-einstellungen.html"><i class="bx bx-cog bx-sm me-1"></i><span
                            class="d-none d-md-block fs-sm text-center">Einstellungen</span></a>
                </div>
            </div>
        </div>
        <!-- Account header-->

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Scroll all chat contents to the bottom on page load
                let chatContents = document.querySelectorAll(".user-chat__content");
                chatContents.forEach(function(chatContent) {
                    chatContent.scrollTop = chatContent.scrollHeight;
                });

                // Scroll to the bottom when a tab is activated
                let chatTabs = document.querySelectorAll('[data-bs-toggle="list"]');
                chatTabs.forEach(function(chatTab) {
                    chatTab.addEventListener("shown.bs.tab", function(event) {
                        let targetId = event.target.getAttribute("href");
                        let chatContent = document.querySelector(
                            targetId + " .user-chat__content"
                        );
                        if (chatContent) {
                            chatContent.scrollTop = chatContent.scrollHeight;
                        }
                    });
                });

                // Initialize Tiny Slider
                let slider = tns({
                    container: ".slider-nav",
                    items: 3,
                    nav: false,
                    controls: false,
                    loop: false,
                    responsive: {
                        0: {
                            items: 3.5
                        },
                        400: {
                            items: 2.5
                        },
                        600: {
                            items: 3.5
                        },
                        1100: {
                            items: 4.5,
                            controls: true
                        },
                        1200: {
                            items: 6.5
                        },
                    },
                });

                // Get all slider items
                let items = document.querySelectorAll(".slider-nav__item");

                // Function to activate the correct item based on the current URL
                function activateCurrentItem() {
                    let currentUrl = window.location.pathname;
                    items.forEach(function(item, index) {
                        let link = item.getAttribute("href");
                        if (link === currentUrl) {
                            item.classList.add("active");
                            slider.goTo(index);
                        } else {
                            item.classList.remove("active");
                        }
                    });
                }

                // Add click event listener to each item
                items.forEach(function(item, index) {
                    item.addEventListener("click", function(event) {
                        event.preventDefault();

                        // Remove 'active' class from all items
                        items.forEach(function(el) {
                            el.classList.remove("active");
                        });

                        // Add 'active' class to the clicked item
                        item.classList.add("active");

                        // Scroll to the respective slide
                        slider.goTo(index);

                        // Navigate to the new page
                        window.location.href = item.getAttribute("href");
                    });
                });

                // Activate the correct item on page load
                activateCurrentItem();

                // Ensure the correct item stays active on browser navigation
                window.addEventListener("popstate", function() {
                    activateCurrentItem();
                });
            });
        </script>


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
    </section>

    <!-- Modal Kennenlernen -->
    <div id="modalReview" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Coaching bewerten</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="tab-pane fade show active" autocomplete="off">
                        <div class="mb-3 d-flex">
                            <jsuites-rating value="5"
                                tooltip="Sehr schlecht, Schlecht, Unterdurchschnittlich, Durchschnittlich, Gut, Sehr gut"></jsuites-rating>

                            <div id="console"></div>

                            <script>
                                const ratingDescriptions = [
                                    "Sehr schlecht",
                                    "Schlecht",
                                    "Unterdurchschnittlich",
                                    "Durchschnittlich",
                                    "Gut",
                                    "Sehr gut",
                                ];

                                document
                                    .querySelector("jsuites-rating")
                                    .addEventListener("onchange", function(e) {
                                        document.getElementById("console").innerHTML =
                                            ratingDescriptions[this.value];
                                    });
                            </script>
                        </div>
                        <div class="mb-3">
                            <label for="textarea-input" class="form-label d-none">Textarea</label>
                            <textarea class="form-control" id="textarea-input" rows="5"></textarea>
                        </div>
                        <button class="btn btn-primary d-block w-100" type="submit">
                            Senden
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-frontend.app>
