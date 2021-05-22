<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body>
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
                                    Actions
                                </strong>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item active" href="/admin/dashboard">View Recharge Requests</a>
                                <!-- <a class="dropdown-item" href="/admin/upload-code">Upload Codes</a> -->
                                <a class="dropdown-item" href="/admin/categories">Categories</a>
                                <!-- <a class="dropdown-item" href="/admin/cards">Cards</a> -->
                            </div>
                        </li>
                    </ul>
                </div> <!-- collapse .// -->
            </div> <!-- container .// -->
        </nav>


    </header> <!-- section-header.// -->
    <div class="container min-vh-100">
        <div class="row">
            <div class="col">
                <div class="mx-auto py-6 px-4">
                    <div class="text-green-600 leading-loose bg-green-100 text-center mt-2 rounded">
                    </div>
                    <div class="text-red-600 leading-loose bg-red-100 text-center mt-2 rounded">
                    </div>
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <h1 class="text-primary">Recharge Requests </h1>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <td>Date</td>
                                    <td>User Name</td>
                                    <td>Recharge Amount</td>
                                    <td>Transfer Type</td>
                                    <td>Comment</td>
                                    <td>Bank Receipt</td>
                                    <td>Actions</td>
                                </tr>
                                <thead />
                                @forelse ($reqs as $req)
                                <tr>
                                    <td>{{$req->created_at->toFormattedDateString()}}</td>
                                    <td>{{$req->user->name}}</td>
                                    <td>{{$req->amount}} SAR</td>
                                    <td>{{$req->type}}</td>
                                    <td>{{$req->comment}}</td>
                                    <td><a href="#">Uploaded File</a></td>
                                    <td>
                                        <a href="#" class="btn btn-primary">Approve</a>
                                        <a href="#" class="btn btn-danger">Reject</a>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-primary" role="alert">
                                    No new requests
                                </div>
                                @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')

</html>