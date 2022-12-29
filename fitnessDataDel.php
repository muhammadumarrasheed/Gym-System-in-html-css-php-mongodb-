<?php
include "mongoCon.php";
if(isset($_GET['delname'])){
    $userEmail = $_GET['delname'];
    $result = $MRFitness->fitness->deleteOne(
        ['userEmail' => $userEmail]);
    if($result){
        header("Location: fitnessData.php");
    }else{
        header("Location: fitnessData.php?error = there is an error");
    }
}
 ?>