<?php

use App\Models\Category;

?>
<header class="section-header">

    <nav class="navbar navbar-dark navbar-expand p-0 bg-primary">
        <div class="container">
            <ul class="navbar-nav d-none d-md-flex mr-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('shop.index') }}">Shop</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('cart.index') }}">Cart</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="#" class="nav-link"> Call: +0000000000 </a></li>
                <!-- <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            English </a>
                        <ul class="dropdown-menu dropdown-menu-right" style="max-width: 100px;">
                            <li><a class="dropdown-item" href="#">Arabic</a></li>
                            <li><a class="dropdown-item" href="#">Russian </a></li>
                        </ul>
                    </li> -->
            </ul> <!-- list-inline //  -->

        </div> <!-- container //  -->
    </nav> <!-- header-top-light.// -->

    <section class="header-main border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-4">
                    <a href="{{ route('home.index') }}" class="brand-wrap h2 text-decoration-none">
                        <strong>Cards Shop</strong>
                    </a> <!-- brand-wrap.// -->
                </div>
                <!-- <div class="col-lg-6 col-12 col-sm-12">
                        <form action="#" class="search">
                            <div class="input-group w-100">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div> -->
                <div class="ml-auto col-lg-10    col-8">
                    <div class="d-flex justify-content-end">
                        <div class="widget-header">
                            <a href="#" class="icon icon-sm rounded-circle border"><i
                                    class="fa fa-shopping-cart"></i></a>
                            <!-- <span class="badge badge-pill badge-danger notify">0</span> -->
                        </div>
                        <div class="widget-header icontext">
                            <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
                            <div class="d-flex flex-column">
                                @guest
                                <span class="text-muted">Welcome!</span>
                                <div>
                                    <a href="{{ route('login') }}">Login</a> |
                                    <a href="{{ route('register') }}"> Register</a>
                                </div>
                                @else
                                <div class="d-flex">
                                    <a class="text-decoration-none" href="{{ url('profile') }}"
                                        class="text-primary"><strong>{{auth()->user()->name }}</strong></a>
                                    <a class="text-decoration-none ms-auto" href="{{ route('logout') }}"
                                        class="text-muted">
                                        Logout
                                    </a>
                                </div>
                                <a class="text-decoration-none" href="{{ url('profile') }}">Balance: {{
                                    number_format(auth()->user()->wallet,2) }} SAR</a>
                                @endguest
                            </div>
                        </div>
                    </div> <!-- widgets-wrap.// -->
                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- container.// -->
    </section> <!-- header-main .// -->



    <nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link pl-0" data-bs-toggle="dropdown" href="#">
                            <strong>
                                <i class="fa fa-bars"></i>
                                All category
                            </strong>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Game Cards</a>
                            <a class="dropdown-item" href="#">iTunes</a>
                            <a class="dropdown-item" href="#">Google</a>
                            <a class="dropdown-item" href="#">PlayStation</a>
                            <a class="dropdown-item" href="#">X Box</a>
                            <a class="dropdown-item" href="#">Mobile Recharge</a>
                        </div>
                    </li>
                    @foreach(Category::all() as $c)
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{$c->name}}</a>
                    </li>
                    @endforeach
                </ul>
            </div> <!-- collapse .// -->
        </div> <!-- container .// -->
    </nav>

</header> <!-- section-header.// -->