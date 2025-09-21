@extends('layouts.app')

@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <h1 class="page-title fw-semibold fs-18 mb-0">Outgoing Products</h1>
    <div class="ms-md-1 ms-0">
        <nav>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboards</a></li>
                <li class="breadcrumb-item active" aria-current="page">Outgoing</li>
            </ol>
        </nav>
    </div>
</div>

<div class="card custom-card">
    <div class="card-header justify-content-between flex-wrap">
        <h3 class="card-title">Outgoing Products List</h3>
        <button type="button" class="btn btn-primary" onclick="addOutgoing()">
            <i class="fa fa-plus"></i> Add New Outgoing Product
        </button>
    </div>

    <div class="card-body table-responsive">
        <table id="outgoingTable" class="table table-bordered w-100">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Customer</th>
                    <th>Products</th>
                    <th>Total Items</th>
                    <th>Total Qty</th>
                    <th>Total Amount</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<!-- Main Modal for Add/Edit -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form id="form-item" method="post" class="form-horizontal">
                @csrf
                @method('post')

                <div class="modal-header">
                    <h5 class="modal-title">Add Product Out</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <input type="hidden" id="id" name="id">

                    <!-- Customer and Date Section -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Customer <span class="text-danger">*</span></label>
                                <select name="customer_id" id="customer_id" class="form-control select2" >
                                    <option value="">-- Choose Customer --</option>
                                    @foreach($customers as $id => $name)
                                    <option value="{{ $id }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Date <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                    <input type="date" class="form-control" name="date_out" id="date_out" required>
                                </div>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Products Section -->
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="card-title mb-0">Products <span class="text-danger">*</span></h6>
                            <div class="d-flex align-items-center gap-3">
                                <span class="badge bg-info p-2" id="total-amount-badge">Total: 0.00 Rs</span>
                                <button type="button" class="btn btn-sm btn-success" onclick="addProductRow()">
                                    <i class="fa fa-plus"></i> Add Product
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="products-container">
                                <!-- Dynamic product rows will be added here -->
                            </div>
                            <div class="alert alert-info d-none" id="no-products-alert">
                                <i class="fa fa-info-circle"></i> Please add at least one product.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                        <i class="fa fa-times me-1"></i> Cancel
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-check me-1"></i> Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- View Modal -->
<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Product Out Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="view-content">
                <!-- Details will be loaded here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Print Receipt Modal -->
<div class="modal fade" id="printModal" tabindex="-1" aria-labelledby="printModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Print Receipt</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div  id="receipt-content">
                    <!-- Receipt content will be loaded here -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="printReceipt()">
                    <i class="fa fa-print me-1"></i> Print Receipt
                </button>
            </div>
        </div>
    </div>
</div>
@include('product_out.print')

@endsection

@push('scripts')
<script>
let table;
let currentMode = 'add';
let rowCounter = 0;
let availableProducts = @json($products);

$(function() {
    // Setup CSRF token for AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Initialize Select2 for customer
    initializeCustomerSelect2();

    // SweetAlert helper functions
    const swalSuccess = (message) => {
        return Swal.fire({
            icon: 'success',
            title: 'Success',
            text: message,
            confirmButtonText: 'OK'
        });
    };

    const swalError = (message) => {
        return Swal.fire({
            icon: 'error',
            title: 'Error',
            text: message,
            confirmButtonText: 'OK'
        });
    };

    // Initialize DataTable
    table = $('#outgoingTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('product_out.data') }}",
        lengthMenu: [
            [10, 25, 50, 100],
            [10, 25, 50, 100]
        ],
        pageLength: 10,
        dom: 'Blfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
        columns: [{
                data: 'DT_RowIndex',
                orderable: false,
                searchable: false
            },
            {
                data: 'customer_name',
                name: 'customer.name'
            },
            {
                data: 'products_list',
                name: 'products_list',
                orderable: false
            },
            {
                data: 'total_products',
                name: 'total_products',
                orderable: false
            },
            {
                data: 'total_quantity',
                name: 'total_quantity',
                orderable: false
            },
            {
                data: 'total_amount',
                name: 'total_amount',
                orderable: false
            },
            {
                data: 'date_out',
                name: 'date_out'
            },
            {
                data: 'action',
                orderable: false,
                searchable: false
            }
        ],
        columnDefs: [{
            className: 'text-center',
            targets: [0, 3, 4, 5, 7]
        }]
    });

    // Modal reset on hide
    $('#exampleModal').on('hidden.bs.modal', function() {
        resetModalCompletely();
    });

    // Edit button click
    $(document).on('click', '.editOutgoing', function() {
        var id = $(this).data('id');
        currentMode = 'edit';
        resetModalCompletely();

        $.get("{{ url('product-out') }}/" + id + "/edit", function(data) {
            $('#id').val(data.id);
            $('#customer_id').val(data.customer_id).trigger('change');
            $('#date_out').val(data.date_out);
            $('.modal-title').text('Edit Product Out');

            // Add product rows from data
            if (data.items && data.items.length > 0) {
                data.items.forEach(function(item) {
                    addProductRow(item.product_id, item.qty);
                });
            } else {
                addProductRow(); // Add empty row if no items
            }

            $('#exampleModal').modal('show');
        }).fail(function() {
            swalError('Unable to fetch record for editing.');
        });
    });

    // View button click
    $(document).on('click', '.viewOutgoing', function() {
        var id = $(this).data('id');

        $.get("{{ url('product-out') }}/" + id, function(data) {
            var totalAmount = data.items.reduce((sum, item) => sum + parseFloat(item
                .total_price || 0), 0);
            var html = `
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Customer:</strong> ${data.customer.name || data.customer.nama || '-'}</p>
                        <p><strong>Date:</strong> ${data.date_out}</p>
                        <p><strong>Total Items:</strong> ${data.items.length}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Total Quantity:</strong> ${data.items.reduce((sum, item) => sum + item.qty, 0)}</p>
                        <p><strong>Total Amount:</strong> ₹ ${totalAmount.toFixed(2)}</p>
                        <p><strong>Created:</strong> ${new Date(data.created_at).toLocaleString()}</p>
                    </div>
                </div>
                <hr>
                <h6>Products:</h6>
                <div class="table-responsive">
                    <table class="table table-sm table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Unit Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
            `;

            data.items.forEach(function(item, index) {
                html += `
                    <tr>
                        <td>${index + 1}</td>
                        <td>${item.product.nama}</td>
                        <td>₹ ${parseFloat(item.unit_price || 0).toFixed(2)}</td>
                        <td>${item.qty}</td>
                        <td>₹ ${parseFloat(item.total_price || 0).toFixed(2)}</td>
                    </tr>
                `;
            });

            html += `
                        </tbody>
                        <tfoot>
                            <tr class="table-primary">
                                <th colspan="4" class="text-end">Grand Total:</th>
                                <th>₹ ${totalAmount.toFixed(2)}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            `;

            $('#view-content').html(html);
            $('#viewModal').modal('show');
        }).fail(function() {
            swalError('Unable to fetch record details.');
        });
    });

    // Form submit (previous code remains same...)
    $('#form-item').on('submit', function(e) {
        e.preventDefault();

        if ($('.product-row').length === 0) {
            swalError('Please add at least one product.');
            return false;
        }

        let isValid = true;
        $('.product-row').each(function() {
            const productId = $(this).find('.product-select').val();
            const qty = $(this).find('.qty-input').val();

            if (!productId || !qty || qty <= 0) {
                isValid = false;
                return false;
            }
        });

        if (!isValid) {
            swalError('Please fill in all product fields with valid data.');
            return false;
        }

        var form = $(this);
        var submitBtn = $(this).find('button[type="submit"]');

        submitBtn.prop('disabled', true).html('<i class="fa fa-spinner fa-spin me-1"></i> Saving...');

        var productsData = [];
        $('.product-row').each(function() {
            const productId = $(this).find('.product-select').val();
            const qty = $(this).find('.qty-input').val();

            if (productId && qty) {
                productsData.push({
                    product_id: parseInt(productId),
                    qty: parseInt(qty)
                });
            }
        });

        var formData = {
            id: $('#id').val(),
            customer_id: $('#customer_id').val(),
            date_out: $('#date_out').val(),
            products: productsData
        };

        $.ajax({
            url: "{{ route('product_out.store') }}",
            method: "POST",
            data: formData,
            success: function(res) {
                $('#exampleModal').modal('hide');
                table.ajax.reload(null, false);
                swalSuccess(res.message);
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    var messages = [];
                    $.each(errors, function(k, v) {
                        messages.push(v[0]);
                    });
                    swalError(messages.join('\n'));
                } else if (xhr.responseJSON && xhr.responseJSON.message) {
                    swalError(xhr.responseJSON.message);
                } else {
                    swalError('Error saving data. Please try again.');
                }
            },
            complete: function() {
                submitBtn.prop('disabled', false).html(
                    '<i class="fa fa-check me-1"></i> Submit');
            }
        });
    });

    // Delete confirmation
    $(document).on('click', '.deleteOutgoing', function() {
        var id = $(this).data('id');

        Swal.fire({
            title: 'Are you sure?',
            text: "This will delete the record and restore stock for all products.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete',
            cancelButtonText: 'Cancel',
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{ url('product-out') }}/" + id,
                    method: 'DELETE',
                    success: function(res) {
                        table.ajax.reload(null, false);
                        swalSuccess(res.message);
                    },
                    error: function(xhr) {
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            swalError(xhr.responseJSON.message);
                        } else {
                            swalError('Error deleting record.');
                        }
                    }
                });
            }
        });
    });
});

// Function to add a product row
function addProductRow(selectedProductId = null, selectedQty = null) {
    rowCounter++;
    const isFirstRow = $('.product-row').length === 0;

    let productOptions = '<option value="">-- Choose Product --</option>';
    Object.entries(availableProducts).forEach(([id, name]) => {
        const selected = (selectedProductId && selectedProductId == id) ? 'selected' : '';
        productOptions += `<option value="${id}" ${selected}>${name}</option>`;
    });

    const removeButton = isFirstRow ?
        '<button type="button" class="btn btn-outline-secondary" disabled><i class="fa fa-lock"></i></button>' :
        '<button type="button" class="btn btn-outline-danger remove-product-row"><i class="fa fa-times"></i></button>';

    const rowHtml = `
        <div class="row product-row mb-3" data-row="${rowCounter}">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Product <span class="text-danger">*</span></label>
                    <select class="form-control product-select select2-product" name="products[${rowCounter}][product_id]" required>
                        ${productOptions}
                    </select>
                    <div class="invalid-feedback"></div>
                    <small class="form-text text-muted stock-info"></small>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label class="form-label">Unit Price</label>
                    <input type="text" class="form-control unit-price-display" readonly placeholder="₹ 0.00">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label class="form-label">Quantity <span class="text-danger">*</span></label>
                    <input type="number" class="form-control qty-input" 
                           name="products[${rowCounter}][qty]" 
                           placeholder="Enter qty" 
                           min="1" 
                           value="${selectedQty || ''}" 
                           required>
                    <div class="invalid-feedback"></div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label class="form-label">Total Price</label>
                    <input type="text" class="form-control total-price-display" readonly placeholder="₹ 0.00">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label class="form-label"></label>
                    <div class="d-flex gap-2">
                        
                        ${removeButton}
                    </div>
                </div>
            </div>
        </div>
    `;

    $('#products-container').append(rowHtml);

    // Initialize Select2 for the new product dropdown
    const newRow = $(`.product-row[data-row="${rowCounter}"]`);
    initializeProductSelect2(newRow);

    // If editing with selected product, trigger change to load price
    if (selectedProductId) {
        setTimeout(() => {
            newRow.find('.product-select').trigger('change');
        }, 100);
    }

    // Update no products alert visibility
    updateNoProductsAlert();
    updateTotalAmount();
}

// Function to initialize Select2 for product dropdowns
function initializeProductSelect2(row) {
    row.find('.product-select').select2({
        width: '100%',
        dropdownParent: $('#exampleModal'),
        placeholder: '-- Choose Product --',
        allowClear: true
    });
}

// Function to initialize customer Select2
function initializeCustomerSelect2() {
    $('#customer_id').select2({
        width: '100%',
        dropdownParent: $('#exampleModal'),
        placeholder: '-- Choose Customer --',
        allowClear: true
    });
}

// Function to add new outgoing product
function addOutgoing() {
    currentMode = 'add';
    resetModalCompletely();
    $('.modal-title').text('Add Product Out');
    addProductRow(); // Add initial empty row
    $('#exampleModal').modal('show');
}

// Add product row button click
$(document).on('click', '.add-product-row', function() {
    addProductRow();
});

// Remove product row button click
$(document).on('click', '.remove-product-row', function() {
    $(this).closest('.product-row').remove();
    updateNoProductsAlert();
    updateRowIndexes();
    updateTotalAmount();
});

// Product selection change - show stock info and price
$(document).on('change', '.product-select', function() {
    const productId = $(this).val();
    const row = $(this).closest('.product-row');
    const stockInfo = row.find('.stock-info');
    const unitPriceDisplay = row.find('.unit-price-display');
    const qtyInput = row.find('.qty-input');

    if (productId) {
        // Get product details via AJAX
        $.get("{{ url('product-out/get-product') }}/" + productId, function(data) {
            stockInfo.html(`<i class="fa fa-info-circle"></i> Available stock: ${data.stock}`);
            stockInfo.removeClass('text-danger').addClass('text-info');

            // Display unit price
            unitPriceDisplay.val(data.formatted_price);

            // Set max attribute for quantity input
            qtyInput.attr('max', data.stock);

            // Calculate total price if quantity exists
            calculateRowTotal(row);

        }).fail(function() {
            stockInfo.html('<i class="fa fa-exclamation-triangle"></i> Unable to fetch product info');
            stockInfo.removeClass('text-info').addClass('text-danger');
            unitPriceDisplay.val('₹ 0.00');
            qtyInput.removeAttr('max');
        });
    } else {
        stockInfo.html('');
        unitPriceDisplay.val('₹ 0.00');
        row.find('.total-price-display').val('₹ 0.00');
        qtyInput.removeAttr('max');
        updateTotalAmount();
    }
});

// Quantity input change - calculate total
$(document).on('input', '.qty-input', function() {
    const qty = parseInt($(this).val());
    const max = parseInt($(this).attr('max'));
    const row = $(this).closest('.product-row');

    if (max && qty > max) {
        $(this).addClass('is-invalid');
        $(this).siblings('.invalid-feedback').text(`Quantity cannot exceed available stock (${max})`);
    } else if (qty <= 0) {
        $(this).addClass('is-invalid');
        $(this).siblings('.invalid-feedback').text('Quantity must be greater than 0');
    } else {
        $(this).removeClass('is-invalid');
        $(this).siblings('.invalid-feedback').text('');
    }

    // Calculate total for this row
    calculateRowTotal(row);
});

// Function to calculate row total
function calculateRowTotal(row) {
    const qty = parseInt(row.find('.qty-input').val()) || 0;
    const unitPriceText = row.find('.unit-price-display').val();
    const unitPrice = parseFloat(unitPriceText.replace('₹ ', '').replace(',', '')) || 0;
    const total = qty * unitPrice;

    row.find('.total-price-display').val('₹ ' + total.toFixed(2));
    updateTotalAmount();
}

// Function to update total amount
function updateTotalAmount() {
    let grandTotal = 0;
    $('.total-price-display').each(function() {
        const priceText = $(this).val();
        const price = parseFloat(priceText.replace('₹ ', '').replace(',', '')) || 0;
        grandTotal += price;
    });

    $('#total-amount-badge').text('Total: ₹ ' + grandTotal.toFixed(2));
}

// Function to update no products alert
function updateNoProductsAlert() {
    const productRows = $('.product-row').length;
    if (productRows === 0) {
        $('#no-products-alert').removeClass('d-none');
    } else {
        $('#no-products-alert').addClass('d-none');
    }
}

// Function to update row indexes after removal
function updateRowIndexes() {
    $('.product-row').each(function(index) {
        const newIndex = index + 1;
        $(this).attr('data-row', newIndex);
        $(this).find('.product-select').attr('name', `products[${newIndex}][product_id]`);
        $(this).find('.qty-input').attr('name', `products[${newIndex}][qty]`);
    });
}

// Complete modal reset function
function resetModalCompletely() {
    // Reset form
    $('#form-item')[0].reset();

    // Clear all input values
    $('#id').val('');
    $('#date_out').val('');

    // Reset customer Select2
    $('#customer_id').val(null).trigger('change');

    // Clear products container
    $('#products-container').empty();
    rowCounter = 0;

    // Reset modal title
    $('.modal-title').text('');

    // Reset total amount
    $('#total-amount-badge').text('Total: ₹ 0.00');

    // Remove validation classes
    $('.form-control').removeClass('is-invalid is-valid');
    $('.invalid-feedback').text('');

    // Reset submit button
    $('#form-item button[type="submit"]').prop('disabled', false).html('<i class="fa fa-check me-1"></i> Submit');

    // Update alerts
    updateNoProductsAlert();

    // Reinitialize customer Select2
    setTimeout(function() {
        initializeCustomerSelect2();
    }, 100);
}
</script>


@endpush