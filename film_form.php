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
          <h2>INPUT DATA</h2>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-8">
          <form action="film_controller.php" method="POST">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="judul" name="judul" type="text" placeholder="Nama" data-sb-validations="" />
                        <label for="nama">Input Judul</label>
                    </div>
                    <select class="form-select" id="kategori_id_kategori" name="nama_kategori" aria-label="--- Pilih Judul Film ---">
                            <option selected>--- Pilih Kategori ---</option>
                            <?php
                                foreach($data_kategori as $kategori){
                            ?>
                            <option value="<?= $kategori['id_kategori'] ?>"><?= $kategori['nama_kategori'] ?></option>
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