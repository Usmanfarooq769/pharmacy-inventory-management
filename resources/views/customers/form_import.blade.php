<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card custom-card">
            <div class="card-header justify-content-between flex-wrap">
                <h3 class="card-title">Import Customer Data</h3>
                @if(session('success'))
                <div class="alert alert-success alert-dismissible ">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-check"></i> Success!&nbsp;
                    {{ session('success') }}
                </div>
                @endif

                @if(session('error'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-ban"></i> Error!&nbsp;
                    {{ session('error') }}
                </div>
                @endif
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('import.customers') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label" for="exampleInputFile">
                            Input File
                        </label>
                        <input class="form-control form-control-lg" type="file" id="file" name="file">
                        <p class="text-danger">{{ $errors->first('file') }}</p>
                    </div>
                </div>


                <!-- /.card-body -->

                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                <div class="card-body">

                    <div class="alert alert-warning alert-dismissible fade show" role="alert"> <i
                            class="icon fa fa-warning"></i>
                        <strong>Attention!</strong> File Data Customer Only Type (.xls, .xlsx)
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i
                                class="bi bi-x"></i></button>
                    </div>

                </div>
            </form>
        </div>


        <!-- /.card -->
    </div>

</div>