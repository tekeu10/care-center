<?php 
    //Ouverture de la connexion a la bd
	include('config.php');
    $idi = 0;
	// This function returns a doctor based on id
	// function getDoctor($pdo, $id) {
	// 	$select = $pdo->prepare("SELECT * FROM medecin m, specialite s WHERE m.idspe=s.idspe AND m.idmed = $id");
	// 	$select->execute();
	// 	$medecin = $select->fetch();
	// 	return $medecin;
	// }
	
	//Afficher la liste des medecins
	$select = $pdo->prepare("SELECT * FROM medecin m, specialite s, ville v WHERE m.idspe=s.idspe AND v.idville=m.idville");
	$select->execute();
	$medecins = $select->fetchAll();

	//Début du modal ajouter
	//récupération des ville pour afficher dans le dropdown
	$smtp= $pdo->prepare('SELECT * FROM ville');
	$smtp->execute();
	$res= $smtp->fetchAll();
  
	if(isset($_POST['envoyer'])){
		$nom =$_POST['nom'];
		$email =$_POST['email'];
		$idspecialite =$_POST['specialite'];
		$idville =$_POST['ville'];
		$clinique =$_POST['clinique'];
		$montant =$_POST['montant'];
		$mdp =$_POST['password'];
	  
	  if(!empty($_FILES)){
		$file_name = $_FILES['fichier']['name'];
		$file_extension = strrchr($file_name,".");
		$file_tmp_name = $_FILES['fichier']['tmp_name'];
		$file_destination = 'files/'.$file_name;
		$extensions_autorisees =array('.jpeg',',JPEG','.jpg','.JPG','.TIFF','.tiff','.png','.PNG');
		if(in_array($file_extension, $extensions_autorisees)){
		  if(move_uploaded_file($file_tmp_name, $file_destination)){
			$insert = $pdo->prepare("INSERT INTO medecin(nommedecin,email,idspe,idville,clinique,montant,nomfichier,urlfichier,mdp) VALUES(:nom,:email,:idspecialite,:ville,:clinique,:montant,:nomfichier,:urlfichier,:mdp)");
			$stmp = $insert->execute([
			  'nom' =>$nom,
			  'email' =>$email,
			  'idspecialite' =>$idspecialite,
			  'ville'=>$idville,
			  'clinique'=>$clinique,
			  'montant'=>$montant,
			  'nomfichier' => $file_name,
			  'urlfichier' => $file_destination,
			  'mdp' =>$mdp,
			]);
			if($stmp){
			  header("location: lmedadmin.php");
			  $_POST['nom'] = "";
			  $_POST['specialite'] = "";
			  $_POST['ville'] = "";
			  $_POST['clinique'] = "";
			  $_POST['montant'] = "";
			  $_POST['email'] = "";
			  $_POST['password'] = "";
			  $_POST['fichier'] = "";
			}else{
			  echo("<script>alert('Insertion échoué😊 ')</script>");    
			}
		  }
		}else{
		  
  
		  echo "ce type de fichier n'est pas pris en charge merci😊";
		}        
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
	<div class="pagetitle">
      <h1>Liste des médecins</h1>
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
					<div class="row">
					<div class="col-xs-6">
				
			</div>
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
							<th>Photo</th>
							<th>Nom Complet</th>
							<th>Email</th>
							<th>Spécialité</th>
							<th>Ville</th>
							
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($medecins as $medecin): ?>
							<tr>
							
								<td><?php echo $medecin['idmed']?></td>
								<td><img src="<?php echo $medecin['urlfichier']?>" width="50px" height="50px" alt="" class="img-circle" ></td>
								
								<td><?php echo $medecin['nommedecin']?></td>
								<td><?php echo $medecin['email']?></td>
								<td><?php echo $medecin['nom']?></td>
								<td><?php echo $medecin['nomville']?></td>
								<td>
									<a href="#<?php $idi =  $medecin['idmed']; echo $medecin['idmed'];?>editEmployeeModal"   id="editing" class="edit" data-toggle="modal"><i class="ri-pencil-fill" data-toggle="tooltip" title="Modifier"></i></a>
									<a href="#<?php $a =  $medecin['idmed']; echo $medecin['idmed'];?>deleteEmployeeModal"  class="delete" data-toggle="modal"><i class="ri-delete-bin-line" data-toggle="tooltip" title="Supprimer"></i></a>

								</td>
							</tr>
							<!-- debut du edit modal  -->
							<div id="<?php echo $idi;?>editEmployeeModal" class="modal fade">
								<div class="modal-dialog">
									<div class="modal-content">
										<form method="POST" action="editM.php?idi=<?php echo $medecin['idmed'];?>">
											<div class="modal-header">						
												<h4 class="modal-title">Modifier Un Médecin </h4>
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											</div>
											<?php 
											$selectmed = $pdo->prepare("SELECT * FROM medecin m, specialite s WHERE m.idspe=s.idspe AND idmed = $idi");
											$selectmed->execute();
											$mede = $selectmed->fetchAll();
											?>
											<div class="modal-body">					
												<div class="form-group">
													<label>Nom</label>
													<input type="text" class="form-control" name="nom" value="<?php echo $mede[0]['nommedecin']; ?>" >
												</div>
												<div class="form-group">
													<label>Email</label>
													<input type="email" class="form-control" name="email" value="<?php echo $mede[0]['email']; ?>">
												</div>
												<div class="form-group">					
													<label for="inputState" class="form-label">Spécialité</label>
													<select id="inputState" class="form-select" name="specialite">
														<?php 
															include_once('config.php');
															$smt= $pdo->prepare('SELECT * FROM specialite');
															$smt->execute();
															$data= $smt->fetchAll();
														
														?>
														<?php foreach($data as $row): ?>
															<option value="<?= $row["idspe"];?>"> <?= $row["nom"]?>
															</option>
														<?php endforeach?>   
													
													</select>         
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
							<!-- fin du edit modal  -->
							<!-- debut du delete modal  -->
							<div id='<?php echo $a;?>deleteEmployeeModal' class="modal fade">
								<div class="modal-dialog">
									<div class="modal-content">
										<form method="post" action="delete.php?a=<?php echo $medecin['idmed'];?>">
											<div class="modal-header">						
												<h4 class="modal-title"> Supprimer Un Médecin</h4>
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											</div>
											<div class="modal-body">					
												<p>Etes vous sur de vouloir supprimer ce médecin?</p>
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
	<div id="addEmployeeModal" class="modal fade ">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" enctype="multipart/form-data">
					<div class="modal-header">						
						<h4 class="modal-title">Ajouter un Médecin </h4>
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
						<div class="form-group">
						
							<label for="inputState" class="form-label">Spécialité</label>
							<select id="inputState" class="form-select" name="specialite">
								<?php 
									include_once('config.php');
									$smt= $pdo->prepare('SELECT * FROM specialite');
									$smt->execute();
									$data= $smt->fetchAll();
								
								?>
								<?php foreach($data as $row): ?>
								<option value="<?= $row["idspe"]?>"><?= $row["nom"]?></option>
								<?php endforeach?>   
							
							</select>
					
						</div>
						     
						<div class="col-12">
                          <label for="inputState" class="form-label">Ville</label>
                          <select id="inputState" class="form-select" name="ville">
                              <?php  foreach($res as $row): ?>
                                <option value="<?= $row["idville"]?>"><?= $row["nomville"]?></option>
                              <?php endforeach?>   
                          </select>
                      </div>
					  <div class="col-12">
                        <label for="yourName" class="form-label">Nom du centre et quartier</label>
                        <input type="text" name="clinique" class="form-control" id="yourName" required>
                        <div class="invalid-feedback">S'il vous plaît entrez un nom!</div>
                      </div>
					  <div class="col-12">
                        <label for="yourPassword" class="form-label">Prix de la consultation</label>
                        <input type="text" name="montant" class="form-control" id="yourPassword" required>
                        <div class="invalid-feedback">S'il vous plaît entrez montant!</div>
                      </div>
						<div class="form-group">
							<label>Mot de passe </label>
							<input type="password" name="password" class="form-control" required>
						</div>
						<div class="field image" >
                            <label for="">choisir une image</label>
                            <input type="file" name="fichier" >
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

	
    <?php include('linkjs.php'); ?>
	
</body>
</html>