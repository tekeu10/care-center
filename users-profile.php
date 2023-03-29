<?php 
    //Ouverture de la connexion a la bd
	include_once('config.php');
  
  
  $r = $_SESSION['emailm'];
  $select= $pdo->prepare("SELECT * FROM medecin, ville WHERE medecin.idville=ville.idville AND email='$r'");
  $select->execute();
  $medecin= $select->fetchAll();
  // echo("<center>$r</center>");


?>

<a href="#validEmployeeModal" class="edit" data-toggle="modal"><i class="ri-check-double-line"></i></a>
								<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="ri-delete-bin-6-line"></i></a>
<!DOCTYPE html>
<html lang="en">
<?php include_once('linkcss.php'); ?>

<head>
  <title>profil medecin</title>
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
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
          <li class="breadcrumb-item">Profile</li>
         
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
            <?php foreach($medecin as $med): ?>
              <img src="<?php echo $med['urlfichier']?>" alt="Profile" width="150px" height="120px" style="border-radius: 50%;">
              <h2><?php echo $med['nommedecin']?></h2>
              <?php endforeach?>
              
              <h3>Pédiatre</h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Information</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Modifier Profile</button>
                </li>

          

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Changer mot de passe</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <?php  foreach($medecin as $row):?>
                
                  <h5 class="card-title">A propos de moi</h5>
                  <p class="small fst-italic"></p>

                  <h5 class="card-title">Profile Detaillé</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label " value="">Nom Complet</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['nommedecin']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Hopital</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['clinique']?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Ancienneté</div>
                    <div class="col-lg-9 col-md-8"></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Ville </div>
                      <?php 
                      $select= $pdo->prepare("SELECT * FROM ville WHERE idville=".$row['idville']."");
                      $select->execute();
                      $mville= $select->fetchAll();
                      foreach($mville as $ville): ?>
                      <div class="col-lg-9 col-md-8"><?php echo $ville['nomville']?></div>
                    <?php endforeach; ?>
                  </div>

                  <div class="row">
                      <div class="col-lg-3 col-md-4 label">Adresse</div>
                        
                      <?php $select= $pdo->prepare("SELECT * FROM specialite WHERE idspe=".$row['idspe']."");
                                $select->execute();
                                $special= $select->fetchAll();
                                foreach($special as $spe): ?>
                        <div class="col-lg-9 col-md-8"><?php echo $spe['nom']?></div>
                      <?php endforeach; ?>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Numéro</div>
                    <div class="col-lg-9 col-md-8"></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['email']?></div>
                  </div>
                <?php endforeach?>

                
                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form method="POST">
                    <?php foreach($medecin as $med): ?>
                  
                      <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                        <div class="col-md-8 col-lg-9">
                            <img src="<?php echo $med['urlfichier']?>" alt="Profile">
                          <div class="pt-2">
                            <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                            <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                          </div>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nom Complet</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName" value="<?php echo $med['nommedecin']?>">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="about" class="col-md-4 col-lg-3 col-form-label">A propos</label>
                        <div class="col-md-8 col-lg-9">
                          <textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="company" class="col-md-4 col-lg-3 col-form-label">Hopital</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="company" type="text" class="form-control" id="company" value="<?php echo $med['clinique']?>">
                        </div>
                      </div>

                      

                      <div class="row mb-3">
                        <label for="Country" class="col-md-4 col-lg-3 col-form-label">Ville</label>
    
                        <div class="col-md-8 col-lg-9">
                          <?php 
                            $select= $pdo->prepare("SELECT * FROM ville WHERE idville=".$row['idville']."");
                            $select->execute();
                            $mville= $select->fetchAll();
                            foreach($mville as $ville): ?>
                          <input name="country" type="text" class="form-control" id="Country" value="<?php echo $ville['nomville']?>">
                        <?php endforeach; ?>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Address" class="col-md-4 col-lg-3 col-form-label">Spécialité</label>
                        <div class="col-md-8 col-lg-9">
                          <?php 
                            $select= $pdo->prepare("SELECT * FROM specialite WHERE idspe=".$row['idspe']."");
                            $select->execute();
                            $special= $select->fetchAll();
                            foreach($special as $spe): ?>
                          <input name="country" type="text" class="form-control" id="Country" value="<?php echo $spe['nom']?>">
                        <?php endforeach; ?>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Numéro</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="phone" type="text" class="form-control" id="Phone" value="(+237) 486-3531">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="email" type="email" class="form-control" id="Email" value="<?php echo $med['email']?>">
                        </div>
                      </div>

                  

                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Sauvegarder</button>
                      </div>
                    <?php endforeach?>
                    
                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                  <!-- Settings Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="changesMade" checked>
                          <label class="form-check-label" for="changesMade">
                            Changes made to your account
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="newProducts" checked>
                          <label class="form-check-label" for="newProducts">
                            Information on new products and services
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="proOffers">
                          <label class="form-check-label" for="proOffers">
                            Marketing and promo offers
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                          <label class="form-check-label" for="securityNotify">
                            Security alerts
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End settings Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form>

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Mot de passe actuel</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Nouveau mot de passe</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Retaper le mot de passe</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Confirmer</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->


  <?php include_once('linkjs.php'); ?>


</body>

</html>