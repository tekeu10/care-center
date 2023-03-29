<?php 
   include('config.php');

   if(isset($_POST['modifier'])){
        $id=$_GET['b'];
      

        try{
            $update = $pdo->prepare("UPDATE rendezvous SET status=0 WHERE idrdv=$id ");
            $stmt=$update->execute();
         
            header("location:rdvtab.php");
            
        }

        catch (Exception $e){
            $message->gettext($e);
            echo $message;
            echo "error has occured";
        }
    }

        
      

?>



