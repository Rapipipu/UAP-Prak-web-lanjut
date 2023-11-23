<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
<section>
    <div class="d-flex flex-column" style="position:fixed;top:10%;width:35%;height:80vh;left:40%;background:white;padding:50px;border-radius:20px;">
   <div class="d-flex flex-column" style="height:20%;width:100%;">
    <div>Welcome To ARX</div>
    <div><h1>Reservation</h1></div>
   </div>
   <div class="form-container" style="margin-top:5%;"  >
        <form>
        <div class="form-group">
          <label for="service">Service</label>
          <input type="text" class="form-control" id="service"  placeholder="">
        </div>
        <div class="form-group">
          <label for="schedule">Schedule</label>
          <input type="text" class="form-control" id="schedule" placeholder="">
        </div>
        <div class="form-group">
          <label for="date">Date</label>
          <input type="date" class="form-control" id="date" placeholder="">
        </div>
        <button type="submit" class="btn btn-1 " style="margin-top:10%;width:100%;">Submit</button>
      </form>
   </div>
</div>
</section>
<?= $this->endSection()?>
