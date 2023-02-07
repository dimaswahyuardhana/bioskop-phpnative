<?php
    include_once 'koneksi.php';
    include_once 'model/Kategori.php';
    //tangkap request form
    $nama_kategori = $_POST['nama_kategori'];
    //step 2 simpan ke array
    $data = [
        $nama_kategori
    ];
    //step 3 eksekusi tombol dengan mekanisme PDO
    $model = new Kategori();
    $tombol = $_REQUEST['proses'];
    switch ($tombol){
        case 'simpan':
            $model->simpan($data);
            break;
        default:
            header('location:index.php?hal=kategori');
            break;
    }
    //step 4 diarahkan ke suatu halaman jika sudah selesai prosesnya
    header('location:index.php?hal=kategori');
?>