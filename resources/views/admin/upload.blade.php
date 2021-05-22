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
                </ul>

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
                                <a class="dropdown-item" href="/admin/dashboard">View Recharge Requests</a>
                                <!-- <a class="dropdown-item" href="/admin/upload-code">Upload Codes</a> -->
                                <a class="dropdown-item" href="/admin/categories">Categories</a>
                                <!-- <a class="dropdown-item active" href="/admin/cards">Cards</a> -->
                            </div>
                        </li>
                    </ul>
                </div> <!-- collapse .// -->
            </div> <!-- container .// -->
        </nav>


    </header> <!-- section-header.// -->
    <div class="container my-5">
        <div class="row">
            <div class="col">
                <div class="mx-auto py-6 px-4">
                    <h1 class="text-primary"> {{$card->name}}</h1>

                    <div class="row">
                        <div class="col-12">
                            <div class="card p-5">
                                <h3 class="text-primary mb-3">Upload Codes</h3>
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                    {{$message}}
                                </div>
                                @endif
                                <form class="row g-3 needs-validation" action="{{ url('/admin/codes/new') }}"
                                    enctype="multipart/form-data" method="POST" novalidate>
                                    {{ csrf_field() }}
                                    <input type="text" name="card_id" hidden value="{{ $card->id }}">
                                    <div class="col-12 col-md-6">
                                        <label for="file" class="form-label">Excel file with codes</label>
                                        <input type="file" accept=".xlsx" name="file"
                                            class="form-control @error('file') is-invalid @enderror" name="file"
                                            id="file" required>
                                        @error('file')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <small class="text-muted">
                                            File formats: .xlsx
                                        </small>

                                    </div>
                                    <div class="col-12 col-md-6 d-flex justify-content-end align-items-center">
                                        <div class="row w-100">
                                            <div class="col-6">
                                                <a href="/admin/codes/sample" class="btn btn-primary d-block">Download
                                                    sample
                                                    Data</a>
                                            </div>
                                            <div class="col-6">
                                                <button class="btn btn-primary" type="submit">Upload Codes</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <h1 class="text-primary mt-5">Showing codes: 100 of {{$card->codes_count}}</h1>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <td>Card</td>
                                    <td>Price</td>
                                    <td>Country</td>
                                    <td>Code</td>
                                    <td>Expiry Date</td>
                                </tr>
                                <thead />
                                @forelse ($codes as $c)
                                <tr>
                                    <td>{{$card->name}}</td>
                                    <td>{{number_format($card->price,2)}} SAR</td>
                                    <td>{{$card->country}}</td>
                                    <td>{{$c->code}}</td>
                                    <td>{{$c->expiry_date->toFormattedDateString()}}</td>
                                </tr>
                                @empty
                                <div class="alert alert-warning" role="alert">
                                    No codes for this card
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