<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>







<?php include('header-link.php'); ?>
<!-- SweetAlert2 CDN -->



<body>

 <?php include('includes/switcher.php'); ?>

    <div class="authentication-background">
        <div class="container-lg">
            <div class="row justify-content-center authentication authentication-basic align-items-center h-100">
                <div class="col-xxl-7 col-sm-8 col-12">
                    <div class="card custom-card my-4 border">
                        <div class="card-body">
                            <div class="row mx-0 align-items-center">
                            
                                <div class="col-xl-6">
                                    <form  method="POST" action="{{ route('register') }}">
                                        @csrf
                                    <div class="p-3">
                                        <div class="row gy-3">
                                            <div class="col-xl-12 mt-2">
                                                <label class="form-label text-default" for="signup-first-name">First Name<sup class="fs-12 text-danger">*</sup></label>
                                                <input class="form-control signup-email-input" name="firstname"  id="signup-first-name" placeholder="Enter your email address" type="text"> 
                                            </div>
                                            <div class="col-xl-12 mt-2">
                                                <label class="form-label text-default" for="signup-last-name">Last Name<sup class="fs-12 text-danger">*</sup></label>
                                                <input class="form-control signup-email-input"  name="lastname" id="signup-last-name" placeholder="Enter your email address" type="text"> 
                                            </div>
                                            <div class="col-xl-12 mt-2">
                                                <label class="form-label text-default" for="signup-mobile-number">Mobile Number<sup class="fs-12 text-danger">*</sup></label>
                                            
                                                 <input type="text" name="mobilenumber" id="signup-mobile-number" maxlength="10" pattern="[0-9]{10}" placeholder="Enter Your Mobile Number" required="true" class="form-control">
                                            </div>
                                            <div class="col-xl-12 mt-2">
                                                <label class="form-label text-default" for="signup-email">Email Address<sup class="fs-12 text-danger">*</sup></label>
                                                <input class="form-control signup-email-input" name="email" id="signup-email" placeholder="Enter your email address" type="email"> 
                                            </div>
                                            <div class="col-xl-12">
                                                <label class="form-label text-default" for="signup-password">Password<sup class="fs-12 text-danger">*</sup></label>
                                                <div class="input-group"> 
                                                    <input class="form-control signup-password-input" name="password"  id="signup-password" placeholder="Create a password" type="password"> 
                                                    <button class="btn btn-primary-light show-password-button" type="button" onclick="createpassword('signup-password', this)">
                                                        <i class="ri-eye-off-line align-middle"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 mb-2">
                                                <label class="form-label text-default" for="create-confirmpassword">Confirm Password<sup class="fs-12 text-danger">*</sup></label>
                                                <div class="input-group">
                                                    <input class="form-control create-password-input"  name="repeatpassword" id="create-confirmpassword" placeholder="Re-enter your password" type="password"> 
                                                    <button class="btn btn-primary-light show-password-button" type="button" onclick="createpassword('create-confirmpassword',this)">
                                                        <i class="ri-eye-off-line align-middle"></i>
                                                    </button>
                                                </div>
                                            </div>
                                           
                                            
                                      
                                                <div class="d-grid mt-3">
                                                    <button type="submit" name="submit" class="btn btn-primary"><i class="ri-user-add-line lh-1 me-2 align-middle"></i>Create Account</button>
                                                </div>
                                                <div class="text-center">
                                                    <p class="text-muted mt-3 mb-0">Already have an account? <a class="text-primary fw-medium text-decoration-underline" href="login.php">Sign In</a></p>
                                                </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                
                                <div class="col-xl-6 border rounded bg-secondary-transparent border-secondary border-opacity-10">
                                    <div class="d-flex align-items-center justify-content-around flex-column gap-4 h-100">
                                        <img src="../assets/images/authentication/5.png" alt="Sign Up" class="img-fluid m-auto mb-3 flex-fill  h-100" >
                                        <div class="flex-fill text-center">
                                            <h6 class="mb-2">Create Your Account</h6>
                                            <p class="mb-0 text-muted fw-normal fs-12">Create your free account in just a few steps.Join us and start your journey today!</p>
                                        </div>
                                        <div class="d-flex mb-1 justify-content-between gap-2 flex-wrap flex-lg-nowrap">
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
                                        <a href="index.html">
                                            <img alt="logo" class="toggle-logo mb-4 pb-2" src="../assets/images/brand-logos/toggle-logo.png">
                                        </a>
                                    </div>
                                </div>                                
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
