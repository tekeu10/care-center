<?php 
  include_once('config.php');

  //récupération des spécialiste pour afficher dans le dropdown
  $smt= $pdo->prepare('SELECT * FROM specialite');
  $smt->execute();
  $data= $smt->fetchAll();

  //récupération des ville pour afficher dans le dropdown
  $smtp= $pdo->prepare('SELECT * FROM ville');
  $smtp->execute();
  $res= $smtp->fetchAll();

  if(isset($_POST['envoyer'])){
      $nom =$_POST['nom'];
      $email =$_POST['email'];
      $idspecialite =$_POST['specialite'];
      $idville =$_POST['ville'];
      $clinique =$_POST['clinique'];
      $montant =$_POST['montant'];
      $mdp =$_POST['password'];
    
    if(!empty($_FILES)){
      $file_name = $_FILES['fichier']['name'];
      $file_extension = strrchr($file_name,".");
      $file_tmp_name = $_FILES['fichier']['tmp_name'];
      $file_destination = 'files/'.$file_name;
      $extensions_autorisees =array('.jpeg',',JPEG','.jpg','.JPG','.TIFF','.tiff','.png','.PNG');
      if(in_array($file_extension, $extensions_autorisees)){
        if(move_uploaded_file($file_tmp_name, $file_destination)){
          $insert = $pdo->prepare("INSERT INTO medecin(nommedecin,email,idspe,idville,clinique,montant,nomfichier,urlfichier,mdp) VALUES(:nom,:email,:idspecialite,:ville,:clinique,:montant, :nomfichier,:urlfichier,:mdp)");
          $stmp = $insert->execute([
            'nom' =>$nom,
            'email' =>$email,
            'idspecialite' =>$idspecialite,
            'ville'=>$idville,
            'clinique'=>$clinique,
            'montant'=>$montant,
            'nomfichier' => $file_name,
            'urlfichier' => $file_destination,
            'mdp' =>$mdp,
          ]);
          if($stmp){
            $_SESSION['emailm'] = $email;
            header("location: login.php");
            $_POST['nom'] = "";
            $_POST['specialite'] = "";
            $_POST['ville'] = "";
            $_POST['clinique'] = "";
            $_POST['montant'] = "";
            $_POST['email'] = "";
            $_POST['password'] = "";
            $_POST['fichier'] = "";
          }else{
            echo("<script>alert('Insertion échoué😊 ')</script>");    
          }
        }
      }else{
        

        echo "ce type de fichier n'est pas pris en charge merci😊";
      }        
    }
  }

//Fin insertion de l'envoi du cours
?>





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
                      <h5 class="card-title text-center pb-0 fs-4">Créer un compte</h5>
                      <p class="text-center small">Entrez vos informations personnelles pour créer un compte</p>
                    </div>

                    <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                      <div class="col-12">
                        <label for="yourName" class="form-label">Nom Complet</label>
                        <input type="text" name="nom" class="form-control" id="yourName" required>
                        <div class="invalid-feedback">S'il vous plaît entrez votre nom!</div>
                      </div>

                      <div class="col-12">
                        <label for="yourEmail" class="form-label">Votre Email</label>
                        <input type="email" name="email" class="form-control" id="yourEmail" required>
                        <div class="invalid-feedback">Veuillez saisir une adresse e-mail valide !</div>
                      </div>
                      
                      <div class="col-12">
                          <label for="inputState" class="form-label">Spécialité</label>
                          <select id="inputState" class="form-select" name="specialite">
                              <?php foreach($data as $row): ?>
                                <option value="<?= $row["idspe"]?>"><?= $row["nom"]?></option>
                              <?php endforeach?>   
                          </select>
                      </div>
                      
                      <div class="col-12">
                          <label for="inputState" class="form-label">Ville</label>
                          <select id="inputState" class="form-select" name="ville">
                              <?php  foreach($res as $row): ?>
                                <option value="<?= $row["idville"]?>"><?= $row["nomville"]?></option>
                              <?php endforeach?>   
                          </select>
                      </div>
                      
                      <div class="col-12">
                        <label for="yourName" class="form-label">Nom du centre et quartier</label>
                        <input type="text" name="clinique" class="form-control" id="yourName" required>
                        <div class="invalid-feedback">S'il vous plaît entrez un nom!</div>
                      </div>
                      
                      <div class="col-12">
                        <label for="yourPassword" class="form-label">Prix de la consultation</label>
                        <input type="text" name="montant" class="form-control" id="yourPassword" required>
                        <div class="invalid-feedback">S'il vous plaît entrez montant!</div>
                      </div>

                      <div class="col-12">
                        <label for="inputNumber" class="">Choisir une photo</label>
                      
                        <input class="form-control" type="file" id="formFile" name="fichier">
                        
                      </div>
                    

                      <div class="col-12">
                        <label for="yourPassword" class="form-label">Mot de passe</label>
                        <input type="password" name="password" class="form-control" id="yourPassword" required>
                        <div class="invalid-feedback">S'il vous plaît entrez votre mot de passe!</div>
                      </div>
                      
                      

                      <div class="col-12">
                        <div class="form-check">
                          <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                          <label class="form-check-label" for="acceptTerms">Je suis d'accord et j'accepte   <a href="#">les termes et conditions</a></label>
                          <div class="invalid-feedback">Vous devez accepter avant de soumettre.</div>
                        </div>
                      </div>
                      <div class="col-12 d-flex justify-content-center">
                        <div class="col-6 me-2">
                          <button class="btn btn-primary w-100" type="submit" name="envoyer">Créer un compte</button>
                        </div>
                        <div class="col-6 ms-2ù">
                          <button class="btn btn-danger w-100" type="reset">Annuler</button>
                        </div>
                      </div>
                      
                      <div class="col-12">
                        <p class="small mb-0">Vous avez déjà un compte?<a href="login.php"> Connexion </a></p>
                      </div>
                    </form>

                  </div>
                </div>

              

              </div>
            </div>
          </div>

        </section>

      </div>
    </div>
  </main><!-- End #main -->

  <?php include('linkjs.php'); ?>
</body>

</html>