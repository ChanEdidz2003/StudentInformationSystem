<?php
include "db_conn.php";

$reg = $_POST['reg'];

$slot1 = $_POST['slot1'];
$no_p1 = $_POST['no_p1'];
$no_pr1  = $_POST['no_pr1'];
$no_ab1 = $_POST['no_ab1'];

$slot2 = $_POST['slot2'];
$no_p2 = $_POST['no_p2'];
$no_pr2  = $_POST['no_pr2'];
$no_ab2 = $_POST['no_ab2'];

$slot3 = $_POST['slot3'];
$no_p3 = $_POST['no_p3'];
$no_pr3  = $_POST['no_pr3'];
$no_ab3 = $_POST['no_ab3'];

$insert = "INSERT INTO atta(reg,slot1,no_p1,no_pr1,no_ab1,slot2,no_p2,no_pr2,no_ab2,slot3,no_p3,no_pr3,no_ab3) values('$reg','$slot1','$no_p1','$no_pr1','$no_ab1','$slot2','$no_p2','$no_pr2','$no_ab2','$slot3','$no_p3','$no_pr3','$no_ab3')";
$connect = mysqli_query($conn,$insert);

if($connect){
    header("Location:success.html");
}
else{
     header("Location:failure.html");
}

?>