@include('auth-1.header-link')

{{-- Validation Errors with SweetAlert --}}
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
    @include('auth-1.switcher')
    <div class="authentication-background">
        <div class="container-lg">
            <div class="row justify-content-center authentication authentication-basic align-items-center h-100">
                <div class="col-xxl-7 col-sm-8 col-12">
                    <div class="card custom-card my-4 border">
                        <div class="card-body">
                            <div class="row mx-0 align-items-center">
                                <div class="col-xl-6">
                                    <div class="p-3">

                                        {{-- Register Form --}}
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="row gy-3">

                                                {{-- Name --}}
                                                <div class="col-12">
                                                    <label class="form-label text-default" for="register-name">
                                                        Name <sup class="fs-12 text-danger">*</sup>
                                                    </label>
                                                    <input class="form-control" id="register-name" name="name"
                                                        value="{{ old('name') }}" placeholder="Enter your full name"
                                                        type="text" required autofocus autocomplete="name">
                                                </div>

                                                {{-- Email --}}
                                                <div class="col-12">
                                                    <label class="form-label text-default" for="register-email">
                                                        Email <sup class="fs-12 text-danger">*</sup>
                                                    </label>
                                                    <input class="form-control" id="register-email" name="email"
                                                        value="{{ old('email') }}" placeholder="Enter your email"
                                                        type="email" required autocomplete="username">
                                                </div>

                                                {{-- Password --}}
                                                <div class="col-12">
                                                    <label class="form-label text-default" for="register-password">
                                                        Password <sup class="fs-12 text-danger">*</sup>
                                                    </label>
                                                    <div class="input-group">
                                                        <input class="form-control" id="register-password"
                                                            name="password" placeholder="Enter your password"
                                                            type="password" required autocomplete="new-password">
                                                        <button class="btn btn-primary-light" type="button"
                                                            onclick="togglePassword('register-password', this)">
                                                            <i class="ri-eye-off-line align-middle"></i>
                                                        </button>
                                                    </div>
                                                </div>

                                                {{-- Confirm Password --}}
                                                <div class="col-12">
                                                    <label class="form-label text-default"
                                                        for="register-password-confirm">
                                                        Confirm Password <sup class="fs-12 text-danger">*</sup>
                                                    </label>
                                                    <input class="form-control" id="register-password-confirm"
                                                        name="password_confirmation"
                                                        placeholder="Confirm your password" type="password" required
                                                        autocomplete="new-password">
                                                </div>

                                                {{-- Terms & Privacy --}}
                                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                                <div class="col-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="terms"
                                                            id="terms" required>
                                                        <label class="form-check-label" for="terms">
                                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-primary">'.__('Terms of Service').'</a>',
                                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-primary">'.__('Privacy Policy').'</a>',
                                                            ]) !!}
                                                        </label>
                                                    </div>
                                                </div>
                                                @endif

                                                {{-- Submit --}}
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary w-100">
                                                        Register
                                                    </button>
                                                </div>

                                            </div>
                                        </form>

                                        <div class="text-center mt-3">
                                            <p class="text-muted mb-0">
                                                Already registered?
                                                <a class="text-primary fw-medium text-decoration-underline"
                                                    href="{{ route('login') }}">
                                                    Login
                                                </a>
                                            </p>
                                        </div>

                                    </div>
                                </div>

                                {{-- Right Side --}}
                                <div
                                    class="col-xl-6 border rounded bg-secondary-transparent border-secondary border-opacity-10">
                                    <div class="d-flex align-items-center justify-content-around flex-column gap-4 h-100">
                                        <img src="../assets/images/authentication/5.png" alt="Register"
                                            class="img-fluid m-auto mb-3 flex-fill mt-4">
                                        <div class="flex-fill text-center">
                                            <h6 class="mb-2">Create Your Account</h6>
                                            <p class="mb-0 text-muted fw-normal fs-12">Sign up to start managing your pharmacy inventory.</p>
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
                                {{-- End Right Side --}}
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



