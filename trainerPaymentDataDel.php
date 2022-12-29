<?php
include "mongoCon.php";
if(isset($_GET['delname'])){
    $trainerEmail = $_GET['delname'];
    $result = $MRFitness->trainerpayment->deleteOne(
        ['trainerEmail' => $trainerEmail]); 
    if($result){
        header("Location: trainerPaymentData.php");
    }else{
        header("Location: trainerPaymentData.php?error = there is an error");
    }
}
 ?>