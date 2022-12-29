<?php
include "mongoCon.php";
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    if($MRFitness->equipment->deleteOne(['eqid'=>$id])){
        header("Location: equipmentData.php");
    }else{
        header("Location: equipmentData.php?error = there is an error");
    }
}
 ?>