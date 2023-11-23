<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
<section>

    <div  style="position:fixed;top:10%;width:60%;left:30%;background:white;padding:50px;border-radius:20px;">

    <table class="table table-borderless table-responsive-xl">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
    foreach ($terapiss as $terapis){
    ?>
    <tr>
      <th><?=$terapis['id']?></th>
      <td><?=$terapis['nama']?></td>
      <td><?=$terapis['umur']?></td>
      <td class="btn-custom">
        <a href="<?= base_url('/terapis/edit/' . $terapis['id']) ?>">Edit</a>
        <a href="<?= base_url('/terapis/delete/' . $terapis['id']) ?>" >Delete</a>
      </td>
      
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
<?php if(in_groups('admin') || in_groups('pegawai')) : ?>
<a style="width: 10%;background:#9F481B;border-radius:15%;" href="<?= base_url('/terapis/create') ?>" class="btn text-white" >Add</a>
<?php endif; ?>
</div>
</section>
<?= $this->endSection()?>
