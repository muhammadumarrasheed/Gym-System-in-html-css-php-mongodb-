<?php
include "mongoCon.php";
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    if($MRFitness->trainer->deleteOne(['trainerEmail' => $id])){
        header("Location: trainerData.php");
    }else{
        header("Location: trainerData.php?error = there is an error");
    }
}
 ?>