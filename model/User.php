<?php
    class User{
        //member 1 variable
        private $koneksi;
        //member 2 konstruktor untuk koneksi database
        public function __construct()
        {
            global $dbh; //panggil instance objek di koneksi.php
            $this->koneksi = $dbh;
        }
        //member 3 method2 CRUD
        public function dataUser(){
            $sql = "SELECT * FROM user ORDER BY id DESC";    
            //$data_User = $dbh->query($sql);
            //menggunakan mekanisme prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute();
            $rs = $ps->fetchAll();
            return $rs;
        }
        public function getUser($id){
            $sql = " SELECT * FROM user WHERE id = ?";
            //menggunakan mekanisme prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute([$id]);
            $rs = $ps->fetch();
            return $rs;
        }
        public function simpan($data){
            $sql = "INSERT INTO user (fullname, email, username, password, role, foto) VALUES (?,?,?,SHA1(MD5(SHA1(?))),?,?)";
            //menggunakan mekanisme prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
        }
        public function ubah($data){
            $sql = "UPDATE user SET fullname=?, email=?, username=?, password=SHA1(MD5(SHA1(?))), role=?, foto=? WHERE id=?";
            //menggunakan mekanisme prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
        }
        public function hapus($id){
            $sql = "DELETE FROM user WHERE id=?";
            //menggunakan mekanisme prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute([$id]);
        }
        public function cekLogin($data){
            $sql = "SELECT * FROM user WHERE username = ? AND password =SHA1(MD5(SHA1(?)))";
            //menggunakan mekanisme prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
            $rs = $ps->fetch();
            return $rs;
        }
    }
?>