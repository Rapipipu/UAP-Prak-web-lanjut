<?= $this->extend('layouts/appadmin')?>

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
    foreach ($layanan as $layana){
    ?>
    <tr>
      <th><?=$layana['id']?></th>
      <td><?=$layana['layanan']?></td>
      <td><?=$layana['harga']?></td>
      <td class="btn-custom"><a href="<?= base_url('pegawai/layanan/edit/'.$layana['id']) ?>" >Edit</a><a href="<?= base_url('pegawai/layanan/delete/'.$layana['id']) ?>" >Delete</a></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
  
</table>
<a style="width: 10%;background:#9F481B;border-radius:15%;" href="<?= base_url('./pegawai/layanan/create') ?>" class="btn text-white" >Add</a>
  
</div>
</section>
<?= $this->endSection()?>