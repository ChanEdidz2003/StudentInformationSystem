<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circular</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'Source Sans Pro', sans-serif;
        }
        .card{
            background:#eee;
        }
    </style>
</head>
<body>
    <div class="card m-4 p-3">
<?php
include "db_conn.php";
$open = "SELECT * from circular";
$connect = mysqli_query($conn,$open);
if(mysqli_num_rows($connect) >0 )
{
    foreach($connect as $row){
        ?>
        <p><h5><strong><?= $row['title'];?> : <br></strong> </h5><?= $row['news']; ?></p><hr>
        <?php
    }
}
?>
</div>
</body>
</html>
