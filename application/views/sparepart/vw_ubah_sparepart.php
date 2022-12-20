<div class="content-wrapper">
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"></h1>
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <div class="card">
                    <div class="card-header justify-content-center">
                        Form Ubah Data Sparepart
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <input type="hidden" name="id" value="<?= $sparepart['id']; ?>">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" value="<?= $sparepart['nama']; ?>" class="form-control" id="nama" placeholder="nama">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input type="text" name="stok" value="<?= $sparepart['stok']; ?>" class="form-control" id="stok" placeholder="stok">
                                <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" name="harga" value="<?= $sparepart['harga']; ?>" class="form-control" id="harga" placeholder="harga">
                                <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <img src="<?= base_url('assets/admin/dist/img/sparepart/') . $sparepart['gambar'] ?>" alt="gambar" style="width:100px;" class="img-thumbnail">
                                <label for="gambar">Gambar</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                    <label for="gambar" class="custom-file-label">Choose File</label>
                                </div>
                                <?= form_error('gambar', '<small class="text-danger p1-3">', '</small>') ?>
                            </div>
                            <a href="<?= base_url('Sparepart') ?>" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data Sparepart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>