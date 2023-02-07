<?php
  //ciptakan objek dari class Pegawai
  $model = new Film();
  //panggil fungsi untuk menampilkan data pegawai
  $data_film = $model->datafilm();
/*
foreach ($data_pegawai as $row) {
    print $row['nip'] . "\t";
    print $row['nama'] . "\t";
    print $row['alamat'] . "\n";
}
*/
$sesi = $_SESSION['USER'];
if(isset($sesi)){
?>
<!-- ======= Our Team Section ======= -->
<section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Data Film</h2>
        </div>
        <a class="btn btn-primary btn-sm" href="index.php?hal=film_form" role="button"><i class="bi bi-person-plus-fill" title="tambah"></i></i></a><br><br>
        <div class="row gy-4">

            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Id Film</th>
                    <th scope="col">Judul Film</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        $no = 1;
                        foreach($data_film as $row){
                        ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $row['id_film'] ?></td>
                            <td><?= $row['judul'] ?></td>
                            <td>
                            <form action="film_controller.php" method="POST">
                                <a href="index.php?hal=film_detail&id_film=<?= $row['id_film'] ?>" class="btn btn-info">
                                  <i class="bi bi-eye"></i>
                                </a>
                                <?php
                                    if($sesi['role'] != 'staff'){
                                ?>
                                <?php
                                    if($sesi['role'] != 'customer'){
                                ?>
                                <a href="index.php?hal=film_editform&id_filmedit=<?= $row['id_film'] ?>" class="btn btn-warning">
                                  <i class="bi bi-pencil-square"></i>
                                </a>
                                <button type="submit" name="proses" value="hapus" onclick="return confirm ('Apakah anda yakin ingin hapus data?')" title="Hapus Customer" class="btn btn-danger">
                                  <i class="bi bi-trash3"></i>
                                </button>
                                <input type="hidden" name="idx" value="<?= $row['id_film'] ?>">
                                <?php } ?>
                                <?php } ?>
                            </form>
                            </td>
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
    <?php }
    else{
      echo '<script>alert("Anda Terlarang Akses Halaman Ini, Anda Harus Login!!!");history.back();</script>';
    }
    ?>