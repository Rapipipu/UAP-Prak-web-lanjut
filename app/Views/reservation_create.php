<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
<section>
    <div class="d-flex flex-column" style="position:fixed;top:10%;width:35%;height:80vh;left:40%;background:white;padding:50px;border-radius:20px;">
   <div class="d-flex flex-column" style="height:20%;width:100%;">
    <div>Welcome To ARX</div>
    <div><h1>Reservation</h1></div>
   </div>
   <div class="form-container" style="margin-top:5%;"  >
        <form action="<?=base_url('/reservasi/store')?>" method="post">

        <div class="form-group">
          <label for="service">Service</label>
          <select class="form-select" aria-label="Default select example" name="layanan">
            <option selected>Choose Service</option>
            <?php
            foreach ($layanann as $layanan){
            ?>
            <option value="<?=$layanan['id']?>"><?=$layanan['layanan']?></option>
            <?php
            }
            ?>
          </select>
        </div>

        <div class="form-group">
          <label for="schedule">Schedule</label>
          <select class="form-select" aria-label="Default select example" name="jadwal">
            <option selected>Choose Practice Schedule</option>
            <?php
            foreach ($jadwall as $jadwal){
            ?>
            <option value="<?=$jadwal['id']?>"><?=$jadwal['jam']?></option>
            <?php
            }
            ?>
          </select>
        </div>


        <input name="tanggal"type="date" class="form-control" id="date" value="<?=$tanggal?>" hidden>
        <input name="status"type="text" class="form-control" id="date" value="berjalan" hidden>

        <button type="submit" class="btn btn-1 " style="margin-top:10%;width:100%;">Submit</button>
      </form>
   </div>
</div>
</section>
<?= $this->endSection()?>
