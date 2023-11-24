<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'Source Sans Pro', sans-serif;
        }
        h2{
            color:purple;
        }
       
    </style>
</head>
<body>
    <div class="container">
    <div class="mt-2 p-1">
    <div class="card p-3">
    <h2>Assignments:</h2>
    <hr>
    <center>
        <table class="table table-striped table-bordered">
            <tr>
                <th><center>Register Number</th>
                <th><center>Title</th>
                <th><center>Assignment</th>
            </tr>
        
<?php
include "db_conn.php";
$open = "SELECT * from assignment";
$connect = mysqli_query($conn,$open);
if(mysqli_num_rows($connect) >0 )
{
    foreach($connect as $row){
        ?>
        <tr>
        <td><center><p><?= $row['reg'];?> </p></td>
        <td><center><p><?= $row['title'];?> </p></td>
        <td><center><a class="btn btn-primary" href="<?= $row['notes']; ?>">View Assignment</a></center></td>
</tr>
        <?php
    }
}
?>
</center>
</table>
</div>
</div>
</div>
</body>
</html>
