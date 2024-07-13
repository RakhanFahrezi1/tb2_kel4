<!-- application/views/produk/create.php -->
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Tambah Produk</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="<?= base_url('produk/store'); ?>" method="POST">
                <div class="form-group">
                    <label for="no_item">Nomor Item</label>
                    <input type="text" class="form-control" id="no_item" name="no_item" required>
                </div>
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
                </div>
                <div class="form-group">
                    <label for="qty">Qty</label>
                    <input type="number" class="form-control" id="qty" name="qty" required>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>

</div>