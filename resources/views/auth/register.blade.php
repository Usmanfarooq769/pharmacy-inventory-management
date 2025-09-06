<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>





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
    text: '{{ session('
    status ') }}',
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
                                                    <input type="text"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        id="register-name" name="name" value="{{ old('name') }}"
                                                        placeholder="Enter your full name" required autofocus
                                                        autocomplete="name">
                                                    @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                {{-- Email --}}
                                                <div class="col-12">
                                                    <label class="form-label text-default" for="register-email">
                                                        Email <sup class="fs-12 text-danger">*</sup>
                                                    </label>
                                                    <input type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        id="register-email" name="email" value="{{ old('email') }}"
                                                        placeholder="Enter your email address" required
                                                        autocomplete="username">
                                                    @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                {{-- Password --}}
                                                <div class="col-12">
                                                    <label class="form-label text-default" for="register-password">
                                                        Password <sup class="fs-12 text-danger">*</sup>
                                                    </label>
                                                    <div class="input-group">
                                                        <input class="form-control" id="register-password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            name="password" placeholder="Enter your password">
                                                        <button class="btn btn-primary-light" type="button"
                                                            onclick="togglePassword('register-password', this)">
                                                            <i class="ri-eye-off-line align-middle"></i>
                                                        </button>
                                                    </div>
                                                    @error('password')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                {{-- Confirm Password --}}
                                                <div class="col-12">
                                                    <label class="form-label text-default"
                                                        for="register-password-confirm">
                                                        Confirm Password <sup class="fs-12 text-danger">*</sup>
                                                    </label>
                                                    <input
                                                        class="form-control @error('password_confirmation') is-invalid @enderror"
                                                        id="register-password-confirm" name="password_confirmation"
                                                        placeholder="Confirm your password" type="password" required
                                                        autocomplete="new-password">
                                                    @error('password_confirmation')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                {{-- Terms & Privacy --}}
                                                <div class="mb-3 form-check">
                                                    <input type="checkbox"
                                                        class="form-check-input @error('terms') is-invalid @enderror"
                                                        id="terms" name="terms" required>
                                                    <label class="form-check-label" for="terms">
                                                        I agree to the <a href="#" class="text-primary">Terms of
                                                            Service</a> and
                                                        <a href="#" class="text-primary">Privacy Policy</a>
                                                    </label>
                                                    @error('terms')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>


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
                                    <div
                                        class="d-flex align-items-center justify-content-around flex-column gap-4 h-100">
                                        <img src="../assets/images/authentication/5.png" alt="Register"
                                            class="img-fluid m-auto mb-3 flex-fill mt-4">
                                        <div class="flex-fill text-center">
                                            <h6 class="mb-2">Create Your Account</h6>
                                            <p class="mb-0 text-muted fw-normal fs-12">Sign up to start managing your
                                                pharmacy inventory.</p>
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