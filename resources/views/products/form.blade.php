<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <!-- Log on to codeastro.com for more projects! -->
        <div class="modal-content">
            <form id="form-item" method="post" class="form-horizontal" data-toggle="validator"
                enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="modal-header">
                    <h3 class="modal-title"></h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" id="nama" name="nama" autofocus required>
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="number" class="form-control" id="harga" name="harga" required>
                            <span class="help-block with-errors"></span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="qty" name="qty" required>
                            <span class="help-block with-errors"></span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="hidden" id="old_image" name="old_image">
                            <input type="file" class="form-control" id="image" name="image">

                            <!-- Image Preview -->
                            <img id="imagePreview" src="" alt="Current Image" class="mt-2" style="max-height: 100px;">

                            <span class="help-block with-errors"></span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select name="category_id" id="category_id"
                                class="js-example-placeholder-single js-states form-control select2 "
                                style="width:100% !important" required>
                                <option value="" selected>-- Choose Category --</option>
                                @foreach($category as $id => $name)
                                <option value="{{ $id }}">{{ $name }}</option>
                                @endforeach
                            </select>

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
    </div>
    <!-- /.modal-dialog -->
</div><!-- Log on to codeastro.com for more projects! -->
<!-- /.modal -->