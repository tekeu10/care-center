<?php

include_once('lock.php');
//Ouverture de la connexion a la bd
include_once('config.php');

$r = $_SESSION['emailp'];
$select = $pdo->prepare("SELECT * FROM patient WHERE email='$r' ");
$select->execute();
$patient = $select->fetchAll();

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
        <?php foreach ($patient as $pat) : ?>
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $pat['nompatient'] ?></span>
          </a><!-- End Profile Iamge Icon -->
        <?php endforeach ?>
        <!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <?php foreach ($patient as $pat) : ?>

              <h6><?php echo $pat['nompatient'] ?></h6>
            <?php endforeach ?>

          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="profile.php">
              <i class="bi bi-person"></i>
              <span>Mon Profil</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="profile.php">
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
  </nav><!-- End Icons Navigation -->

</header><!-- End Header -->
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="patient.php">
        <i class="ri-home-heart-fill"></i>
        <span>Acceuil</span>
      </a>
    </li> </br> <!-- End Dashboard Nav -->



    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Rendez-Vous</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="rdvpris.php">
            <i class="bi bi-circle"></i><span>Rendez-vous pris</span>
          </a>
        </li>
        <li>
          <a href="rdvatt.php">
            <i class="bi bi-circle"></i><span>En attente</span>
          </a>
        </li>
      </ul>
    </li><br><!-- End Tables Nav -->


    <li class="nav-heading">Pages</li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="profile.php">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="contact.php">
        <i class="bi bi-envelope"></i>
        <span>Contact</span>
      </a>
    </li><!-- End Contact Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="logout.php">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Se déconnecter</span>
      </a>
    </li><!-- End Login Page Nav -->



  </ul>

</aside><!-- End Sidebar-->