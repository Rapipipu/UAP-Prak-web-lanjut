<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
<section>
    <div class="d-flex" style="position:fixed;top:10%;width:60%;left:30%;background:white;padding:50px;border-radius:20px;">
    <table class="table table-borderless table-responsive-xl">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Layanan</th>
      <th scope="col">Jadwal</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  <?php
    foreach ($reservasii as $reservasi){
    ?>
    <tr>
      <th><?=$reservasi['id']?></th>
      <td><?=$reservasi['username']?></td>
      <td><?=$reservasi['layanan']?></td>
      <td><?=$reservasi['jam']?></td>
      <td><?=$reservasi['tanggal']?></td>
      <td><?=$reservasi['status']?></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</div>
</section>
<?= $this->endSection()?>
