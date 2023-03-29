
  

<!DOCTYPE html>
<html lang="en"> 

<?php include('linkcss.php'); ?>
<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/test.png" alt="">
                  <span class="d-none d-lg-block">HealthCare</span>
                </a>
              </div><!-- End Logo -->


              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Information</h5>
                    <p class="text-center small">Remplissez toute les informations</p>
                  </div>
                  <?php
                      
                      if(isset($_POST['envoyer'])){
                        $idmed=$_POST['medecin'];
                        $idtemps=$_POST['jour'];
                        $heure=$_POST['heure'];
                        $motif=$_POST['motif'];
                        $sexe=$_POST['sexe'];
                        $idpat=$_POST['patient'];
                        var_dump($_POST);
                        
                        $insert = $pdo->prepare("INSERT INTO rendezvous(idmed,idtemps,heure,motif,sexe,idpat,status) VALUES(:idmed,:idtemps,:heure,:motif,:sexe,:idpat,:idstatus)");
                        $stmp = $insert->execute([
                            'idmed' =>$idmed,
                            'idtemps' =>$idtemps,
                            'heure' =>$heure,
                            'motif'=>$motif,
                            'sexe'=>$sexe,
                            'idpat'=>$idpat,
                            'idstatus'=>false,
                
                          ]);
                          if($stmp){
                            echo("success");    
                
                            $_POST['medecin'] = "";
                            $_POST['jour'] = "";
                            $_POST['heure'] = "";
                            $_POST['motif'] = "";
                            $_POST['sexe'] = "";
                            $_POST['patient'] = "";
                            $_POST['status'] = "";
                           
                          }else{
                           
                           echo("echec !");  
                          }
                      }

                  ?>

                  <!-- <form class="row g-3" action="savetab.php" method="POST"> -->
                  <form class="row g-3" method="POST">
                  <?php  
                  
                  if(isset($_POST['rdv'])){
                    $pat=$_POST['pat'];
                    $med= $_POST['med'];
                
                    $select = $pdo->prepare("SELECT * FROM agenda WHERE idmed=$med");
                    $select->execute();
                    $data = $select->fetchAll();
                    
                    $select = $pdo->prepare("SELECT * FROM patient WHERE idpat=$pat");
                    $select->execute();
                    $patient = $select->fetchAll();
                    
                
                    foreach($data as $row): ?>

                      <input type="text" name="medecin" id="" value="<?php echo $row['idmed'] ?>" hidden >  
                      
                      <?php endforeach?>    
                      <?php foreach($patient as $patien): ?> 
                        
                        <input type="text" name="patient" id="" value="<?php echo $patien['idpat'] ?>" hidden >
                        
                      <?php endforeach?>
                     
                     
                   <?php   }?>
                   <div class="col-12">
                      <label for="yourEmail" class="form-label">Jour du rendez-vous</label>
                        <select id="inputState" class="form-select" name="jour">
                                  <?php  foreach($jour as $jours): ?>
                                    <option value="<?= $jours["idtemps"]?>"><?= $jours["noms"]?></option>
                                  <?php endforeach?>   
                         </select> 
                    </div>  
              
                    <div class="col-12">
                     
                        <label for="yourEmail" class="form-label">Heure du rendez-vous</label>
                        <select id="inputState" class="form-select" name="heure">
                                  <?php  foreach($data as $heures): ?>
                                    <option value=" <?= $heures["temps"]?>"><?= $heures["temps"]?></option>
                                  <?php endforeach?>   
                         </select> 
                    </div>  
                    
                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Motif du rendez-vous</label>
                      <textarea name="motif" id="" cols="60" rows="3"></textarea>
                      <div class="invalid-feedback">Veuillez saisir un motif !</div>
                    </div>
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">sexe</label>
                      <select name="sexe" id="inputState" class="form-select">
                            <option value="0">Féminin</option>
                            <option value="1">Masculin</option>
                      </select>
                    </div>
                   <br>
                   <br>
                 <br>
              
                    <div class="col-12 d-flex justify-content-center">
                        <div class="col-6 me-2">
                          <button class="btn btn-primary w-100" type="submit" name="envoyer">CONFIRMER</button>
                        </div>
                        <div class="col-6 ms-2ù">
                          <button class="btn btn-danger w-100" type="reset"><a href="patient.php" style="color: white;">ANNULER</a></button>
                        </div>
              
                  </form>
               </div>
                </div>                      

              </div>

           



           
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <?php include('linkjs.php'); ?>
</body>

</html>

<div class="col-12">
               