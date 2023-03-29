<?php 

  include_once('config.php');
  
  if(isset($_POST['envoyer'])){   
     
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];
    $mdp = $_POST['password'];

    try {
      //code...
    } catch (\Throwable $th) {
      //throw $th;
    }
    $insert = $pdo->prepare("INSERT INTO patient(nompatient, numero, email, mdp) VALUES(:nom, :numero, :email, :mdp)");
    $stmp = $insert->execute([
      'nom' =>$nom,
      'numero' =>$numero,
      'email' =>$email,
      'mdp' =>$mdp,
    ]);
    
    if($stmp){     
      $_SESSION['emailp'] = $email;
      header("location: login.php");
     }else {
      echo("<script>alert('Insertion échoué😊 ')</script>");
     }
    $_POST['nom'] = "";
    $_POST['numero'] = "";
    $_POST['email'] = "";
    $_POST['password'] = "";
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
                    <h5 class="card-title text-center pb-0 fs-4">Créer un compte</h5>
                    <p class="text-center small">Entrez vos informations personnelles pour créer un compte</p>
                  </div>

                  <form class="row g-3" action="" method="POST">
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
                      <label for="numero" class="form-label">Numéro</label>
                      <div class="input-group has-validation">
                        <input type="phone" name="numero" class="form-control" id="numero" required value="+237" size="">
                        <div class="invalid-feedback">Entrer un numero valide</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Mot de passe</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">S'il vous plaît entrez votre mot de passe!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" >
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
                    
                    <div class="col-12 d-flex justify-content-center">
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
  </main><!-- End #main -->

  <?php include('linkjs.php'); ?>x  

</body>

</html>