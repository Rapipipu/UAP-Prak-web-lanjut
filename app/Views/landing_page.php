<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-color:#9F481B;">
    <nav class="nav" style="margin-top:10px;">
        <a class="nav-link active" aria-current="page" href="#" style="color:white; font-size:25px; margin-left:70px;">ARX</a>
        <a class="nav-link" href="<?=base_url('/login')?>" style="color:white; font-size:15px; margin-left:120px; margin-top:10px;">Sign In</a>
        <a class="nav-link" href="<?=base_url('/register')?>" style="color:white; font-size:15px; margin-top:10px;">Sign Up</a>
    </nav>


    <div style="display: flex;">
        <div style="margin-top:150px; margin-left:150px">
            <h1 style="font-size:80px; color:white;">ARMIANA<br>REFLEXOLOGY</h1>
            <p style="font-size:20px; color:white;">Work fatigue can cause a tired body. A tired body makes the mind <br> unfocused. Release the tension, forget the stress, and let reflexology be <br> your hero.</p>
        </div> 
        <img src="<?= base_url('assets/img/armiana.png') ?>" alt="Logo" style="margin-left:350px; margin-top:50px;">
    </div>

    <footer>
        <div style="display:flex; margin-left:150px; margin-top:40px">
            <p style="font-size:20px; color:white;">Hubungi Kami :</p>
            <p style="font-size:20px; color:white; margin-left:20px;">WhatsApp : 087766338899 <br> Instagram : @ARX <br> Twitter : @ARX</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>