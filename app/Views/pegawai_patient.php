<?= $this->extend('layouts/apppegawai')?>

<?= $this->section('content')?>
<section>
    <div class="d-flex" style="position:fixed;top:10%;width:60%;left:30%;background:white;padding:50px;border-radius:20px;">
    <table class="table table-borderless table-responsive-xl">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Contact</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
    foreach ($pasienn as $pasien){
    ?>
    <tr>
      <th><?=$pasien['id']?></th>
      <td><?=$pasien['username']?></td>
      <td><?=$pasien['umur']?></td>
      <td><?=$pasien['telefon']?></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</div>
</section>
<?= $this->endSection()?>
