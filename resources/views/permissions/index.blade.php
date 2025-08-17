@extends('layouts.app')

@section('content')
<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <h1 class="page-title fw-semibold fs-18 mb-0">Permissions</h1>
    <div class="ms-md-1 ms-0">
        <nav>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                <li class="breadcrumb-item active">Permissions</li>
            </ol>
        </nav>
    </div>
</div>

<div class="card custom-card">
    <div class="card-header justify-content-between flex-wrap">
        <h5 class="card-title">Manage Permissions</h5>
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#permissionModal" id="addPermissionBtn">
            <i class="bi bi-plus-circle"></i> Add Permission
        </button>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="permissions-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Permission Name</th>
                    <th>Guard Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="permissionModal" tabindex="-1" aria-labelledby="permissionModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="permissionForm">
            @csrf
            <input type="hidden" id="permission_id" name="permission_id">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="permissionModalLabel">Add Permission</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Permission Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Guard Name</label>
                        <input type="text" name="guard_name" id="guard_name" class="form-control" value="web" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(function() {
    let table = $('#permissions-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('permissions.data') }}",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'guard_name', name: 'guard_name' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    });

    // Open modal for Add
    $('#addPermissionBtn').click(function() {
        $('#permissionForm')[0].reset();
        $('#permission_id').val('');
        $('#permissionModalLabel').text('Add Permission');
    });

    // Submit form (Add/Edit)
    $('#permissionForm').on('submit', function(e) {
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
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: res.message,
                    confirmButtonText: 'OK'
                });
            },
            error: function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: xhr.responseJSON?.message || 'Something went wrong',
                    confirmButtonText: 'OK'
                });
            }
        });
    });

    // Edit
    $(document).on('click', '.editPerm', function() {
        let permission = $(this).data('permission');
        $('#permission_id').val(permission.id);
        $('#name').val(permission.name);
        $('#guard_name').val(permission.guard_name);
        $('#permissionModalLabel').text('Edit Permission');
        $('#permissionModal').modal('show');
    });

    // Delete
    $(document).on('click', '.deletePerm', function() {
        let id = $(this).data('id');
        Swal.fire({
            icon: 'warning',
            title: 'Are you sure?',
            text: 'This action cannot be undone',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '/permissions/' + id,
                    method: 'DELETE',
                    data: { _token: '{{ csrf_token() }}' },
                    success: function(res) {
                        table.ajax.reload();
                        Swal.fire({
                            icon: 'success',
                            title: 'Deleted',
                            text: res.message,
                            confirmButtonText: 'OK'
                        });
                    }
                });
            }
        });
    });
});
</script>
@endpush
