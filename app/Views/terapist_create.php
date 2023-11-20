<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<section>
    <div class="d-flex" style="position: fixed; top: 10%; width: 60%; left: 30%; background: #f8f9fa; padding: 50px; border-radius: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); display: flex; flex-direction: column; align-items: center;">
        <form action="<?= base_url('/terapis/store') ?>" method="post" style="width: 100%; max-width: 400px;">
            <label for="nama" style="font-size: 18px; font-weight: bold; margin-bottom: 10px; display: block;">Name:</label>
            <input type="text" name="nama" required style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px; margin-bottom: 20px;">
            

            <label for="umur" style="font-size: 18px; font-weight: bold; margin-bottom: 10px; display: block;">Age:</label>
            <input type="text" name="umur" required style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px; margin-bottom: 20px;">

            <button type="submit" style="background-color: #007bff; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Create Therapist</button>
        </form>
    </div>
</section>
<?= $this->endSection() ?>
