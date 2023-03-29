<!DOCTYPE html>
<html lang="en">

<?php include('linkPcss.php'); ?>
<head>
  <title>contact patient</title>
</head>


<body>

<?php include('heaside.php'); ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Contact</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Acceuil</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Contact</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section contact">

      <div class="row gy-4">

        <div class="col-xl-6">

          <div class="row">
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-geo-alt"></i>
                <h3>Adresse </h3>
                <p>Douala<br>Akwa, Banakouamang Njanguihost</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-telephone"></i>
                <h3>Apppelez Nous</h3>
                <p>+237 656 076 200</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-envelope"></i>
                <h3>Email </h3>
                <p>anzelitica@gmail.com<br>Njanguihost@gmail.com</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-box card">
                <i class="bi bi-clock"></i>
                <h3>Heure Ouvrable</h3>
                <p>Lundi - Vendredi<br>9h:00 - 17h:00</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-6">
          <div class="card p-4">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="nom" class="form-control" placeholder="Votre Nom" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Votre Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="sujet" placeholder="Sujet" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Envoyé</button>
                </div>

              </div>
            </form>
          </div>

        </div>

      </div>

    </section>

  </main><!-- End #main -->



<?php include('linkPjs.php'); ?>




</body>

</html>