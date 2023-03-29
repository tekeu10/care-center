<?php 
   include('config.php');
if (isset($_POST['supprimer'])){
    $id = $_GET['a'];
    try{
      
        $query="DELETE from rendezvous where idrdv='$id'";
        $query=$pdo->prepare($query);
        
        $res= $query->execute();
        if( $res){ 
            header("location:rdvtab.php");
        }
        echo"<script>alert($query)</script>";
    }
    
    catch (Exception $e){
       echo "Une erreur s'est produite, veuillez reessayer";
    }
  echo"heloo";
  
}

?>



