<?php
  //ciptakan objek dari class Pegawai
  $obj_film = new Film();
  $obj_kategori = new Kategori();
  //panggil fungsi untuk menampilkan data pegawai
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
          <h2>Contact</h2>
          <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-8">
          <form action="jadwal_controller.php" method="POST">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="tanggal" name="tanggal" type="date" placeholder="Nama" data-sb-validations="" />
                        <label for="nama">Input Tanggal</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="jam_mulai" name="jam_mulai" type="time" placeholder="Nama" data-sb-validations="" />
                        <label for="nama">Jam Mulai</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="jam_selesai" name="jam_selesai" type="time" placeholder="Nama" data-sb-validations="" />
                        <label for="nama">Jam Selesai</label>
                    </div>
                    <select class="form-select" id="judul" name="judul" aria-label="--- Pilih Judul Film ---">
                            <option selected>--- Pilih Film---</option>
                            <?php
                                foreach($data_film as $film){
                            ?>
                            <option value="<?= $film['id_film'] ?>"><?= $film['judul'] ?></option>
                            <?php
                                }
                            ?>
                            </select>

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