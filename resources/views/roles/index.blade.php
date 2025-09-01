@extends('layouts.app')
@section('content')
<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <h1 class="page-title fw-semibold fs-18 mb-0">roles</h1>
    <div class="ms-md-1 ms-0">
        <nav>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                <li class="breadcrumb-item active">roles</li>
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

        <table id="rolesTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Permissions</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>

<!-- Role Modal -->
<div class="modal" id="roleModal" tabindex="-1">
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
                        <label class="form-label">Role name</label>
                        <input type="text" id="role_name" name="name" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Permissions</label>
                        <select class="js-example-basic-multiple" name="states[]" multiple="multiple"
                            style="z-index:999 !important;">
                            <option value="" disabled>Select permissions</option>
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
@endsection

@push('scripts')
<!-- include select2 & sweetalert2 & datatables JS -->
<script>
$(function() {
    var rolesTable = $('#rolesTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('roles.data') }}",
        columns: [{
                data: 'DT_RowIndex',
                orderable: false,
                searchable: false
            },
            {
                data: 'name'
            },
            {
                data: 'permissions'
            },
            {
                data: 'action',
                orderable: false,
                searchable: false
            }
        ]
    });



    $('#createRoleBtn').click(function() {
        $('#roleForm')[0].reset();
        $('#role_id').val('');
        $('.modal-title').text('Create Role');
        $('#role_permissions').val(null).trigger('change');
        $('#roleModal').modal('show');
    });

    // edit
    $('#rolesTable').on('click', '.editRole', function() {
        var id = $(this).data('id');
        $.get("roles/" + id + "/edit", function(data) {
            $('#roleForm')[0].reset();
            $('.modal-title').text('Edit Role');
            $('#role_id').val(data.id);
            $('#role_name').val(data.name);
            var permIds = data.permissions.map(p => p.id);
            $('#role_permissions').val(permIds).trigger('change');
            $('#roleModal').modal('show');
        });
    });

    // save
    $('#roleForm').submit(function(e) {
        e.preventDefault();
        $.post("{{ route('roles.store') }}", $(this).serialize(), function(res) {
            $('#roleModal').modal('hide');
            rolesTable.ajax.reload();
            Swal.fire('Success', res.message, 'success');
        }).fail(function(xhr) {
            Swal.fire('Error', xhr.responseJSON?.message || 'Validation error', 'error');
        });
    });

    // delete
    $('#rolesTable').on('click', '.deleteRole', function() {
        var id = $(this).data('id');
        Swal.fire({
            title: 'Confirm',
            text: 'Delete role?',
            icon: 'warning',
            showCancelButton: true
        }).then(function(ans) {
            if (ans.isConfirmed) {
                $.ajax({
                    url: 'roles/' + id,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(res) {
                        rolesTable.ajax.reload();
                        Swal.fire('Deleted', res.message, 'success');
                    }
                });
            }
        });
    });

    // init select2
    $('#role_permissions').select2({
        width: '100%'
    });
});

$(document).ready(function() {
    $('.js-example-basic-multiple').select2({
        placeholder: "Select permissions", // 👈 placeholder text
        allowClear: true, // 👈 adds a little "x" to clear selection
        dropdownParent: $('#roleModal')
    });
});
</script>
@endpush