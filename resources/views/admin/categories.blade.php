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
                    <h1 class="text-primary">Categories</h1>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="row">
                                @forelse ($categories as $cat)
                                <div class="col-12 col-md-6">
                                    <div class="card card-product-grid pt-3">
                                        <a href="/admin/cards/{{$cat->id}}" class="img-wrap"> <img
                                                src="{{ url('/storage/'.$cat->img) }}">
                                        </a>
                                        <figcaption class="info-wrap">
                                            <a href="/admin/cards/{{$cat->id}}"
                                                class="h2 text-center text-decoration-none">{{$cat->name}}</a>
                                        </figcaption>
                                    </div>
                                </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card p-5">
                                <h3 class="text-primary mb-3">Add New Category</h3>
                                @if ($message = Session::get('new_category'))
                                <div class="alert alert-success" role="alert">
                                    {{$message}}
                                </div>
                                @endif
                                <form class="row g-3 needs-validation" action="{{ url('/admin/categories/new') }}"
                                    enctype="multipart/form-data" method="POST" novalidate>
                                    @csrf

                                    <div class="col-12">
                                        <label for="file" class="form-label">Category Image</label>
                                        <input type="file" accept="image/*" name="file"
                                            class="form-control @error('file') is-invalid @enderror" name="
                            file" id="file" required>
                                        @error('file')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <small class="text-muted">
                                            File formats: jpeg, jpg, png.
                                        </small>

                                    </div>
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
                                        <label for="comment" class="form-label">Description (optional)</label>
                                        <textarea class="form-control @error('comment') is-invalid @enderror"
                                            id="comment" rows="3" name="comment"></textarea>
                                        @error('comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button class="btn btn-primary" type="submit">Add</button>
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