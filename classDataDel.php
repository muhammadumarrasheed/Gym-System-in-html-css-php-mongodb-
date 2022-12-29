<?php
include "mongoCon.php";
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    if($MRFitness->class->deleteOne(['classid'=>$id])){
        header("Location: classData.php");
    }else{
        header("Location: classData.php?error = there is an error");
    }
}
 ?>