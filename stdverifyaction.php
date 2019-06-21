<?php
extract($_POST);
date_default_timezone_set("Asia/Kolkata");
$year = date("Y");
$month = date("d");
include "dbConfig.php";

// reg no
$form = mysqli_query($con, "select MAX(id) as max from admin");
$row = mysqli_fetch_row($form);
$i = $row[0];
$i = $i + 1;
$regno = "RE" . $year . $month . $i;

// session
$year = date("Y");
$end = date("Y")+1;
$session=$year.'-'.$end;

$sql = mysqli_query($con, "INSERT INTO `admin`(`name`, `fname`, `formno`, `class`, `regno`, `date`, `time`, `paidamount`,`session`) VALUES('$name','$fname','$formno','$class','$regno','$date','$time','$paidamount','$session')");

// update status
$status = 1;
$sql1 = mysqli_query($con, "update stdreg set status='$status' where formno='$formno'");



header('location:api.php?link=00STD');
