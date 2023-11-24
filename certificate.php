<?php
include "db_conn.php";
$reg = $_GET['reg'];
$query = "SELECT * from certi where regist = '$reg'";
$res = mysqli_query($conn,$query);
if(mysqli_num_rows($res) >0 )
{
    foreach($res as $row){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'Source Sans Pro', sans-serif;
        }
        .pp{
            font-size:25px;
            color:rebeccapurple;
        }
        .card{
            background-color:#eee;
        }
        a{
            text-decoration:none;
        }
    </style>
</head>
<body>
    
</body>
</html>
<div class="card m-4 p-3">
    <p class="pp"> <?= $row['name'];?></p><hr>
    <div class="a">
<p>
    To view the <strong> <?= $row['name'];?> </strong>
    certificate click the following link
    <a href="<?= $row['certi'];?>">Click Here</a>

</p>

</div>
</div>
<?php
    }
}
else{
   header("location:failure.html");
}
?>