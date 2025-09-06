@include('auth.header-link')

@if ($errors->any())
<script>
Swal.fire({
    icon: 'error',
    title: 'Validation Error',
    html: `{!! implode('<br>', $errors->all()) !!}`,
    confirmButtonText: 'OK'
});
</script>
@endif

@if (session('status'))
<script>
Swal.fire({
    icon: 'success',
    title: 'Success!',
    text: '{{ session('status') }}',
    confirmButtonText: 'OK'
});
</script>
@endif

<body>
    @include('auth.switcher')

    <div class="authentication-background">
        <div class="container-lg">
            <div class="row justify-content-center authentication authentication-basic align-items-center h-100">
                <div class="col-xxl-7 col-sm-8 col-12">
                    <div class="card custom-card my-4 border">
                        <div class="card-body">
                            <div class="row mx-0 align-items-center">
                                <div class="col-xl-6">
                                    <div class="p-3">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="row gy-3">

                                                {{-- Email --}}
                                                <div class="col-12">
                                                    <label class="form-label text-default" for="signin-email">
                                                        Email <sup class="fs-12 text-danger">*</sup>
                                                    </label>
                                                    <input class="form-control" name="email" id="signin-email"
                                                        value="{{ old('email') }}"
                                                        placeholder="Enter your email" type="email"
                                                        required autofocus autocomplete="username">
                                                </div>

                                                {{-- Password --}}
                                                <div class="col-12">
                                                    <label class="form-label text-default" for="signin-password">
                                                        Password <sup class="fs-12 text-danger">*</sup>
                                                    </label>
                                                    <div class="input-group">
                                                        <input class="form-control" name="password" id="signin-password"
                                                            placeholder="Enter your password" type="password" required
                                                            autocomplete="current-password">
                                                        <button class="btn btn-primary-light" type="button"
                                                            onclick="togglePassword('signin-password', this)">
                                                            <i class="ri-eye-off-line align-middle"></i>
                                                        </button>
                                                    </div>
                                                </div>

                                                {{-- Remember me + Forgot password --}}
                                                <div class="col-12">
                                                    <div class="form-check d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <input class="form-check-input" type="checkbox"
                                                                name="remember" id="rememberMe">
                                                            <label class="form-check-label text-muted fw-normal fs-12"
                                                                for="rememberMe">
                                                                Remember me
                                                            </label>
                                                        </div>
                                                        @if (Route::has('password.request'))
                                                        <a href="{{ route('password.request') }}"
                                                            class="text-success fw-medium fs-12">
                                                            Forgot Password?
                                                        </a>
                                                        @endif
                                                    </div>
                                                </div>

                                                {{-- Submit --}}
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary w-100 mt-4">
                                                        Log in
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                        <div class="text-center">
                                            <p class="text-muted mt-4 mb-0">
                                                Don’t have an account?
                                                <a class="text-primary fw-medium text-decoration-underline"
                                                    href="{{ route('register') }}">Sign Up</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                {{-- Side Illustration --}}
                                <div
                                    class="col-xl-6 border rounded bg-secondary-transparent border-secondary border-opacity-10">
                                    <div
                                        class="d-flex align-items-center justify-content-around flex-column gap-4 h-100">
                                        <img src="../assets/images/authentication/5.png" alt="Sign In"
                                            class="img-fluid m-auto mb-3 flex-fill mt-4">
                                        <div class="flex-fill text-center">
                                            <h6 class="mb-2">Welcome Back!</h6>
                                            <p class="mb-0 text-muted fw-normal fs-12">Sign in to your account to
                                                continue.</p>
                                        </div>
                                        <div class="d-flex mb-2 justify-content-between gap-2 flex-wrap flex-lg-nowrap">
                                            <button
                                                class="btn btn-sm d-flex align-items-center justify-content-center flex-fill btn-danger-light">
                                                <i class="ri-google-fill"></i>
                                                <span class="ms-2">Google</span>
                                            </button>
                                            <button
                                                class="btn btn-sm d-flex align-items-center justify-content-center flex-fill btn-primary-light">
                                                <i class="ri-facebook-fill"></i>
                                                <span class="ms-2">Facebook</span>
                                            </button>
                                            <button
                                                class="btn btn-sm d-flex align-items-center justify-content-center flex-fill btn-info-light">
                                                <i class="ri-twitter-x-line"></i>
                                                <span class="ms-2">Twitter</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                {{-- End Side Illustration --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Show Password JS -->
    <script src="../assets/js/show-password.js"></script>
</body>
</html>
