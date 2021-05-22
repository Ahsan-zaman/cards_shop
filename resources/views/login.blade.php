<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body>
    @include('layouts.header')
    <div class="container mt-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card p-5">
                    <h3 class="text-primary mb-3">Login</h3>
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" value="" required>
                            <div class="invalid-feedback">
                                Email is required
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="password" class="form-label">Password</label>
                            <input type="text" class="form-control" id="password" value="" required>
                            <div class="invalid-feedback">
                                Password is required
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <label for="remember" class="form-label">Remember Me</label>
                                <input class="form-check-input" type="checkbox" value="1" id="remember">
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Login</button>
                        </div>
                    </form>
                    <div class="text-center mt-5">
                        <a href="#" class="link-primary text-decoration-none">
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
</body>

</html>