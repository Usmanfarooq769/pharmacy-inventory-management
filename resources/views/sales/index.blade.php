@extends('layouts.app')
@section('content')

<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <h1 class="page-title fw-semibold fs-18 mb-0">Sales</h1>
    <div class="ms-md-1 ms-0">
        <nav>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sales</li>
            </ol>
        </nav>
    </div>
</div>
<div class="card custom-card">

    <div class="card-header justify-content-between flex-wrap">
        <h3 class="card-title">Data Sales</h3>
        <button type="button" class="btn btn-primary" id="addSale" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            <i class="bi bi-plus"></i> Add Customers
        </button>
    </div>

    <!-- /.card-header -->
    <div class="card-body table-responsive">

        <table class="table table-bordered" id="salesTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th width="100px">Action</th>
                </tr>
            </thead>
        </table>

    </div><!-- Log on to codeastro.com for more projects! -->
    <!-- /.card-body -->
</div>

@include('sales.form_import')

@include('sales.form')

@endsection

@push('scripts')

<!-- DataTables -->
<script>
$(function() {
    var table = $('#salesTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('sales.data') }}",
        lengthMenu: [
            [10, 25, 50, 1000],
            [10, 25, 50, 1000]
        ],
        pageLength: 10,
        dom: 'Blfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
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
                data: 'address',
                name: 'address'
            },
            {
                data: 'email',
                name: 'email'
            },
            {
                data: 'phone',
                name: 'phone'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            }
        ]
    });

    $('#addSale').click(function() {
        $('#form-item').trigger("reset");
        $('#form-item')[0].reset();
        $('#id').val('');
        $('.modal-title').text('Add Sale');
        $('#exampleModal').modal('show');
    });

    $('#salesTable').on('click', '.editBtn', function() {
        var id = $(this).data('id');
        $.get("{{ url('sales/edit') }}/" + id, function(data) {
            $('.modal-title').text('Edit Sale');
            $('#id').val(data.id);
            $('#name').val(data.name);
            $('#address').val(data.address);
            $('#email').val(data.email);
            $('#phone').val(data.phone);
            $('#exampleModal').modal('show');
        });
    });




    $('#form-item').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "{{ route('sales.store') }}",
            method: "POST",
            data: $(this).serialize(),
            success: function(data) {
                $('#exampleModal').modal('hide');
                table.ajax.reload();
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: data.message,
                    confirmButtonText: 'OK'
                });
            }
        });
    });





    $(document).on('click', '.deleteBtn', function() {
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
                    url: "{{ url('sales/delete') }}/" + id,
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

    // $('#salesTable').on('click', '.deleteBtn', function () {
    //     var id = $(this).data('id');
    //     Swal.fire({
    //         title: 'Are you sure?',
    //         text: "You will not be able to recover this record!",
    //         icon: 'warning',
    //         showCancelButton: true,
    //         confirmButtonColor: '#d33',
    //         cancelButtonColor: '#3085d6',
    //         confirmButtonText: 'Yes, delete it!'
    //     }).then((result) => {
    //         if (result.isConfirmed) {
    //             $.ajax({
    //                 url: "{{ url('sales/delete') }}/" + id,
    //                 method: 'DELETE',
    //                 data: {_token: '{{ csrf_token() }}'},
    //                 success: function (data) {
    //                     table.ajax.reload();
    //                     Swal.fire({
    //                         icon: 'success',
    //                         title: 'Deleted!',
    //                         text: data.message,
    //                         confirmButtonText: 'OK'
    //                     });
    //                 }
    //             });
    //         }
    //     });
    // });
});
</script>
@endpush