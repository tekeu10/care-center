
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
                <a href="acceuilmed.php" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/test.png" alt="">
                  <span class="d-none d-lg-block">HealthCare</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                <div class="pt-4 pb-2">
                  <h3 class="card-title text-center pb-0 fs-5">Créer un compte entant que?</h3>
                
                </div>
              
                <form class="row g-3">
                  
                  <div class="col-12">
                      <a href="register.php"><button type="button" class="btn btn-primary w-100">Patient</button></a>
                  </div>
                  <div class="col-12">
                      <a href="registM.php"><button type="button" class="btn btn-primary w-100">Médecin</button></a>    
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