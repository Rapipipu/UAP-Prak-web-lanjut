<?= $this->extend('layouts/apppelanggan')?>

<?= $this->section('content')?>
<section>
    <div class="d-flex" style="position:fixed;top:10%;width:60%;left:30%;background:white;padding:50px;border-radius:20px;">
    <table class="table table-borderless table-responsive-xl">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Terapist</th>
      <th scope="col">Time</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
    foreach ($jadwall as $jadwal){
    ?>
    <tr>
      <th><?=$jadwal['id']?></th>
      <td><?=$jadwal['nama']?></td>
      <td><?=$jadwal['jam']?></td>
      <td class="btn-custom"><a href="#" >Edit</a><a href="#" >Delete</a></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</div>
</section>
<?= $this->endSection()?>
