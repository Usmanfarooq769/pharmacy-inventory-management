@extends('layouts.app')

@section('content')
<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <h1 class="page-title fw-semibold fs-18 mb-0">Roles</h1>
    <div class="ms-md-1 ms-0">
        <nav>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                <li class="breadcrumb-item active">Roles</li>
            </ol>
        </nav>
    </div>
</div>

<div class="card custom-card">
    <div class="card-header justify-content-between flex-wrap">
        <h5 class="card-title">Roles Management</h5>
        <button id="createRoleBtn" class="btn btn-primary mb-3">Create Role</button>
    </div>

    <div class="card-body table-responsive">
        <table id="usersTable" class="table table-bordered w-100" style="width:100% !important">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Profile</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Permissions</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>

<!-- Role Modal -->
<div class="modal fade" id="roleModal" tabindex="-1">
    <div class="modal-dialog">
        <form id="roleForm">
            @csrf
            <input type="hidden" id="role_id" name="id">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-2">
                        <label class="form-label">Display Name</label>
                        <input type="text" name="display_name" class="form-control" required>
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Description</label>
                        <input type="text" name="description" class="form-control">
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Role Name</label>
                        <input type="text" id="role_name" name="name" class="form-control" required>
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Assign Users</label>
                        <select id="role_users" name="users[]" class="form-control js-users-multiple" multiple="multiple">
                            @foreach($users as $id => $name)
                                <option value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Permissions</label>
                        <select id="role_permissions" name="permissions[]" class="form-control js-perms-multiple" multiple="multiple">
                            @foreach($permissions as $id => $name)
                                <option value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- User Permissions Modal -->
<div class="modal fade" id="userPermissionsModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">User Permissions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="userPermissionsForm">
                @csrf
                <input type="hidden" id="edit_user_id" name="user_id">
                <div class="modal-body">
                    <div class="mb-3">
                        <h6 id="userName" class="text-primary"></h6>
                        <small class="text-muted">Select/Deselect permissions for this user</small>
                    </div>
                    
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <label class="form-label fw-bold">Permissions</label>
                            <div>
                                <button type="button" class="btn btn-sm btn-success" id="selectAllPermissions">Select All</button>
                                <button type="button" class="btn btn-sm btn-danger" id="deselectAllPermissions">Deselect All</button>
                            </div>
                        </div>
                        
                        <div id="permissionsGrid" class="row">
                            <!-- Permissions will be loaded here dynamically -->
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('styles')
<style>
    .permission-checkbox {
        margin-bottom: 10px;
    }
    
    .permission-checkbox .form-check {
        padding: 8px 12px;
        border: 1px solid #e9ecef;
        border-radius: 5px;
        transition: all 0.2s ease;
    }
    
    .permission-checkbox .form-check:hover {
        background-color: #f8f9fa;
        border-color: #007bff;
    }
    
    .permission-checkbox .form-check-input:checked ~ .form-check-label {
        color: #007bff;
        font-weight: 500;
    }
    
    .permission-checkbox .form-check-input:checked ~ .form-check-label::before {
        background-color: #007bff;
    }
</style>
@endpush

@push('scripts')
<script>
$(function () {
    // Initialize DataTable
    var usersTable = $('#usersTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('roles.data') }}", // 👈 new route for users
        columns: [
            { data: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'profile', orderable: false, searchable: false },
            { data: 'name' },
            { data: 'email' },
            { data: 'roles' },
            { data: 'permissions' },
            { data: 'action', orderable: false, searchable: false }
        ]
    });

    // View User Permissions
    $('#usersTable').on('click', '.viewPermissions', function () {
        var userId = $(this).data('id');
        
        // Get user permissions
        $.get("{{ url('roles/user-permissions') }}/" + userId, function (data) {
            // Set user info
            $('#edit_user_id').val(userId);
            $('#userName').text(data.user.name + ' (' + data.user.email + ')');
            
            // Clear previous permissions
            $('#permissionsGrid').empty();
            
            // Create permission checkboxes (4 per row)
            var permissionsHtml = '';
            data.allPermissions.forEach(function (permission, index) {
                var isChecked = data.userPermissions.includes(permission.id) ? 'checked' : '';
                
                if (index % 4 === 0) {
                    permissionsHtml += '<div class="row mb-2">';
                }
                
                permissionsHtml += `
                    <div class="col-md-3 permission-checkbox">
                        <div class="form-check">
                            <input class="form-check-input permission-check" type="checkbox" 
                                   id="perm_${permission.id}" name="permissions[]" 
                                   value="${permission.id}" ${isChecked}>
                            <label class="form-check-label" for="perm_${permission.id}">
                                ${permission.name}
                            </label>
                        </div>
                    </div>
                `;
                
                if ((index + 1) % 4 === 0 || index === data.allPermissions.length - 1) {
                    permissionsHtml += '</div>';
                }
            });
            
            $('#permissionsGrid').html(permissionsHtml);
            $('#userPermissionsModal').modal('show');
            
        }).fail(function () {
            Swal.fire('Error', 'Could not load user permissions', 'error');
        });
    });

    // Select All Permissions
    $('#selectAllPermissions').click(function () {
        $('#permissionsGrid .permission-check').prop('checked', true);
    });

    // Deselect All Permissions
    $('#deselectAllPermissions').click(function () {
        $('#permissionsGrid .permission-check').prop('checked', false);
    });

    // Save User Permissions
    $('#userPermissionsForm').submit(function (e) {
        e.preventDefault();
        
        var userId = $('#edit_user_id').val();
        var formData = $(this).serialize();
        
        $.ajax({
            url: "{{ url('roles/user-permissions') }}/" + userId,
            type: 'POST',
            data: formData,
            success: function (response) {
                $('#userPermissionsModal').modal('hide');
                usersTable.ajax.reload();
                Swal.fire('Success', response.message, 'success');
            },
            error: function (xhr) {
                Swal.fire('Error', xhr.responseJSON?.message || 'Could not update permissions', 'error');
            }
        });
    });

    // Create Role Button
    $('#createRoleBtn').click(function () {
        $('#roleForm')[0].reset();
        $('#role_id').val('');
        $('.modal-title').text('Create Role');

        // Reset Select2
        $('#role_users').val(null).trigger('change');
        $('#role_permissions').val(null).trigger('change');

        $('#roleModal').modal('show');
    });

    // Edit Role
    $('#usersTable').on('click', '.editUser', function () {
        var id = $(this).data('id');
        $.get("roles/" + id + "/edit", function (data) {
            $('#roleForm')[0].reset();
            $('.modal-title').text('Edit Role');

            $('#role_id').val(data.id);
            $('#role_name').val(data.name);

            // ✅ Fix: fill display_name and description
            $('input[name="display_name"]').val(data.display_name);
            $('input[name="description"]').val(data.description);

            // Preselect permissions
            var permIds = data.permissions.map(p => p.id);
            $('#role_permissions').val(permIds).trigger('change');

            // Preselect users
            var userIds = data.users.map(u => u.id);
            $('#role_users').val(userIds).trigger('change');

            $('#roleModal').modal('show');
        });
    });

    // Save Role
    $('#roleForm').submit(function (e) {
        e.preventDefault();
        $.post("{{ route('roles.store') }}", $(this).serialize(), function (res) {
            $('#roleModal').modal('hide');
            usersTable.ajax.reload(); // Changed from rolesTable to usersTable
            Swal.fire('Success', res.message, 'success');
        }).fail(function (xhr) {
            Swal.fire('Error', xhr.responseJSON?.message || 'Validation error', 'error');
        });
    });

    // Delete Role
    $('#usersTable').on('click', '.deleteUser', function () {
        var id = $(this).data('id');
        Swal.fire({
            title: 'Confirm',
            text: 'Delete this role?',
            icon: 'warning',
            showCancelButton: true
        }).then(function (ans) {
            if (ans.isConfirmed) {
                $.ajax({
                    url: 'roles/' + id,
                    type: 'DELETE',
                    data: { _token: '{{ csrf_token() }}' },
                    success: function (res) {
                        usersTable.ajax.reload(); // Changed from rolesTable to usersTable
                        Swal.fire('Deleted', res.message, 'success');
                    },
                    error: function () {
                        Swal.fire('Error', 'Could not delete role.', 'error');
                    }
                });
            }
        });
    });

    // Initialize Select2
    $('.js-users-multiple, .js-perms-multiple').select2({
        width: '100%',
        placeholder: "Select options",
        allowClear: true,
        dropdownParent: $('#roleModal')
    });
});
</script>
@endpush