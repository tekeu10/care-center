<!DOCTYPE html>
<html lang="en">
<?php include('linkPcss.php'); ?>
<head>
  <title>agenda</title>
</head>
<?php include('linktabcss.php'); ?>
<body>
  <!-- debut header -->
  <?php include('header.php'); ?>
  <!-- fin header -->

  <!-- debut aside -->
  <?php include('aside.php'); ?>
  <!-- fin aside -->

 

  <main id="main" class="main">
 
    <div class="col-lg 12"></div>
        <div class="col-lg-4">
            <img src="assets/img/card.jpg" width="70px" height="70px" alt="" srcset="">    
        </div>
        <div class="col-lg-12">
        <div class="table-responsive"><h3 class="text-center ">Horaire de rendez-vous</h3>
            <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                
                <div class="col-xs-6">

                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="ri-add-circle-fill"></i> <span>Publier</span></a>					
                </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                    <thead class="table-light">
                    <tr>
                    <th scope="col">Lundi</th>
                    <th scope="col">Mardi</th>
                    <th scope="col">Mercredi</th>
                    <th scope="col">Jeudi</th>
                    <th scope="col">Vendredi</th>
                    <th scope="col">Samedi</th>
                    <th scope="col">Dimanche</th>
                    </tr>
                    <tr>
                    <td>date</td>
                    <td>date</td>
                    <td>date</td>
                    <td>date</td>
                    <td>date</td>
                    <td>date</td>
                    <td>date</td>
                    </tr>
                            </thead>
                <tbody>
                            <tr>
                                <td><input type="time"></td>
                                <td><input type="time"></td>
                                <td>--:--</td>
                                <td><input type="time"></td>
                                <td><input type="time"></td>
                                <td><input type="time"></td>
                                <td><input type="time"></td>
                            </tr>
                            
                            <tr>
                                <td><input type="time"></td>
                                <td><input type="time"></td>
                                <td>--:--</td>
                                <td><input type="time"></td>
                                <td><input type="time"></td>
                                <td><input type="time"></td>
                                <td><input type="time"></td>
                            </tr>
                            <tr>
                                <td><input type="time"></td>
                                <td><input type="time"></td>
                                <td><input type="time"></td>
                                <td><input type="time"></td>
                                <td><input type="time"></td>
                                <td><input type="time"></td>
                                <td><input type="time"></td>
                            </tr>

                            <tr>
                                <td><input type="time"></td>
                                <td><input type="time"></td>
                                <td>--:--</td>
                                <td><input type="time"></td>
                                <td><input type="time"></td>
                                <td><input type="time"></td>
                                <td><input type="time"></td>
                            </tr>
                            </tbody>
            </table>
            
            </div>
        </div>        
        </div>
    </div>

  </main><!-- End #main -->

  


  <?php include('linkjs.php'); ?>


</body>

</html>