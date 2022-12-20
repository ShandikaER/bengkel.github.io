<div class="content-wrapper">
    <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
        <div class="clearfix">
            <div class="float-left">
                <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
            </div>
            <div class="float-right">
                <a href="<?= site_url('Sparepart/tambah') ?>" class="btn btn-info mb-2">Tambah Sparepart</a>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Gambar</td>
                                <td>Nama</td>
                                <td>Stok</td>
                                <td>Harga</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($sparepart as $sp) : ?>
                                <tr>
                                    <td><?= $i; ?>.</td>
                                    <td><img src="<?= base_url('assets/admin/dist/img/sparepart/') . $sp['gambar'] ?>" alt="Gambar" class="img-thumbnail" style="width:100px"></td>
                                    <td><?= $sp['nama']; ?></td>
                                    <td><?= $sp['stok']; ?></td>
                                    <td>Rp. <?= $sp['harga']; ?></td>
                                    <td>
                                        <a href="<?= base_url('Sparepart/hapus/') . $sp['id']; ?>" class="badge badge-danger">Hapus</a>
                                        <a href="<?= base_url('Sparepart/edit/') . $sp['id']; ?>" class="badge badge-warning">Edit</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>