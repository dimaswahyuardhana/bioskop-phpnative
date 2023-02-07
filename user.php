<?php
  //ciptakan objek dari class Pegawai
  $model = new User();
  //panggil fungsi untuk menampilkan data pegawai
  $data_user = $model->dataUser();
/*
foreach ($data_pegawai as $row) {
    print $row['nip'] . "\t";
    print $row['nama'] . "\t";
    print $row['alamat'] . "\n";
}
*/
// beri session untuk hak akses user

$sesi = $_SESSION['USER'];
if(isset($sesi) && $sesi['role'] == 'admin'){
?>
<!-- ======= Our Team Section ======= -->
<section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Data User</h2>
          <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
        </div>
        <a class="btn btn-primary btn-sm" href="index.php?hal=user_form" role="button"><i class="bi bi-person-plus-fill" title="tambah"></i></i></a><br><br>
        <div class="row gy-4">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">NO</th>
                    <th scope="col">FULLNAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">USERNAME</th>
                    <th scope="col">ROLE</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        $no = 1;
                        foreach($data_user as $row){
                        ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $row['fullname'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['username'] ?></td>
                            <td><?= $row['role'] ?></td>
                            
                            <td>
                            <form action="user_controller.php" method="POST">
                                <a href="index.php?hal=user_detail&id_user=<?= $row['id'] ?>" class="btn btn-info">
                                  <i class="bi bi-eye"></i>
                                </a>
                                <a href="index.php?hal=user_editform&id_useredit=<?= $row['id'] ?>" class="btn btn-warning">
                                  <i class="bi bi-pencil-square"></i>
                                </a>
                                <button type="submit" name="proses" value="hapus" onclick="return confirm ('Apakah anda yakin ingin hapus data?')" title="Hapus User" class="btn btn-danger">
                                  <i class="bi bi-trash3"></i>
                                </button>
                                <input type="hidden" name="idx" value="<?= $row['id'] ?>">
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
      echo '<script>alert("Anda Terlarang Akses Halaman Ini!!!");history.back();</script>';
    }
    ?>