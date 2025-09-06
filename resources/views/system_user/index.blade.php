@extends('layouts.app')
@section('content')
<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <h1 class="page-title fw-semibold fs-18 mb-0">User</h1>
    <div class="ms-md-1 ms-0">
        <nav>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                <li class="breadcrumb-item active">users</li>
            </ol>
        </nav>
    </div>
</div>

<div class="card custom-card">
    <div class="card-header justify-content-between flex-wrap">
        <h5 class="card-title">User Management</h5>
        <button class="btn btn-primary" id="createUserBtn">Add User</button>
    </div>

    <div class="card-body table-responsive">
        <table id="systemUsersTable" class="table table-bordered w-100" style="width:100% !important">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Profile</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>

<!-- User Modal -->
<div class="modal fade" id="userModal" tabindex="-1">
    <div class="modal-dialog">
        <form id="userForm" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="user_id" name="id">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-2 text-center">
                        <img id="profilePreview" src="{{ asset('traderPanel/images/userpic.png') }}"
                            class="rounded-circle mb-2" width="80" height="80" alt="Profile Preview">
                    </div>

                    <div class="mb-2">
                        <label>Profile Photo (Optional)</label>
                        <input type="file" name="profile_photo" class="form-control" accept="image/jpeg,image/jpg,image/png,image/gif"
                            onchange="previewImage(event)">
                        <small class="text-muted">Max size: 2MB. Supported formats: JPG, JPEG, PNG, GIF</small>
                    </div>

                    <div class="mb-2">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    
                    <div class="mb-2">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    
                    <div class="mb-2 password-field">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                        <small class="text-muted">Leave blank if not changing password</small>
                    </div>
                    
                    <div class="mb-2">
                        <label>Roles</label>
                        <select name="roles[]" id="rolesSelect" class="form-control" multiple required>
                            @foreach($roles as $id => $name)
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

<!-- User Permissions Modal (from roles functionality) -->
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
</style>
@endpush

@push('scripts')
<script>
$(function() {
    var usersTable = $('#systemUsersTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('users.data') }}",
        columns: [{
                data: 'DT_RowIndex',
                orderable: false,
                searchable: false
            },
            {
                data: 'profile',
                orderable: false,
                searchable: false
            },
            {
                data: 'name'
            },
            {
                data: 'email'
            },
            {
                data: 'roles'
            },
            {
                data: 'action',
                orderable: false,
                searchable: false
            }
        ]
    });

    // Create User
    $('#createUserBtn').click(function() {
        $('#userForm')[0].reset();
        $('#user_id').val('');
        $('.modal-title').text('Add User');
        $('.password-field').show();
        $('#rolesSelect').val(null).trigger('change');
        // Reset profile preview
        $('#profilePreview').attr('src', "{{ asset('traderPanel/images/userpic.png') }}");
        $('#userModal').modal('show');
    });

    // Edit User
    $('#systemUsersTable').on('click', '.editUser', function() {
        var id = $(this).data('id');
        $.get("{{ url('system-users') }}/" + id + "/edit", function(user) {
            $('#userForm')[0].reset();
            $('#user_id').val(user.id);
            $('.modal-title').text('Edit User');
            $('input[name="name"]').val(user.name);
            $('input[name="email"]').val(user.email);
            $('.password-field').show(); 

            // Set roles
            $('#rolesSelect').val(user.roles.map(r => r.id)).trigger('change');

            // Profile Photo Preview
            let photo = user.profile_photo_path 
                ? "{{ asset('storage') }}/" + user.profile_photo_path 
                : "{{ asset('traderPanel/images/userpic.png') }}";
            $('#profilePreview').attr('src', photo);

            $('#userModal').modal('show');
        }).fail(function() {
            Swal.fire('Error', 'Could not load user data', 'error');
        });
    });

    // View User Permissions
    $('#systemUsersTable').on('click', '.viewUser', function() {
        var userId = $(this).data('id');
        
        // Get user permissions
        $.get("{{ url('roles/user-permissions') }}/" + userId, function(data) {
            // Set user info
            $('#edit_user_id').val(userId);
            $('#userName').text(data.user.name + ' (' + data.user.email + ')');
            
            // Clear previous permissions
            $('#permissionsGrid').empty();
            
            // Create permission checkboxes (4 per row)
            var permissionsHtml = '';
            data.allPermissions.forEach(function(permission, index) {
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
            
        }).fail(function() {
            Swal.fire('Error', 'Could not load user permissions', 'error');
        });
    });

    // Select All Permissions
    $('#selectAllPermissions').click(function() {
        $('#permissionsGrid .permission-check').prop('checked', true);
    });

    // Deselect All Permissions
    $('#deselectAllPermissions').click(function() {
        $('#permissionsGrid .permission-check').prop('checked', false);
    });

    // Save User Permissions
    $('#userPermissionsForm').submit(function(e) {
        e.preventDefault();
        
        var userId = $('#edit_user_id').val();
        var formData = $(this).serialize();
        
        $.ajax({
            url: "{{ url('roles/user-permissions') }}/" + userId,
            type: 'POST',
            data: formData,
            success: function(response) {
                $('#userPermissionsModal').modal('hide');
                usersTable.ajax.reload();
                Swal.fire('Success', response.message, 'success');
            },
            error: function(xhr) {
                Swal.fire('Error', xhr.responseJSON?.message || 'Could not update permissions', 'error');
            }
        });
    });

    // Save User
    $('#userForm').submit(function(e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            url: "{{ route('users.store') }}",
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(res) {
                $('#userModal').modal('hide');
                usersTable.ajax.reload();
                Swal.fire('Success', res.message, 'success');
            },
            error: function(xhr) {
                var errors = xhr.responseJSON?.errors || {};
                var message = xhr.responseJSON?.message || 'Something went wrong';
                
                // Show specific validation errors if available
                if (Object.keys(errors).length > 0) {
                    var errorList = '';
                    Object.keys(errors).forEach(function(key) {
                        errorList += '• ' + errors[key][0] + '<br>';
                    });
                    message = errorList;
                }
                
                Swal.fire({
                    title: 'Error',
                    html: message,
                    icon: 'error'
                });
            }
        });
    });

    // Delete User
    $('#systemUsersTable').on('click', '.deleteUser', function() {
        var id = $(this).data('id');
        Swal.fire({
            title: 'Are you sure?',
            text: "This will delete the user!",
            icon: 'warning',
            showCancelButton: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{ url('system-users') }}/" + id,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(res) {
                        usersTable.ajax.reload();
                        Swal.fire('Deleted!', res.message, 'success');
                    },
                    error: function() {
                        Swal.fire('Error', 'Could not delete user', 'error');
                    }
                });
            }
        });
    });

    // Select2 for roles
    $('#rolesSelect').select2({
        width: '100%',
        dropdownParent: $('#userModal')
    });
});

function previewImage(event) {
    if (event.target.files && event.target.files[0]) {
        let reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('profilePreview').src = e.target.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
}
</script>
@endpush