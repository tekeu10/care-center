<?php 

include('config.php');
//Debut de la selection des heures
$id=$_POST['idjour'];
$idmedecin=$_POST['idmedecin'];
// echo('<script>alert('.$id.')</script>');

if (isset($_POST['idjour']) && !empty($_POST['idjour'])) {

    $select = "SELECT * FROM `agenda` WHERE `idtemps` = $id AND idmed=$idmedecin AND temps not in(SELECT heure FROM `rendezvous` WHERE `idtemps` = $id AND idmed=$idmedecin)";
    $stmp = $pdo->prepare($select);
    $stmp->execute();
    $heures = $stmp->fetchAll();
    
    $select = "SELECT * FROM `rendezvous` WHERE `idtemps` = $id OR idmed=$idmedecin";
    $stmp = $pdo->prepare($select);
    $stmp->execute();
    $heureRdv = $stmp->fetchAll();

    if ($heures == null) {
        echo '<option class="form-select">Heure non disponible</option>';
    }else{
        echo '<option class="form-select" selected>Veuillez choisir votre heure</option>';
        foreach ($heures as $row){
            echo '<option value=' . $row['temps'] . '>' . $row['temps'] . '</option>';
        }
        if($heureRdv != null){
            echo '<option value=' . $row['idagenda'] . '>' . $row['temps'] . '</option>';
        }else{
            foreach($heures as $row){
                foreach($heureRdv as $link){
                    if(strcmp($row['temps'],$link['heure']) !=0){
                        echo '<option value=' . $row['idagenda'] . '>' . $row['temps'] . '</option>';
                        break;
                    }else if(strcmp($row['temps'],$link['heure']) ==0){
                        echo '<option class="form-select" selected>Heure occupee</option>';
                        break;
                    }
                }
            }
        }
        foreach($heures as $row) {
            // if($heureRdv != null) {
                foreach($heureRdv as $link){
                    if(strcmp($row['temps'],$link['heure']) !=0){
                        echo '<option value=' . $row['idagenda'] . '>' . $row['temps'] . '</option>';
                        break;
                    }else if(strcmp($row['temps'],$link['heure']) ==0){
                        echo '<option class="form-select" selected>Heure occupee</option>';
                        break;
                    }
                }
            // }else {
            //     echo '<option value=' . $row['idagenda'] . '>' . $row['temps'] . '</option>';
            // }
        }
        
        foreach($heures as $row) {
            if($heureRdv != null) {
                foreach($heureRdv as $link){
                    if($row['temps']!=$link['heure']){
                        echo '<option value=' . $row['idagenda'] . '>' . $row['temps'] . '</option>';
                        break;
                    }else if($row['temps']==$link['heure']){
                        echo '<option class="form-select" selected>Heure occupee</option>';
                        break;
                    }
                }
            }else {
                echo '<option value=' . $row['idagenda'] . '>' . $row['temps'] . '</option>';
            }
        }
        
    }
    if ($heureRdv == null) {
        echo '<option class="form-select">Heure non disponible</option>';
    } else {
        echo '<option class="form-select" selected>Veuillez choisir votre heure</option>';
        foreach ($heureRdv as $row){
        echo '<option value=' . $row['idrdv'] . '>' . $row['heure'] . '</option>';
        }
    }
}else{
echo '<h1>Error</h1>';
}
//Fin de la selection des heures 




?>