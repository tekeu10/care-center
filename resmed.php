<?php include('config.php');

      if(isset($_POST['envoyer'])){
        $specialite=$_POST['specialite'];
        $ville= $_POST['ville'];
    
         
          $select= $pdo->prepare("SELECT *FROM medecin m, specialite s, ville v WHERE m.idspe=s.idspe AND m.idville=v.idville AND m.idspe=$specialite AND m.idville=$ville");
          $select->execute();
          $med= $select->fetchAll();

     }
      

?>

<!DOCTYPE html>
<html lang="en">


<?php include('linkPcss.php'); ?>

<head>
  <title>rdv</title>
</head>
<body>

<?php include('heaside.php'); ?>
<body>

  

  <main id="main" class="main">


    <section class="section">
      <?php foreach($med as $medecin): ?>
        <form action="agendatab.php" method="POST">
            <div class="row align-items-top-4">
            <div class="col-lg-12">
              <!-- <div class="row">
              <div class="col-xxl-4 col-md-6"> -->
                  <!-- Card with an image on left -->
                  <div class="card ms-4">
                    <div class="row g-6">
                      <div class="col-md-4">
                        <img src="<?php echo $medecin['urlfichier']?>" width="200px" height="100px" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $medecin['nommedecin']?></h5>
                          <p class="card-text"><?php echo $medecin['nom']?></p>
                          <p><B><?php echo $medecin['clinique']?></B></p>
                          <p>Prix de la consultation:<i><?php echo $medecin['montant']?>FCFA</i></p>
                          <input type="text" name="rep" id="" value="<?php echo $medecin['idmed'] ?>" hidden>
                          <!-- <a href="#"><h7 class="card-title"><i class="ri-eye-fill"></i> VOIR LE PROFIL</h7></a>  -->
                          <button type="submit" name="agenda" class="btn btn-primary"><a href="agendatab.php"><span class="card-title" style="color: white;"><i class="ri-eye-fill" style="color: white;"></i> Voir l'agenda</span></a></button> 
                        </div>             
                      </div>              
                    </div>
                  </div><!-- End Card with an image on left -->
                <!-- </div>
              </div> -->
            </div>
          </div>
        </form>
      
      <?php endforeach ?>  
    </section>

  </main><!-- End #main -->


  <?php include('linkpjs.php'); ?>
</body>

</html>

