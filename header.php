<?php

include_once('lockmed.php');

//Ouverture de la connexion a la bd
include_once('config.php');
$r = $_SESSION['emailm'];
$select = $pdo->prepare("SELECT * FROM medecin WHERE email='$r' ");
$select->execute();
$medecin = $select->fetchAll();

?>


<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="index.html" class="logo d-flex align-items-center">
      <img src="assets/img/test.png" alt="">
      <span class="d-none d-lg-block">Mr doctor</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>

  </div><!-- End Logo -->




  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">


      <li class="nav-item dropdown pe-3">
        <?php foreach ($medecin as $med) : ?>
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <!-- <img src="<?php echo $med['urlfichier'] ?>" alt="Profile" class="rounded-circle"> -->
            <img src="<?php echo $med['urlfichier'] ?>" alt="Profile" width="50px" height="50px" style="border-radius: 50%;">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $med['nommedecin'] ?></span>
          </a><!-- End Profile Iamge Icon -->
        <?php endforeach ?>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <?php foreach ($medecin as $med) : ?>

              <h6>Dr <?php echo $med['nommedecin'] ?></h6>
              <span>Pédiatre</span>
            <?php endforeach ?>

          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
              <i class="bi bi-person"></i>
              <span>Mon Profil</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
              <i class="bi bi-gear"></i>
              <span>Paramètre</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>


          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="logout.php">
              <i class="bi bi-box-arrow-right"></i>
              <span>Se déconnecter</span>


            </a>
          </li>

        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav>
  <!--End Icons Navigation -->

</header><!-- End Header -->