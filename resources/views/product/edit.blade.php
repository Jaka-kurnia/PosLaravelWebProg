<div class="modal-header">
    <h5 class="modal-title" id="editProductModalTitle">Edit Produk</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <form action="{{ route('product.update', $product->id) }}" method="POST" id="formProduct">
        @csrf
        @method('PUT')
        <div class="row g-3 mb-4">

            {{-- Kode Produk --}}
            <div class="col-12 col-md-6">
                <label class="form-label text-muted small fw-medium">Kode Produk</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="ti ti-hash"></i></span>
                    <input type="text" class="form-control" name="product_code" placeholder="PRD-001"
                        id="product_code" value="{{ $product->product_code }}">
                </div>
            </div>

            {{-- Nama Produk --}}
            <div class="col-12 col-md-6">
                <label class="form-label text-muted small fw-medium">Nama Produk</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="ti ti-package"></i></span>
                    <input type="text" class="form-control" name="product_name" placeholder="Nama lengkap produk"
                        id="product_name" value="{{ $product->product_name }}">
                </div>
            </div>

            {{-- Harga --}}
            <div class="col-12 col-md-6">
                <label class="form-label text-muted small fw-medium">Harga Jual</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text fw-medium">Rp</span>
                    <input type="number" class="form-control" name="price" placeholder="50000" id="price"
                        value="{{ $product->price }}">
                </div>
            </div>

            {{-- Satuan --}}
            <div class="col-12 col-md-6">
                <label class="form-label text-muted small fw-medium">Satuan</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="ti ti-box"></i></span>
                    <input type="text" class="form-control" name="unit" placeholder="Pcs, Kg, Box" id="unit"
                        value="{{ $product->unit }}">
                </div>
            </div>

            {{-- Kategori --}}
            <div class="col-12">
                <label class="form-label text-muted small fw-medium">Kategori Produk</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="ti ti-list"></i></span>
                    <select class="form-select" name="category_id" id="category_id">
                        <option value="" disabled>— Pilih kategori produk —</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->category_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

        </div>
        <div class="modal-footer">
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal">
                <i class="ti ti-refresh me-1"></i> Reset
            </button>
            <button type="submit" class="btn btn-primary" id="btnsubmmit">
                <i class="ti ti-device-floppy me-1"></i> Simpan Data
            </button>
        </div>
    </form>
</div>

<script>
    $("#formProduct").submit(function(e) {
        let product_code = $("#product_code").val();
        let product_name = $("#product_name").val();
        let price = $("#price").val();
        let unit = $("#unit").val();
        let category_id = $(this).find("#category_id").val();

        if (product_code == "") {
            Swal.fire({
                title: 'Error!',
                text: 'Product Code must be filled ',
                icon: 'error',
                confirmButtonText: 'OK',
                didClose: () => {
                    $("#product_code").focus();
                }
            });
            return false;
        } else if (product_name == "") {
            Swal.fire({
                title: 'Error!',
                text: 'Product Name must be filled ',
                icon: 'error',
                confirmButtonText: 'OK',
                didClose: () => {
                    $("#product_name").focus();

                }
            });
            return false;
        } else if (price == "") {
            Swal.fire({
                title: 'Error!',
                text: 'Price must be filled ',
                icon: 'error',
                confirmButtonText: 'OK',
                didClose: () => {
                    $("#price").focus();


                }
            });
            return false;
        } else if (unit == "") {
            Swal.fire({
                title: 'Error!',
                text: 'Unit must be filled ',
                icon: 'error',
                confirmButtonText: 'OK',
                didClose: () => {
                    $("#unit").focus();


                }
            });
            return false;
        } else if (category_id == "") {
            Swal.fire({
                title: 'Error!',
                text: 'Category must be selected ',
                icon: 'error',
                confirmButtonText: 'OK',
                didClose: () => {
                    $("#category_id").focus();
                }
            });
            return false;
        }

        $("#btnsubmmit").prop("disabled", true);
        $("#btnsubmmit").html(
            '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Loading...'
        );
        return true;
    });
</script>
