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
        <button type="button" class="btn btn-primary" onclick="addOutgoing()">
            <i class="fa fa-plus"></i> Add New Outgoing Product
        </button>
    </div>

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
</div>

<div class="card custom-card">
    <div class="card-header justify-content-between flex-wrap">
        <h3 class="card-title">Export Invoice</h3>
    </div>
    
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
</div>

@include('product_out.form')

@endsection

@push('scripts')
<script>
let table;
let invoiceTable;
let currentMode = 'add'; // Track current mode

$(function() {
    // Ensure CSRF header for all AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Initialize Select2 dropdowns
    initializeSelect2();

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

    // Initialize DataTable for outgoing products
    table = $('#outgoingTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('product_out.data') }}",
        lengthMenu: [[10, 25, 50, 100], [10, 25, 50, 100]],
        pageLength: 10,
        dom: 'Blfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
        columns: [
            { data: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'product_name', name: 'product_nama' },
            { data: 'customer_name', name: 'customer_name' },
            { data: 'qty', name: 'qty' },
            { data: 'date_out', name: 'date_out' },
            { data: 'created_at', name: 'created_at' },
            { data: 'action', orderable: false, searchable: false }
        ],
    });

    // Initialize DataTable for invoices
    invoiceTable = $('#invoiceTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('invoice.data') }}",
        lengthMenu: [[10, 25, 50, 100], [10, 25, 50, 100]],
        pageLength: 10,
        dom: 'Blfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
        columns: [
            { data: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'product_name', name: 'product_name' },
            { data: 'customer_name', name: 'customer_name' },
            { data: 'qty', name: 'qty' },
            { data: 'date_out', name: 'date_out' }
        ]
    });

    // Reset modal when hidden - COMPLETE RESET
    $('#exampleModal').on('hidden.bs.modal', function() {
        resetModalCompletely();
    });

    // OPEN Edit modal -> fill values
    $(document).on('click', '.editOutgoing', function() {
        var id = $(this).data('id');
        currentMode = 'edit';
        
        // First reset the modal completely
        resetModalCompletely();
        
        // Then fetch and populate data
        $.get("{{ url('product-out') }}/" + id + "/edit", function(data) {
            $('#id').val(data.id);
            $('#product_id').val(data.product_id).trigger('change');
            $('#customer_id').val(data.customer_id).trigger('change');
            $('#qty').val(data.qty);
            $('#date_out').val(data.date_out);
            $('.modal-title').text('Edit Product Out');
            $('#exampleModal').modal('show');
        }).fail(function() {
            swalError('Unable to fetch record for editing.');
        });
    });

    // Submit create/update
    $('#form-item').on('submit', function(e) {
        e.preventDefault();
        var form = $(this);
        var submitBtn = $(this).find('button[type="submit"]');
        
        // Disable submit button to prevent double submission
        submitBtn.prop('disabled', true).text('Saving...');
        
        $.ajax({
            url: "{{ route('product_out.store') }}",
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
            },
            complete: function() {
                // Re-enable submit button
                submitBtn.prop('disabled', false).text('Submit');
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
            cancelButtonText: 'Cancel',
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{ url('product-out') }}/" + id,
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
});

// Function to initialize Select2 dropdowns
function initializeSelect2() {
    $('#customer_id').select2({
        width: '100%',
        dropdownParent: $('#exampleModal'),
        placeholder: '-- Choose Customer --',
        allowClear: true
    });

    $('#product_id').select2({
        width: '100%',
        dropdownParent: $('#exampleModal'),
        placeholder: '-- Choose Product --',
        allowClear: true
    });
}

// Function to add new outgoing product
function addOutgoing() {
    currentMode = 'add';
    resetModalCompletely();
    $('.modal-title').text('Add Product Out');
    $('#exampleModal').modal('show');
}

// Complete modal reset function
function resetModalCompletely() {
    // Reset form
    $('#form-item')[0].reset();
    
    // Clear all input values
    $('#id').val('');
    $('#qty').val('');
    $('#date_out').val('');
    
    // Reset Select2 dropdowns completely
    $('#product_id').val(null).trigger('change');
    $('#customer_id').val(null).trigger('change');
    
    // Clear modal title
    $('.modal-title').text('');
    
    // Remove any validation classes
    $('.form-control').removeClass('is-invalid is-valid');
    $('.help-block').text('');
    $('.invalid-feedback').remove();
    
    // Reset submit button
    $('#form-item button[type="submit"]').prop('disabled', false).text('Submit');
    
    // Reinitialize Select2 to ensure clean state
    setTimeout(function() {
        initializeSelect2();
    }, 100);
}
</script>
@endpush