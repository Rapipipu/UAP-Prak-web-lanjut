<section>
    <div class="d-flex" style="position:fixed;top:10%;width:60%;left:30%;background:white;padding:50px;border-radius:20px;">
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
      <td class="btn-custom"><a href="#" >Edit</a><a href="#" >Delete</a></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</div>
</section>
