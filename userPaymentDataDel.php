<?php
include "mongoCon.php";
if(isset($_GET['delname'])){
    $userEmail = $_GET['delname'];
    $result = $MRFitness->userpayment->deleteOne(
        ['userEmail' => $userEmail]); 
    if($result){
        header("Location: userPaymentData.php");
    }else{
        header("Location: userPaymentData.php?error = there is an error");
    }
}
 ?>