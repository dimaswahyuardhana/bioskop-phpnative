<?php
  //tagkap request id 
  $id_customer = $_REQUEST['id_customer'];
  //ciptakan objek dari class Pegawai
  $model = new Customer();
  //panggil fungsi untuk menampilkan data pegawai
  $customer = $model->getCustomer($id_customer);
/*
foreach ($data_pegawai as $row) {
    print $row['nip'] . "\t";
    print $row['nama'] . "\t";
    print $row['alamat'] . "\n";
}
*/
?>

<div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Customer Details</h2>
              <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php?hal=home">Home</a></li>
            <li><a href="index.php?hal=customer_detail">Portfolio Details</a></li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8">
            <div class="portfolio-description">

              <div class="testimonial-item">
                <div>
                  <img src="assets/img/testimonials/<?=$customer['foto'] ?>" class="testimonial-img" alt="">
                  <h3><?= $customer['nama'] ?></h3>
                  <h4><?= $customer['alamat'] ?></h4>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-3">
            <div class="portfolio-info">
              <h3>Details</h3>
              <ul>
                <li><strong>Nama</strong> <span><?=$customer['nama'] ?></span></li>
                <li><strong>Gender</strong> <span><?=$customer['gender'] ?></span></li>
                <li><strong>Alamat</strong> <span><?=$customer['alamat'] ?></span></li>
                <li><strong>Tanggal Film</strong> <a href="#"><?=$customer['tanggal'] ?></a></li>
                <li><strong>Mulai</strong> <a href="#"><?=$customer['jam_mulai'] ?></a></li>
                <li><strong>Selesai</strong> <a href="#"><?=$customer['jam_selesai'] ?></a></li>
                <li><strong>Judul Film</strong> <a href="#"><?=$customer['judul'] ?></a></li>
                <li><a href="#" class="btn-visit align-self-start">Visit Website</a></li>
              </ul>
            </div>
            <br>
            <p align="right">
                <a href="index.php?hal=customer" type="button" class="btn btn-primary btn-sm" title="back">
                  <i class="bi bi-backspace"></i>
                </a>
            </p>
          </div>

        </div>

      </div>
      
    </section><!-- End Portfolio Details Section -->
    <div class="pull right">
      tes
    </div>