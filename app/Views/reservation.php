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
      <th scope="col"></th>
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
      <td class="btn-custom">
        <a href="<?= base_url('/reservasi/cancel/'.$reservasi['id']) ?>" >Cancel</a>
        <a href="<?= base_url('/reservasi/complete/'.$reservasi['id']) ?>" >Complete</a>
        <a target="blank" href="https://wa.me/<?=$reservasi['telefon']?>?text=Reservasi%20anda%20sudah%20dekat,%20tolong%20datang%20tepat%20waktu,%20terima%20kasih"><img width="25px" src="<?=base_url('/assets/img/WhatsApp.webp')?>"></a>
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</div>
</section>
<?= $this->endSection()?>
