<?php
include 'db_conn.php';

$reg = $_POST['reg'];

$select = "SELECT * FROM atta where reg = $reg";
$res = mysqli_query($conn,$select);

if(mysqli_num_rows($res)>0){
    foreach($res as $row){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">

</head>
<style>
    *{
        font-family: 'Source Sans Pro', sans-serif;
    }
    .card{
        background-color: #eee;
    }
    .pp{
        font-size: 25px;
        color: rebeccapurple;
    }
</style>
<body>
    <div class="container">
        <div class="card mt-4 p-3">
            <p class="pp">Attendance:</p>
            <hr>
            <table class="table table-striped">
                <tr>
                    <th>Slots</th>
                    <th>No of Periods</th>
                    <th>No of Present</th>
                    <th>No of Absent</th>
                </tr>
                <tr>
                    <td><?= $row['slot1']; ?></td>
                    <td><?= $row['no_p1']; ?></td>
                    <td  style="color:green;"><?= $row['no_pr1']; ?></td>
                    <td style="color:red;"><?= $row['no_ab1']; ?></td>
                </tr>
                <tr>
                    <td><?= $row['slot2']; ?></td>
                    <td><?= $row['no_p2']; ?></td>
                    <td  style="color:green;"><?= $row['no_pr2']; ?></td>
                    <td  style="color:red;"><?= $row['no_ab2']; ?></td>
                </tr>
                <tr>
                    <td><?= $row['slot2']; ?></td>
                    <td><?= $row['no_p3']; ?></td>
                    <td  style="color:green;"><?= $row['no_pr3']; ?></td>
                    <td style="color:red;"><?= $row['no_ab3']; ?></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
<?php

}

}
else{
    header("Location:failure.html");
}
?>