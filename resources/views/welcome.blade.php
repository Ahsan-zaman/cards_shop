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
                        <h1>PUBG Mobile Cards!</h1>
                        <p>When purchasing from our website, you get instant codes. Signup for free to get started.</p>
                        <button type="button" class="btn btn-primary">Shop Now</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img height="400" style="object-fit: cover;height:80vh;" src="assets/images/2.jpg"
                        class="d-block w-100" alt="assets/images/2.jpg">
                    <div class="carousel-caption h-75 text-md-start d-md-block">
                        <h1>PUBG Mobile Cards!</h1>
                        <p>When purchasing from our website, you get instant codes. Signup for free to get started.</p>
                        <button type="button" class="btn btn-primary">Shop Now</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img height="400" style="object-fit: cover;height:80vh;" src="assets/images/3.jpg"
                        class="d-block w-100" alt="assets/images/3.jpg">
                    <div class="carousel-caption h-75 text-md-start d-md-block">
                        <h1>PUBG Mobile Cards!</h1>
                        <p>When purchasing from our website, you get instant codes. Signup for free to get started.</p>
                        <button type="button" class="btn btn-primary">Shop Now</button>
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
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="assets/images/items/1.webp"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Sony 10$ PlayStation Store Card</a>

                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <span class="label-rating text-muted"> 34 reviws</span>
                            </div>
                            <div class="price mt-1">﷼38.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="assets/images/items/2.webp"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">iTunes Card</a>

                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <span class="label-rating text-muted"> 34 reviws</span>
                            </div>
                            <div class="price mt-1">$100.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="assets/images/items/3.webp"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Google Store Card</a>

                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <span class="label-rating text-muted"> 34 reviws</span>
                            </div>
                            <div class="price mt-1">$56.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="assets/images/items/4.png"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">PUBG Mobile 60UC</a>

                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <span class="label-rating text-muted"> 34 reviws</span>
                            </div>
                            <div class="price mt-1">$10.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
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
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="assets/images/items/4.png"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">PUBG Mobile (300+25)UC</a>

                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <span class="label-rating text-muted"> 99+ reviws</span>
                            </div>
                            <div class="price mt-1">$20.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="assets/images/items/4.png"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">PUBG Mobile (902+166)UC</a>

                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <span class="label-rating text-muted"> 86 reviws</span>
                            </div>
                            <div class="price mt-1">$100.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="assets/images/items/2.webp"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">iTunes Card</a>

                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <span class="label-rating text-muted"> 34 reviws</span>
                            </div>
                            <div class="price mt-1">$100.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="assets/images/items/3.webp"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Google Store Card</a>

                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <span class="label-rating text-muted"> 34 reviws</span>
                            </div>
                            <div class="price mt-1">$56.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="#" class="img-wrap"> <img src="assets/images/items/1.webp"> </a>
                        <figcaption class="info-wrap">
                            <a href="#" class="title">Sony 100$ PlayStation Store Card</a>

                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <span class="label-rating text-muted"> 34 reviws</span>
                            </div>
                            <div class="price mt-1">﷼380.00</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
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
    <footer class="section-footer border-top bg">
        <div class="container">
            <section class="footer-top  padding-y">
                <div class="row">
                    <aside class="col-md col-6">
                        <h6 class="title">Brands</h6>
                        <ul class="list-unstyled">
                            <li> <a href="#">Apple</a></li>
                            <li> <a href="#">Google</a></li>
                            <li> <a href="#">PUBG</a></li>
                            <li> <a href="#">PlayStation</a></li>
                        </ul>
                    </aside>
                    <aside class="col-md col-6">
                        <h6 class="title">Company</h6>
                        <ul class="list-unstyled">
                            <li> <a href="#">About us</a></li>
                            <li> <a href="#">Career</a></li>
                            <li> <a href="#">Find a store</a></li>
                            <li> <a href="#">Rules and terms</a></li>
                            <li> <a href="#">Sitemap</a></li>
                        </ul>
                    </aside>
                    <aside class="col-md col-6">
                        <h6 class="title">Help</h6>
                        <ul class="list-unstyled">
                            <li> <a href="#">Contact us</a></li>
                            <li> <a href="#">Money refund</a></li>
                            <li> <a href="#">Order status</a></li>
                            <li> <a href="#">Shipping info</a></li>
                            <li> <a href="#">Open dispute</a></li>
                        </ul>
                    </aside>
                    <aside class="col-md col-6">
                        <h6 class="title">Account</h6>
                        <ul class="list-unstyled">
                            <li> <a href="#"> User Login </a></li>
                            <li> <a href="#"> User register </a></li>
                            <li> <a href="#"> Account Setting </a></li>
                            <li> <a href="#"> My Orders </a></li>
                        </ul>
                    </aside>
                    <aside class="col-md">
                        <h6 class="title">Social</h6>
                        <ul class="list-unstyled">
                            <li><a href="#"> <i class="fab fa-facebook"></i> Facebook </a></li>
                            <li><a href="#"> <i class="fab fa-twitter"></i> Twitter </a></li>
                            <li><a href="#"> <i class="fab fa-instagram"></i> Instagram </a></li>
                            <li><a href="#"> <i class="fab fa-youtube"></i> Youtube </a></li>
                        </ul>
                    </aside>
                </div> <!-- row.// -->
            </section> <!-- footer-top.// -->

            <section class="footer-bottom row">
                <div class="col-md-2">
                    <p class="text-muted"> {{date("Y")}} Cards Shop </p>
                </div>
                <div class="col-md-8 text-md-center">
                    <span class="px-2">info@com</span>
                    <span class="px-2">+000-000-0000</span>
                    <span class="px-2">Street name 123, ABC</span>
                </div>
                <!-- <div class="col-md-2 text-md-right text-muted">
                    <i class="fab fa-lg fa-cc-visa"></i>
                    <i class="fab fa-lg fa-cc-paypal"></i>
                    <i class="fab fa-lg fa-cc-mastercard"></i>
                </div> -->
            </section>
        </div><!-- //container -->
    </footer>
    <!-- ========================= FOOTER END // ========================= -->

</body>

</html>