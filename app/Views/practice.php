<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
<section>
    <div class="d-flex flex-column" style="position:fixed;top:10%;width:60%;left:30%;background:white;padding:50px;border-radius:20px;">
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
      <?php if(in_groups('admin') || in_groups('pegawai')) : ?>
      <td class="btn-custom">
        <a href="<?= base_url('/jadwal/edit/' . $jadwal['id']) ?>">Edit</a>
        <a href="<?= base_url('/jadwal/delete/' . $jadwal['id']) ?>" >Delete</a>
      </td>
      <?php endif; ?>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
<?php if(in_groups('admin') || in_groups('pegawai')) : ?>
<a style="width: 10%;background:#9F481B;border-radius:15%;" href="<?= base_url('/jadwal/create') ?>" class="btn text-white" >Add</a>
<?php endif; ?>
</div>

</section>
<?= $this->endSection()?>
