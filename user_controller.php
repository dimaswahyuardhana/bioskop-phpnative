<?php
    session_start();
    include_once 'koneksi.php';
    include_once 'model/User.php';
    //tangkap request form login 
    $username = $_POST['username'];
    $password = $_POST['password'];
    //step 2 simpan ke array
    $data = [
        $username, // 1
        $password // 2
    ];
    //step 3 proses otentifikasi
    $model = new User();
    $rs = $model->cekLogin($data);
    if(!empty($rs)){
            $_SESSION['USER'] = $rs;
        //di arahkan ke suatu halaman 
        header('location:index.php?hal=home');
    }
    else{//gagal login
        echo '<script>alert("User/Password Anda Salah!!!");history.back();</script>';
    }
    
?>