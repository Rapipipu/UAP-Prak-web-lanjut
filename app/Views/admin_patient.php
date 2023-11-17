<?= $this->extend('layouts/appadmin')?>

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
      <td class="btn-custom"><a href="<?= base_url('admin/pasien/edit/'.$pasien['id']) ?>" >Edit</a><a href="<?= base_url('admin/pasien/delete/'.$pasien['id']) ?>" >Delete</a></td>


      <!-- <td class="btn-custom"><a href="#" >Edit</a><a href="#" >Delete</a></td>
      <td class="btn-custom"><a href="#" >Add</a><a href="#" >Tambah</a></td> -->
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
<a style="width: 10%;background:#9F481B;border-radius:15%;" href="<?= base_url('./admin/pasien/create') ?>" class="btn text-white" >Add</a>
</div>
</section>
<?= $this->endSection()?>
