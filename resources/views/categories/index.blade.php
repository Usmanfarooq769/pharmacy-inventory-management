@extends('layouts.app')
@section('content')

<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <h1 class="page-title fw-semibold fs-18 mb-0">Categories</h1>
    <div class="ms-md-1 ms-0">
        <nav>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                <li class="breadcrumb-item active" aria-current="page">Categories</li>
            </ol>
        </nav>
    </div>
</div>

<div class="card custom-card">

    <div class="card-header justify-content-between">
        <h3 class="card-title">List of Categories</h3>
        <div class="d-flex flex-wrap ms-auto gap-2">
                <div class="me-1">
                    <a button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"><i class="fa fa-plus"></i> Add a New Category</a>
                </div>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="card-body table-responsive">

            <table class="table table-bordered categories-table" id="categories-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>created_at</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>




        <!-- /.box-body -->
    </div>

    @include('categories.form')


    <script>
    $(document).ready(function() {
        $('.categories-table').DataTable({
            serverSide: true,
            processing: true,
            ajax: '{{ route('categories.index') }}',
            lengthMenu: [
                [10, 25, 50, 1000],
                [10, 25, 50, 1000]
            ], 
            pageLength: 10, 
            dom: 'Blfrtip', 
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],

            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                }
            ],




        });
    
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#form-item').on('submit', function(e) {
            e.preventDefault();

            let formData = new FormData(this);

            $.ajax({
                url: "{{ route('categories.store') }}",
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    // Close modal
                    $('#exampleModal').modal('hide');

                    // Reset form
                    $('#form-item')[0].reset();

                    // SweetAlert success
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: response.message
                    });  
                    $('#categories-table').DataTable().ajax.reload(null , false);
                 
                },
                error: function(xhr) {
                    let message = xhr.responseJSON?.message || 'Something went wrong.';
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: message
                    });
                }
            });
        });
    });
    </script>




    <script>
    // Delete category
    $(document).ready(function() {
        $(document).on('click', '.delete-category', function() {
            let id = $(this).data('id');
            Swal.fire({
                title: 'Are you sure?',
                text: 'You cannot undo this action!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/categories/' + id,
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            Swal.fire('Deleted!', response.message, 'success');

                            // Reload the table
                            $('#categories-table').DataTable().ajax.reload();
                        },
                        error: function() {
                            Swal.fire('Error!', 'Delete failed.', 'error');
                        }
                    });
                }
            });
        });
    });
    </script>

    <script>
    // View Modal
    $(document).on('click', '.btn-view', function() {
        let id = $(this).data('id');
        $.get('/categories/' + id, function(data) {
            $('#viewContent').html(
                `<p><strong>ID:</strong> ${data.id}</p><p><strong>Name:</strong> ${data.name}</p>`);
            $('#viewModal').modal('show');
        });
    });

    // Edit Modal
    $(document).on('click', '.btn-edit', function() {
        let id = $(this).data('id');
        $.get('/categories/' + id + '/edit', function(data) {
            $('#edit_id').val(data.id);
            $('#edit_name').val(data.name);
            $('#editModal').modal('show');
        });
    });

    // Update via AJAX
    $('#editForm').on('submit', function(e) {
        e.preventDefault();
        let id = $('#edit_id').val();
        let formData = {
            _token: $('input[name="_token"]').val(),
            _method: 'PUT',
            name: $('#edit_name').val(),
        };

        $.ajax({
            url: '/categories/' + id,
            method: 'POST',
            data: formData,
            success: function(response) {
                $('#editModal').modal('hide');
                Swal.fire('Success', 'Category updated!', 'success');
                setTimeout(() => location.reload(), 1000);
            },
            error: function() {
                Swal.fire('Error', 'Something went wrong', 'error');
            }
        });
    });
    </script>



    @endsection