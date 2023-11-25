<!-- app/Views/edit_employee.php -->

<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>
<div class="container mt-4">
    <h2>Edit Pegawai</h2>
    <?php if (session()->has('errors')) : ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach (session('errors') as $error) : ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST" action="<?= base_url('/pegawai/edit/' . $pegawai['id'])?>" enctype="multipart/form-data" style="width: 100%;">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label for="username" class="form-label">Nama</label>
            <input type="text" class="form-control" id="username" name="username" value="<?= old('username', $pegawai['username']); ?>">
        </div>
        <div class="mb-3">
            <label for="umur" class="form-label">Umur</label>
            <input type="text" class="form-control" id="umur" name="umur" value="<?= old('umur', $pegawai['umur']); ?>">
        </div>
        <div class="mb-3">
            <label for="telefon" class="form-label">Contact</label>
            <input type="text" class="form-control" id="telefon" name="telefon" value="<?= old('telefon', $pegawai['telefon']); ?>">
        </div>
        <!-- Tambahkan input untuk kolom-kolom lain sesuai kebutuhan -->

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?= $this->endSection()?>