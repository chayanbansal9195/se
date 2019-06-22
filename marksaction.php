<?php
session_start();
extract($_POST);
include 'dbConfig.php';
date_default_timezone_set("Asia/Kolkata");

// session
$year = date("Y");
$end = date("Y") + 1;
$session = $year . '-' . $end;

$i = 0;
foreach ($marks as $val) {

            $sql = mysqli_query($con, "INSERT INTO `marks`(`class`, `name`, `subname`, `session`, `exam`, `marks`) VALUES ('$class','$name[$i]','$subname','$session','$exam','$val')");
        
    
    $i++;
}
$_SESSION['HOUSE_suc']="Successfully Updated...";
header('location:api.php?link=0MARK');
