<?php
  //ciptakan objek dari class Pegawai
  $model = new Kategori();
  //panggil fungsi untuk menampilkan data pegawai
  $data_kategori = $model->dataKategori();
/*
foreach ($data_pegawai as $row) {
    print $row['nip'] . "\t";
    print $row['nama'] . "\t";
    print $row['alamat'] . "\n";
}
*/
?>
<!-- ======= Our Team Section ======= -->
<section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Data Kategori</h2>
          <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
        </div>
        <a class="btn btn-primary btn-sm" href="index.php?hal=kategori_form" role="button"><i class="bi bi-person-plus-fill" title="tambah"></i></i></a><br><br>
        <div class="row gy-4">

            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Id Kategori</th>
                    <th scope="col">Kategori</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        $no = 1;
                        foreach($data_kategori as $row){
                        ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $row['id_kategori'] ?></td>
                            <td><?= $row['nama_kategori'] ?></td>
                        </tr>
                        <?php
                        $no++;
                        }
                        ?>
                </tbody>
            </table>

        </div>

      </div>
    </section><!-- End Our Team Section -->