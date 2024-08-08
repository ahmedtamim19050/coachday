<x-frontend.app>
      <!-- Page container-->
      <div class="container mb-5 pb-md-5 mt-4 mt-md-5">
        <h1 class="d-flex align-items-end justify-content-between mb-4">Magazin</h1>
        <!-- Sponsored posts carousel-->
        <div class="tns-carousel-wrapper mb-5">
          <div class="tns-carousel-inner" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;nav&quot;: false, &quot;controlsContainer&quot;: &quot;#sponsored-news-controls&quot;}">
            <!-- Item-->
            <div>
              <article class="row">
                <div class="col-md-7 col-lg-8 mb-lg-0 mb-3 mb-md-0"><a class="d-block position-relative" href="/magazin-single.html"><span class="badge bg-primary-light rounded-pill position-absolute top-0 end-0 m-3 fs-sm">Neu</span><picture><source srcset="{{asset('frontend-assets/img/sample-images/image6.webp')}}" type="image/webp"><img class="rounded-3 w-100" src="{{asset('frontend-assets/img/sample-images/image6.jpg')}}" alt="Post image"></picture></a></div>
                <div class="col-md-5 col-lg-4"><a class="fs-sm text-accent text-uppercase text-decoration-none" href="#">Coaching news</a>
                  <h2 class="h5 pt-1"><a class="nav-link" href="/magazin-single.html">Persönliches Wachstum im Job</a></h2>
                  <p class="mb-4">Nulla felis neque ultrices ut aliquam. Pellentesque id semper iaculis scelerisque etiam egestas interdum proin sit. Ornare venenatis, ullamcorper amet arcu ipsum ut morbi enim. Senectus quam egestas facilisi enim diam posuere ultricies interdum sed. Amet, risus eros cursus vitae, sit?</p><a class="d-flex align-items-center text-decoration-none" href="/coach.html"><picture><source srcset="{{asset('frontend-assets/img/sample-images/user.webp')}}" type="image/webp"><img class="rounded-circle image-user-header" src="{{asset('frontend-assets/img/sample-images/user.png')}}" width="48" alt="Max Mustermann"></picture>
                    <div class="ps-2">
                      <h6 class="fs-base text-nav lh-base mb-1">Max Mustermann</h6>
                      <div class="d-flex text-body fs-sm"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-60 mt-n1 me-1"></i>20 Jan</span></div>
                    </div></a>
                </div>
              </article>
            </div>
            <!-- Item-->

			<!-- Item-->
			<div>
				<article class="row">
					<div class="col-md-7 col-lg-8 mb-lg-0 mb-3 mb-md-0"><a class="d-block position-relative" href="/magazin-single.html"><span class="badge bg-primary-light rounded-pill position-absolute top-0 end-0 m-3 fs-sm">Neu</span><picture><source srcset="{{asset('frontend-assets/img/sample-images/image6.webp')}}" type="image/webp"><img class="rounded-3 w-100" src="{{asset('frontend-assets/img/sample-images/image6.jpg')}}" alt="Post image"></picture></a></div>
					<div class="col-md-5 col-lg-4"><a class="fs-sm text-accent text-uppercase text-decoration-none" href="#">Coaching news</a>
					<h2 class="h5 pt-1"><a class="nav-link" href="/magazin-single.html">Persönliches Wachstum im Job</a></h2>
					<p class="d-md-none d-xl-block mb-4">Nulla felis neque ultrices ut aliquam. Pellentesque id semper iaculis scelerisque etiam egestas interdum proin sit. Ornare venenatis, ullamcorper amet arcu ipsum ut morbi enim. Senectus quam egestas facilisi enim diam posuere ultricies interdum sed. Amet, risus eros cursus vitae, sit?</p><a class="d-flex align-items-center text-decoration-none" href="/coach.html"><picture><source srcset="{{asset('frontend-assets/img/sample-images/user.webp')}}" type="image/webp"><img class="rounded-circle image-user-header" src="{{asset('frontend-assets/img/sample-images/user.png')}}" width="48" alt="Max Mustermann"></picture>
						<div class="ps-2">
						<h6 class="fs-base text-nav lh-base mb-1">Max Mustermann</h6>
						<div class="d-flex text-body fs-sm"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-60 mt-n1 me-1"></i>20 Jan</span></div>
						</div></a>
					</div>
				</article>
				</div>
				<!-- Item-->

          </div>
        </div>
        <!-- Carousel custom controls-->
        <div class="tns-carousel-controls pb-5 pt-2 mt-4 mb-lg-3" id="sponsored-news-controls">
          <button class="me-3" type="button"><i class="fi-chevron-left fs-xs"></i></button>
          <button type="button"><i class="fi-chevron-right fs-xs"></i></button>
        </div>
        <!-- Search bar + filters-->
        <div class="row gy-3 mb-4 pb-2">
          <div class="col-md-4 order-md-1 order-2">
            <div class="position-relative">
              <input class="form-control pe-5" type="text" placeholder="Artikel nach Schlüsselwörtern durchsuchen..."><i class="fi-search position-absolute top-50 end-0 translate-middle-y me-3"></i>
            </div>
          </div>
          <div class="col-lg-6 col-md-8 offset-lg-2 order-md-2 order-1">
            <div class="row gy-3">
              <div class="col-6 d-flex flex-sm-row flex-column align-items-sm-center">
                <label class="d-inline-block me-sm-2 mb-sm-0 mb-2 text-nowrap" for="categories"><i class="fi-align-left mt-n1 me-2 align-middle opacity-70"></i>Kategorie:</label>
                <select class="form-select" id="categories">
                  <option>Alle</option>
                  <option>Business</option>
                  <option>Inspiration</option>
                </select>
              </div>
              <div class="col-6 d-flex flex-sm-row flex-column align-items-sm-center">
                <label class="d-inline-block me-sm-2 mb-sm-0 mb-2 text-nowrap" for="sortby"><i class="fi-arrows-sort mt-n1 me-2 align-middle opacity-70"></i>Sortieren:</label>
                <select class="form-select" id="sortby">
                  <option>Neueste</option>
                  <option>Älteste</option>
                  <option>Populärste</option>
                  <option>Gepusht</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <!-- Articles grid-->
        <div class="row row-cols-md-2 row-cols-1 gy-md-5 gy-4 mb-lg-5 mb-4">
          <!-- Article-->
          <article class="col pb-2 pb-md-1"><a class="d-block position-relative mb-3" href="/magazin-single.html"><span class="badge rounded-pill bg-primary-light position-absolute top-0 end-0 m-3 fs-sm">New</span><picture><source srcset="{{asset('frontend-assets/img/sample-images/image6.webp')}}" type="image/webp"><img class="d-block rounded-3 w-100" src="{{asset('frontend-assets/img/sample-images/image6.jpg')}}" alt="Article image"></picture></a><a class="fs-sm text-uppercase text-decoration-none text-accent" href="#">Interview</a>
            <h3 class="h5 mb-2 pt-1"><a class="nav-link" href="/magazin-single.html">Persönliches Wachstum im Job</a></h3>
            <p class="mb-3">Max Mustermann erzählt, wie individuelle Begleitung ihm half, berufliche Höhen zu erreichen. </p><a class="d-flex align-items-center text-decoration-none" href="/coach.html"><picture><source srcset="{{asset('frontend-assets/img/sample-images/user.webp')}}" type="image/webp"><img class="rounded-circle image-user-header" src="{{asset('frontend-assets/img/sample-images/user.png')}}" width="48" alt="Max Mustermann"></picture>
              <div class="ps-2">
                <h6 class="fs-base text-nav lh-base mb-1">Max Mustermann</h6>
                <div class="d-flex text-body fs-sm"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>28 Dez</span></div>
              </div></a>
          </article>
          <!-- Article-->

		<!-- Article-->
		<article class="col pb-2 pb-md-1"><a class="d-block position-relative mb-3" href="/magazin-single.html"><span class="badge rounded-pill bg-primary-light position-absolute top-0 end-0 m-3 fs-sm">New</span><picture><source srcset="{{asset('frontend-assets/img/sample-images/image6.webp')}}" type="image/webp"><img class="d-block rounded-3 w-100" src="{{asset('frontend-assets/img/sample-images/image6.jpg')}}" alt="Article image"></picture></a><a class="fs-sm text-uppercase text-decoration-none text-accent" href="#">Interview</a>
			<h3 class="h5 mb-2 pt-1"><a class="nav-link" href="/magazin-single.html">Persönliches Wachstum im Job</a></h3>
			<p class="mb-3">Max Mustermann erzählt, wie individuelle Begleitung ihm half, berufliche Höhen zu erreichen. </p><a class="d-flex align-items-center text-decoration-none" href="/coach.html"><picture><source srcset="{{asset('frontend-assets/img/sample-images/user.webp')}}" type="image/webp"><img class="rounded-circle image-user-header" src="{{asset('frontend-assets/img/sample-images/user.png')}}" width="48" alt="Max Mustermann"></picture>
				<div class="ps-2">
				<h6 class="fs-base text-nav lh-base mb-1">Max Mustermann</h6>
				<div class="d-flex text-body fs-sm"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>28 Dez</span></div>
				</div></a>
			</article>
			<!-- Article-->

			<!-- Article-->
			<article class="col pb-2 pb-md-1"><a class="d-block position-relative mb-3" href="/magazin-single.html"><span class="badge rounded-pill bg-primary-light position-absolute top-0 end-0 m-3 fs-sm">New</span><picture><source srcset="{{asset('frontend-assets/img/sample-images/image6.webp')}}" type="image/webp"><img class="d-block rounded-3 w-100" src="{{asset('frontend-assets/img/sample-images/image6.jpg')}}" alt="Article image"></picture></a><a class="fs-sm text-uppercase text-decoration-none text-accent" href="#">Interview</a>
				<h3 class="h5 mb-2 pt-1"><a class="nav-link" href="/magazin-single.html">Persönliches Wachstum im Job</a></h3>
				<p class="mb-3">Max Mustermann erzählt, wie individuelle Begleitung ihm half, berufliche Höhen zu erreichen. </p><a class="d-flex align-items-center text-decoration-none" href="/coach.html"><picture><source srcset="{{asset('frontend-assets/img/sample-images/user.webp')}}" type="image/webp"><img class="rounded-circle image-user-header" src="{{asset('frontend-assets/img/sample-images/user.png')}}" width="48" alt="Max Mustermann"></picture>
					<div class="ps-2">
					<h6 class="fs-base text-nav lh-base mb-1">Max Mustermann</h6>
					<div class="d-flex text-body fs-sm"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>28 Dez</span></div>
					</div></a>
				</article>
				<!-- Article-->

				<!-- Article-->
				<article class="col pb-2 pb-md-1"><a class="d-block position-relative mb-3" href="/magazin-single.html"><span class="badge rounded-pill bg-primary-light position-absolute top-0 end-0 m-3 fs-sm">New</span><picture><source srcset="{{asset('frontend-assets/img/sample-images/image6.webp')}}" type="image/webp"><img class="d-block rounded-3 w-100" src="{{asset('frontend-assets/img/sample-images/image6.jpg')}}" alt="Article image"></picture></a><a class="fs-sm text-uppercase text-decoration-none text-accent" href="#">Interview</a>
					<h3 class="h5 mb-2 pt-1"><a class="nav-link" href="/magazin-single.html">Persönliches Wachstum im Job</a></h3>
					<p class="mb-3">Max Mustermann erzählt, wie individuelle Begleitung ihm half, berufliche Höhen zu erreichen. </p><a class="d-flex align-items-center text-decoration-none" href="/coach.html"><picture><source srcset="{{asset('frontend-assets/img/sample-images/user.webp')}}" type="image/webp"><img class="rounded-circle image-user-header" src="{{asset('frontend-assets/img/sample-images/user.png')}}" width="48" alt="Max Mustermann"></picture>
						<div class="ps-2">
						<h6 class="fs-base text-nav lh-base mb-1">Max Mustermann</h6>
						<div class="d-flex text-body fs-sm"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>28 Dez</span></div>
						</div></a>
					</article>
					<!-- Article-->
 
        </div>
        <!-- Pagination-->
        <nav class="pt-4 pb-2 border-top" aria-label="Blog pagination">
          <ul class="pagination mb-0">
            <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 8</span></li>
            <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
            <li class="page-item d-none d-sm-block">...</li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">8</a></li>
            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><i class="fi-chevron-right"></i></a></li>
          </ul>
        </nav>
      </div>
</x-frontend.app>