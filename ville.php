<?php 
    //Ouverture de la connexion a la bd
	include('config.php');
   $idi = 0;

	
	//Afficher la liste des medecins
  $selection = $pdo->prepare("SELECT * FROM ville");
	$selection->execute();
	$spe = $selection->fetchAll();

  
  if(isset($_POST['envoyer'])){
    $nom =$_POST['nom'];

        $insert = $pdo->prepare("INSERT INTO ville(nomville) VALUES(:nom)");
        $stmp = $insert->execute([
          'nom' =>$nom,
        ]);
        if($stmp){
        
            header("location: ville.php");
            $_POST['nom'] = "";
         
          }else{
            echo("<script>alert('Insertion échoué😊 ')</script>");    
          }
}

  	//Fin du modal ajouter



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('linkcss.php'); ?>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>liste medecin</title>

	<?php include('style.php'); ?>
	<?php include('headadmin.php'); ?>
	<?php include('asidad.php'); ?>
</head>
<body>
    
    <div class="container">
		<div class="table-responsive">
			<div class="pagetitle">
				<h1>Liste des villes</h1>
				<nav>
					<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="indadmin.php">Accueil</a></li>
					<li class="breadcrumb-item active">Tableau de bord</li>
					</ol>
				</nav>
			</div><!-- End Page Title -->
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						
						<div class="col-xs-12">
							<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="ri-add-circle-fill"></i> <span>Ajouter un Médecin</span></a>
						
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<!-- <th>
								<span class="custom-checkbox">
									<input type="checkbox" id="selectAll">
									<label for="selectAll"></label>
								</span>
							</th> -->
							<th>Id</th>
							
							<th>Nom Ville </th>
						
							
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($spe as $row): ?>
							<tr>
							
								<td><?php echo $row['idville']?></td>
							
								<td><?php echo $row['nomville']?></td>
					
								<td>						
									<a href="#<?php $a =  $row['idville']; echo $row['idville'];?>deleteEmployeeModal"  class="delete" data-toggle="modal"><i class="ri-delete-bin-line" data-toggle="tooltip" title="Supprimer"></i></a>
								</td>
							</tr>

							<!-- debut du delete modal  -->
							<div id='<?php echo $a;?>deleteEmployeeModal' class="modal fade">
								<div class="modal-dialog">
									<div class="modal-content">
										<form method="post" action="delville.php?a=<?php echo $row['idville'];?>">
											<div class="modal-header">						
												<h4 class="modal-title"> Supprimer Une ville</h4>
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											</div>
											<div class="modal-body">					
												<p>Etes vous sur de vouloir supprimer cet ville?</p>
												<p class="text-warning"><small>Cet action n'est pas reversible.</small></p>
											</div>
											<div class="modal-footer">
												<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
												<input type='submit' class='btn btn-danger' name='supprimer'  value='Supprimer'>
												
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- fin du delete modal  -->
						<?php endforeach;?>
						
					</tbody>
				</table>
				
			</div>
		</div>        
    </div>
	<!--script-->
	


	<!-- Add Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" enctype="multipart/form-data">
					<div class="modal-header">						
						<h4 class="modal-title">Ajouter une ville </h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nom de la ville</label>
							<input type="text" class="form-control" name="nom" required>
						</div>
						
					
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
						<input type="submit" class="btn btn-primary" name="envoyer" value="Ajouter">
					</div>
				</form>
			</div>
		</div>
	</div>

	
    <?php include('linkjs.php'); ?>
	
</body>
</html>