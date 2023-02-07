<?php
    class Jadwal{
        //member 1 variable
        private $koneksi;
        //member 2 konstruktor untuk koneksi database
        public function __construct()
        {
            global $dbh; //panggil instance objek di koneksi.php
            $this->koneksi = $dbh;
        }
        //member 3 method2 CRUD
        public function dataJadwal(){
            $sql = "SELECT * FROM jadwal";
            //$data_pegawai = $dbh->query($sql);
            //menggunakan mekanisme prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute();
            $rs = $ps->fetchAll();
            return $rs;
        }
        public function simpan($data){
            $sql = "INSERT INTO jadwal (tanggal,jam_mulai,jam_selesai,film_id_film) VALUES (?,?,?,?)";
            //menggunakan mekanisme prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
        }
    }
?>