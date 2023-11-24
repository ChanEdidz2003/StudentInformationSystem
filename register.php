<?php
include "db_conn.php";

if(isset($_POST['login']))
{
    $name = $_POST['name'];
    $rnum = $_POST['rnum'];
    $dob = $_POST['dob'];
    $fname = $_POST['fname'];
    $fnum = $_POST['fnum'];
    $mname = $_POST['mname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $aadhar = $_POST['aadhar'];
    $gender = $_POST['gender'];
    $religion = $_POST['religion'];
    $community = $_POST['community'];
    $caste = $_POST['caste'];
    $address = $_POST['address'];
    $income = $_POST['income'];

    $SELECT = "SELECT rnum From register Where rnum = ? Limit 1";
    
    $INSERT = "INSERT INTO register(name,rnum,dob,fname,fnum,mname,email,mobile,aadhar,gender,religion,community,caste,address,income)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $rnum);
     $stmt->execute();
     $stmt->bind_result($rnum);
     $stmt->store_result();
     $rnumm = $stmt->num_rows;

     //checking username
      if ($rnumm ==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssssssssssssss", $name,$rnum,$dob,$fname,$fnum,$mname,$email,$mobile,$aadhar,$gender,$religion,$community,$caste,$address,$income);
      $stmt->execute();
      header("location:success.html");
     } 


     else {
        header("location:failure.html");
       }
       $stmt->close();
       $conn->close();
      }



?>