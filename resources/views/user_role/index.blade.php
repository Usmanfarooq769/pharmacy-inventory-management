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
    <div class="card-header">
        <h5 class="card-title">User Role Management</h5>
    </div>
    <div class="card-body table-responsive">
        <table id="usersTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<!-- assign role modal -->
<div class="modal" id="assignRoleModal" tabindex="-1">
    <div class="modal-dialog">
        <form id="assignRoleForm">
            @csrf
            <input type="hidden" id="assign_user_id">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Assign Role</h5>
                </div>
                <div class="modal-body">
                    <label>Role</label>
                    <select id="assign_role" name="role_id" class="form-control">
                        <option value="">-- No role --</option>
                        @foreach($roles as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Assign</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(function() {
    var usersTable = $('#usersTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('users.data') }}",
        columns: [{
                data: 'DT_RowIndex',
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
                data: 'role_id'
            },
            {
                data: 'action',
                orderable: false,
                searchable: false
            }
        ]
    });

    $('#usersTable').on('click', '.editUserRole', function() {
        var id = $(this).data('id');
        $('#assignRoleForm')[0].reset();
        $.get("users/" + id + "/edit-role", function(res) {
            $('#assign_user_id').val(id);
            $('#assign_role').val(res.role_id).trigger('change');
            $('#assignRoleModal').modal('show');
        });
    });

    $('#assignRoleForm').submit(function(e) {
        e.preventDefault();
        var id = $('#assign_user_id').val();
        $.post("users/" + id + "/assign-role", $(this).serialize(), function(res) {
            $('#assignRoleModal').modal('hide');
            usersTable.ajax.reload();
            Swal.fire('Success', res.message, 'success');
        }).fail(function(xhr) {
            Swal.fire('Error', xhr.responseJSON?.message || 'Error', 'error');
        });
    });

    $('#assign_role').select2({
        width: '100%'
    });
});
</script>
@endpush