<?php include('config.php'); 

  // session_start();
  $p=$_SESSION['emailp'];
  var_dump($_SESSION['emailp']);
  $query="SELECT * FROM rendezvous r,patient p, temps t , medecin m, specialite s WHERE m.idspe=s.idspe AND r.idpat=p.idpat AND t.idtemps=r.idtemps AND m.idmed=r.idmed AND p.email='$p' AND `status`=0";
  $select= $pdo->prepare($query);
  $select->execute();
  $valider= $select->fetchAll();
  // var_dump($query);
 
  // echo " <script>alert($query);</script>";

?>
  <!DOCTYPE html>
<html lang="en">
  <!-- Favicons -->
  <link href="assets/img/test.png" rel="icon">
  <link href="assets/img/app.png" rel="apple-touch-icon">
<?php include_once('linkPcss.php'); ?>

<head>
  <title>accueil patient</title>
</head>
<body>

<?php include_once('heaside.php'); ?>

  <main id="main" class="main">
 
    
  <div class="pagetitle">
      <h1>Patient </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
          <li class="breadcrumb-item active">patient</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
	<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">RENDEZ-VOUS ACCEPTE</h5>

              <!-- Default Table -->
              <table class="table table-bordered border-primary">
                <thead>
                  <tr>
                    <th>Nom médecin </th>
                    <th>Spécialité</th>
                    <th>Jour du rendez-vous</th>
                    <th>Heure du rendez-vous</th>
                    <th>Motif</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($valider as $rdvs): ?>
                  
                  <tr>
                    <td><?php echo $rdvs['nommedecin']?></td>
                    <td><?php echo $rdvs['nom']?>	
                    <td><?php echo $rdvs['noms']?></td>
                    <td><?php echo $rdvs['heure']?></td>
                    <td><?php echo $rdvs['motif']?></td>
                  
                  </tr>
                <?php endforeach?>
                </tbody>
              </table>
       


            </div>
          </div>

        </div>
      </div>
    </section>
	

  </main><!-- End #main -->

  


  <?php include('linkPjs.php'); ?>


</body>

</html>