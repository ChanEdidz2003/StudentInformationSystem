<?php
include "db_conn.php";
if(isset($_POST['login'])){
    $sub = $_POST['sub'];
    $notes = $_FILES['notes']['name'];

    $query = "INSERT into notes(sub,notes) values('$sub','$notes')";
    $res = mysqli_query($conn,$query);
    if($res){
        move_uploaded_file($_FILES['notes']['tmp_name'],"$notes");
        header("Location:success.html");
    }
}

?>