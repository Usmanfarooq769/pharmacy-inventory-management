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
                <div class="col-xxl-6 col-sm-8 col-12">
                    <div class="card custom-card my-4 border">
                        <div class="card-body">
                            <h5 class="mb-3 text-center">Forgot Password</h5>
                            <p class="text-muted text-center mb-4">
                                No problem. Enter your email and we will send you a password reset link.
                            </p>

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="reset-email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="reset-email" name="email"
                                        value="{{ old('email') }}" placeholder="Enter your email" required autofocus>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">
                                        Send Password Reset Link
                                    </button>
                                </div>
                            </form>

                            <div class="text-center mt-3">
                                <a href="{{ route('login') }}" class="text-success fw-medium fs-12">
                                    Back to Login
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>