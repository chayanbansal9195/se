<?php
extract($_POST);
include "dbConfig.php";
date_default_timezone_set("Asia/Kolkata");
if($name==''){
    header('location:student.php');
}

else{
// form number

$form = mysqli_query($con, "select MAX(id) as max from stdreg");
$row = mysqli_fetch_row($form);
$max = $row[0];
$max = $max + 1;

$formno = "FORM0" . $max;

$year = date("Y");
$end = date("Y")+1;
$session=$year.'-'.$end;

// data insert
 $sql = mysqli_query($con, "INSERT INTO stdreg(`name`, `fname`, `mname`, `phno`, `aphno`, `landmark`, `city`, `pstation`, `postoffice`, `state`, `district`, `lexam`, `lschool`, `msecured`, `religion`, `caste`, `gender`, `newclass`, `date`, `time`, `formno`,`session`) VALUES ('$name','$fname','$mname','$phno','$aphno','$landmark','$city','$pstation','$postoffice','$state','$district','$lexam','$lschool','$msecured','$religion','$caste','$gender','$newclass','$date','$time','$formno','$session')");

 header('location:index.php');
}
