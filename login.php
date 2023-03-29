<?php 
  include_once('config.php');
  
  
  if(isset($_POST['envoyer'])){

    $email = $_POST['email'];
    $mdp = $_POST['password'];

    $select = $pdo->prepare("SELECT * FROM medecin WHERE email='$email' AND mdp='$mdp'");
    $select->execute();
    $medecin= $select->fetchAll();

    $select1 = $pdo->prepare("SELECT * FROM patient WHERE email='$email' AND mdp='$mdp' ");
    $select1->execute();
    $patient= $select1->fetchAll();
    

    if($medecin){
      session_start();
      $_SESSION['emailm'] = $email;
      header("location: accueilmed.php");
      $_POST['email'] = "";
      $_POST['password'] = "";
      
    } elseif($patient){
      session_start();
      $_SESSION['emailp'] = $email;
      // $idpat=$_SESSION['idpat'];
      header("location: patient.php");
      $_POST['email'] = "";
      $_POST['password'] = "";
    } elseif($email=='admin@gmail.com' && $mdp=='admin2022'){
      session_start();
      $_SESSION['emailadm'] = $email;
      header("location: indadmin.php");
      $_POST['email'] = "";
      $_POST['password'] = "";
    } else{
      echo("<script>alert('Veuillez vérifié vos informations😊')</script>");
      $_POST['email'] = $email;
      $_POST['password'] = $mdp;
    }
  }
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
                    <h5 class="card-title text-center pb-0 fs-4">Vous connectez</h5>
                    <p class="text-center small">Entrer votre Email et mot de passe pour vous conncetez</p>
                  </div>

                  <form class="row g-3" action="" method="POST">
                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Votre Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Veuillez saisir une adresse e-mail valide !</div>
                    </div>
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Mot de passe</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">S'il vous plaît entrez votre mot de passe!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Se souvenir de moi</label>
                      </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                      <div class="col-6 me-2">
                        <button class="btn btn-primary w-100" type="submit" name="envoyer">Se connecter</button>
                      </div>
                      <div class="col-6 me-2">
                        <button class="btn btn-danger w-100" type="reset">Annuler</button>
                      </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                      <p class="small mb-0">N'avez-vous pas de compte? <a href="choix.php">Créer un compte</a></p>
                    </div>
                  </form>

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