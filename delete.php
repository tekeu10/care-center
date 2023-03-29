<?php 
   include('config.php');
if (isset($_POST['supprimer'])){
    $id = $_GET['a'];
    try{
        $query=$pdo->prepare("DELETE from medecin where idmed='$id'");
        $res= $query->execute();
        if( $res){ 
            header("location:Lmedadmin.php");
        }
    }


    catch (Exception $e){
echo "Une erreur s'est produite, veuillez reessayer";
    }
  
  
}

?>



