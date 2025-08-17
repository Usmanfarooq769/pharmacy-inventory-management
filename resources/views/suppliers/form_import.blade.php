<div class="row">


@if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
            confirmButtonText: 'OK'
        });
    </script>
@endif

@if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: '{{ session('error') }}',
            confirmButtonText: 'OK'
        });
    </script>
@endif

    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card custom-card">
            <div class="card-header justify-content-between flex-wrap">
                <h3 class="card-title">Import Suppliers Data</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('import.suppliers') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleInputFile" class="form-label">
                            Input File
                        </label>
                        <input type="file" id="file" name="file" class="form-control">
                        <p class="text-danger">{{ $errors->first('file') }}</p>
                    </div>
                </div>


                <!-- /.card-body -->

                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                <div class="card-body">


                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong><i class="icon fa fa-warning"></i> Attention!</strong> File Data Customer Only Type
                        (.xls, .xlsx)
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i
                                class="bi bi-x"></i></button>
                    </div>

                </div>
            </form>
        </div>


        <!-- /.card -->
    </div>

</div>