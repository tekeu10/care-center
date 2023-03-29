<?php 
   include('config.php');

   if(isset($_POST['modifier'])){
        $id=$_GET['idi'];
        $nom =$_POST['nom'];
        $email =$_POST['email'];
        $idspecialite =$_POST['specialite'];


        try{
            $update = $pdo->prepare("UPDATE medecin SET nommedecin='$nom', email='$email', idspe='$idspecialite' WHERE idmed =$id ");
            $stmt=$update->execute();
         
            header("location:Lmedadmin.php");
            
        }

        catch (Exception $e){
            $message->gettext($e);
            echo $message;
            echo "error has occured";
        }
    }

        
      

?>



