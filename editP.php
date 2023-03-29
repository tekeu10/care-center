<?php 
   include('config.php');

//   echo $_GET['idi'];
   if(isset($_POST['modifier'])){
        $id=$_GET['b'];
        $nom = $_POST['nom'];
		$email = $_POST['email'];
		$numero = $_POST['numero'];
	


        try{
            $update = $pdo->prepare("UPDATE patient SET nompatient='$nom', email='$email', numero='$numero' WHERE idpat =$id ");
            $stmt=$update->execute();
      
                header("location:lpadmin.php");
           
        }

        catch (Exception $e){
            $message->gettext($e);
            echo $message;
            echo "error has occured";
        }
    }

        
      

?>



