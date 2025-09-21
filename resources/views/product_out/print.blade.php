
<script>
$(document).on('click', '.printReceipt', function() {
    var id = $(this).data('id');

    $.get("{{ url('product-out') }}/" + id, function(data) {
        generateReceiptHTML(data);
        $('#printModal').modal('show');
    }).fail(function() {
        swalError('Unable to fetch receipt data.');
    });
});

// Generate Receipt HTML
function generateReceiptHTML(data) {
    var currentDate = new Date();
    var receiptNo = 'RC-' + data.id.toString().padStart(6, '0');
    var totalAmount = data.items.reduce((sum, item) => sum + parseFloat(item.total_price || 0), 0);
    var totalQty = data.items.reduce((sum, item) => sum + item.qty, 0);

    var html = `
        <div class="receipt-wrapper" id="receipt-print-area">
            <!-- Header -->
            <div class="receipt-header text-center mb-4">
                <h2 class="store-name">🏪 BHATTI GENERAL STORE</h2>
                <p class="store-address mb-1">
                    123 Medical Street, Health Plaza<br>
                    Rawalpindi, Punjab, Pakistan<br>
                    📞 Phone: +92-51-1234567 | 📧 info@bhattistore.com
                </p>
                <div class="receipt-line"></div>
            </div>

            <!-- Receipt Info -->
            <div class="receipt-info mb-3">
                <div class="row">
                    <div class="col-6">
                        <strong>Receipt No:</strong> ${receiptNo}<br>
                        <strong>Date:</strong> ${formatDate(data.date_out)}<br>
                        <strong>Time:</strong> ${currentDate.toLocaleTimeString()}
                    </div>
                    <div class="col-6 text-end">
                        <strong>Customer:</strong><br>
                        ${data.customer.name || data.customer.nama || 'Walk-in Customer'}<br>
                        <strong>Cashier:</strong> Admin
                    </div>
                </div>
            </div>

            <div class="receipt-line mb-3"></div>

            <!-- Items Table -->
            <div class="receipt-items">
                <table class="table table-sm receipt-table">
                    <thead>
                        <tr class="border-bottom">
                            <th class="text-start" style="width: 40%">ITEM</th>
                            <th class="text-center" style="width: 15%">QTY</th>
                            <th class="text-end" style="width: 22.5%">PRICE</th>
                            <th class="text-end" style="width: 22.5%">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>`;

    // Add each item
    data.items.forEach(function(item, index) {
        html += `
                        <tr>
                            <td class="item-name">${item.product.nama}</td>
                            <td class="text-center">${item.qty}</td>
                            <td class="text-end">₹${parseFloat(item.unit_price || 0).toFixed(2)}</td>
                            <td class="text-end">₹${parseFloat(item.total_price || 0).toFixed(2)}</td>
                        </tr>`;
    });

    html += `
                    </tbody>
                </table>
            </div>

            <div class="receipt-line mb-3"></div>

            <!-- Totals -->
            <div class="receipt-totals">
                <div class="row">
                    <div class="col-6">
                        <p class="mb-1"><strong>Total Items:</strong> ${data.items.length}</p>
                        <p class="mb-1"><strong>Total Quantity:</strong> ${totalQty}</p>
                    </div>
                    <div class="col-6">
                        <div class="total-section">
                            <div class="d-flex justify-content-between mb-1">
                                <span>Subtotal:</span>
                                <span>₹${totalAmount.toFixed(2)}</span>
                            </div>
                            <div class="d-flex justify-content-between mb-1">
                                <span>Tax (0%):</span>
                                <span>₹0.00</span>
                            </div>
                            <div class="receipt-line-thin"></div>
                            <div class="d-flex justify-content-between total-amount">
                                <strong>GRAND TOTAL:</strong>
                                <strong>₹${totalAmount.toFixed(2)}</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="receipt-line my-3"></div>

            <!-- Footer -->
            <div class="receipt-footer text-center">
                <p class="thank-you">🙏 THANK YOU FOR YOUR PURCHASE! 🙏</p>
                <p class="small-text">
                    Please keep this receipt for your records<br>
                    For any queries, contact us within 7 days<br>
                    <strong>Return Policy:</strong> Valid ID and receipt required
                </p>
                <div class="mt-3">
                    <p class="small-text">
                        🌟 <strong>Follow us:</strong> @BhattiGeneralStore<br>
                        💊 <strong>Your Health, Our Priority</strong> 💊
                    </p>
                </div>
                
                <!-- QR Code Placeholder -->
                <div class="qr-section mt-3">
                    <small>Scan for digital receipt:</small><br>
                    <div class="qr-placeholder">📱 QR CODE</div>
                </div>
            </div>
        </div>
    `;

    $('#receipt-content').html(html);
}

// Print Receipt Function
function printReceipt() {
    var printContent = document.getElementById('receipt-print-area').innerHTML;
    var originalContent = document.body.innerHTML;

    // Create print styles
    var printStyles = `
        <style>
            @media print {
                body * { visibility: hidden; }
                .receipt-print-area, .receipt-print-area * { visibility: visible; }
                .receipt-print-area { 
                    position: absolute; 
                    left: 0; 
                    top: 0; 
                    width: 100%;
                    font-family: 'Courier New', monospace;
                }
                .store-name { 
                    font-size: 24px !important; 
                    font-weight: bold !important;
                    margin-bottom: 10px !important;
                }
                .store-address { 
                    font-size: 12px !important; 
                    line-height: 1.4 !important;
                }
                .receipt-line { 
                    border-bottom: 2px solid #000 !important; 
                    margin: 10px 0 !important;
                }
                .receipt-line-thin { 
                    border-bottom: 1px solid #000 !important; 
                    margin: 5px 0 !important;
                }
                .receipt-table { 
                    width: 100% !important; 
                    font-size: 12px !important;
                }
                .receipt-table th, .receipt-table td { 
                    padding: 5px 2px !important;
                    border: none !important;
                }
                .total-amount { 
                    font-size: 16px !important; 
                    font-weight: bold !important;
                }
                .thank-you { 
                    font-size: 16px !important; 
                    font-weight: bold !important;
                    margin: 15px 0 !important;
                }
                .small-text { 
                    font-size: 10px !important; 
                    line-height: 1.3 !important;
                }
                .qr-placeholder { 
                    border: 1px solid #000; 
                    padding: 10px; 
                    display: inline-block; 
                    margin-top: 5px;
                }
            }
        </style>
    `;

    // Open print dialog
    var printWindow = window.open('', '_blank');
    printWindow.document.write(`
        <html>
            <head>
                <title>Receipt - Bhatti General Store</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
                ${printStyles}
            </head>
            <body>
                <div class="receipt-print-area">
                    ${printContent}
                </div>
            </body>
        </html>
    `);

    printWindow.document.close();
    printWindow.focus();

    setTimeout(() => {
        printWindow.print();
        printWindow.close();
    }, 250);
}

// Helper function to format date
function formatDate(dateString) {
    const date = new Date(dateString);
    return date.toLocaleDateString('en-GB', {
        day: '2-digit',
        month: '2-digit',
        year: 'numeric'
    });
}
</script>


<style>
.receipt-wrapper {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    font-family: 'Courier New', monospace;
border: 1px solid var(--primary-color);
   
}

.store-name {
    font-size: 20px;
    font-weight: bold;
    color: var(--primary-color);
    margin-bottom: 8px;
   
}

.store-address {
    font-size: 11px;
    line-height: 1.4;
}

.receipt-line {
    border-bottom: 2px solid var(--primary-color);
    margin: 10px 0;
}

.receipt-line-thin {
    border-bottom: 1px solid var(--primary-color);
    margin: 5px 0;
}

.receipt-info {
    font-size: 12px;
}

.receipt-table {
    font-size: 11px;
    margin-bottom: 0;
}

.receipt-table th {
    border-bottom: 1px solid var(--primary-color) !important;
    padding: 5px 2px !important;
    font-weight: bold;
}

.receipt-table td {
    padding: 3px 2px !important;
    border: none !important;
}

.item-name {
    font-weight: 500;
}

.receipt-totals {
    font-size: 12px;
}

.total-section {
   
    padding: 10px;
    border-radius: 5px;
}

.total-amount {
    font-size: 14px !important;
    font-weight: bold !important;
    color: var(--primary-color);
    margin-top: 5px !important;
}

.receipt-footer {
    font-size: 11px;
}

.thank-you {
    font-size: 14px;
    font-weight: bold;
    color: #28a745;
    margin: 15px 0;
}

.small-text {
    font-size: 9px;
    color: #666;
    line-height: 1.3;
}

.qr-placeholder {
    border: 1px solid #333;
    padding: 8px;
    display: inline-block;
    margin-top: 5px;
    font-size: 10px;
}

@media print {

    .modal-header,
    .modal-footer {
        display: none !important;
    }

    .receipt-wrapper {
        max-width: none !important;
        border: none !important;
        box-shadow: none !important;
    }
}
</style>