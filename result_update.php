<?php

if(isset($_POST['regist']) && isset($_POST['s1']) && isset($_POST['g1']) && isset($_POST['s2']) && isset($_POST['g2']) && isset($_POST['s3']) && isset($_POST['g3']) && isset($_POST['s4']) && isset($_POST['g4']) && isset($_POST['s5']) && isset($_POST['g5'])  && isset($_POST['s6']) && isset($_POST['g6'])){
    include 'db_conn.php';

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $regist = validate($_POST['regist']);
    $s1 = validate($_POST['s1']);
    $g1 = validate($_POST['g1']);
    $s2 = validate($_POST['s2']);
    $g2 = validate($_POST['g2']);
    $s3 = validate($_POST['s3']);
    $g3 = validate($_POST['g3']);
    $s4 = validate($_POST['s4']);
    $g4 = validate($_POST['g4']);
    $s5 = validate($_POST['s5']);
    $g5 = validate($_POST['g5']);
    $s6 = validate($_POST['s6']);
    $g6 = validate($_POST['g6']);

    

        $sql = "INSERT INTO result(regist,s1,g1,s2,g2,s3,g3,s4,g4,s5,g5,s6,g6) VALUES( '$regist' , '$s1', '$g1', '$s2', '$g2', '$s3', '$g3', '$s4', '$g4', '$s5', '$g5', '$s6', '$g6')";
        $res = mysqli_query($conn, $sql);

        if($res){
            header("location:success.html");
        }
   
    
}
             ?>
       
        