<?php
include "mongoCon.php";
if(isset($_GET['delname'])){
    $userEmail = $_GET['delname'];
    $plan = $MRFitness->plan;
    if($plan->deleteOne(
     ['userEmail' => $userEmail])){
        header("Location: planData.php");
    }else{
        header("Location: planData.php?error = there is an error");
    }
}
 ?>