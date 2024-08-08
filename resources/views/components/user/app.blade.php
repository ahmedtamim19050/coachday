<x-frontend.app>
    @push('css')
        <link rel="stylesheet" media="screen" href="{{asset('frontend-assets/files/simplebar/dist/simplebar.min.css?_v=20240806170230')}}" />
        <link rel="stylesheet" media="screen"
            href="{{asset('frontend-assets/files/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css?_v=20240806170230')}}" />
        <link rel="stylesheet" media="screen" href="{{asset('frontend-assets/files/filepond/dist/filepond.min.css?_v=20240806170230')}}" />
       
    @endpush
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
            <form action="{{route('logout')}}" method="post">
                @csrf
                 <button type="submit" class="nav-link border-0 bg-none" ><i class="fi-logout mt-n1 me-2"></i>Abmelden</button>
             </form>
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
                    <a class="slider-nav__item rounded-pill d-flex p-2 align-items-center d-flex justify-content-center {{ request()->is('profil-coachee/buchungen') ? 'active' :''}}"
                        href="{{route('user.dashboard')}}">
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
                    <a class=" slider-nav__item rounded-pill d-flex p-2 align-items-center d-flex justify-content-center {{ request()->is('profil-coachee/einstellungen') ? 'active' :''}} "
                        href="{{route('user.settings')}}"><i class="bx bx-cog bx-sm me-1"></i><span
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
                // activateCurrentItem();

                // Ensure the correct item stays active on browser navigation
                window.addEventListener("popstate", function() {
                    activateCurrentItem();
                });
            });
        </script>


         {{$slot}}
    </section>

    @push('js')
    <script src="{{asset('frontend-assets/files/fullcalendar-6.1.14/dist/index.global.min.js?_v=20240806170230')}}"></script>
    <script>
	document.addEventListener("DOMContentLoaded", function () {
		let calendarEl = document.getElementById("calendar");
		let calendar = new FullCalendar.Calendar(calendarEl, {
			initialView: "dayGridMonth",
			businessHours: [],
		});
		calendar.render();
	});
</script>
    @endpush
</x-frontend.app>
