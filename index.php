<?php 
    include('config.php');
?>
               

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Accueil</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="acceuil/assets/img/test.png" rel="icon">
  <link href="acceuil/assets/img/app.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="acceuil/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="acceuil/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="acceuil/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="acceuil/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="acceuil/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="acceuil/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="acceuil/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="acceuil/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="acceuil/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v4.7.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="njangihost@gmail.com">njangihost@gmail.com</a>
        <i class="bi bi-phone"></i> +237 656076200
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
     
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
    <img src="acceuil/assets/img/test.png" alt="" width="50px" height="50px"> 
      <h1 class="logo me-auto"><a href="index.html">HealthCare</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#about">A propos</a></li>
          <li><a class="nav-link scrollto" href="#departments">Département</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Docteurs</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="login.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Prendre un</span> rendez-vous</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1 >Bienvenue sur HealthCare</h1>
      <h2 >Organisé un rendez-vous avec un spécialiste en un clic</h2>
      <a href="login.php" class="btn-get-started scrollto">Se connecter</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Pourquoi choisir HealthCare?</h3>
              <p>
                HealthCare est une applicatiion qui va vous permettre de prendre un rendez-vous en ligne pour une consultation physique
                avec un spécialiste médicale et de payer vos frais de consultation, afin de vous évitez les files d'attentes.
               </p>
              <div class="text-center">
                <a href="login.php" class="more-btn">Voir puls <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Regardez la liste des spécalistes</h4>
                    <p>vous avez cette possibilité pour savoir si vous retrouverez votre spécialiste</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="ri-map-pin-2-fill"></i>
                    <h4>Localisez le medécin</h4>
                    <p>Apres avoir consulter la liste vous pouvez faire une recherche sur la localisation de l'hopital pour vérifier votre proximité</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="ri-home-7-fill"></i>
                    <h4>Prendre un rendez-vous</h4>
                    <p>vous ferez votre réservation en fonction de ca disponibilité</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

   <!-- ======= About Section ======= -->
   <section id="about" class="about">
    <div class="container-fluid">

      <div class="row">
        <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
          <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
        </div>

        <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
          <h3>Qu'est ce que HealthCare?</h3>
          <p>HealthCare est un service de prise de rendez-vous avec des médécins spécialiste au Cameroun, 100% gratuit pour les patients 24H/24 7j/7. De nos jours la prise de rendez-vous avec les médécins est parsemée de difficultés. Les patients ne savent pas pour la plus part de temps ou se trouve un spécialiste, les sécrétariats sont débordés, les salles d'attentes des hopitaux de réference sont saturées. Disponible sur le web.
            HealthCare vient révolutionner l'e-santé au Cameroun. En quelque clics, un patient peut rendez-vous de manière rapide et efficace. Grace a ce service les patients aurons la possibilité de trouvez facilement les spécialistes et les médecins de pouvoir stocké les dossiers de leurs patients.</p>

          <div class="icon-box">
            <div class="icon"><i class="ri-user-3-fill"></i></div>
            <h4 class="title"><a href="">Le patient</a></h4>
            <p class="description">Accédez aux disponibilité des professionel de santé</p>
          </div>

          <div class="icon-box">
            <div class="icon"><i class="ri-time-fill"></i></div>
            <h4 class="title"><a href="">Temps de reservations</a></h4>
            <p class="description">Vous pouvez prendre un rendez-vous étant chez vous 24H/24 et 7j/7 pour une consultation physique</p>
          </div>

          <div class="icon-box">
            <div class="icon"><i class="ri-phone-fill"></i></div>
            <h4 class="title"><a href="">Rappels</a></h4>
            <p class="description">Vous recevrez des Rappels automatiques par SMS ou par Mail</p>
          </div>

        </div>
      </div>

    </div>
  </section><!-- End About Section -->
   <!-- ======= Counts Section ======= -->
   <section id="counts" class="counts">
    <div class="container">

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="fas fa-user-md"></i>
            <?php 

                      $select= $pdo->prepare("SELECT count(*) FROM medecin");
                      $select->execute();
                      $special= $select->fetchColumn();
            ?>
                     
                    
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $special;?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Médecin </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="far fa-hospital"></i>
            <?php 
                      $select= $pdo->prepare("SELECT count(*) FROM specialite");
                      $select->execute();
                      $special= $select->fetchColumn();
                    ?>
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $special;?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Départements</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="ri-user-2-fill"></i>
            <?php 
                      $select= $pdo->prepare("SELECT count(*) FROM patient");
                      $select->execute();
                      $special= $select->fetchColumn();
               ?>
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $special;?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>nombres de patient</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="ri-uninstall-fill"></i>
            <?php 
                      $select= $pdo->prepare("SELECT count(*) FROM rendezvous");
                      $select->execute();
                      $special= $select->fetchColumn();
               ?>
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $special;?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>rendez-vous</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>Départements</h2>
          <p>Un département au service de la formation d’experts dans les disciplines médicales et biomédicales et au service de l’avancement de la recherche</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Cardiologie</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Neurologie</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Pediatrie</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Hophtamologie</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Cardiologie</h3>
                    <p class="fst-normal">La cardiologie s’intéresse à l’appareil cardiovasculaire, c’est-à-dire au cœur et aux vaisseaux (artères et veines), à la prévention ainsi qu’au traitement des anomalies et des maladies qui l’affectent : hypertension artérielle, insuffisance cardiaque, troubles du rythme cardiaque, angine de poitrine, athérosclérose … Le cardiologue peut être amené à intervenir en urgence notamment en cas d’infarctus du myocarde.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="acceuil/assets/img/departments-1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Neurologie</h3>
                    <p>La neurologie est la spécialité médicale clinique qui étudie l'ensemble des maladies du système nerveux et en particulier du cerveau. Cette spécialité médicale s'est séparée de la psychiatrie au XIXᵉ siècle avec l'école de Charcot à l'hôpital de la Pitié-Salpêtrière.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="acceuil/assets/img/departments-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Pediatrie</h3>
                    <p>La pédiatrie est une branche spécialisée de la médecine qui étudie le développement neuro-sensori-moteur et physiologique normal de l'enfant, ainsi que toute la pathologie qui y a trait (maladies infantiles), de la naissance à la période postpubertaire où il devient adulte ; c'est la médecine des enfants, l'enfant étant défini en droit comme tout sujet âgé de moins de 18 ans (article 1er de la Convention relative aux droits de l'enfant). Le médecin spécialisé en pédiatrie s'appelle le pédiatre.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="acceuil/assets/img/departments-4.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Hophtamologie</h3>
                   <p>L’ophtalmologie est la branche de la médecine chargée du traitement des maladies de l’œil et de ses annexes. C’est une spécialité médico-chirurgicale. Le médecin spécialisé pratiquant l'ophtalmologie est appelé « ophtalmologiste » ou « ophtalmologue »</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="acceuil/assets/img/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->
    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Docteurs</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="acceuil/assets/img/doctors/doctors-1.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Anne Kouam</h4>
                <span>Cardiologue</span>
                <p>Hopital régionale de Bafoussam</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="acceuil/assets/img/doctors/doctors-2.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amedee Nguefack</h4>
                <span>Pédiatre</span>
                <p>Clinique St Jean à Douala</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="acceuil/assets/img/doctors/doctors-3.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Anderson Mbi</h4>
                <span>Chirurgien</span>
                <p>Hopital général de Douala</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="acceuil/assets/img/doctors/doctors-4.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Liticia Ngon</h4>
                <span>Hophtamologue</span>
                <p>Clinique la paix de Déido</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Doctors Section -->
 

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
      </div> 
       <!-- <div>
            <img src="assets/img/ct3.png" width="800px" height="70vh" alt="" srcset="">
      </div> -->

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Adresse:</h4>
                <p>Akwa bonakouamang, Douala, Cameroun</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>njangihost@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Téléphone:</h4>
                <p>+237 656076200</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Envoyé</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>HealthCare</h3>
            <p>
             Douala <br>
             Akwa, Bonakouamang<br>
              Cameroun <br><br>
              <strong>Téléphone:</strong> +237 656 075 200<br>
              <strong>Email:</strong> njangihost@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Nos Liens</h4>
            <ul>
              <li><i class="ri-asterisk"></i> <a href="#hero">Acceuil</a></li>
              <li><i class="ri-asterisk"></i> <a href="#about">A propos</a></li>
              <li><i class="ri-asterisk"></i> <a href="#departments">Département</a></li>
              <li><i class="ri-asterisk"></i> <a href="#testimonials">Témoignage</a></li>
              <li><i class="ri-asterisk"></i> <a href="contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nos département</h4>
            <ul>
              <li><i class="ri-asterisk"></i> <a href="#">Cardiologie</a></li>
              <li><i class="ri-asterisk"></i> <a href="#">Neurologie</a></li>
              <li><i class="ri-asterisk"></i> <a href="#">Pédiatrie</a></li>
              <li><i class="ri-asterisk"></i> <a href="#">Hophtamologie</a></li>
              <li><i class="ri-asterisk"></i> <a href="#">Dermatologie</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Nous écrire</h4>
            <p>Veuillez nous joindre pour plus d'information</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Envoyer">
            </form>
          </div>

        </div>
      </div>
    </div>

  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="acceuil/assets/vendor/purecounter/purecounter.js"></script>
  <script src="acceuil/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="acceuil/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="acceuil/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="acceuil/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="acceuil/assets/js/main.js"></script>

</body>

</html>