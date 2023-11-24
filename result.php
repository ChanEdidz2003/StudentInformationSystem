<?php
if(isset($_GET['pass'])){
    include 'db_conn.php';

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $pass = validate($_GET['pass']);
    $name = validate($_GET['name']);

    
    $query = "SELECT * FROM result WHERE regist='$pass' ";
    $connect = mysqli_query($conn,$query);
    if(mysqli_num_rows($connect) >0 )
    {
        foreach($connect as $row){
            ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    
    <style>
        *{
            font-family: 'Source Sans Pro', sans-serif;
        }
        img{
            height: 50px;
        }
        .pp{
            font-size: 20px;
            color: rebeccapurple;
        }
        .section{
            background-color: #eee;
            box-shadow: 0px 0px 10px rgba(0,0,0,.3);
        }
        .card{
           background-color: white;
        }
        h5,.ppp{
            color: rebeccapurple;
        }
        tr,td,th{
             background-color:white;
            
            
            
        }
        .cardd{
            border:1px solid black;
            border-radius:4px;
            background-color: white;
        }
    </style>
</head>
<body>
    <div class="container p-2">
       <div class="section mt-3 p-2 rounded">
        
        <div class="card m-3 p-4">
        <p><strong>Student Name : </strong><?= $name ?></p>
        <p><strong>Register Number : </strong><?= $row['regist']; ?></p>
    </div>
    <div class=" p-3">
        <table class="table table-bordered table-striped">
            <tr>
                <th class="text-center p-3">S.No</th>
                <th class="text-center p-3">Subject</th>
                <th class="text-center p-3">Marks</th>
            </tr>
            <tr>
                <td class="text-center p-2"><p>1</p></td>
                <td class="text-center p-2"><p><?= $row['s1']; ?></p></td>
                <td class="text-center p-2"><p><?= $row['g1']; ?></p></td>
            </tr>
            <tr>
                <td class="text-center p-2"><p>2</p></td>
                <td class="text-center p-2"><p><?= $row['s2']; ?></p></td>
                <td class="text-center p-2"><p><?= $row['g2']; ?></p></td>
            </tr>
            <tr>
                <td class="text-center p-2"><p>3</p></td>
                <td class="text-center p-2"><p><?= $row['s3']; ?></p></td>
                <td class="text-center p-2"><p><?= $row['g3']; ?></p></td>
            </tr>
            <tr>
                <td class="text-center p-2"><p>4</p></td>
                <td class="text-center p-2"><p><?= $row['s4']; ?></p></td>
                <td class="text-center p-2"><p><?= $row['g4']; ?></p></td>
            </tr>
            <tr>
                <td class="text-center p-2"><p>5</p></td>
                <td class="text-center p-2"><p><?= $row['s5']; ?></p></td>
                <td class="text-center p-2"><p><?= $row['g5']; ?></p></td>
            </tr>
            <tr>
                <td class="text-center p-2"><p>6</p></td>
                <td class="text-center p-2"><p><?= $row['s6']; ?></p></td>
                <td class="text-center p-2"><p><?= $row['g6']; ?></p></td>
            </tr>
        </table>
    </div>
       </div>
    </div>
</body>
<script type='text/javascript' src='http://code.jquery.com/jquery-1.4.4.min.js'></script>
<script type='text/javascript'>
jQuery(document).ready(function(){
  jQuery(function() {
        jQuery(this).bind("contextmenu", function(event) {
            event.preventDefault();
            alert('Right click disable in this site!!')
        });
    });
});
</script>
</html>
<?php
        }
    }
    else
    {
        header("location:failure.html");
    }
    
}
