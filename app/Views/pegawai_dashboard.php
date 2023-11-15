<?= $this->extend('layouts/apppegawai')?>

<?= $this->section('content')?>
<!-- User Table -->
<section id="dashboard">
  <div class="d-flex justify-content-between" style="width:40vw;height:60vh;">
        <div class="d-flex flex-column justify-content-between" style="height:100%;width:45%;">
            <div class="d-flex flex-column" style="background:white;height:45%;width:100%;border-radius:15px;">
                <div class="d-flex mx-2 mt-1"><h4><strong>Reservation</strong></h3></div>
                <div class="d-flex justify-content-center align-items-center" style="width:100%;height:60%;font-size:50px;"><strong><?=$reservasi?></strong></div>
            </div>
            <div class="d-flex flex-column" style="background:white;height:45%;width:100%;border-radius:15px;">
                <div class="d-flex mx-2 mt-1"><h4><strong>Terapist</strong></h3></div>
                <div class="d-flex justify-content-center align-items-center" style="width:100%;height:60%;font-size:50px;"><strong><?=$terapis?></strong></div>
            </div>
        </div>
        <div class="d-flex flex-column justify-content-between" style="height:100%;width:45%;">
        <div class="d-flex flex-column" style="background:white;height:45%;width:100%;border-radius:15px;">
                <div class="d-flex mx-2 mt-1"><h4><strong>Employee</strong></h3></div>
                <div class="d-flex justify-content-center align-items-center" style="width:100%;height:60%;font-size:50px;"><strong><?=$pegawai?></strong></div>
            </div>
            <div class="d-flex flex-column" style="background:white;height:45%;width:100%;border-radius:15px;">
                <div class="d-flex mx-2 mt-1"><h4><strong>Patient</strong></h3></div>
                <div class="d-flex justify-content-center align-items-center" style="width:100%;height:60%;font-size:50px;"><strong><?=$pelanggan?></strong></div>
            </div>
        </div>
    </div>
</section>
<!-- User Table -->
<?= $this->endSection()?>
