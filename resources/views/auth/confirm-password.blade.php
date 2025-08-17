<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            <div class="flex justify-end mt-4">
                <x-button class="ms-4">
                    {{ __('Confirm') }}
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

                                        <h5 class="mb-3 text-center">Confirm Password</h5>
                                        <p class="text-muted text-center mb-4">
                                            This is a secure area of the application.<br>
                                            Please confirm your password before continuing.
                                        </p>

                                        <form method="POST" action="{{ route('password.confirm') }}">
                                            @csrf
                                            <div class="row gy-3">

                                                {{-- Password --}}
                                                <div class="col-12">
                                                    <label class="form-label text-default" for="confirm-password">
                                                        Password <sup class="fs-12 text-danger">*</sup>
                                                    </label>
                                                    <div class="input-group">
                                                        <input class="form-control" name="password" id="confirm-password"
                                                            placeholder="Enter your password" type="password" required
                                                            autocomplete="current-password" autofocus>
                                                        <button class="btn btn-primary-light" type="button"
                                                            onclick="togglePassword('confirm-password', this)">
                                                            <i class="ri-eye-off-line align-middle"></i>
                                                        </button>
                                                    </div>
                                                </div>

                                                {{-- Submit --}}
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary w-100 mt-4">
                                                        Confirm
                                                    </button>
                                                </div>

                                            </div>
                                        </form>

                                        <div class="text-center">
                                            <p class="text-muted mt-4 mb-0">
                                                <a class="text-primary fw-medium text-decoration-underline"
                                                   href="{{ route('login') }}">
                                                    Back to Login
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 border rounded bg-secondary-transparent border-secondary border-opacity-10">
                                    <div class="d-flex align-items-center justify-content-around flex-column gap-4 h-100">
                                        <img src="../assets/images/authentication/5.png" alt="Confirm Password"
                                            class="img-fluid m-auto mb-3 flex-fill mt-4">
                                        <div class="flex-fill text-center">
                                            <h6 class="mb-2">Security First 🔐</h6>
                                            <p class="mb-0 text-muted fw-normal fs-12">
                                                Please re-enter your password to continue.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div> <!-- row -->
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
