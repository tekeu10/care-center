<?php 
    //Ouverture de la connexion a la bd
	include('config.php');

  $r = $_SESSION['emailm'];
  $select= $pdo->prepare("SELECT * FROM email='$r'");
  $select->execute();
  $medecin= $select->fetchAll();
  // echo("<center>$r</center>");
  
 
  //récupération des spécialiste pour afficher dans le dropdown
  $smt= $pdo->prepare('SELECT * FROM temps');
  $smt->execute();
  $data= $smt->fetchAll();
  
  if(isset($_POST['temps'])){
    
    $idmed = $_POST['idmed'];
    $temps = $_POST['temps'];
    $jour = $_POST['jour'];
    foreach($temps as $row){
      $insert = $pdo->prepare("INSERT INTO agenda(idmed,temps,idtemps) VALUES(:idmed,:temps,:jour)");
      $stmp = $insert->execute([
        'idmed' => $idmed,
        'temps' => $row,
        'jour' => $jour,
      ]);
     header("location:tables-general.php");
    };
    
    
    
    $_POST['temps'] = "";
    $_POST['jour'] = "";
  }

?>


<!DOCTYPE html>
<html lang="en">
<?php include('linkPcss.php'); ?>
<head>
  <title>agenda</title>
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
      <h1>Agenda</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
          <li class="breadcrumb-item active">Agenda</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
            
         

              <h5 class="card-title text-center">DISPONIBILITE DE LA SEMAINE</h5>
              <!-- Table with stripped rows --> 
              <form action="" method="POST" enctype="multipart/form-data">  
              
              <div class="row form-group d-flex align-items-center justify-content-center p-2">
              <div class="col-md-8">
                <!-- Card with an image on bottom -->
                  <div class="card d-flex align-items-center justify-content-center">
                    <div class="card-body">
                      <h5 class="card-title text-center">Enregistrement des heures de disponibilité</h5>
                      <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    </div>
                    <div class="col-md-8 ">
                      <div class="row form-group">
                        <?php  foreach($medecin as $med): ?>
                         <input type="text" class="border-0" name="idmed" id="" value="<?php echo $med["idmed"]?>" hidden>
                        <?php  endforeach ?>
                        
                        <div class="row col-md-12"> 
                          <div class="col-md-5"><label for="" class="form-label">Choisissez votre jour</label></div>
                          <div class="col-md-7">
                            <select id="inputState" class="form-select" name="jour">
                                  <?php  foreach($data as $row): ?>
                                    <option value="<?= $row["idtemps"]?>"><?= $row["noms"]?></option>
                                  <?php endforeach?>   
                              </select> 
                          </div>
                        </div>
                        
                        <div class="row form-group">
                          <div class="col-md-3"><input type="checkbox" class="form-checkbox" name="temps[]" value="08:00">08:00</div>
                          <div class="col-md-3"><input type="checkbox" class="form-checkbox" name="temps[]" value="08:30">08:30</div>
                          <div class="col-md-3"><input type="checkbox" class="form-checkbox" name="temps[]" value="09:00">09:00</div>
                          <div class="col-md-3"><input type="checkbox" class="form-checkbox" name="temps[]" value="09:30">09:30</div>
                        </div>
                        <div class="row form-group">
                          <div class="col-md-3"><input type="checkbox" class="form-checkbox" name="temps[]" value="10:00">10:00</div>
                          <div class="col-md-3"><input type="checkbox" class="form-checkbox" name="temps[]" value="10:30">10:30</div>
                          <div class="col-md-3"><input type="checkbox" class="form-checkbox" name="temps[]" value="11:00">11:00</div>
                          <div class="col-md-3"><input type="checkbox" class="form-checkbox" name="temps[]" value="11:30">11:30</div>
                        </div>
                        <div class="row form-group">
                          <div class="col-md-3"><input type="checkbox" class="form-checkbox" name="temps[]" value="12:00">12:00</div>
                          <div class="col-md-3"><input type="checkbox" class="form-checkbox" name="temps[]" value="12:30">12:30</div>
                          <div class="col-md-3"><input type="checkbox" class="form-checkbox" name="temps[]" value="13:00">13:00</div>
                          <div class="col-md-3"><input type="checkbox" class="form-checkbox" name="temps[]" value="13:00">13:30</div>
                        </div>
                        <div class="row form-group">
                          <div class="col-md-3"><input type="checkbox" class="form-checkbox" name="temps[]" value="14:00">14:00</div>
                          <div class="col-md-3"><input type="checkbox" class="form-checkbox" name="temps[]" value="14:30">14:30</div>
                          <div class="col-md-3"><input type="checkbox" class="form-checkbox" name="temps[]" value="15:00">15:00</div>
                          <div class="col-md-3"><input type="checkbox" class="form-checkbox" name="temps[]" value="15:00">15:30</div>
                        </div>
                      </div>
                    </div>
                  </div>
                <!-- End Card with an image on bottom -->
              </div>
              </div>
              
                <!-- <table class="table datatable">
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
                    <tr>
                        
                        <td> <input type="checkbox" name="hlundi"> 08:00 </td>
                        <td> <input type="checkbox" name="hmardi"> 08:00 </td>
                        <td> <input type="checkbox" name="hmercred">08:00  </td>
                        <td> <input type="checkbox" name="hjeudi"> 08:00 </td>
                        <td> <input type="checkbox" name="hvend">08:00  </td>
                        <td> <input type="checkbox" name="hjeudi"> 08:00 </td>
                        <td> <input type="checkbox" name="hvend">08:00  </td>
            
                    </tr>
                    <tr>
                        
                        <td> <input type="checkbox" name="hlundi"> 08:30 </td>
                        <td> <input type="checkbox" name="hmardi"> 08:30 </td>
                        <td> <input type="checkbox" name="hmercred"> 08:30 </td>
                        <td> <input type="checkbox" name="hjeudi"> 08:30 </td>
                        <td> <input type="checkbox" name="hvend"> 08:30 </td>
                        <td> <input type="checkbox" name="hjeudi"> 08:30 </td>
                        <td> <input type="checkbox" name="hvend"> 08:30 </td>
                       
                    </tr>
                    <tr>
                        
                        <td> <input type="checkbox" name="hlundi"> 09:00 </td>
                        <td> <input type="checkbox" name="hmardi"> 09:00 </td>
                        <td> <input type="checkbox" name="hmercred"> 09:00 </td>
                        <td> <input type="checkbox" name="hjeudi"> 09:00 </td>
                        <td> <input type="checkbox" name="hvend"> 09:00 </td>
                        <td> <input type="checkbox" name="hjeudi"> 09:00 </td>
                        <td> <input type="checkbox" name="hvend"> 09:00 </td>
                    </tr>   
                     <tr>
                        
                        <td> <input type="checkbox" name="hlundi"> 09:30 </td>
                        <td> <input type="checkbox" name="hmardi"> 09:30 </td>
                        <td> <input type="checkbox" name="hmercred"> 09:30 </td>
                        <td> <input type="checkbox" name="hjeudi"> 09:30 </td>
                        <td> <input type="checkbox" name="hvend"> 09:30 </td>
                        <td> <input type="checkbox" name="hjeudi"> 09:30 </td>
                        <td> <input type="checkbox" name="hvend"> 09:30 </td>
                    </tr>
                    <tr>
                        
                        <td> <input type="checkbox" name="hlundi"> 10:00 </td>
                        <td> <input type="checkbox" name="hmardi"> 10:00 </td>
                        <td> <input type="checkbox" name="hmercred">10:00 </td>
                        <td> <input type="checkbox" name="hjeudi"> 10:00 </td>
                        <td> <input type="checkbox" name="hvend">10:00 </td>
                        <td> <input type="checkbox" name="hjeudi"> 10:00 </td>
                        <td> <input type="checkbox" name="hvend">10:00 </td>
                    </tr>
                    <tr>
                        
                        <td> <input type="checkbox" name="hlundi"> 10:30 </td>
                        <td> <input type="checkbox" name="hmardi"> 10:30 </td>
                        <td> <input type="checkbox" name="hmercred"> 10:30 </td>
                        <td> <input type="checkbox" name="hjeudi"> 10:30 </td>
                        <td> <input type="checkbox" name="hvend"> 10:30 </td>
                        <td> <input type="checkbox" name="hjeudi"> 10:30 </td>
                        <td> <input type="checkbox" name="hvend"> 10:30 </td>
 
                    </tr>
                    <tr>
                        
                        <td> <input type="checkbox" name="hlundi"> 11:00 </td>
                        <td> <input type="checkbox" name="hmardi"> 11:00 </td>
                        <td> <input type="checkbox" name="hmercred"> 11:00 </td>
                        <td> <input type="checkbox" name="hjeudi"> 11:00 </td>
                        <td> <input type="checkbox" name="hvend"> 11:00 </td>
                        <td> <input type="checkbox" name="hjeudi"> 11:00 </td>
                        <td> <input type="checkbox" name="hvend"> 11:00 </td>
                    </tr>
                    <tr>
                        
                        <td> <input type="checkbox" name="hlundi"> 11:30 </td>
                        <td> <input type="checkbox" name="hmardi"> 11:30 </td>
                        <td> <input type="checkbox" name="hmercred"> 11:30 </td>
                        <td> <input type="checkbox" name="hjeudi"> 11:30 </td>
                        <td> <input type="checkbox" name="hvend"> 11:30 </td>
                        <td> <input type="checkbox" name="hjeudi"> 11:30 </td>
                        <td> <input type="checkbox" name="hvend"> 11:30 </td>
                    </tr>
                    <tr>
                        
                        <td> <input type="checkbox" name="hlundi"> 12:00 </td>
                        <td> <input type="checkbox" name="hmardi"> 12:00 </td>
                        <td> <input type="checkbox" name="hmercred"> 12:00 </td>
                        <td> <input type="checkbox" name="hjeudi"> 12:00 </td>
                        <td> <input type="checkbox" name="hvend"> 12:00 </td>
                        <td> <input type="checkbox" name="hjeudi"> 12:00 </td>
                        <td> <input type="checkbox" name="hvend"> 12:00 </td>
 
                    </tr>
                    <tr>
                        
                        <td> <input type="checkbox" name="hlundi"> 12:30 </td>
                        <td> <input type="checkbox" name="hmardi"> 12:30 </td>
                        <td> <input type="checkbox" name="hmercred"> 12:30 </td>
                        <td> <input type="checkbox" name="hjeudi"> 12:30 </td>
                        <td> <input type="checkbox" name="hvend"> 12:30 </td>
                        <td> <input type="checkbox" name="hjeudi"> 12:30 </td>
                        <td> <input type="checkbox" name="hvend"> 12:30 </td>
                    </tr>
                    <tr>
                        
                        <td> <input type="checkbox" name="hlundi"> 13:00 </td>
                        <td> <input type="checkbox" name="hmardi"> 13:00 </td>
                        <td> <input type="checkbox" name="hmercred"> 13:00 </td>
                        <td> <input type="checkbox" name="hjeudi"> 13:00 </td>
                        <td> <input type="checkbox" name="hvend"> 13:00 </td>
                        <td> <input type="checkbox" name="hjeudi"> 13:00 </td>
                        <td> <input type="checkbox" name="hvend"> 13:00 </td>
 
                    </tr>
                    <tr>
                        
                        <td> <input type="checkbox" name="hlundi"> 13:30 </td>
                        <td> <input type="checkbox" name="hmardi"> 13:30 </td>
                        <td> <input type="checkbox" name="hmercred"> 13:30 </td>
                        <td> <input type="checkbox" name="hjeudi"> 13:30 </td>
                        <td> <input type="checkbox" name="hvend"> 13:30 </td>
                        <td> <input type="checkbox" name="hjeudi"> 13:30 </td>
                        <td> <input type="checkbox" name="hvend"> 13:30 </td>
                    </tr>
                    <tr>
                        
                        <td> <input type="checkbox" name="hlundi"> 14:00 </td>
                        <td> <input type="checkbox" name="hmardi"> 14:00 </td>
                        <td> <input type="checkbox" name="hmercred"> 14:00 </td>
                        <td> <input type="checkbox" name="hjeudi"> 14:00 </td>
                        <td> <input type="checkbox" name="hvend"> 14:00 </td>
                        <td> <input type="checkbox" name="hjeudi"> 14:00 </td>
                        <td> <input type="checkbox" name="hvend"> 14:00 </td>
 
                    </tr>
                    <tr>
                        
                        <td> <input type="checkbox" name="hlundi"> 14:30 </td>
                        <td> <input type="checkbox" name="hmardi"> 14:30 </td>
                        <td> <input type="checkbox" name="hmercred"> 14:30 </td>
                        <td> <input type="checkbox" name="hjeudi"> 14:30 </td>
                        <td> <input type="checkbox" name="hvend"> 14:30 </td>
                        <td> <input type="checkbox" name="hjeudi"> 14:30 </td>
                        <td> <input type="checkbox" name="hvend"> 14:30 </td>
                    </tr>
                    <tr>
                        
                        <td> <input type="checkbox" name="hlundi"> 15:00 </td>
                        <td> <input type="checkbox" name="hmardi"> 15:00 </td>
                        <td> <input type="checkbox" name="hmercred"> 15:00 </td>
                        <td> <input type="checkbox" name="hjeudi"> 15:00 </td>
                        <td> <input type="checkbox" name="hvend"> 15:00 </td>
                        <td> <input type="checkbox" name="hjeudi"> 15:00 </td>
                        <td> <input type="checkbox" name="hvend"> 15:00 </td>
                    </tr>
                    <tr>
                        
                        <td> <input type="checkbox" name="hlundi"> 15:30 </td>
                        <td> <input type="checkbox" name="hmardi"> 15:30 </td>
                        <td> <input type="checkbox" name="hmercred"> 15:30 </td>
                        <td> <input type="checkbox" name="hjeudi"> 15:30 </td>
                        <td> <input type="checkbox" name="hvend"> 15:30 </td>
                        <td> <input type="checkbox" name="hjeudi"> 15:30 </td>
                        <td> <input type="checkbox" name="hvend"> 15:30 </td>
 
                    </tr>
                    <tr>
                        
                        <td> <input type="checkbox" name="hlundi"> 16:00 </td>
                        <td> <input type="checkbox" name="hmardi"> 16:00 </td>
                        <td> <input type="checkbox" name="hmercred"> 16:00 </td>
                        <td> <input type="checkbox" name="hjeudi"> 16:00 </td>
                        <td> <input type="checkbox" name="hvend"> 16:00 </td>
                        <td> <input type="checkbox" name="hjeudi"> 16:00 </td>
                        <td> <input type="checkbox" name="hvend"> 16:00 </td>
 
                    </tr>

                  </tbody>
                </table> -->
                <br>              
                <div class="text-center">
                        <button type="submit" class="btn btn-primary" name="envoyer"> Mettre à jour</button>
                </div>
              </form>
           
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>



</body>

</html>