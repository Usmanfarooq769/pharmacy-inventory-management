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
        <button type="button" class="btn btn-primary" onclick="addForm()">
            <i class="bi bi-plus-circle me-1"></i> Add Product
        </button>
    </div>

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
</div>

@include('products.form')
@endsection

@push('scripts')
<script>
let table;
let save_method = 'add';

$(document).ready(function() {
    // Initialize Select2
    $('#category_id').select2({
        width: '100%',
        dropdownParent: $('#exampleModal')
    });

    // Reset modal when hidden
    $('#exampleModal').on('hidden.bs.modal', function() {
        resetForm();
    });

    // Initialize DataTable
    table = $('#products-table').DataTable({
        serverSide: true,
        processing: true,
        ajax: '{{ route('api.products') }}',
        lengthMenu: [[10, 25, 50, 100], [10, 25, 50, 100]],
        pageLength: 10,
        dom: 'Blfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
        columns: [
            { data: 'id', width: '60px' },
            { data: 'nama' },
            { data: 'price', render: function(data) { return '$' + parseFloat(data).toFixed(2); }},
            { data: 'qty', className: 'text-center' },
            { data: 'show_photo', className: 'text-center', orderable: false },
            { data: 'category_name' },
            { data: 'action', orderable: false, searchable: false, className: 'text-center', width: '100px' }
        ],
        order: [[0, 'desc']]
    });

    // Handle form submit for add/edit
    $('#form-item').on('submit', function(e) {
        e.preventDefault();
        let id = $('#id').val();
        let url = save_method === 'add' ? "{{ url('products') }}" : "{{ url('products') }}/" + id;
        let method = save_method === 'add' ? 'POST' : 'PUT';

        // Create FormData object
        let formData = new FormData(this);
        
        // Add method override for PUT request
        if (save_method === 'edit') {
            formData.append('_method', 'PUT');
        }

        $.ajax({
            url: url,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function() {
                $('.btn-submit').prop('disabled', true).text('Saving...');
            },
            success: function(data) {
                $('#exampleModal').modal('hide');
                resetForm();
                table.ajax.reload(null, false);

                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: data.message,
                    showConfirmButton: true,
                    confirmButtonText: 'OK'
                });
            },
            error: function(xhr) {
                $('.btn-submit').prop('disabled', false).text('Submit');
                
                if (xhr.status === 422 && xhr.responseJSON.errors) {
                    let errorList = '';
                    $.each(xhr.responseJSON.errors, function(key, value) {
                        errorList += `• ${value[0]}<br>`;
                    });

                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Error',
                        html: errorList,
                        confirmButtonText: 'OK'
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Something went wrong. Please try again.',
                        confirmButtonText: 'OK'
                    });
                }
            }
        });
    });

    // Edit product
    $(document).on('click', '.btn-edit', function() {
        let id = $(this).data('id');
        save_method = 'edit';

        $.ajax({
            url: '/products/' + id + '/edit',
            type: 'GET',
            beforeSend: function() {
                $(this).prop('disabled', true);
            },
            success: function(data) {
                $('#exampleModal').modal('show');
                $('.modal-title').text('Edit Product');
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#price').val(data.price);
                $('#qty').val(data.qty);
                
                // Handle image preview
                if (data.image) {
                    $('#imagePreview').attr('src', '/' + data.image).show();
                    $('#old_image').val(data.image);
                } else {
                    $('#imagePreview').hide();
                    $('#old_image').val('');
                }

                // Set category
                $('#category_id').val(data.category_id).trigger('change');
            },
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Failed to fetch product data.',
                    confirmButtonText: 'OK'
                });
            },
            complete: function() {
                $('.btn-edit').prop('disabled', false);
            }
        });
    });

    // Delete product
    $(document).on('click', '.delete-product', function() {
        let id = $(this).data('id');

        Swal.fire({
            title: 'Are you sure?',
            text: 'You won\'t be able to revert this!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '/products/' + id,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    beforeSend: function() {
                        $('.delete-product[data-id="' + id + '"]').prop('disabled', true);
                    },
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Deleted!',
                            text: response.message,
                            confirmButtonText: 'OK'
                        });
                        table.ajax.reload(null, false);
                    },
                    error: function(xhr) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'Delete failed. Please try again.',
                            confirmButtonText: 'OK'
                        });
                    },
                    complete: function() {
                        $('.delete-product').prop('disabled', false);
                    }
                });
            }
        });
    });

    // Image preview on file select
    $('#image').on('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').attr('src', e.target.result).show();
            };
            reader.readAsDataURL(file);
        } else {
            $('#imagePreview').hide();
        }
    });
});

// Add product function
function addForm() {
    save_method = "add";
    resetForm();
    $('.modal-title').text('Add Product');
    $('#exampleModal').modal('show');
}

// Reset form function
function resetForm() {
    $('#form-item')[0].reset();
    $('#id').val('');
    $('#imagePreview').attr('src', '').hide();
    $('#old_image').val('');
    $('#category_id').val('').trigger('change');
    $('.help-block').text('');
    $('.form-control').removeClass('is-invalid');
    $('.btn-submit').prop('disabled', false).text('Submit');
    
    // Clear any validation errors
    $('.is-invalid').removeClass('is-invalid');
    $('.invalid-feedback').remove();
}
</script>
@endpush