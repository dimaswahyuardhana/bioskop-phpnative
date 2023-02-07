<?php
  //ciptakan objek dari class Pegawai
  $obj_jadwal = new Jadwal();
  $obj_film = new Film();
  $obj_kategori = new Kategori();
  //panggil fungsi untuk menampilkan data pegawai
  $data_jadwal = $obj_jadwal->dataJadwal();
  $data_film = $obj_film->dataFilm();
  $data_kategori = $obj_kategori->dataKategori();
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
          <h2>INPUT DATA</h2>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-8">
          <form action="customer_controller.php" method="POST">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="nama" name="nama" type="text" placeholder="Nama" data-sb-validations="" />
                        <label for="nama">Nama</label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label d-block">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="L">
                            <label class="form-check-label">
                                Laki-Laki
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="P">
                            <label class="form-check-label">
                                Perempuan
                            </label>
                            </div>
                        </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="no_hp" name="no_hp" type="text" placeholder="Nomor HP"/>
                            <label for="nomorHp">Nomor HP</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" name="email" type="text" placeholder="Email"/>
                            <label for="email">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="foto" name="foto" type="text" placeholder="foto"/>
                            <label for="foto">foto</label>
                        </div>
                        <div class="form-floating mb-3">
                        <select class="form-select" id="jadwal" name="jadwal" aria-label="--- Pilih Judul Film ---">
                            <option selected>--- Pilih Jadwal ---</option>
                            <?php
                                foreach($data_jadwal as $jadwal){
                            ?>
                            <option value="<?= $jadwal['id_jadwal'] ?>"><?= $jadwal['tanggal'] ?></option>
                            <?php
                                }
                            ?>
                            </select>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="judul" name="judul" aria-label="--- Pilih Judul Film ---">
                            <option selected>--- Pilih Film ---</option>
                            <?php
                                foreach($data_film as $film){
                            ?>
                            <option value="<?= $film['id_film'] ?>"><?= $film['judul'] ?></option>
                            <?php
                                }
                            ?>
                            </select>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="pilihKategori" name="kategori" aria-label="--- Pilih Kategori ---">
                            <option selected>--- Pilih Kategori ---</option>
                            <?php
                                foreach($data_kategori as $kategori){
                            ?>
                            <option value="<?= $kategori['id_kategori'] ?>"><?= $kategori['nama_kategori'] ?></option>
                            <?php
                                }
                            ?>
                            </select>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="alamat" name="alamat" type="text" placeholder="Alamat" style="height: 10rem;"></textarea>
                            <label for="alamat">Alamat</label>
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
                        <div class="d-grid">
                            <button class="btn btn-primary btn-sm" type="submit" name="proses" value="simpan">SIMPAN</button><br>
                            <button class="btn btn-primary btn-sm" type="submit" name="proses" value="batal">BATAL</button>
                        </div>
                </form>


          </div><!-- End Contact Form -->

        </div>

      </div>
    </section>