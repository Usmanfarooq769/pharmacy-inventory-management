@extends('layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <h1 class="page-title fw-semibold fs-18 mb-0">productsIn</h1>
    <div class="ms-md-1 ms-0">
        <nav>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                <li class="breadcrumb-item active" aria-current="page">productsIn</li>
            </ol>
        </nav>
    </div>
</div>
<div class="card custom-card">

    <div class="card-header justify-content-between flex-wrap">
        <h3 class="card-title">Purchase Products List</h3>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa fa-plus"></i> Add New Purchase
        </button>
    </div>

    <!-- /.card-header -->
    <div class="card-body table-responsive">
        <table id="products-in" class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Supplier</th>
                    <th>Quantity</th>
                    <th>Date</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>

    </div>
    <!-- /.card-body -->
</div>

<div class="card custom-card ">

    <div class="card-header justify-content-between flex-wrap">
        <h3 class="card-title">Export Invoice</h3>
    </div>


    <!-- /.card-header -->
    <div class="card-body table-responsive">
        <table id="invoice" class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Products</th>
                    <th>Supplier</th>
                    <th>Qty.</th>
                    <th>In Date</th>
                </tr>
            </thead>
            <tbody>

            </tbody>


        </table>
    </div>
    <!-- /.card-body -->
</div>

@include('product_in.form')

@endsection

@push('scripts')

<script>
$('#supplier_id').select2({
    width: '100%',
    dropdownParent: $('#exampleModal')
});

$('#product_id').select2({
    width: '100%',
    dropdownParent: $('#exampleModal')
});
</script>


<script>
$(function() {
    // CSRF for all ajax
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // init select2 inside modal
    $('#product_id, #supplier_id').select2({
        width: '100%',
        dropdownParent: $('#exampleModal')
    });

    // SweetAlert helpers
    const swalSuccess = (msg) => Swal.fire({
        icon: 'success',
        title: 'Success',
        text: msg,
        confirmButtonText: 'OK'
    });
    const swalError = (msg) => Swal.fire({
        icon: 'error',
        title: 'Error',
        text: msg,
        confirmButtonText: 'OK'
    });

    // DataTable
    var table1 = $('#products-in').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('product_in.data') }}",
        dom: 'Blfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
        columns: [{
                data: 'DT_RowIndex',
                orderable: false,
                searchable: false
            },
            {
                data: 'product_name',
                name: 'product_name'
            },
            {
                data: 'supplier_name',
                name: 'supplier_name'
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
        ]
    });


    var table2 = $('#invoice').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('product_in.invoiceData') }}",
        dom: 'Blfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
        columns: [{
                data: 'id',
                name: 'id'
            },
            {
                data: 'product_name',
                name: 'product_name'
            },
            {
                data: 'supplier_name',
                name: 'supplier_name'
            },
            {
                data: 'qty',
                name: 'qty'
            },
            {
                data: 'tanggal',
                name: 'tanggal'
            },

        ]
    })

    // Reset modal on close
    $('#exampleModal').on('hidden.bs.modal', function() {
        $(this).find('form')[0].reset();
        $('#id').val('');
        // reset select2 to placeholder
        $('#product_id').val('').trigger('change');
        $('#supplier_id').val('').trigger('change');
        $('.modal-title').text('');
    });

    // OPEN Add modal - attach to your Add button (give it id #addProductIn)
    $('#addProductIn').on('click', function() {
        $('#form-item')[0].reset();
        $('#id').val('');
        $('#product_id').val('').trigger('change');
        $('#supplier_id').val('').trigger('change');
        $('.modal-title').text('Add Product In');
        $('#exampleModal').modal('show');
    });

    // OPEN Edit modal
    $(document).on('click', '.editIn', function() {
        var id = $(this).data('id');
        $.get("{{ url('product-in') }}/" + id + "/edit")
            .done(function(data) {
                $('#id').val(data.id);
                $('#product_id').val(data.product_id).trigger('change');
                $('#supplier_id').val(data.supplier_id).trigger('change');
                $('#qty').val(data.qty);
                $('#date-in').val(data.date_in);
                $('.modal-title').text('Edit Product In');
                $('#exampleModal').modal('show');
            })
            .fail(function() {
                swalError('Unable to fetch record for editing.');
            });
    });

    // Submit (create/update)
    $('#form-item').on('submit', function(e) {
        e.preventDefault();
        var form = $(this);
        $.ajax({
            url: "{{ route('product_in.store') }}",
            method: "POST",
            data: form.serialize(),
            success: function(res) {
                $('#exampleModal').modal('hide');
                table1.ajax.reload(null, false);
                table2.ajax.reload(null, false);

                swalSuccess(res.message);
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    // validation errors
                    var errors = xhr.responseJSON.errors;
                    var arr = [];
                    $.each(errors, function(k, v) {
                        arr.push(v[0]);
                    });
                    swalError(arr.join('\n'));
                } else if (xhr.responseJSON && xhr.responseJSON.message) {
                    swalError(xhr.responseJSON.message);
                } else {
                    swalError('Error saving data. Try again.');
                }
            }
        });
    });

    // Delete with confirmation
    $(document).on('click', '.deleteIn', function() {
        var id = $(this).data('id');
        Swal.fire({
            title: 'Are you sure?',
            text: "This will remove the record and adjust product stock.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{ url('product-in') }}/" + id,
                    method: 'DELETE'
                }).done(function(res) {
                    table1.ajax.reload(null, false);
                    table2.ajax.reload(null, false);
                    swalSuccess(res.message);
                }).fail(function(xhr) {
                    if (xhr.responseJSON && xhr.responseJSON.message) swalError(xhr
                        .responseJSON.message);
                    else swalError('Error deleting record.');
                });
            }
        });
    });

}); // end jQuery ready
</script>


@endpush