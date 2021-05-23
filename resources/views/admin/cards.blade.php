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
                    <div class="text-green-600 leading-loose bg-green-100 text-center mt-2 rounded">
                    </div>
                    <div class="text-red-600 leading-loose bg-red-100 text-center mt-2 rounded">
                    </div>
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <h1 class="text-primary"> {{$category->name}} Cards</h1>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="row">
                                @forelse ($cards as $cat)
                                <div class="col-12 col-md-6">
                                    <div href="#" class="card card-product-grid pt-3">
                                        <div class="img-wrap"> <img src="{{ url($category->img) }}">
                                        </div>
                                        <figcaption class="info-wrap">
                                            <span class="link-primary h5 text-center text-decoration-none">
                                                {{$cat->name}}</span>
                                            <div class="price mt-1">{{number_format($cat->price,2)}} SAR</div>
                                            <div class="d-flex justify-content-end">
                                                <a href="/admin/codes/{{$category->id}}/{{$cat->id}}"
                                                    class="btn btn-primary">View Codes</a>
                                            </div>
                                        </figcaption>
                                    </div>
                                </div>
                                @empty
                                <div class="alert alert-warning" role="alert">
                                    No Cards added for this category
                                </div>
                                @endforelse
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card p-5">
                                <h3 class="text-primary mb-3">Add New Card</h3>
                                @if ($message = Session::get('new_card'))
                                <div class="alert alert-success" role="alert">
                                    {{$message}}
                                </div>
                                @endif
                                <form class="row g-3 needs-validation" action="{{ url('/admin/cards/new') }}"
                                    enctype="multipart/form-data" method="POST" novalidate>
                                    {{ csrf_field() }}
                                    <input type="text" name="category_id" hidden value="{{ $category->id }}">
                                    <div class="col-12">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" required>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label for="price" class="form-label">Price</label>
                                        <input type="number" step="0.01"
                                            class="form-control @error('price') is-invalid @enderror" id="price"
                                            name="price" required>
                                        @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label for="country" class="form-label">Country</label>
                                        <select class="form-select @error('country') is-invalid @enderror"
                                            aria-label="Select Country" id="country" name="country">
                                            <option selected>Global</option>
                                            <option value="KSA">Saudi Arabia</option>
                                            <option value="USA">United States America</option>
                                        </select>
                                        @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button class="btn btn-primary" type="submit">Add Card</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')

</html>