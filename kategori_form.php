<?php
  //ciptakan objek dari class Pegawai
  $obj_kategori = new Kategori();
  //panggil fungsi untuk menampilkan data pegawai
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
          <form action="kategori_controller.php" method="POST">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="kategori" name="nama_kategori" type="text" placeholder="Nama" data-sb-validations="" />
                        <label for="nama">Input Kategori</label>
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