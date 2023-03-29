<?php 
   include('config.php');

   if (isset($_POST['supprimer'])){
    $id = $_GET['a'];
    $query=$pdo->prepare("DELETE from patient where idpat='$id'");
    $res= $query->execute();
    if( $res){ 
        header("location:lpadmin.php");
    }else{
        echo'Echec';
    }   
}
?>
    


