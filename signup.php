<?php
    require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR | TOKKO</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body style="background-color: rgb(0, 102, 255);">
    <div class="container">
        <div class="box-1">
            <div class="box-2">
                <form action="" class="form-control" method="POST">
                    <h3 align="center">Daftar | <span>TOKKO</span></h3><br>
                    <div class="input-group input-group-sm mb-4">
                        <input type="text" name="nama" class="form-control valdat" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required placeholder="Nama Lengkap...">
                    </div>
                    <p style="color: red;"><?= @$ErrorName; ?></p>
                    <div class="input-group input-group-sm mb-4">
                        <input type="text" name="username" class="form-control valdat" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required placeholder="Username">
                    </div>
                    <div class="input-group input-group-sm mb-4">
                        <input type="email" name="email" class="form-control valdat" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required placeholder="Email">
                    </div>
                    <div class="input-group input-group-sm mb-4">
                        <select name="gender" class="form-control" required>
                            <option value="-" disabled selected>--Jenis Kelamin--</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <p style="color: red;"><?= @$ErrorPas; ?></p>
                    <div class="input-group input-group-sm mb-4">
                        <input type="text" name="pass" class="form-control valdat" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required placeholder="Password">
                    </div>
                    <div class="input-group input-group-sm mb-4">
                        <input type="text" name="repass" class="form-control valdat" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required placeholder="Konfirmasi Password">
                    </div>
                    <div class="input-group input-group-sm mb-2">
                        <button class="btn btn-primary" type="submit" name="signSub">DAFTAR</button>
                    </div>
                    <div class="input-group input-group-sm mb-2">
                        <p>Sudah punya akun? <a href="login.php">Login Sekarang!</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>