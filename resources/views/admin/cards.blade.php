<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body>
    @include('admin.header')
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
                                        <div class="img-wrap"> <img src="{{ url('/storage/'.$category->img) }}">
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
                                    @csrf
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