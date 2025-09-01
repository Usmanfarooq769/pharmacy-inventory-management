<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="form-item" method="post" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="modal-header">
                    <h4 class="modal-title">Add Product</h4>
                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                    <input type="hidden" id="old_image" name="old_image">
                    <div class="mb-3">
                        <label class="form-label">Product Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter product name"
                            autofocus required>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Category <span class="text-danger">*</span></label>
                        <select name="category_id" id="category_id" class="form-control select2" required>
                            <option value="">-- Select Category --</option>
                            @foreach($category as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Price <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input type="number" class="form-control" id="price" name="price" placeholder="0.00"
                                step="0.01" min="0" required>
                        </div>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Quantity <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="qty" name="qty" placeholder="0" min="0" required>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Image <span class="text-muted">(Optional)</span></label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                        <div class="form-text">Supported formats: JPG, JPEG, PNG, GIF, BMP, WEBP, SVG. Max size: 2MB
                        </div>
                        <div class="invalid-feedback"></div>

                        <!-- Image Preview -->
                        <div class="mt-3 text-center">
                            <img id="imagePreview" src="" alt="Image Preview" class="img-thumbnail"
                                style="max-height: 150px; display: none;">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-1"></i> Cancel
                    </button>
                    <button type="submit" class="btn btn-primary btn-submit">
                        <i class="bi bi-check-circle me-1"></i> Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
.img-thumbnail {
    border: 2px dashed #dee2e6;
    background-color: #f8f9fa;
}

.btn-submit:disabled {
    opacity: 0.6;
}
</style>