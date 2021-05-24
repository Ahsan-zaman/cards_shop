<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')

<body>
    @include('layouts.header')

    <!-- ========================= SECTION INTRO ========================= -->
    <section class="section-intro padding-y-sm">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="object-fit: cover;height:80vh;" src="assets/images/1.jpg" class="d-block w-100"
                        alt="assets/images/1.jpg">
                    <div class="carousel-caption h-75 text-md-start d-md-block">
                        <span class="h1 text-light bg-dark bg-gradient rounded text-center text-md-left px-3"><strong>PUBG
                                Mobile
                                Cards!</strong>
                        </span>
                        <p class="mt-3">When purchasing from our website, you get instant codes. Signup for free to get
                            started.</p>
                        <a href="{{ route('shop.index') }}" class="btn btn-warning">Shop Now</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img height="400" style="object-fit: cover;height:80vh;" src="assets/images/2.jpg"
                        class="d-block w-100" alt="assets/images/2.jpg">
                    <div class="carousel-caption h-75 text-md-start d-md-block">
                        <span class="h1 text-light bg-dark bg-gradient rounded text-center text-md-left px-3"><strong>PUBG
                                Mobile
                                Cards!</strong>
                        </span>
                        <p class="mt-3">When purchasing from our website, you get instant codes. Signup for free to get
                            started.</p>
                        <a href="{{ route('shop.index') }}" class="btn btn-warning">Shop Now</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img height="400" style="object-fit: cover;height:80vh;" src="assets/images/3.jpg"
                        class="d-block w-100" alt="assets/images/3.jpg">
                    <div class="carousel-caption h-75 text-md-start d-md-block">
                        <span class="h1 text-light bg-dark bg-gradient rounded text-center text-md-left px-3"><strong>PUBG
                                Mobile
                                Cards!</strong>
                        </span>
                        <p class="mt-3">When purchasing from our website, you get instant codes. Signup for free to get
                            started.</p>
                        <a href="{{ route('shop.index') }}" class="btn btn-warning">Shop Now</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <script>
            var myCarousel = document.querySelector('#carouselExampleIndicators')
            var carousel = new bootstrap.Carousel(myCarousel)
        </script>
        <div class="container">
            <!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/1.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div> -->
            <!-- <div class="intro-banner-wrap">
                <img src="assets/images/1.jpg" class="img-fluid rounded">
            </div> -->

        </div> <!-- container //  -->
    </section>
    <!-- ========================= SECTION INTRO END// ========================= -->


    <!-- ========================= SECTION FEATURE ========================= -->
    <section class="section-content padding-y-sm">
        <div class="container">
            <article class="card card-body">


                <div class="row">
                    <div class="col-md-4">
                        <figure class="item-feature">
                            <span class="text-primary"><i class="fa fa-2x fa-tags"></i></span>
                            <figcaption class="pt-3">
                                <h5 class="title">Choose Cards</h5>
                                <p>You can search all cards supported in our store</p>
                            </figcaption>
                        </figure> <!-- iconbox // -->
                    </div><!-- col // -->
                    <div class="col-md-4">
                        <figure class="item-feature">
                            <span class="text-primary"><i class="fa fa-2x fa-store"></i></span>
                            <figcaption class="pt-3">
                                <h5 class="title">Select Country</h5>
                                <p>The country of the card shop you wish to purchase will select from several countries
                                    available for the card</p>
                            </figcaption>
                        </figure> <!-- iconbox // -->
                    </div><!-- col // -->
                    <div class="col-md-4">
                        <figure class="item-feature">
                            <span class="text-primary"><i class="fa fa-2x fa-envelope-open-text"></i></span>
                            <figcaption class="pt-3">
                                <h5 class="title">Instant Codes</h5>
                                <p>Receive the code of the card you have purchased instantly via e-mail.</p>
                            </figcaption>
                        </figure> <!-- iconbox // -->
                    </div> <!-- col // -->
                </div>
            </article>

        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION FEATURE END// ========================= -->

    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content">
        <div class="container">

            <header class="section-heading">
                <h3 class="section-title">Popular cards</h3>
            </header><!-- sect-heading -->
            <div class="row">
                @foreach($pop as $card)
                @include('partials.card',['card' => $card])
                @endforeach
            </div> <!-- row.// -->

        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content">
        <div class="container">

            <header class="section-heading">
                <h3 class="section-title">Top Selling</h3>
            </header><!-- sect-heading -->
            <div class="row">
                @foreach($cards as $card)
                @include('partials.card',['card' => $card])
                @endforeach
            </div> <!-- row.// -->

        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->


    <!-- ========================= SECTION  ========================= -->
    <section class="section-name bg padding-y-sm">
        <div class="container">
            <header class="section-heading">
                <h3 class="section-title">Our Brands</h3>
            </header><!-- sect-heading -->

            <div class="row">
                <div class="col-md-2 col-6">
                    <figure class="box item-logo" style="background-color: #090907;">
                        <a href="#"><img src="assets/images/logos/pubg.png"></a>
                        <figcaption class="text-white border-top pt-2">6 Products</figcaption>
                    </figure> <!-- item-logo.// -->
                </div> <!-- col.// -->
                <div class="col-md-2  col-6">
                    <figure class="box item-logo" style="background-color: #107C10;">
                        <a href="#"><img src="assets/images/logos/xbox.png"></a>
                        <figcaption class="text-white border-top pt-2">3 Products</figcaption>
                    </figure> <!-- item-logo.// -->
                </div> <!-- col.// -->
                <div class="col-md-2  col-6">
                    <figure class="box item-logo" style="background-color: #006fcd;">
                        <a href="#"><img src="assets/images/logos/ps.png"></a>
                        <figcaption class="text-white border-top pt-2">8 Products</figcaption>
                    </figure> <!-- item-logo.// -->
                </div> <!-- col.// -->
                <div class="col-md-2  col-6">
                    <figure class="box item-logo" style="background-color: #FB8980;">
                        <a href="#"><img src="assets/images/logos/apple.png"></a>
                        <figcaption class="text-white border-top pt-2">12 Products</figcaption>
                    </figure> <!-- item-logo.// -->
                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </div><!-- container // -->
    </section>
    <!-- ========================= SECTION  END// ========================= -->



    <!-- ========================= FOOTER ========================= -->
    @include('layouts.footer')
    <!-- ========================= FOOTER END // ========================= -->

</body>

</html>