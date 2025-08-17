<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>



@include('auth-1.header-link')

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

                                    <h4 class="mb-3">Reset Password</h4>

                                    <form method="POST" action="{{ route('password.update') }}">
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                        {{-- Email --}}
                                        <div class="mb-3">
                                            <label class="form-label text-default" for="reset-email">
                                                Email <sup class="fs-12 text-danger">*</sup>
                                            </label>
                                            <input class="form-control" id="reset-email" type="email"
                                                name="email" value="{{ old('email', $request->email) }}"
                                                placeholder="Enter your email" required autofocus>
                                        </div>

                                        {{-- New Password --}}
                                        <div class="mb-3">
                                            <label class="form-label text-default" for="reset-password">
                                                New Password <sup class="fs-12 text-danger">*</sup>
                                            </label>
                                            <div class="input-group">
                                                <input class="form-control" id="reset-password" type="password"
                                                    name="password" placeholder="Enter new password" required
                                                    autocomplete="new-password">
                                                <button class="btn btn-primary-light" type="button"
                                                    onclick="togglePassword('reset-password', this)">
                                                    <i class="ri-eye-off-line align-middle"></i>
                                                </button>
                                            </div>
                                        </div>

                                        {{-- Confirm Password --}}
                                        <div class="mb-3">
                                            <label class="form-label text-default" for="reset-password-confirmation">
                                                Confirm Password <sup class="fs-12 text-danger">*</sup>
                                            </label>
                                            <div class="input-group">
                                                <input class="form-control" id="reset-password-confirmation" type="password"
                                                    name="password_confirmation" placeholder="Confirm new password" required
                                                    autocomplete="new-password">
                                                <button class="btn btn-primary-light" type="button"
                                                    onclick="togglePassword('reset-password-confirmation', this)">
                                                    <i class="ri-eye-off-line align-middle"></i>
                                                </button>
                                            </div>
                                        </div>

                                        {{-- Submit --}}
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary w-100 mt-3">
                                                Reset Password
                                            </button>
                                        </div>

                                    </form>

                                    <div class="text-center">
                                        <p class="text-muted mt-4 mb-0">
                                            Remembered your password? 
                                            <a class="text-primary fw-medium text-decoration-underline"
                                               href="{{ route('login') }}">Login</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 border rounded bg-secondary-transparent border-secondary border-opacity-10">
                                <div class="d-flex align-items-center justify-content-around flex-column gap-4 h-100">
                                    <img src="../assets/images/authentication/5.png" alt="Reset Password"
                                        class="img-fluid m-auto mb-3 flex-fill mt-4">
                                    <div class="flex-fill text-center">
                                        <h6 class="mb-2">Reset Your Password</h6>
                                        <p class="mb-0 text-muted fw-normal fs-12">Enter your new password to continue.</p>
                                    </div>
                                    <div class="d-flex mb-2 justify-content-between gap-2 flex-wrap flex-lg-nowrap">
                                        <button class="btn btn-sm d-flex align-items-center justify-content-center flex-fill btn-danger-light">
                                            <i class="ri-google-fill"></i>
                                            <span class="ms-2">Google</span>
                                        </button>
                                        <button class="btn btn-sm d-flex align-items-center justify-content-center flex-fill btn-primary-light">
                                            <i class="ri-facebook-fill"></i>
                                            <span class="ms-2">Facebook</span>
                                        </button>
                                        <button class="btn btn-sm d-flex align-items-center justify-content-center flex-fill btn-info-light">
                                            <i class="ri-twitter-x-line"></i>
                                            <span class="ms-2">Twitter</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div> {{-- row --}}
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

