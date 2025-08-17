@extends('layouts.app')
@section('content')

@if (session('success'))
<script>
Swal.fire({
    icon: 'success',
    title: 'Success',
    text: "{{ session('success') }}",
    confirmButtonText: 'OK'
});
</script>
@endif

@if (session('error'))
<script>
Swal.fire({
    icon: 'error',
    title: 'Error',
    text: "{{ session('error') }}",
    confirmButtonText: 'OK'
});
</script>
    @endif

<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <h1 class="page-title fw-semibold fs-18 mb-0">Products</h1>
    <div class="ms-md-1 ms-0">
        <nav>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </nav>
    </div>
</div>

<div class="card custom-card">

    <div class="card-header justify-content-between flex-wrap">
        <h3 class="card-title">List of Products</h3>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add Products
        </button>
    </div>


    <!-- /.box-header -->
    <div class="card-body">
        <table id="products-table" class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Qty.</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
    <!-- /.box-body -->
</div>

@include('products.form')
@endsection
@push('scripts')
<script>
let table;
let save_method = 'add';
$('#category_id').select2({
    width: '100%',
    dropdownParent: $('#exampleModal')
});

$('#exampleModal').on('hidden.bs.modal', function() {
    $('#form-item')[0].reset();
    $('#id').val('');
    $('#imagePreview').attr('src', '');
    $('#category_id').val('').trigger('change');
    $('.help-block').text('');
    $('.form-control').removeClass('is-invalid');
});
$(document).ready(function() {
    // Initialize DataTable
    table = $('#products-table').DataTable({
        serverSide: true,
        processing: true,
        ajax: '{{ route('api.products') }}',
        lengthMenu: [
            [10, 25, 50, 1000],
            [10, 25, 50, 1000]
        ],
        pageLength: 10,
        dom: 'Blfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
        columns: [{
                data: 'id'
            },
            {
                data: 'nama'
            },
            {
                data: 'harga'
            },
            {
                data: 'qty'
            },
            {
                data: 'show_photo'
            },
            {
                data: 'category_name'
            },
            {
                data: 'action',
                orderable: false,
                searchable: false
            }
        ]
    });

    // Handle form submit for add/edit
    $('#form-item').on('submit', function(e) {
        e.preventDefault();
        let id = $('#id').val();
        let url = save_method === 'add' ?
            "{{ url('products') }}" :
            "{{ url('products') }}/" + id;

        $.ajax({
            url: url,
            type: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function(data) {
                $('#exampleModal').modal('hide');
                $('#form-item')[0].reset();
                table.ajax.reload(null, false);

                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: data.message,
                    showConfirmButton: true, // Show OK button
                    confirmButtonText: 'OK', // Optional: Custom text for button
                });

            },
            error: function(xhr) {
                if (xhr.status === 422 && xhr.responseJSON.errors) {
                    let errorList = '';
                    $.each(xhr.responseJSON.errors, function(key, value) {
                        errorList += `${value[0]}<br>`;
                    });

                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        html: errorList
                    });
                } else {
                    Swal.fire('Oops!', 'Something went wrong.', 'error');
                }
            }
        });
    });

    // Delete action
    $(document).on('click', '.delete-product', function() {
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
                    url: '/products/' + id,
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

// Add product
function addForm() {
    save_method = "add";

    // Reset form
    $('#form-item')[0].reset();

    // Clear hidden ID field
    $('#id').val('');

    // Clear image preview
    $('#imagePreview').attr('src', '');

    // Reset select2 dropdown
    $('#category_id').val('').trigger('change');

    // Ensure modal title and method
    $('.modal-title').text('Add Product');
    $('input[name=_method]').val('POST');

    // Open modal
    $('#exampleModal').modal('show');
}


// Edit product
$(document).on('click', '.btn-edit', function() {
    var id = $(this).data('id');
    $.ajax({
        url: '/products/' + id,
        type: 'GET',
        success: function(data) {
            $('#exampleModal').modal('show');
            $('.modal-title').text('Edit Product');
            $('#id').val(data.id);
            $('#nama').val(data.nama);
            $('#harga').val(data.harga);
            $('#qty').val(data.qty);
            if (data.image) {
                $('#imagePreview').attr('src', '/' + data.image);
                $('#old_image').val(data.image); // store old path here
            } else {
                $('#imagePreview').attr('src', '');
                $('#old_image').val('');
            }


            $('#category_id').val(data.category_id).trigger('change');
            $('#category_id').select2({
                width: '100%',
                dropdownParent: $('#exampleModal')
            });
        },
        error: function(xhr) {
            alert('Failed to fetch data.');
        }
    });
});
</script>

@endpush