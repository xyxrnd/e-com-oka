<?= $this->extend('template') ?>
<?= $this->section('title') ?>Daftar Menu<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="d-sm-flex align-items-center justify-content-between my-4">
    <h1 class="h3 mb-0 text-gray-800">Daftar Menu</h1>
    <a href="<?= base_url('AMenu/tambah') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-500"></i> Tambah
    </a>
</div>
<div class="my-4">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Menu</th>
                <th>Harga</th>
                <th>Foto Menu</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            <?php foreach ($menu as $m) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $m['nama_menu'] ?></td>
                    <td><?= $m['harga'] ?></td>
                    <img src="<?= base_url('foto/' . esc($m['foto_menu'])) ?>" alt="<?= esc($m['nama_menu']) ?>" style="width: 200px; height: auto;">
                    <td><a href="<?= base_url('AMenu/edit/' . $m['id_menu']) ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= base_url('AMenu/hapus/' . $m['id_menu']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('')">Hapus</a>
                    </td>
                    <!-- Baris lainnya di sini -->
        </tbody>
    <?php endforeach; ?>
    </table>

</div>
<?= $this->endSection() ?>