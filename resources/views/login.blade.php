<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body>
    @include('layouts.header')
    <div class="container my-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card p-5">
                    <h3 class="text-primary mb-3">Login</h3>
                    @if ($message = Session::get('danger'))
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @endif
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                    @endif

                    <form class="row g-3 needs-validation" action="{{ route('login') }}" method="POST" novalidate>
                        {{ csrf_field() }}
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
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password" required>
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
                            <div class="form-check">
                                <label for="remember" class="form-label">Remember Me</label>
                                <input class="form-check-input" type="checkbox" name="remember" {{ old('remember')
                                    ? 'checked' : '' }} id="remember">
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Login</button>
                        </div>
                    </form>
                    <div class="text-center mt-5">
                        <a href="{{ route('register') }}" class="link-primary text-decoration-none">
                            Don't have an account? Register Here
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
    @include('layouts.footer')
</body>

</html>