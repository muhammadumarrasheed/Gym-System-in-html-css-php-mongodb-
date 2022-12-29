<?php
include "mongoCon.php";
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $result = $MRFitness->session->deleteOne(['sessionid'=>$id]);
    if($result){
        header("Location: sessionData.php");
    }else{
        header("Location: sessionData.php?error = there is an error");
    }
}
 ?>