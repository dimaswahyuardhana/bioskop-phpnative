<?php
    session_start();//memulai session 
    include_once 'koneksi.php';
    include_once 'header.php';
    include_once 'navigation.php';

    include_once 'model/Customer.php';
    include_once 'model/Film.php';
    include_once 'model/Kategori.php';
    include_once 'model/Jadwal.php';
    include_once 'model/User.php';

    //area main di logic
    //tangkap request menu di url (index.php?hal=.....)
    if(isset($_REQUEST['hal'])){
        $hal = $_REQUEST['hal'];
    }
    //jika ada request dari menu di url tampilkan hal sesuai request
    if(!empty($hal)){
        include_once $hal.'.php';
    }
    else{//jika tidak ada request dari menu di url tampilkan hal home.php
        include_once 'home.php';
    }
    include_once 'footer.php';
    
    
?>
