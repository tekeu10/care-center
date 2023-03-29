<?php include('config.php'); 

  // session_start();
  $r=$_SESSION['emailm'];
  //var_dump($_SESSION['emailm']);
  $query="SELECT * FROM rendezvous r,patient p, temps t , medecin m WHERE r.idpat=p.idpat AND t.idtemps=r.idtemps AND m.idmed=r.idmed and m.email='$r' AND `status`=0";
  $select= $pdo->prepare($query);
  $select->execute();
  $valider= $select->fetchAll();
  // var_dump($query);
 
  // echo " <script>alert($query);</script>";

?>


<!DOCTYPE html>
<html lang="en">
<?php include('linkcss.php'); ?>

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
          <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
          <li class="breadcrumb-item active">Tableau de bord</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

	<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
			        <h5 class="card-title text-center">RENDEZ-VOUS VALIDER</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th >Nom patient</th>
                    <th scope="">Heure rendez-vous</th>
                    <th scope="">Jour rendez-vous</th>
                    <th scope="">Motif</th>
                  </tr>
                </thead>
                <tbody>
			    			<?php foreach($valider as $pris): ?>
                
                  <tr>
                     <td><?php echo $pris['nompatient']?></td>
                     <td><?php echo $pris['heure']?></td>
                     <td><?php echo $pris['noms']?></td>
                     <td><?php echo $pris['motif']?></td>
                    
                  </tr>

            </div>
          </div>
					    	<?php endforeach?>
                
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
		   
          
    </section>

  </main><!-- End #main -->

 
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>