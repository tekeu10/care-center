<?php 
  include_once('config.php');
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
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
            
         

              <h5 class="card-title">DISPONIBILITE DE LA SEMAINE</h5>

              <!-- Table with stripped rows --> 
              <form action="" method="POST">  
              
                <table class="table datatable">
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
                </table>
                <br>              
                <div class="text-center">
                        <button type="submit" class="btn btn-primary" name="envoyer"> Mettre a jour</button>
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