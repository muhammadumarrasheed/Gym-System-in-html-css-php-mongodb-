<?php
include "mongoCon.php";
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $result = $MRFitness->package->deleteOne(
        ['packageid' => $id]); 
    if($result){
        header("Location: packageData.php");
    }else{
        header("Location: packageData.php?error = there is an error");
    }
}
 ?>