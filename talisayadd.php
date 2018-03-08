<?php

  $fname = $_POST['fname'];
    $mi = $_POST['mi'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $gndr = $_POST['gndr'];
    $address = $_POST['address'];
    $con = mysqli_connect("localhost","root","","voters");
    $check = mysqli_query($con,"SELECT * FROM tblvotersinfo WHERE `fname`='$fname' AND `mi`='$mi' AND `lname`='$lname'");
    $checkrows = mysqli_num_rows($check);
    if ($checkrows>0) {
        $exist = "Student Already exists!";
        echo "<script type='text/javascript'>alert('$exist');window.location.href='talisay.php';</script>";
    }
    else{
       $con = mysqli_connect("localhost","root","","voters");
    $all = "INSERT INTO `tblvotersinfo`(`fname`, `mi`, `lname`,`age`,`gender`,`address`,`barangay`,`status_id`,`created_at`) VALUES ('$fname','$mi','$lname','$age','$gndr','$address',8,1,now())";

    $result = mysqli_query($con, $all);
    echo "<script type='text/javascript'>window.location.href='talisay.php';</script>";
    }
  

        
    