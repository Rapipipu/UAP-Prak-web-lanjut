<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
<section>
    <div class="d-flex flex-column" style="position:fixed;top:10%;width:60%;left:30%;background:white;padding:50px;border-radius:20px;">
   <table class="table table-borderless table-responsive-xl">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Service</th>
      <th scope="col">Price</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
    foreach ($layanann as $layanan){
    ?>
    <tr>
      <th><?=$layanan['id']?></th>
      <td><?=$layanan['layanan']?></td>
      <td><?=$layanan['harga']?></td>
      <?php if(in_groups('admin') || in_groups('pegawai')) : ?>
      <td class="btn-custom">
        <a href="<?= base_url('/layanan/edit/'.$layanan['id']) ?>" >Edit</a>
        <a href="<?= base_url('/layanan/delete/'.$layanan['id']) ?>" >Delete</a>
      </td>
      <?php endif; ?>
    </tr>
    <?php
    }
    ?>
  </tbody>
  
</table>
<?php if(in_groups('admin') || in_groups('pegawai')) : ?>
<a style="width: 10%;background:#9F481B;border-radius:15%;" href="<?= base_url('/layanan/create') ?>" class="btn text-white" >Add</a>
<?php endif; ?>
</div>
</section>
<?= $this->endSection()?>