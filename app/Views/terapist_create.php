<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<section>
    <div class="d-flex" style="position: fixed; top: 10%; width: 30%; height:50vh;left: 40%; background: #f8f9fa; padding: 50px; border-radius: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); display: flex; flex-direction: column; align-items: center;">
    <h1 style="position:relative;left:-20%;">Add Terapist</h1>
    <br><br>
    <form action="<?= base_url('/terapis/store') ?>" method="post" style="width: 100%; max-width: 400px;">
                <div style="margin-bottom: 20px;">
                    <label for="nama" style="font-size: 18px; font-weight: bold; margin-bottom: 10px; display: block;">Name:</label>
                    <input type="text" name="nama" required style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px;">
                </div>
                <div style="margin-bottom: 20px;">
                    <label for="nama" style="font-size: 18px; font-weight: bold; margin-bottom: 10px; display: block;">Age:</label>
                    <input type="text" name="umur" required style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px;">
                </div>

                <button class="mt-3" type="submit" style="background-color: #9F481B;width:100%; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Add Terapist</button>
        </form>
    </div>
</section>
<?= $this->endSection() ?>
