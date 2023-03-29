<?php include_once('config.php');

  $smt= $pdo->prepare('SELECT * FROM specialite');
  $smt->execute();
  $data= $smt->fetchAll();

  $smtp= $pdo->prepare('SELECT * FROM ville');
  $smtp->execute();
  $res= $smtp->fetchAll();


?>
<!DOCTYPE html>
<html lang="en">

<?php include_once('linkPcss.php'); ?>

<head>
  <title>accueil patient</title>
</head>
<body>

<?php include_once('heaside.php'); ?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Accueil</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="patient.php">Accueil</a></li>
          <li class="breadcrumb-item">Prise de rendez-vous</li>
          
        </ol>
      </nav>
    </div><!-- End Page Title -->

    
    <section class="section register min-vh-100 d-flex flex-column align-items-center ">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-12">


                <div class="card mb-3">

                  <div class="card-body">

                    <div class="pt-4 pb-2">
                      <h5 class="card-title text-center pb-0 fs-4">Prendre Un Rendez-Vous</h5>
                    </div>
                    <br/>
                    <form class="row g-3" action="resmed.php" method="POST" enctype="multipart/form-data">
                      
                        
                      <div class="col-12">
                          <label for="inputState" class="form-label">Sélectionné une spécialité</label>
                          <select id="inputState" class="form-select" name="specialite">
                          <option></option>
                              <?php foreach($data as $row): ?>
                                <option value="<?= $row["idspe"]?>"><?= $row["nom"]?></option>
                              <?php endforeach?>   
                          </select>
                      </div>
                      <div class="col-12">
                          <label for="inputState" class="form-label">Sélectionné une ville</label>
                          <select id="inputState" class="form-select" name="ville">
                          <option></option>
                              <?php  foreach($res as $row): ?>
                                <option value="<?= $row["idville"]?>"><?= $row["nomville"]?></option>
                                
                              <?php endforeach?>   
                          </select>
                      </div>
                    

                
                      <div class="col-12 d-flex justify-content-center">
                        <div class="col-12 me-2">
                          <button class="btn btn-primary w-100" type="submit" name="envoyer">Envoyer</button>
                        </div>
                      
                      </div>
                      
                     
                    </form>

                  </div>
                </div>

              </div>
            </div>
          </div>

        </section>
   
    </section>


  
  
  
  </main><!-- End #main -->
  <?php include_once('linkjs.php'); ?>
                              
</html>