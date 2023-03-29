<?php 
   include('config.php');
if (isset($_POST['supprimer'])){
    $id = $_GET['a'];
    try{
        $query=$pdo->prepare("DELETE from ville where idville='$id'");
        $res= $query->execute();
        if( $res){ 
            header("location:ville.php");
        }else{
            echo'erreur';
        }
    }


    catch (Exception $e){
echo "Une erreur s'est produite, veuillez reessayer";
    }
  
  
}

?>



