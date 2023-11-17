<?= $this->extend('layouts/appadmin') ?>

<?= $this->section('content') ?>
    <section>
        <div class="d-flex" style="position: fixed; top: 10%; width: 60%; left: 30%; background: #f8f9fa; padding: 50px; border-radius: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <form method="POST" action="<?= base_url('/terapis/' . $terapis['id']) ?>" enctype="multipart/form-data" style="width: 100%;">
                <input type="hidden" name="_method" value="PUT">

                <div style="margin-bottom: 20px;">
                    <label for="nama" style="font-size: 18px; font-weight: bold; margin-bottom: 10px; display: block;">Name:</label>
                    <input type="text" name="nama" value="<?= $terapis['nama'] ?>" required style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px;">
                </div>

                <div style="margin-bottom: 20px;">
                    <label for="umur" style="font-size: 18px; font-weight: bold; margin-bottom: 10px; display: block;">Age:</label>
                    <input type="text" name="umur" value="<?= $terapis['umur'] ?>" required style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px;">
                </div>

                <button type="submit" style="background-color: #007bff; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Update</button>
            </form>
        </div>
    </section>
<?= $this->endSection() ?>
