<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
<section>
    <div class="d-flex" style="position: fixed; top: 10%; width: 30%; height:80vh;left: 40%; background: #f8f9fa; padding: 50px; border-radius: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); display: flex; flex-direction: column; align-items: center;">
    <h1 style="position:relative;left:-20%;">Add Schedule</h1>
    <br><br>
        <form action="<?= base_url('/jadwal/store') ?>" method="post" style="width: 100%; max-width: 400px;">
            <label for="nama" style="font-size: 18px; font-weight: bold; margin-bottom: 10px; display: block;">Terapist:</label>
            <select class="form-select" aria-label="Default select example" name="jadwal" style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px; margin-bottom: 20px;">
                <option selected>Choose Terapist</option>
                <?php
                foreach ($terapiss as $terapis){
                ?>
                <option value="<?=$terapis['id']?>"><?=$terapis['nama']?></option>
                <?php
                }
                ?>
            </select>
            

            <label for="umur" style="font-size: 18px; font-weight: bold; margin-bottom: 10px; display: block;">Time:</label>
            <input type="time" name="price"  required style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px; margin-bottom: 20px;">
            <br><br><br><br>
            <button class="mt-3" type="submit" style="background-color: #9F481B;width:100%; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Create Schedule</button>
        </form>
    </div>
</section>
<?= $this->endSection()?>