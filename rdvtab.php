<?php include('config.php');

// session_start();
$r = $_SESSION['emailm'];
//var_dump($_SESSION['emailm']);
$query = "SELECT * FROM rendezvous r,patient p, temps t , medecin m WHERE r.idpat=p.idpat AND t.idtemps=r.idtemps AND m.idmed=r.idmed and m.email='$r' AND `status`=1";
$select = $pdo->prepare($query);
$select->execute();
$rdv = $select->fetchAll();
// var_dump($query);

// echo " <script>alert($query);</script>";

?>


<!DOCTYPE html>
<html lang="en">
<?php include('linkcss.php'); ?>

<head>
  <title>accueil medecin</title>
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
      <h1>Accueil Médecin</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
          <li class="breadcrumb-item active">Tableau de bord</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">RENDEZ-VOUS EN ATTENTE DE REPONSE</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>Nom patient</th>
                    <th scope="">Heure rendez-vous</th>
                    <th scope="">Jour rendez-vous</th>
                    <th scope="">Motif</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($rdv as $rdvs) : ?>

                    <tr>
                      <td><?php echo $rdvs['nompatient'] ?></td>
                      <td><?php echo $rdvs['heure'] ?></td>
                      <td><?php echo $rdvs['noms'] ?></td>
                      <td><?php echo $rdvs['motif'] ?></td>
                      <td>
                        <a href="<?php $b = $rdvs['idrdv'];
                                  echo $rdvs['idrdv']; ?>#disablebackdrop" data-bs-toggle="modal" data-bs-target=""><button type="button" class="btn btn-success"> <i class="ri-check-double-line"></i></button></a>
                        <a href="<?php $a = $rdvs['idrdv'];
                                  echo $rdvs['idrdv']; ?>#basicModal" data-bs-toggle="modal" data-bs-target=""><button class="btn btn-danger"> <i class="ri-delete-bin-6-line"></i> </button></a>

                      </td>
                    </tr>

                    <div class="modal fade" id="basicModal" tabindex="-1">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <form action="delrdv.php?a=<?php echo $rdvs['idrdv']; ?>" method="POST">
                            <div class="modal-header">
                              <h5 class="modal-title">Supprimer un rendez-vous</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <p>Etes vous sur de vouloir annuler ce rendez-vous?</p>
                              <p class="text-warning"><small>Cet action n'est pas reversible.</small></p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                              <button type="submit" class="btn btn-danger" name="supprimer">Supprimer</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>



                    <div class="modal fade" id="disablebackdrop" tabindex="-1">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <form action="editrdv.php?b=<?php echo $rdvs['idrdv']; ?>" method="POST">
                            <div class="modal-header">
                              <h5 class="modal-title">Valider un rendez-vous</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <p>Etes vous sur de vouloir valider ce rendez-vous?</p>
                              <p class="text-warning"><small>Cet action n'est pas reversible.</small></p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                              <button type="submit" class="btn btn-primary" name="modifier">Valider</button>
                            </div>
                          </form>

                        </div>
                      </div>
                    </div><!-- End Disabled Backdrop Modal-->


            </div>
          </div>
        <?php endforeach ?>

        </tbody>
        </table>
        <!-- End Table with stripped rows -->

        </div>
      </div>

      </div>


    </section>

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>