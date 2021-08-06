<?php
    include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | TOKKO</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <div class="box-1">
            <div class="login">
                <div class="logo"><h3>LOGIN | <span>TOKKO</span></h3></div>
                <form action="" method="POST">
                    <input class="input-control" type="text" name="user" placeholder="Email atau Nomor HP">
                    <input class="input-control" type="password" name="pass" placeholder="Kata sandi">
                    <a href="#" align="right">Lupa kata sandi?</a>
                    <button class="btn-sub" type="submit" name="logSub">Login</button>
                    <br>
                    <hr>
                    <div class="sosmed">
                        <button class="sos goo">Google</button>
                        <button class="sos fac">Facebook</button>
                        <button class="sos app">Apple</button>
                    </div>
                    <a href="signup.php" align="center" style="margin: 10px">Belum punya akun?<strong> Daftar Sekarang</strong></a>
                </form>
            </div>
            <div class="signup"></div>
        </div>
    </div>
</body>
    
</html>