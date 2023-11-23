<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
<section>
<div class="d-flex flex-column" style="position:fixed;top:10%;width:60%;left:30%;background:white;padding:50px;border-radius:20px;">
   <table class="table table-borderless table-responsive-xl">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Contact</th>
      <th scope="col">Point</th>
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
      <td><?=$pasien['poin']?></td>
      <?php if(in_groups('admin')): ?>
      <td class="btn-custom">
        <a href="<?= base_url('/pasien/edit/'.$pasien['id']) ?>" >Edit</a>
        <a href="<?= base_url('/pasien/delete/'.$pasien['id']) ?>" >Delete</a>
        <a href="<?= base_url('/pasien/turnadmin/'.$pasien['id']) ?>" >Turn Admin</a>
        <a href="<?= base_url('/pasien/turnpegawai/'.$pasien['id']) ?>" >Turn Employee</a>
      </td>
      <?php endif; ?>


      <!-- <td class="btn-custom"><a href="#" >Edit</a><a href="#" >Delete</a></td>
      <td class="btn-custom"><a href="#" >Add</a><a href="#" >Tambah</a></td> -->
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</div>
</section>
<?= $this->endSection()?>
