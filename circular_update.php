<?php

include "db_conn.php";
if(isset($_POST['enter']))
{
    $news = $_POST['news'];
    $title = $_POST['title'];

    $query = "INSERT INTO circular(news,title) values('$news','$title')";
    $res = mysqli_query($conn,$query);
    if($res){
        header("location:success.html");
    }
}


?>