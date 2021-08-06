<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","olshop");

    if(@$_SESSION['login_status'] == true){
        $default = "asset/profil/default.jpg";
        if($_SESSION['foto']!=" "){
            $default = "asset/profil/".$_SESSION['foto'].".jpg";
        }
        if($_SESSION['username']!=""){
            $username = $_SESSION['username'];
        }
    }else{
        echo '<script>alert("Anda Belum Login!")</script>';
        header('location:index.php');
        exit();
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | TOKKO</title>
    <link rel="stylesheet" href="css/profil.css">
</head>

<?php
        $id = $_SESSION['id_pengguna'];
        $query = mysqli_query($conn, "select * from pengguna where id_pengguna='$id'");
        $data = mysqli_fetch_array($query);
        include 'function2.php';
?>

<body>
    <nav>
        <div class="atas">
            <div class="kiri">
                <ul>
                    <li>Ikuti Kami </li>
                    <li><a href="#"><img src="asset/img/fb.png" alt="chart"></a></li>
                    <li><a href="#"><img src="asset/img/instagram.png" alt="chart"></a></li>
                    <li><a href="#"><img src="asset/img/youtube.png" alt="chart"></a></li>
                </ul>
            </div>
            <div class="kanan">
                <div id="userr1">
                    <div class="dropbtn">
                        <div class="konten">
                            <img src=<?='"'.$default.'"'?> alt="">
                            <p><?=$username?></p>
                        </div>
                    </div>
                    <div class="dropdown-content">
                        <a href="#">Profil</a>
                        <a href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="navigation">
            <div class="logo">
                <h3>TOKKO</h3>
            </div>
            <div class="cari">
                <input type="search" name="cari" id="cari" placeholder="Celana jeans pria">
                <button>Cari</button>
            </div>
            <div class="chart">
                <a href="#"><img src="asset/img/chart.png" alt="chart"></a>
            </div>
        </div>
        <div class="menu">
            <div class="kiri">
                <ul>
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="">Kategori</a></li>
                    <li><a href="">Diskon</a></li>
                    <li><a href="">Profil</a></li>
                    <li><a href="">Toko Anda</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="side">

        </div>
        <div class="konten">
            <div id="box-1">
                <h4>Profil Saya</h4>
                <form action="" method="POST">
                    <div class="boxxx">
                        <div class="label">
                            <label for="nama">Nama</label>
                        </div>
                        <input type="text" name="nama" id="nama" class="input-control" value=<?='"'.@$data['nama'].'"'?>>
                    </div>
                    <div class="boxxx">
                        <div class="label">
                            <label for="nama">Username</label>
                        </div>
                        <input type="text" name="username" id="nama" class="input-control" value=<?='"'.@$data['username'].'"'?>>
                    </div>
                    <div class="boxxx">
                        <div class="label">
                            <label for="nama">Email</label>
                        </div>
                        <input type="text" name="email" id="nama" class="input-control" value=<?='"'.@$data['email'].'"'?> readonly>
                    </div>
                    <div class="boxxx">
                        <div class="label">
                            <label for="nama">Gender</label>
                        </div>
                        <select name="gender" id="gender" class="input-control">
                            <option value="Perempuan" <?php if(@$data['gender']=="Perempuan"){ echo 'selected'; } ?>>Perempuan</option>
                            <option value="Laki-Laki" <?php if(@$data['gender']=="Laki-Laki"){ echo 'selected'; } ?>>Laki-Laki</option>
                        </select>
                    </div>
                    <div class="boxxx">
                        <div class="label">
                            <label for="nama">No HP</label>
                        </div>
                        <input type="text" name="noHp" id="nama" class="input-control" value=<?='"'.@$data['noHp'].'"'; if(@$data['noHp']==""){ echo 'placeholder="Tambahkan Nomor Hp"';} ?>>
                    </div>



                    <div class="boxxx">
                        <div class="label">
                            <label for="nama">Tanggal Lahir</label>
                        </div>
                        <div class="box3">
                            <select name="tgl" id="tgl" class="input-control">
                                <?php 
                                
                                for($i=1; $i<=31; $i++){
                                    ?>
                                    <option value="<?=$i;?>" <?php if(@$tgl=="$i"){ echo "selected"; } ?>> <?=$i; ?></option>
                                    <?php
                                }
                                
                                ?>
                            </select> 
                        </div>
                        <div class="box3">
                            <select name="bln" id="bln" class="input-control">
                                <option value="1" <?php if(@$bln=="1"){ echo "selected"; } ?>>Januari</option>
                                <option value="2" <?php if(@$bln=="2"){ echo "selected"; } ?>>Februari</option>
                                <option value="3" <?php if(@$bln=="3"){ echo "selected"; } ?>>Maret</option>
                                <option value="4" <?php if(@$bln=="4"){ echo "selected"; } ?>>April</option>
                                <option value="5" <?php if(@$bln=="5"){ echo "selected"; } ?>>Mei</option>
                                <option value="6" <?php if(@$bln=="6"){ echo "selected"; } ?>>Juni</option>
                                <option value="7" <?php if(@$bln=="7"){ echo "selected"; } ?>>Juli</option>
                                <option value="8" <?php if(@$bln=="8"){ echo "selected"; } ?>>Agustus</option>
                                <option value="9" <?php if(@$bln=="9"){ echo "selected"; } ?>>September</option>
                                <option value="10" <?php if(@$bln=="10"){ echo "selected"; } ?>>Oktober</option>
                                <option value="11" <?php if(@$bln=="11"){ echo "selected"; } ?>>November</option>
                                <option value="12" <?php if(@$bln=="12"){ echo "selected"; } ?>>Desember</option>
                            </select>
                        </div>
                        <div class="box3">
                            <select name="thn" id="bln" class="input-control">
                                <?php
                                    for($i=1980; $i<=2020; $i++){
                                        ?>
                                        <option value="<?=$i;?>" <?php if(@$thn=="$i"){ echo "selected"; } ?>> <?=$i; ?></option>
                                        <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="boxxx">
                        <button class="btn-submit" type="submit" name="editProfil">Ganti Profil</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="foot">
        <div class="box-1">
            <div class="box-2">
                <p>Menu</p>
                <ul>
                    <li><a href="">Beranda</a></li>
                    <li><a href="">Kategori</a></li>
                    <li><a href="">Sponsor</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Profile</a></li>
                    <li><a href="">Logout</a></li>
                </ul>
            </div>
            <div class="box-2">
                <p>Menu</p>
                <ul>
                    <li><a href="">Beranda</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Sponsor</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Profile</a></li>
                    <li><a href="">Logout</a></li>
                </ul>
            </div>
            <div class="box-2">
                <p>Sosial Media</p>
                <ul>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Twitter</a></li>
                    <li><a href="">Instagram</a></li>
                    <li><a href="">Line</a></li>
                    <li><a href="">Youtube</a></li>
                </ul>
            </div>
        </div>
    </div>
    <footer>
        <small>
            Copyright &copy; #TanpaNamaTeam - All Right Reserved
        </small>
    </footer>
</body>
</html>