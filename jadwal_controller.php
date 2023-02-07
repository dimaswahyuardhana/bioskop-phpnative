<?php
    include_once 'koneksi.php';
    include_once 'model/Jadwal.php';
    //tangkap request form
    $tanggal = $_POST['tanggal'];
    $jam_mulai = $_POST['jam_mulai'];
    $jam_selesai = $_POST['jam_selesai'];
    $judul = $_POST['judul'];
    //step 2 simpan ke array
    $data = [
        $tanggal,
        $jam_mulai,
        $jam_selesai,
        $judul
    ];
    //step 3 eksekusi tombol dengan mekanisme PDO
    $model = new Jadwal();
    $tombol = $_REQUEST['proses'];
    switch ($tombol){
        case 'simpan':
            $model->simpan($data);
            break;
        default:
            header('location:index.php?hal=jadwal');
            break;
    }
    //step 4 diarahkan ke suatu halaman jika sudah selesai prosesnya
    header('location:index.php?hal=jadwal');
?>