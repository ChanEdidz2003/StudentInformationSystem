<?php
if(isset($_GET['reg'])){
    include 'db_conn.php';

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $reg = validate($_GET['reg']);
    
    $query = "SELECT * FROM register WHERE rnum='$reg'";
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
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'Source Sans Pro', sans-serif;
        }
        nav{
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0,0,0,.3);
        }
        .nav-link:hover{
            color: aqua;
        }
        .rounded-pill{
            height: 50px;
            width:50px;
        }
        .image{
            width:170px;
            height:170px;
            border-radius:5px;
        }
        .btn{
            outline: none;
        
        }
        .card{
            background-color: #eee;
        }
        .text-center{
            color: rgb(214, 9, 54);
            font-style: italic;
        }
        .section1{
            background-color: antiquewhite;
        }
        .section2{
            background-color: rgb(215, 250, 240);
        }
        .section3{
            background-color: rgb(244, 215, 250);
        }
        .section4{
            background-color: rgb(215, 221, 250);
        }
        .section5{
            background-color: rgb(250, 215, 215);
        }
    </style>
</head>
<body>
    
<nav class="navbar navbar-expand-md navbar-dark bg-dark text-white  m-2">
        <div class="container-fluid">
            <img src="imag.png" class='rounded-pill' data-bs-toggle='offcanvas' data-bs-target='#profile'>
            
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#chan">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="chan">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="index.html" class="nav-link me-2">Home</a>
                </li>
                <li>
                    <a href="note.html" class="nav-link me-2">Notes</a>
                </li>
                 <li>
                    <a href="assignment.html" class="nav-link me-2">Assignment</a>
                </li>
                <li>
                    <a href="atta_show.html" class="nav-link me-2">Attendance</a>
                </li>
                <li>
                    <a href="circular.php" class="nav-link me-2">Circulars</a>
                </li>
                <li>
                    <a href="result.html" class="nav-link me-2">Results</a>
                </li>
                <li>
                    <a href="certificate.html" class="nav-link me-2">Certificates</a>
                </li>

            </ul>
        </div>
        </div>
    </nav>

    <div class="offcanvas offcanvas-start" id="profile"> 
        
        <div class="offcanvas-header bg-dark text-white">
            <h4 class="offcanvas-title">Profile</h4>
            <button class="btn-close bg-white" data-bs-dismiss="offcanvas"></button>
        </div>

        
        <div class="offcanvas-body">
            
            <p><strong>Student's Name : </strong> <?= $row['name']; ?></p><hr>
            <p><strong> Register Number :</strong> <?= $row['rnum']; ?></p><hr>
            <p><strong> Father's Name :</strong> <?= $row['fname']; ?></p><hr>
            <p><strong>Mother's Name : </strong> <?= $row['mname']; ?></p><hr>
            <p><strong> Date of Birth :</strong> <?= $row['dob']; ?></p><hr>
            <p><strong> Email :</strong> <?= $row['email']; ?></p><hr>
            <p><strong> Mobile Number: </strong> <?= $row['mobile']; ?></p><hr>
            <p><strong> Aadhar Number : </strong> <?= $row['aadhar']; ?></p><hr>
            <p><strong> Student's Gender : </strong> <?= $row['gender']; ?></p><hr>
            <p><strong> Religion : </strong> <?= $row['religion']; ?></p><hr>
            <p><strong> Address : </strong> <?= $row['address']; ?></p><hr>

        </div>
    </div>


    <div class="section1 m-2 p-3 rounded">
            <center>
            <button class="btn" onclick="notes()">
                <svg class="svg1" xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="red" class="bi bi-book" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                  </svg>
                  <p style="color:red">Notes</p>
            </button></center></div>

            <div class="section5 m-2 p-3 rounded">
                <center>
            <button class="btn"  onclick="assi()">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="rgb(116, 2, 142)" class="bi bi-card-heading" viewBox="0 0 16 16">
                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                <path d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z"/>
              </svg>
                  <p class="mt-2" style="color: rgb(116, 2, 142);">Assignment</p>
            </button></center></div>
            <p class="text-center">

            <div class="section2 m-2 p-3 rounded">
                <center>
            <button class="btn" onclick="atta()" >
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="blue" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                    <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                  </svg>
                  <p class="mt-2" style="color: blue;">Attendance</p>
               </button></center></div>


               <div class="section3 m-2 p-3 rounded">
                <center>
               <button class="btn"  onclick="circular()">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="green" class="bi bi-calendar2-event" viewBox="0 0 16 16">
                    <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
                  </svg>
                  <p class="mt-2" style="color:green;">Circular</p>
            </button></center></div>

 
            <div class="section4 m-2 p-3 rounded">
                <center>
            <button class="btn" onclick="results()">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="rgb(198, 9, 100)" class="bi bi-layout-text-sidebar-reverse" viewBox="0 0 16 16">
                    <path d="M12.5 3a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5zm0 3a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5zm.5 3.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z"/>
                    <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2zM4 1v14H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h2zm1 0h9a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5V1z"/>
                  </svg>
                  <p class="mt-2" style="color: rgb(198, 9, 100);">Results</p>
            </button></center></div>


            <div class="section5 m-2 p-3 rounded">
                <center>
            <button class="btn"  onclick="certi()">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="rgb(116, 2, 142)" class="bi bi-card-heading" viewBox="0 0 16 16">
                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                <path d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z"/>
              </svg>
                  <p class="mt-2" style="color: rgb(116, 2, 142);">Certificates</p>
            </button></center></div>
            <p class="text-center">
            
        </div>
  </div>


        <?php
        }
    }
    
    else
    {
        header("Location:failure.html");
    }
    
}
?>

</body>
<script>
    function notes(){
        open("note.html");
    }
    function assi(){
        open("assignment.html");
    }
    function atta(){
        open("atta_show.html");
    }
    function circular(){
        open("circular.php");
    }
    function results(){
        open("result.html");
    }
    function certi(){
        open("certificate.html")
    }
</script>
</html>