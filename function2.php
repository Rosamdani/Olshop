

<?php

    // Mengecek tanggal lahir
    if($data['tgl_lahir']==""){

    }else{
        $lahir = explode("-", $data['tgl_lahir']);
        $tgl = $lahir[0];
        $bln = $lahir[1];
        $thn = $lahir[2];
    }
    if(isset($_POST['editProfil'])){
        $id = $_SESSION['id_pengguna'];
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $noHp = $_POST['noHp'];
        $tglLahir = $_POST['tgl']."-".$_POST['bln']."-".$_POST['thn'];

        $update = mysqli_query($conn, "update pengguna set nama='$nama', username='$username', email='$email', noHp='$noHp', gender='$gender', tgl_lahir='$tglLahir' where id_pengguna='$id'");
        if($update){
            $_SESSION['username'] = $username;
            header('location:profil.php');
        }else{
            echo '<script>alert("Gagal Update")</script>';
        }
    }

?>