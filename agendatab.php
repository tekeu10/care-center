<?php include('config.php');

  $r=$_SESSION['emailp'];
  $select = $pdo->prepare("SELECT * FROM patient WHERE email=$r");
  $select->execute();
  $patient = $select->fetchAll();
 
  
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

  <main id="main" class="COL">

        <div class="card">
            <div class="card-body">
               <h5 class="card-title text-center">HORAIRE DU MEDECIN</h5>
            
              <!-- Active Table -->
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">Lundi</th>
                    <th scope="col">Mardi</th>
                    <th scope="col">Mercredi</th>
                    <th scope="col">Jeudi</th>
                    <th scope="col">Vendredi</th>
                    <th scope="col">Samedi</th>
                    <th scope="col">Dimanche</th>
                  </tr>
                </thead>
                <tbody>
                <?php if(isset($_POST['agenda'])){
                    $rep = $_POST['rep'];
                    $select = $pdo->prepare("SELECT * FROM agenda WHERE idmed=$rep");
                    $select->execute();
                    $heures = $select->fetchAll();
                    
                    
                     foreach($heures as $heur): ?>
                     <form action="kj.php" method="POST">
                        <tr>
                         
                            <td>
                              <?php 
                                if (($heur['idtemps'])== 1){
                                  echo $heur['temps'];
                                  }
                              ?>
                            </td>
                            
                            <td>
                              <?php 
                                if (($heur['idtemps'])== 2){
                                  echo $heur['temps'];
                                  }
                              ?>
                            </td>
                            
                            <td>
                              <?php 
                                if (($heur['idtemps'])== 3){
                                  echo $heur['temps'];
                                  }
                              ?>
                            </td>
                            
                            <td>
                              <?php 
                                if (($heur['idtemps'])== 4){
                                  echo $heur['temps'];
                                  }
                              ?>
                            </td>
                            
                            <td>
                              <?php 
                                if (($heur['idtemps'])== 5){
                                  echo $heur['temps'];
                                  }
                              ?>
                            </td>
                            
                            <td>
                              <?php 
                                if (($heur['idtemps'])== 6){
                                  echo $heur['temps'];
                                  }
                              ?>
                            </td>
                            
                            <td>
                              <?php 
                                if (($heur['idtemps'])== 7){
                                  echo $heur['temps'];
                                  }
                              ?>
                            </td>
                            
                        </tr>
                        <input type="text" name="med" value="<?php echo $heur['idmed'] ?>" hidden>
                     <?php endforeach; ?>
                     <?php foreach($patient as $pat): ?>
                      <input type="text" name="pat" value="<?php echo $pat['idpat'];?>" hidden>
                     
                     <?php endforeach; ?>
                        
                  <?php }?>
               
                </tbody>
              </table>
				        
              <div class="text-left">
                <button type="submit" name="rdv" class="btn btn-primary"><a href="kj.php"><span class="card-title" style="color: white;"><i class="ri-walk-line" style="color: white;"></i> Continuer</span></a></button> 

              </div>
              <!-- End Tables without borders -->
            </form>
          
            </div>
          </div>
          
  </main><!-- End #main -->


  <?php include('linkpjs.php'); ?>
</body>

</html>