<?php
include "db_conn.php";
if(isset($_POST['login'])){
    $reg = $_POST['reg'];
    if($reg == "6135" || $reg == "123"){
        header("Location:dashboard.html");
    }
    else{
        
            header("location:failure.html");
    
    }
}


?>