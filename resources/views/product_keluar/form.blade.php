<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <!-- Log on to codeastro.com for more projects! -->
        <div class="modal-content">
            <form id="form-item" method="post" class="form-horizontal" data-bs-toggle="validator"
                enctype="multipart/form-data">
                @csrf
                @method('post')

                <div class="modal-header">
                    <h3 class="modal-title"></h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Products</label>
                            <select name="product_id" id="product_id" class="js-example-placeholder-single js-states form-control select2" required>
                                <option value="">-- Choose Product --</option>
                                @foreach($products as $id => $name)
                                <option value="{{ $id }}">{{ $name }}</option>
                                @endforeach
                            </select>

                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Customer</label>
                            <select name="customer_id" id="customer_id" class="js-example-placeholder-single js-states form-control select2" required>
                                <option value="">-- Choose Customer --</option>
                                @foreach($customers as $id => $name)
                                <option value="{{ $id }}">{{ $name }}</option>
                                @endforeach
                            </select>
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Quantity</label>
                            <input type="number" class="form-control select2" id="qty" name="qty" required>
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Date</label>
                            <input  type="date" class="form-control" id="tanggal"
                                name="tanggal" required>
                            <span class="help-block with-errors"></span>
                        </div>

                    </div>
                    <!-- /.box-body -->

                </div>

                <div class="modal-footer text-end">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>
        </div>
        <!-- /.modal-content -->
    </div><!-- Log on to codeastro.com for more projects! -->
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->