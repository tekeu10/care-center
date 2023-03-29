



<!DOCTYPE html>
<html lang="en">
<?php include('linkcss.php'); ?>
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

    <div class="container">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-xs-6">
							<h2 class="text-center">  <b>Liste de tous mes patient</b></h2>
						</div>
						
					</div>
				</div>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Id</th>
							<th>Nom</th>
							<th>Email</th>
							<th>Adresse</th>
							
				
						</tr>
					</thead>
					
				</table>
				
			</div>
		</div>        
    </div>

	</div>

  </main><!-- End #main -->

  


  <?php include('linkjs.php'); ?>


</body>

</html>