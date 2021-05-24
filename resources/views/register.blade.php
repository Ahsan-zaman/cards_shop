<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body>
    @include('layouts.header')
    <div class="container mt-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card p-5">
                    <h3 class="text-primary mb-3">Register</h3>
                    <form class="row g-3 needs-validation" action="{{ route('register') }}" method="POST" novalidate>
                        @csrf
                        <div class="col-12">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                id="name" value="{{ old('name') }}" required>
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
                                id="email" value="{{ old('email') }}" required>
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
                            <label for="password" class="form-label">Password</label>
                            <input type="password" autocomplete="new-password"
                                class="form-control @error('password') is-invalid @enderror" id="password"
                                name="password" value="" required>
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
                            <label for="password_confirmation" class="form-label">Reenter Password</label>
                            <input type="password" autocomplete="new-password"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                id="password_confirmation" name="password_confirmation" value="" required>
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <label for="remember" class="form-label">Terms & Condition</label>
                                <input class="form-check-input" type="checkbox" name="terms" {{ old('terms') ? 'checked'
                                    : '' }} id="remember">
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Register</button>
                        </div>
                    </form>
                    <div class="text-center mt-5">
                        <a href="{{ route('login') }}" class="link-primary text-decoration-none">
                            Already have an account? Login Here
                        </a>
                    </div>
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
</body>

</html>