@extends('layouts.app')
@section('content')
<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <h1 class="page-title fw-semibold fs-18 mb-0">Permissions Management</h1>
    <div class="ms-md-1 ms-0">
        <nav>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Permissions</li>
            </ol>
        </nav>
    </div>
</div>

<div class="card custom-card">
    <div class="card-header justify-content-between flex-wrap">
        <div>
            <h5 class="card-title mb-0">Manage System Permissions</h5>
            <p class="card-subtitle text-muted">Control access to different parts of your system</p>
        </div>
        @can('permissions-create')
        <button class="btn btn-primary" id="addPermissionBtn">
            <i class="bi bi-plus-circle me-1"></i> Add Permission
        </button>
        @endcan
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered w-100" id="permissions-table">
                <thead >
                    <tr>
                        <th>ID</th>
                        <th>Permission Name</th>
                        <th>Display Name</th>
                        <th>Module</th>
                        @canany(['permissions-edit', 'permissions-delete'])
                        <th>Actions</th>
                        @endcanany
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

@can('permissions-create')
<!-- Permission Modal -->
<div class="modal fade" id="permissionModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <form id="permissionForm">
            @csrf
            <input type="hidden" id="permission_id" name="permission_id">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="permissionModalLabel">Add Permission</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <!-- Permission Name -->
                        <div class="mb-3">
                            <label class="form-label">Permission Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="e.g., products-create" required>
                            <small class="form-text text-muted">Use kebab-case (module-action)</small>
                            <div class="invalid-feedback"></div>
                        </div>

                        <!-- Display Name -->
                        <div class=" mb-3">
                            <label class="form-label">Display Name <span class="text-danger">*</span></label>
                            <input type="text" name="display_name" id="display_name" class="form-control"
                                placeholder="e.g., Create Products" required>
                            <div class="invalid-feedback"></div>
                        </div>

                        <!-- Module -->
                        <div class="mb-3">
                            <label class="form-label">Module <span class="text-danger">*</span></label>
                            <select name="module" id="module" class="form-select" required>
                                <option value="">Select Module</option>
                                <option value="products">Products</option>
                                <option value="categories">Categories</option>
                                <option value="inventory">Inventory</option>
                                <option value="suppliers">Suppliers</option>
                                <option value="customers">Customers</option>
                                <option value="orders">Orders</option>
                                <option value="reports">Reports</option>
                                <option value="users">Users</option>
                                <option value="roles">Roles</option>
                                <option value="permissions">Permissions</option>
                                <option value="settings">Settings</option>
                                <option value="dashboard">Dashboard</option>
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>

                        <!-- Description -->
                        <div class=" mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="3"
                                placeholder="Brief description of what this permission allows"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="submitBtn" class="btn btn-primary">
                         Save Permission
                    </button>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                         Cancel
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endcan
@endsection

@push('scripts')
<script>
$(function() {
    let table;

    // Setup columns
    let columns = [{
            data: 'id',
            name: 'id'
        },
        {
            data: 'name',
            name: 'name'
        },
        {
            data: 'display_name',
            name: 'display_name'
        },
        {
            data: 'module',
            name: 'module',
            render: function(data) {
                return '<span class="badge bg-primary">' + (data ? data.charAt(0).toUpperCase() +
                    data.slice(1) : 'General') + '</span>';
            }
        }
    ];
    @canany(['permissions-edit', 'permissions-delete'])
    columns.push({
        data: 'action',
        name: 'action',
        orderable: false,
        searchable: false,
        className: 'text-center'
    });
    @endcanany

    // Initialize DataTable
    table = $('#permissions-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('permissions.data') }}",
        columns: columns,
        order: [
            [0, 'desc']
        ]
    });

    // Add Permission
    $('#addPermissionBtn').click(function() {
        resetForm();
        $('#permissionModalLabel').text('Add Permission');
        $('#permissionModal').modal('show');
    });

    // Submit form (Add/Edit)
    $('#permissionForm').submit(function(e) {
        e.preventDefault();
        let id = $('#permission_id').val();
        let method = id ? 'PUT' : 'POST';
        let url = id ? '/permissions/' + id : '/permissions';

        $.ajax({
            url: url,
            method: method,
            data: $(this).serialize(),
            success: function(res) {
                $('#permissionModal').modal('hide');
                table.ajax.reload();
                Swal.fire('Success', res.message, 'success');
            },
            error: function(xhr) {
                if (xhr.status === 422 && xhr.responseJSON.errors) {
                    $.each(xhr.responseJSON.errors, function(field, messages) {
                        $('#' + field).addClass('is-invalid')
                            .siblings('.invalid-feedback').text(messages[0]);
                    });
                } else {
                    Swal.fire('Error', xhr.responseJSON?.message || 'Something went wrong',
                        'error');
                }
            }
        });
    });

    // Edit Permission
    $(document).on('click', '.editPerm', function() {
        let permission = $(this).data('permission');
        permission = typeof permission === "string" ? JSON.parse(permission) : permission;

        resetForm();
        $('#permission_id').val(permission.id);
        $('#name').val(permission.name);
        $('#display_name').val(permission.display_name);
        $('#description').val(permission.description || '');
        $('#module').val(permission.module);
        $('#permissionModalLabel').text('Edit Permission');
        $('#permissionModal').modal('show');
    });

    // Delete Permission
    $(document).on('click', '.deletePerm', function() {
        let id = $(this).data('id');
        Swal.fire({
            title: 'Delete Permission?',
            text: "This action cannot be undone.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '/permissions/' + id,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(res) {
                        table.ajax.reload();
                        Swal.fire('Deleted!', res.message, 'success');
                    },
                    error: function(xhr) {
                        Swal.fire('Error', xhr.responseJSON?.message ||
                            'Failed to delete', 'error');
                    }
                });
            }
        });
    });

    function resetForm() {
        $('#permissionForm')[0].reset();
        $('#permission_id').val('');
        $('.is-invalid').removeClass('is-invalid');
        $('.invalid-feedback').text('');
    }
});
</script>
@endpush