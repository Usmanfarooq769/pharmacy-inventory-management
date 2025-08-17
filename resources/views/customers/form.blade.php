<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog"><!-- Log on to codeastro.com for more projects! -->
        <div class="modal-content">
            <form  id="form-item" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data" >
                 @csrf
                @method('POST')
                <div class="modal-header">
                    <h3 class="modal-title" id="customerModalTitle"></h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" >Name</label>
                            <input type="text" class="form-control" id="name" name="name"  autofocus required>
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address"   required>
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"   required>
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" >Phone</label>
                            <input type="text" class="form-control" id="number" name="number"   required>
                            <span class="help-block with-errors"></span>
                        </div>


                    </div><!-- Log on to codeastro.com for more projects! -->
                    <!-- /.card-body -->

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
</div>
<!-- /.modal -->
