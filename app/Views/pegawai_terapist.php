<?= $this->extend('layouts/appadmin')?>

<?= $this->section('content')?>
<section>

    <div  style="position:fixed;top:10%;width:60%;left:30%;background:white;padding:50px;border-radius:20px;">
    <a style="width: 10%;" href="<?= base_url('terapis/create') ?>" class="btn btn-primary">Add</a>

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
      <a href="<?= base_url('terapis/' . $terapis['id'] . '/edit') ?>">Edit</a>
      <a href="#" >Delete</a>
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
