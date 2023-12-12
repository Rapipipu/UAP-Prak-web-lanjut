<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
<section>
    <div class="d-flex" style="margin-top:50px; position: absolute; top: 0%; width: 30%; height:80vh;left: 40%; background: #f8f9fa; padding: 50px; border-radius: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); display: flex; flex-direction: column; align-items: center;">
    <h1 style="position:relative;left:-20%;">Edit Patient</h1>
    <br><br>
    <form method="POST" action="<?= base_url('/pasien/edit/' . $pasien['id']) ?>" enctype="multipart/form-data" style="width: 100%;">
    <input type="hidden" name="_method" value="PUT">
    <div style="margin-bottom: 20px;">
    <?php if(null!=(session('errors'))){
        
       dd(session('errors'));
    }?>
                    <label for="nama" style="font-size: 18px; font-weight: bold; margin-bottom: 5px; display: block;">Email:</label>
                    <input type="text" name="email" value="<?= $pasien['email'] ?>" required style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px;">
                </div>
                <div style="margin-bottom: 20px;">
                    <label for="nama" style="font-size: 18px; font-weight: bold; margin-bottom: 5px; display: block;">Username:</label>
                    <input type="text" name="username" value="<?= $pasien['username'] ?>" required style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px;">
                </div>

                <div style="margin-bottom: 20px;">
                    <label for="umur" style="font-size: 18px; font-weight: bold; margin-bottom: 5px; display: block;">Age:</label>
                    <input type="text" name="umur" value="<?= $pasien['umur'] ?>" required style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px;">
                </div>

                <div style="margin-bottom: 20px;">
                    <label for="umur" style="font-size: 18px; font-weight: bold; margin-bottom: 5px; display: block;">Contact:</label>
                    <input type="text" name="telefon" value="<?= $pasien['telefon'] ?>" required style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px;">
                </div>
                <div style="margin-bottom: 20px;">
                    <label for="umur" style="font-size: 18px; font-weight: bold; margin-bottom: 5px; display: block;">Point:</label>
                    <input type="text" name="poin" value="<?= $pasien['poin'] ?>" required style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 5px;" readonly>
                </div>

                <button class="mt-3" type="submit" style="background-color: #9F481B;width:100%; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Submit</button>
        </form>
    </div>
</section>
<?= $this->endSection()?>