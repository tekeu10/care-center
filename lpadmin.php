<?php 
  	include_once('config.php');
  	//Afficher la liste des patient
	$select = $pdo->prepare("SELECT * FROM patient");
	$select->execute();
	$patient = $select->fetchAll();
	$idi = 0;

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
		 
			header("location:lpadmin.php");
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
<head>
	<?php include('linkcss.php'); ?>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>liste patient</title>

	<?php include('style.php'); ?>
	<?php include('headadmin.php'); ?>
	<?php include('asidad.php'); ?>
</head>
<body>

    <div class="container">
		<div class="pagetitle">
		<h1>Liste des patients</h1>
		<nav>
			<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="indadmin.php">Accueil</a></li>
			<li class="breadcrumb-item active">Tableau de bord</li>
			</ol>
		</nav>
		</div><!-- End Page Title -->
		<div class="table-responsive">
       	   
			<div class="table-wrapper">
               
				<div class="table-title">
						<div class="col-xs-6">
							<h2>Liste Des <b> Patients</b></h2>
						</div>
					<div class="row">
						
						<div class="col-xs-12">
							<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="ri-add-circle-fill"></i> <span>Ajouter un patient</span></a>
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							
							<th>Id</th>
							<th>Nom </th>
							<th>Email</th>
							<th>Numéro</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($patient as $row): ?>
							<tr>
						
								<td><?php echo $row['idpat']?></td>
								<td><?php echo $row['nompatient']?></td>
								<td><?php echo $row['email']?></td>
								<td><?php echo $row['numero']?></td>
						
								<td>
								    <a href="#<?php $a = $row['idpat']; echo $row['idpat'];?>editEmployeeModal" class="edit" data-toggle="modal"><i class="ri-pencil-fill" data-toggle="tooltip" title="Modifier"></i></a>
									<a href="#<?php $b =  $row['idpat']; echo $row['idpat'];?>deleteEmployeeModal" class="delete" data-toggle="modal"><i class="ri-delete-bin-line" data-toggle="tooltip" title="Supp"></i></a>
								</td>
							</tr>

								<!-- Edit Modal HTML -->
							<div id="<?php echo $a;?>editEmployeeModal" class="modal fade">
								<div class="modal-dialog">
									<div class="modal-content">
										<form method="$_POST" action="editP.php?a=<?php echo $row['idpat'];?>">
											<div class="modal-header">						
												<h4 class="modal-title">Modifier Un Patient</h4>
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											</div>
											<?php
												$sel = $pdo->prepare("SELECT * FROM patient");
												$sel->execute();
												$pat= $sel->fetchAll();
											?>
											<div class="modal-body">					
												<div class="form-group">
													<label>Nom</label>
													<input type="text" class="form-control" value="<?php echo $pat[0]['nompatient']; ?>"  required>
												</div>
											
												<div class="form-group">
													<label>Email</label>
													<input type="email" class="form-control" value="<?php echo $pat[0]['email']; ?>"  required>
												</div>
												<div class="form-group">
													<label>numero</label>
													<input type="number" value="+237<?php echo $pat[0]['numero']; ?>" class="form-control"  required>
											
												</div>			
											</div>
											<div class="modal-footer">
												<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
												<input type="submit" class="btn btn-info" name="modifier" value="Sauvegarder">
											</div>
										</form>
									</div>
								</div>
							</div>

								<!-- debut du delete modal  -->
								<div id='<?php echo $b;?>deleteEmployeeModal' class="modal fade">
									<div class="modal-dialog">
										<div class="modal-content">
											<form method="post" action="delp.php?a=<?php echo $row['idpat'];?>">
												<div class="modal-header">						
													<h4 class="modal-title"> Supprimer Un Patient</h4>
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												</div>
												<div class="modal-body">					
													<p>Etes vous sur de vouloir supprimer ce patient?</p>
													<p class="text-warning"><small>Cet action n'est pas reversible.</small></p>
												</div>
												<div class="modal-footer">
													<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
													<input type='submit' class='btn btn-danger' name='supprimer'  value='Supprimer'>"
													
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
	<!-- Add Modal HTML -->
	
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" enctype="multipart/form-data">
					<div class="modal-header">						
						<h4 class="modal-title">Ajouter un patient </h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nom</label>
							<input type="text" class="form-control" name="nom" required>
						</div>
						
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" class="form-control" required>
						</div>
					    
						<div class="form-group" >
                            <label for="">Numéro</label>
                            <input type="text" value="+237" name="numero" class="form-control" required >
                        </div> 
									
						<div class="form-group">
							<label>Mot de passe </label>
							<input type="password" name="password" class="form-control" required>
						</div>
						
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
						<input type="submit" class="btn btn-primary" name="envoyer" value="Ajouter">
					</div>
				</form>
			</div>
		</div>
	</div>

				

	
	</div>
    <?php include('linkjs.php'); ?>
  
</body>
</html>