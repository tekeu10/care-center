<?php include_once('config.php');


  
?>

<!DOCTYPE html>
<html lang="en">
<?php include_once('linkcss.php'); ?>

<head>
  <title>accueil medecin</title>
</head>
<body>
  <!-- debut header -->
  <?php include('header.php'); ?>
  <!-- fin header -->

  <!-- debut aside -->
  <?php include('aside.php'); ?>
  <!-- fin aside -->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Accueil Médecin</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
          <li class="breadcrumb-item active">Tableau de bord</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <br>
    <br>
    <br>

    
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Aujourd'hui</a></li>
                    <li><a class="dropdown-item" href="#">Cet semaine</a></li>
                    <li><a class="dropdown-item" href="#">Ce mois</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">rendez-vous valider </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                   

                    <?php 

                  $r=$_SESSION['emailm'];
                  $select= $pdo->prepare("SELECT count(*) FROM rendezvous r, medecin m WHERE status=0 AND r.idmed=m.idmed AND email='$r'");
                  $select->execute();
                  $special= $select->fetchColumn();
                  ?>
                  <div class="ps-3">
                  <h6> <?php echo $special?></h6>

                  </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">rendez-vous en attente<span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <?php 

                      $r=$_SESSION['emailm'];
                      $select= $pdo->prepare("SELECT count(*) FROM rendezvous r, medecin m WHERE status=1 AND r.idmed=m.idmed AND email='$r'");
                      $select->execute();
                      $special= $select->fetchColumn();
                    ?>
                    <div class="ps-3">
                      <h6> <?php echo $special?></h6>
                     
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->




          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">
          <div class="card info-card customers-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">nombre de rendez-vous <span></span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <?php 

                  $r=$_SESSION['emailm'];
                  $select= $pdo->prepare("SELECT count(*) FROM rendezvous r, medecin m WHERE  r.idmed=m.idmed AND email='$r'");
                  $select->execute();
                  $special= $select->fetchColumn();
                ?>
                  <div class="ps-3">
                  <h6> <?php echo $special?></h6>

                  </div>
              </div>

            </div>
          </div>
        </div><!-- End Right side columns -->


          </div><!-- End Customers Card -->

      </div>
    </section>

  </main><!-- End #main -->


  <?php include('linkjs.php'); ?>

</body>

</html>