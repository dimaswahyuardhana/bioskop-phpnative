<?php
    include_once 'koneksi.php';
    include_once 'model/Film.php';
    //tangkap request form
    $nama_film = $_POST['judul'];
    $kategori = $_POST['nama_kategori'];
    //step 2 simpan ke array
    $data = [
        $nama_film,
        $kategori
    ];
    //step 3 eksekusi tombol dengan mekanisme PDO
    $model = new Film();
    $tombol = $_REQUEST['proses'];
    switch ($tombol){
        case 'simpan':
            $model->simpan($data);
            break;
        default:
            header('location:index.php?hal=film');
            break;
    }
    //step 4 diarahkan ke suatu halaman jika sudah selesai prosesnya
    header('location:index.php?hal=film');
?>