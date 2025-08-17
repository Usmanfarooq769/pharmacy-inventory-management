@extends('layouts.app')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <h1 class="page-title fw-semibold fs-18 mb-0">Suppliers</h1>
    <div class="ms-md-1 ms-0">
        <nav>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                <li class="breadcrumb-item active" aria-current="page">Suppliers</li>
            </ol>
        </nav>
    </div>
</div>
<div class="card custom-card">

    <div class="card-header justify-content-between flex-wrap">
        <h3 class="card-title">List of Suppliers</h3>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa fa-plus"></i> Add Suppliers
        </button>
    </div>

    <!-- /.card-header -->
    <div class="card-body table-responsive">

        <table id="suppliersTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>

    </div>
    <!-- /.card-body -->
</div>

@include('suppliers.form_import')

@include('suppliers.form')

@endsection

@push('scripts')

<script>
$(function() {
    // CSRF header
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
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

    // DataTable init
    var table = $('#suppliersTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('api.suppliers') }}",
        dom: 'Blfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
        columns: [{
                data: 'DT_RowIndex',
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

    // Reset modal when hidden
    $('#exampleModal').on('hidden.bs.modal', function() {
        $(this).find('form')[0].reset();
        $('#id').val('');
        $('#supplierModalTitle').text('');
    });

    // Add button opens modal
    $('#addSupplier').on('click', function() {
        $('#form-item')[0].reset();
        $('#id').val('');
        $('#supplierModalTitle').text('Add Supplier');
        $('#exampleModal').modal('show');
    });

    // Edit - fill modal
    $(document).on('click', '.editSupplier', function() {
        var id = $(this).data('id');
        $.get("{{ url('suppliers') }}/" + id + "/edit")
            .done(function(data) {
                $('#id').val(data.id);
                $('#name').val(data.name);
                $('#address').val(data.address);
                $('#email').val(data.email);
                $('#phone').val(data.phone);
                $('#supplierModalTitle').text('Edit Supplier');
                $('#exampleModal').modal('show');
            })
            .fail(function() {
                swalError('Unable to fetch supplier data.');
            });
    });

    // Submit form (create/update)
    $('#form-item').on('submit', function(e) {
        e.preventDefault();
        var form = $(this);
        $.ajax({
            url: "{{ route('suppliers.store') }}",
            method: "POST",
            data: form.serialize(),
            success: function(res) {
                $('#exampleModal').modal('hide');
                table.ajax.reload(null, false);
                swalSuccess(res.message);
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    // validation errors
                    var errors = xhr.responseJSON.errors;
                    var messages = [];
                    $.each(errors, function(k, v) {
                        messages.push(v[0]);
                    });
                    swalError(messages.join('\n'));
                } else if (xhr.responseJSON && xhr.responseJSON.message) {
                    swalError(xhr.responseJSON.message);
                } else {
                    swalError('Error saving supplier.');
                }
            }
        });
    });

    // Delete with confirmation
    $(document).on('click', '.deleteSupplier', function() {
        var id = $(this).data('id');
        Swal.fire({
            title: 'Are you sure?',
            text: "This will permanently delete the supplier.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'OK',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{ url('suppliers') }}/" + id,
                    method: 'DELETE'
                }).done(function(res) {
                    table.ajax.reload(null, false);
                    swalSuccess(res.message);
                }).fail(function(xhr) {
                    if (xhr.responseJSON && xhr.responseJSON.message) swalError(xhr
                        .responseJSON.message);
                    else swalError('Error deleting supplier.');
                });
            }
        });
    });
});
</script>


<!-- {{--<script>--}}
    {{--$(function () {--}}
    {{--$('#items-table').DataTable()--}}
    {{--$('#example2').DataTable({--}}
    {{--'paging'      : true,--}}
    {{--'lengthChange': false,--}}
    {{--'searching'   : false,--}}
    {{--'ordering'    : true,--}}
    {{--'info'        : true,--}}
    {{--'autoWidth'   : false--}}
    {{--})--}}
    {{--})--}}
    {{--</script>--}}

    <script type="text/javascript">
        var table = $('#sales-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('api.suppliers') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'nama', name: 'nama'},
                {data: 'alamat', name: 'alamat'},
                {data: 'email', name: 'email'},
                {data: 'telepon', name: 'telepon'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });

        function addForm() {
            save_method = "add";
            $('input[name=_method]').val('POST');
            $('#modal-form').modal('show');
            $('#modal-form form')[0].reset();
            $('.modal-title').text('Add Suppliers');
        }

        function editForm(id) {
            save_method = 'edit';
            $('input[name=_method]').val('PATCH');
            $('#modal-form form')[0].reset();
            $.ajax({
                url: "{{ url('suppliers') }}" + '/' + id + "/edit",
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('#modal-form').modal('show');
                    $('.modal-title').text('Edit Suppliers');

                    $('#id').val(data.id);
                    $('#nama').val(data.nama);
                    $('#alamat').val(data.alamat);
                    $('#email').val(data.email);
                    $('#telepon').val(data.telepon);
                },
                error : function() {
                    alert("Nothing Data");
                }
            });
        }

        function deleteData(id){
            var csrf_token = $('meta[name="csrf-token"]').attr('content');
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#d33',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then(function () {
                $.ajax({
                    url : "{{ url('suppliers') }}" + '/' + id,
                    type : "POST",
                    data : {'_method' : 'DELETE', '_token' : csrf_token},
                    success : function(data) {
                        table.ajax.reload();
                        swal({
                            title: 'Success!',
                            text: data.message,
                            type: 'success',
                            timer: '1500'
                        })
                    },
                    error : function () {
                        swal({
                            title: 'Oops...',
                            text: data.message,
                            type: 'error',
                            timer: '1500'
                        })
                    }
                });
            });
        }

        $(function(){
            $('#modal-form form').validator().on('submit', function (e) {
                if (!e.isDefaultPrevented()){
                    var id = $('#id').val();
                    if (save_method == 'add') url = "{{ url('suppliers') }}";
                    else url = "{{ url('suppliers') . '/' }}" + id;

                    $.ajax({
                        url : url,
                        type : "POST",
                        //hanya untuk input data tanpa dokumen
//                      data : $('#modal-form form').serialize(),
                        data: new FormData($("#modal-form form")[0]),
                        contentType: false,
                        processData: false,
                        success : function(data) {
                            $('#modal-form').modal('hide');
                            table.ajax.reload();
                            swal({
                                title: 'Success!',
                                text: data.message,
                                type: 'success',
                                timer: '1500'
                            })
                        },
                        error : function(data){
                            swal({
                                title: 'Oops...',
                                text: data.message,
                                type: 'error',
                                timer: '1500'
                            })
                        }
                    });
                    return false;
                }
            });
        });
    </script> -->

@endpush