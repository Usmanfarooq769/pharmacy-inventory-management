@extends('layouts.app')
@section('content')

<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <h1 class="page-title fw-semibold fs-18 mb-0">Customer</h1>
    <div class="ms-md-1 ms-0">
        <nav>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                <li class="breadcrumb-item active" aria-current="page">Customer</li>
            </ol>
        </nav>
    </div>
</div>

<div class="card custom-card">

    <div class="card-header justify-content-between flex-wrap">
        <h3 class="card-title">List of Customers</h3>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa fa-plus"></i> Add Customers
        </button>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive ">
        <table id="customersTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Number</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
    <!-- /.card-body -->
</div>

@include('customers.form_import')

@include('customers.form')

@endsection



@push('scripts')
<script>
$(document).ready(function() {

    $('#exampleModal').on('hidden.bs.modal', function() {
        $(this).find('form')[0].reset();
        $('#hiddenIdField').val('');
        $('#customerModalTitle').text('');
        $('.error').text('');
    });


    // SweetAlert2 Toast configuration
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true
    });

    var table = $('#customersTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('customers.data') }}",
        columns: [{
                data: 'DT_RowIndex',
                orderable: false,
                searchable: false
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'address',
                name: 'address'
            },
            {
                data: 'email',
                name: 'email'
            },
            {
                data: 'number',
                name: 'number'
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
        lengthMenu: [
            [10, 25, 50, 1000],
            [10, 25, 50, 1000]
        ],
        pageLength: 10,
        dom: 'Blfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
    });

    $('#addCustomer').click(function() {
        $('#form-item')[0].reset();
        $('#id').val('');
        // $('.modal-title').text('Add Customer');
        $('#customerModalTitle').text('Add Customer');
        $('#exampleModal').modal('show');
    });

    $(document).on('click', '.editCustomer', function() {
        var id = $(this).data('id');
        $.get("{{ url('customers') }}/" + id + "/edit", function(data) {
            $('#id').val(data.id);
            $('#name').val(data.name);
            $('#address').val(data.address);
            $('#email').val(data.email);
            $('#number').val(data.number);
            $('#customerModalTitle').text('Edit Customer');
            $('#exampleModal').modal('show');
        });
    });
    $('#form-item').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "{{ route('customers.store') }}",
            method: "POST",
            data: $(this).serialize(),
            success: function(res) {
                $('#exampleModal').modal('hide');
                table.ajax.reload();
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: res.message,
                    confirmButtonText: 'OK'
                });
            },
            error: function(err) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Error saving data',
                    confirmButtonText: 'OK'
                });
            }
        });
    });




    $(document).on('click', '.deleteCustomer', function() {
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
                    url: "{{ url('customers') }}/" + id,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        Swal.fire('Deleted!', response.message, 'success');
                        table.ajax.reload(null, false);
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

@endpush