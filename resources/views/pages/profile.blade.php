<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body>
    @include('layouts.header')
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card p-5 h-100">
                    <h3 class="text-primary mb-3">Profile</h3>
                    <form class="row g-3 needs-validation" action="{{ url('/profile_update') }}" method="POST"
                        novalidate>
                        @csrf
                        <div class="col-12">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                id="name" value="{{ auth()->user()->name }}" required>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" value="{{ auth()->user()->email }}" required>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="old_password" class="form-label">Old Password</label>
                            <input type="old_password" autocomplete="password"
                                class="form-control @error('old_password') is-invalid @enderror" id="old_password"
                                name="old_password">
                            @error('old_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="password" class="form-label">New Password</label>
                            <input type="password" autocomplete="new-password"
                                class="form-control @error('password') is-invalid @enderror" id="password"
                                name="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="password_confirmation" class="form-label">Re-enter Password</label>
                            <input type="password" autocomplete="new-password"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                id="password_confirmation" name="password_confirmation">
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-12">
                        <div class="card p-5">
                            <h3 class="text-primary ">Wallet</h3>
                            <h1 class="text-warning ">{{ number_format(auth()->user()->wallet,2) }} SAR</h1>
                            <small class="text-muted">Current Balance</small>
                        </div>
                    </div>
                </div>
                <div class="card p-5">
                    <h3 class="text-primary mb-3">Wallet Recharge Request</h3>
                    @if ($message = Session::get('new_req'))
                    <div class="alert alert-success" role="alert">
                        {{$message}}
                    </div>
                    @endif
                    <form class="row g-3 needs-validation" action="{{ route('wallet.recharge') }}"
                        enctype="multipart/form-data" method="POST" novalidate>
                        @csrf

                        <div class="col-12">
                            <label for="file" class="form-label">Bank Receipt</label>
                            <input type="file" accept=".png,.jpeg,.jpg,.pdf " name="file"
                                class="form-control @error('file') is-invalid @enderror" name="
                                file" id="file" required>
                            @error('file')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <small class="text-muted">
                                File formats: jpeg, jpg, png, pdf.
                            </small>

                        </div>
                        <div class="col-12">
                            <label for="amount" class="form-label">Recharge Amount</label>
                            <input type="number" step="0.01" autocomplete="password"
                                class="form-control @error('amount') is-invalid @enderror" id="amount" name="amount"
                                required>
                            @error('amount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <small class="text-muted">
                                Amount in riyal
                            </small>
                        </div>
                        <div class="col-12">
                            <label for="comment" class="form-label">Description (optional)</label>
                            <textarea class="form-control @error('comment') is-invalid @enderror" id="comment" rows="3"
                                name="comment"></textarea>
                            @error('comment')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function(form) {
                        form.addEventListener('submit', function(event) {
                            if (!form.checkValidity()) {
                                event.preventDefault()
                                event.stopPropagation()
                            }

                            form.classList.add('was-validated')
                        }, false)
                    })
            })()
        </script>
    </div>
    @include('layouts.footer')
</body>

</html>