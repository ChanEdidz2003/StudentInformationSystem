<?php
include "db_conn.php";
if(isset($_POST['login'])){
    $regist = $_POST['regist'];
    $name = $_POST['name'];
    $certi = $_FILES['certi']['name'];

    $query = "INSERT into certi(regist,name,certi) values('$regist','$name','$certi')";
    $res = mysqli_query($conn,$query);
    if($res){
        move_uploaded_file($_FILES['certi']['tmp_name'],"$certi");
        header("Location:success.html");
    }
}


?>