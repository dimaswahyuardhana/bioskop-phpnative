<?php
  //ciptakan objek dari class Pegawai
  $obj_jadwal = new Jadwal();
  $obj_film = new Film();
  $obj_kategori = new Kategori();
  $obj_customer = new Customer();
  //panggil fungsi untuk menampilkan data pegawai
  $data_jadwal = $obj_jadwal->dataJadwal();
  $data_film = $obj_film->dataFilm();
  $data_kategori = $obj_kategori->dataKategori();
  
  //PROSES EDIT DATA
  $id_customeredit = $_REQUEST['id_customeredit'];
  $cus = !empty($id_customeredit) ? $obj_customer->getCustomer($id_customeredit) : array();
/*
foreach ($data_pegawai as $row) {
    print $row['nip'] . "\t";
    print $row['nama'] . "\t";
    print $row['alamat'] . "\n";
}
*/
?>
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>EDIT DATA</h2>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-8">
          <form action="customer_controller.php" method="POST">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="nama" name="nama" type="text" placeholder="Nama" value="<?= $cus['nama'] ?>" data-sb-validations="" />
                        <label class="form-label" for="nama">Nama</label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label d-block">Jenis Kelamin</label>
                        <?php
                            $ar_gender = ['L'=>'Laki-Laki', 'P'=>'Perempuan'];
                            foreach($ar_gender as $k => $jk){
                                //proses edit gender
                                $cek = $cus['gender'] == $k ? 'checked' : '';
                        ?>
                        <div class="form-check">
                        
                            <input class="form-check-input" type="radio" name="gender" value="<?= $k ?>" <?= $cek ?>>
                            <label class="form-check-label">
                                <?= $jk ?>
                            </label>
                            </div>
                            <?php } ?>
                        </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="no_hp" name="no_hp" type="text" value="<?= $cus['no_hp'] ?>" placeholder="Nomor HP" value="<?= $cus['no_hp'] ?>"/>
                            <label for="nomorHp">Nomor HP</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" name="email" type="text" value="<?= $cus['email'] ?>" placeholder="Email"/>
                            <label for="email">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="foto" name="foto" type="text" value="<?= $cus['foto'] ?>" placeholder="foto"/>
                            <label for="foto">foto</label>
                        </div>
                        <div class="form-floating mb-3">
                        <label class="form-label">Jadwal Film</label><br><br>
                        <select class="form-select" id="jadwal" name="jadwal" aria-label="--- Pilih Judul Film ---">
                            <option selected>--- Pilih Jadwal ---</option>
                            <?php
                                foreach($data_jadwal as $jadwal){
                                    //edit jadwal
                                    $sel1 = $cus['jadwal_id_jadwal'] == $jadwal['id_jadwal'] ? 'selected' : '';
                            ?>
                            <option value="<?= $jadwal['id_jadwal'] ?>" <?= $sel1 ?>><?= $jadwal['tanggal'] ?></option>
                            <?php
                                }
                            ?>
                            </select>
                        </div>
                        <div class="form-floating mb-3">
                            <label class="form-label">Pilih Judul Film</label><br><br>
                            <select class="form-select" id="judul" name="judul" aria-label="--- Pilih Judul Film ---">
                            <option selected>--- Pilih Film ---</option>
                            <?php
                                foreach($data_film as $film){
                                    //edit film
                                    $sel2 = $cus['film_id_film'] == $film['id_film'] ? 'selected' : '';
                            ?>
                            <option value="<?= $film['id_film'] ?>"<?= $sel2 ?>><?= $film['judul'] ?></option>
                            <?php
                                }
                            ?>
                            </select>
                        </div>
                        <div class="form-floating mb-3">
                            <label class="form-label">Pilih Kategori Film</label><br><br>
                            <select class="form-select" id="pilihKategori" name="kategori" aria-label="--- Pilih Kategori ---">
                            <option selected>--- Pilih Kategori ---</option>
                            <?php
                                foreach($data_kategori as $kategori){
                                    //edit film
                                    $sel3 = $cus['kategori_id_kategori'] == $kategori['id_kategori'] ? 'selected' : '';
                            ?>
                            <option value="<?= $kategori['id_kategori'] ?>"<?= $sel3 ?>><?= $kategori['nama_kategori'] ?></option>
                            <?php
                                }
                            ?>
                            </select>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="alamat" name="alamat" type="text" placeholder="Alamat" style="height: 10rem;"></textarea>
                            <label><?= $cus['alamat'] ?></label>
                        </div>
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                <p>To activate this form, sign up at</p>
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <div class="text-center">
                            <?php
                                if(empty($id_customeredit)){// modus entri data baru, form dalam keadaan kosong
                            ?>
                            <button class="btn btn-primary btn-sm" type="submit" name="proses" value="simpan">SIMPAN</button><br><br>
                            <?php 
                                } 
                                else{
                            ?>
                            <button class="btn btn-success btn-sm" type="submit" name="proses" value="ubah">UPDATE</button><br><br>
                            <input type="hidden" name="idx" value="<?= $id_customeredit ?>">
                            <?php } ?>
                            <button class="btn btn-warning btn-sm" type="submit" name="proses" value="batal">BATAL</button>
                        </div>
                </form>


          </div><!-- End Contact Form -->

        </div>

      </div>
    </section>