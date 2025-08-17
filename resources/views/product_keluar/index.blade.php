@extends('layouts.app')

@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <h1 class="page-title fw-semibold fs-18 mb-0">Outgoing</h1>
    <div class="ms-md-1 ms-0">
        <nav>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                <li class="breadcrumb-item active" aria-current="page">Outgoing</li>
            </ol>
        </nav>
    </div>
</div>
<div class="card custom-card">

    <div class="card-header justify-content-between flex-wrap">
        <h3 class="card-title">Outgoing List</h3>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa fa-plus"></i> Add New Outgoing Product
        </button>
    </div>

    <!-- /.card-header -->
    <div class="card-body table-responsive">

        <table id="outgoingTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Customer</th>
                    <th>Qty</th>
                    <th>Date</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>

    </div>
    <!-- /.card-body -->
</div>



<div class="card custom-card ">

    <div class="card-header  justify-content-between flex-wrap">
        <h3 class="card-title">Export Invoice</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">

    <table id="invoiceTable" class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Products</th>
            <th>Customer</th>
            <th>Qty</th>
            <th>Date</th>
            
        </tr>
    </thead>
</table>

    </div>
    <!-- /.card-body -->
</div>

@include('product_keluar.form')

@endsection

@push('scripts')


<script>
$('#customer_id').select2({
    width: '100%',
    dropdownParent: $('#exampleModal')
});

$('#product_id').select2({
    width: '100%',
    dropdownParent: $('#exampleModal')
});

$(function() {
    // Ensure CSRF header for all AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    const swalSuccess = (message) => {
        return Swal.fire({
            icon: 'success',
            title: 'Success',
            text: message,
            confirmButtonText: 'OK'
        });
    };

    const swalError = (message) => {
        return Swal.fire({
            icon: 'error',
            title: 'Error',
            text: message,
            confirmButtonText: 'OK'
        });
    };

    // DataTable
    var table = $('#outgoingTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('product_keluar.data') }}",

         lengthMenu: [
            [10, 25, 50, 1000],
            [10, 25, 50, 1000]
        ],
        pageLength: 10,
        dom: 'Blfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
        columns: [{
                data: 'DT_RowIndex',
                orderable: false,
                searchable: false
            },
            {
                data: 'product_name',
                name: 'product_nama'
            },
            {
                data: 'customer_name',
                name: 'customer_name'
            },
            {
                data: 'qty',
                name: 'qty'
            },
            {
                data: 'tanggal',
                name: 'tanggal'
            },
            {
                data: 'created_at',
                name: 'created_at'
            },
            {
                data: 'action',
                orderable: false,
                searchable: false
            }
        ],
    });

    // Reset modal when hidden
    $('#exampleModal').on('hidden.bs.modal', function() {
        $(this).find('form')[0].reset();
        $('#id').val('');
        $('#outgoingModalTitle').text('');
    });

    // OPEN Add modal
    $('#addOutgoing').on('click', function() {
        $('#form-item')[0].reset();
        $('#id').val('');
        $('#outgoingModalTitle').text('Add Product Out');
        $('#exampleModal').modal('show');
    });

    // OPEN Edit modal -> fill values
    $(document).on('click', '.editOutgoing', function() {
        var id = $(this).data('id');
        $.get("{{ url('product-keluar') }}/" + id + "/edit", function(data) {
            // data is the Product_Keluar row
            $('#id').val(data.id);
            $('#product_id').val(data.product_id).change();
            $('#customer_id').val(data.customer_id).change();
            $('#qty').val(data.qty);
            $('#tanggal').val(data.tanggal);
            $('#outgoingModalTitle').text('Edit Product Out');
            $('#exampleModal').modal('show');
        }).fail(function() {
            swalError('Unable to fetch record for editing.');
        });
    });

    // Submit create/update
    $('#form-item').on('submit', function(e) {
        e.preventDefault();
        var form = $(this);
        $.ajax({
            url: "{{ route('product_keluar.store') }}",
            method: "POST",
            data: form.serialize(),
            success: function(res) {
                $('#exampleModal').modal('hide');
                table.ajax.reload(null, false);
                invoiceTable.ajax.reload(null, false);
                swalSuccess(res.message);
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    // Validation errors
                    var errors = xhr.responseJSON.errors;
                    var messages = [];
                    $.each(errors, function(k, v) {
                        messages.push(v[0]);
                    });
                    swalError(messages.join('\n'));
                } else if (xhr.responseJSON && xhr.responseJSON.message) {
                    swalError(xhr.responseJSON.message);
                } else {
                    swalError('Error saving data. Try again.');
                }
            }
        });
    });

    // Delete with SweetAlert2 confirmation
    $(document).on('click', '.deleteOutgoing', function() {
        var id = $(this).data('id');

        Swal.fire({
            title: 'Are you sure?',
            text: "This will delete the record and restore stock.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{ url('product-keluar') }}/" + id,
                    method: 'DELETE',
                    success: function(res) {
                        table.ajax.reload(null, false);
                        invoiceTable.ajax.reload(null, false);
                        swalSuccess(res.message);
                    },
                    error: function(xhr) {
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            swalError(xhr.responseJSON.message);
                        } else {
                            swalError('Error deleting record.');
                        }
                    }
                });
            }
        });
    });


    var invoiceTable = $('#invoiceTable').DataTable({
    processing: true,
    serverSide: true,
    ajax: "{{ route('invoice.data') }}",
     lengthMenu: [
            [10, 25, 50, 1000],
            [10, 25, 50, 1000]
        ],
        pageLength: 10,
        dom: 'Blfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
    columns: [
        { data: 'DT_RowIndex', orderable: false, searchable: false },
        { data: 'product_name', name: 'product_name' },
        { data: 'customer_name', name: 'customer_name' },
        { data: 'qty', name: 'qty' },
        { data: 'tanggal', name: 'tanggal' },
        
    ]
});

});
</script>


@endpush