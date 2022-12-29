<?php
include "mongoCon.php";
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    if($MRFitness->user->deleteOne(['userEmail' => $id])){
        header("Location: userData.php");
    }else{
        header("Location: userData.php?error = there is an error");
    }
}
 ?>