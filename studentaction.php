<?php
extract($_POST);
include "dbConfig.php";

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


// data insert
$sql = mysqli_query($con, "INSERT INTO stdreg(`name`, `fname`, `mname`, `phno`, `aphno`, `landmark`, `city`, `pstation`, `postoffice`, `state`, `district`, `lexam`, `lschool`, `msecured`, `religion`, `caste`, `gender`, `newclass`, `date`, `time`, `formno`) VALUES ('$name','$fname','$mname','$phno','$aphno','$landmark','$city','$pstation','$postoffice','$state','$district','$lexam','$lschool','$msecured','$religion','$caste','$gender','$newclass','$date','$time','$formno')");

header('location:index.php');
}
?>
