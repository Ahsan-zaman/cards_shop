<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body>
    @include('admin.header')
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
                                    @csrf
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
                                    <td>Actions</td>
                                </tr>
                                <thead />
                                @forelse ($codes as $c)
                                <tr>
                                    <td>{{$card->name}}</td>
                                    <td>{{number_format($card->price,2)}} SAR</td>
                                    <td>{{$card->country}}</td>
                                    <td>{{$c->code}}</td>
                                    <td>{{$c->expiry_date->toFormattedDateString()}}</td>
                                    <td>
                                        <form method="POST" action="{{url('/admin/codes/'. $c->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                    </td>
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