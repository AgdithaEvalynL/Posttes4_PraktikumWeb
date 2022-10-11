<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hasil.css" >
    <title>Document</title>
</head>
<body>


<div class="container">
    <div class="date">
     Tanggal  :<?php echo $_POST['tanggal']?><br>
    </div>
    <div class="daftar">
        Nama Akun    :    <?php echo $_POST['nama']?> <br>
        Email        :    <?php echo $_POST['email']?>
        <div class="posisi">
            Message     : <?php echo $_POST['pesan'] ?><br>
        </div>
    </div>
</div>
</body>
</html>