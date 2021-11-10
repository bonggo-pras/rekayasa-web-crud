<div class="container pt-5">
    <a href="<?= base_url('makanan/tambah'); ?>" class="btn btn-success mb-2">Tambah Data</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data Makanan</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Makanan</th>
                            <th>Jumlah</th>
                            <th>Berat</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($getMakanan as $isi) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $isi['nama']; ?></td>
                                <td><?= $isi['jumlah']; ?></td>
                                <td>Rp<?= number_format($isi['berat']); ?>,-</td>
                                <td>Rp<?= number_format($isi['harga']); ?>,-</td>
                                <td>
                                    <a href="<?= base_url('makanan/edit/' . $isi['id_makanan']); ?>" class="btn btn-success">
                                        Edit</a>
                                    <a href="<?= base_url('makanan/hapus/' . $isi['id_makanan']); ?>" onclick="javascript:return confirm('Apakah ingin menghapus data makanan ?')" class="btn btn-danger">
                                        Hapus</a>

                                </td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>