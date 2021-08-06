<?php
    $conn = mysqli_connect("localhost","root","","olshop");
    session_start();
    $Error = true;
    $Error2 = false;


    // Login 
    if(isset($_POST['logSub'])){
        $user = $_POST['user'];
        $pass = $_POST['pass']; 

        $data = mysqli_query($conn, "select * from pengguna");
        //Cek ada atau tidak
        while($row = mysqli_fetch_array($data)){
            if($row['email']==$user || $row['noHp']==$user){
                if($pass==$row['password']){
                    $_SESSION['login_status'] = true;
                    $_SESSION['username'] = $row['username'];
                    if(!is_null($row['foto'])){
                        $_SESSION['foto'] = " ";
                    }else{
                        $_SESSION['foto'] = $row['foto'];
                    }
                    $_SESSION['id_pengguna'] = $row['id_pengguna'];
                    header('location:index.php');
                    exit();
                }else{
                    $_SESSION['salah'] = true;
                }
            }else{
                $_SESSION['salah'] = true;
            }
        }
        if($_SESSION['salah']==true){
            header('location:login.php');
        }
    }


    //Sign Up
    if(isset($_POST['signSub'])){
        $Error2 = false;
        $ErrorName = "";
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $gender = $_POST['gender'];
        $repass = $_POST['repass'];
        $name = data_input($_POST['nama']);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
            echo '<script>aler("Format Nama Salah!")</script>';
        }else{
            $Error = false;
        }
        $email = data_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo '<script>aler("Format Email Salah!")</script>';
        }else{
            $Error = false;
        }
        if($pass!=$repass){
            $ErrorPas = "Password tidak sama!";
        }else{
            $Error = false;
        }
        if($gender=="-"){
            $Error = true;
        }
        
        if($Error==false){
            $Query = mysqli_query($conn, "SELECT * FROM pengguna");
            while($row = mysqli_fetch_array($Query)){
                if($username == $row['username'] || $email == $row['email']){
                    $ErrorName = "Email atau username sudah ada!";
                    $Error2 = true;
                }else{
                    $Error2 = false;
                }
            }
            if($Error2 == false){
                $add = mysqli_query($conn, "INSERT INTO pengguna (`username`, `password` ,`nama` , `email`, `gender`) values('$username','$pass','$name','$email','$gender')");
                if($add){
                    $_SESSION['login_status'] = true;
                    $_SESSION['username'] = $username;
                    $_SESSION['foto'] = "\0";
                    $_SESSION['id_pengguna'] = $row['id_pengguna'];
                    header('location:index.php');
                }
            }
        }
    }
    if(isset($_POST['batal'])){
        $_SESSION['login_status'] = false;
        header('location:index.php');
    }
    //Data Input
    function data_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>