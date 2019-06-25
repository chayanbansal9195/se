<?php
session_start();

date_default_timezone_set("Asia/Kolkata");



$today = date("F j, Y ");

$time = date('h:m');
$regno = $_POST['rollno'];
$class = $_POST['class'];
$session = $_POST['session'];
include "dbConfig.php";
$sql = mysqli_query($con, "select * from feestruc where session='$session' and class='$class'");
$data = mysqli_fetch_assoc($sql);
$monthly = $data['monthly'];
if (isset($_POST["submit"])) {
    if (!empty($_POST["check"])) {
        foreach ($_POST["check"] as $check) {
            //    paid amount
            if (count($check) == 1) {

                $mon = '0' . ($check - 1);
            }

            $sql1 = mysqli_query($con, "select * from admin where regno='$regno' and session='$session' and class='$class' and month='$mon'");
            $data1 = mysqli_fetch_assoc($sql1);
            $paidamount = $monthly;
             $qry = "INSERT INTO `admin`(`name`, `fname`, `formno`, `class`, `regno`, `date`, `time`, `paidamount`, `month`, `session`, `remarks`) values ('$data1[name]','$data1[fname]','$data1[formno]','$class','$regno','$today','$time','$paidamount','$check','$session','Monthly')";
         $sql2 = mysqli_query($con, $qry);
        }
    }
}

$_SESSION['HOUSE_fee']="Successfully Updated...";
header('location:api.php?link=0FEEV');
