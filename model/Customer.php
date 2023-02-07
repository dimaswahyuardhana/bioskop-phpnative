<?php
    class Customer{
        //member 1 variable
        private $koneksi;
        //member 2 konstruktor untuk koneksi database
        public function __construct()
        {
            global $dbh; //panggil instance objek di koneksi.php
            $this->koneksi = $dbh;
        }
        //member 3 method2 CRUD
        public function dataCustomer(){
            $sql = " SELECT c.*,  
            j.tanggal, j.jam_mulai, j.jam_selesai,
            f.judul
            FROM customer c 
            INNER JOIN jadwal j ON j.id_jadwal = c.jadwal_id_jadwal
            INNER JOIN film f ON f.id_film = c.film_id_film;;
                ORDER BY c.id_customer DESC";
            //$data_pegawai = $dbh->query($sql);
            //menggunakan mekanisme prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute();
            $rs = $ps->fetchAll();
            return $rs;
        }
        public function getCustomer($id_customer){
            $sql = " SELECT c.*,  
                j.tanggal, j.jam_mulai, j.jam_selesai,
                f.judul
                FROM customer c 
                INNER JOIN jadwal j ON j.id_jadwal = c.jadwal_id_jadwal
                INNER JOIN film f ON f.id_film = j.film_id_film
                WHERE c.id_customer = ?";
            //menggunakan mekanisme prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute([$id_customer]);
            $rs = $ps->fetch();
            return $rs;
        }
        public function simpan($data){
            $sql = "INSERT INTO customer (nama, gender, no_hp, email, foto,jadwal_id_jadwal,film_id_film,kategori_id_kategori,alamat) VALUES (?,?,?,?,?,?,?,?,?)";
            //menggunakan mekanisme prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
        }
        public function ubah($data){
            $sql = "UPDATE customer SET nama=?, gender=?, no_hp=?, email=?, foto=?,jadwal_id_jadwal=?,film_id_film=?,kategori_id_kategori=?,alamat=? WHERE id_customer=?";
            //menggunakan mekanisme prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
        }
        public function hapus($id_customer){
            $sql = "DELETE FROM customer WHERE id_customer=?";
            //menggunakan mekanisme prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute([$id_customer]);
        }
    }
?>