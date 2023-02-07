<?php
    include_once 'koneksi.php';
    include_once 'model/Customer.php';
    //tangkap request form
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $foto = $_POST['foto'];
    $jadwal = $_POST['jadwal'];
    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $alamat = $_POST['alamat'];
    //step 2 simpan ke array
    $data = [
        $nama, // 1
        $gender, // 2
        $no_hp, // 3
        $email, // 4
        $foto, // 5
        $jadwal, // 6
        $judul, // 7
        $kategori, // 8
        $alamat // 9
    ];
    //step 3 eksekusi tombol dengan mekanisme PDO
    $model = new Customer();
    $tombol = $_REQUEST['proses'];
    switch ($tombol){
        case 'simpan':
            $model->simpan($data);
            break;

        case 'ubah':
            //tangkap hidden field idx
            $data[] = $_POST['idx']; // untuk klausa whre id=?
            $model->ubah($data);
            break;

        case 'hapus':
            unset($data);
            //tangkap hidden field idx
            $model->hapus($_POST['idx']);
            break;
        default:
            header('location:index.php?hal=customer');
            break;
    }
    //step 4 diarahkan ke suatu halaman jika sudah selesai prosesnya
    header('location:index.php?hal=customer');
?>