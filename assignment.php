<?php
include "db_conn.php";
if(isset($_POST['submitt'])){
    $reg = $_POST['reg'];
    $title = $_POST['title'];
    $notes = $_FILES['notes']['name'];

    $query = "INSERT into assignment(reg,title,notes) values('$reg','$title','$notes')";
    $res = mysqli_query($conn,$query);
    if($res){
        move_uploaded_file($_FILES['notes']['tmp_name'],"$notes");
        header("Location:success.html");
    }
}

?>