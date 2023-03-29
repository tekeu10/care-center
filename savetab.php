<?php
    include('config.php');
    
    if(isset($_POST['envoyer'])){
        $mede=$_POST['medecin'];
        $jour=$_POST['jour'];
        $heure=$_POST['heure'];
        $motif=$_POST['motif'];
        $sexe=$_POST['sexe'];
        $pat=$_POST['patient'];
        
        $insert = $pdo->prepare("INSERT INTO rendezvous(idmed,idtemps,heure,motif,sexe,idpat) VALUES(:idmed,:jour,:heure,:motif,:sexe,:idpat)");
        $stmp = $insert->execute([
            'idmed' =>$mede,
            'jour' =>$jour,
            'heure' =>$heure,
            'motif'=>$motif,
            'sexe'=>$sexe,
            'pat'=>$pat,

          ]);
          if($stmp){
            echo("<script>alert('Insertion échoué😊 ')</script>");    

            $_POST['medecin'] = "";
            $_POST['jour'] = "";
            $_POST['heure'] = "";
            $_POST['motif'] = "";
            $_POST['sexe'] = "";
            $_POST['patient'] = "";
           
          }else{
            echo("<script>alert('Insertion échoué😊 ')</script>");    
          }
        
    }

?>
