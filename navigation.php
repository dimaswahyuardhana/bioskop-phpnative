<?php 
    if(isset($_SESSION['USER'])){
        $sesi = $_SESSION['USER'];
    }
?>
<nav id="navbar" class="navbar" >
        <ul>
          <li><a href="index.php?hal=home">Home</a></li>
          <li><a href="index.php?hal=about">About</a></li>
          <?php
              if(!isset($sesi)){
          ?>
          <li><a href="login_form.php">Login</a></li>
          <?php
            }
            else{
          ?>
          <li class="dropdown"><a href="#"><span>Master Data</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="index.php?hal=customer">Customer</a></li>
              <li><a href="index.php?hal=film">Film</a></li>
              <li><a href="index.php?hal=kategori">Kategori</a></li>
              <li><a href="index.php?hal=jadwal">Jadwal</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span><?= $sesi['fullname'] ?> </span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="index.php?hal=user_profile">Profile</a></li>
              <?php 
                    if($sesi['role'] == 'admin'){
                ?>
              <li><a href="index.php?hal=user">Kelola User</a></li>
              <?php } ?>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
          <?php } ?>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->