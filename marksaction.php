<?php
extract($_POST);
include 'dbConfig.php';
date_default_timezone_set("Asia/Kolkata");
var_dump($_POST);

// // session
// $year = date("Y");
// $end = date("Y") + 1;
// $session = $year . '-' . $end;

// $i = 0;
// foreach ($marks as $val) {
//     if ($val != '') {

//         $sql1 = mysqli_query($con, "select * from marks where subname='$subname'and class='$class' and $name='$name[$i]'and exam='$exam'");
//         if ($data = mysqli_fetch_row($sql1) > 0) {
//             continue;
//         } else {

//             $sql = mysqli_query($con, "INSERT INTO `marks`(`class`, `name`, `subname`, `session`, `exam`, `marks`) VALUES ('$class','$name[$i]','$subname','$session','$exam','$val')");
//         }
//     }
//     $i++;
// }
// header('location:api.php?link=0MARK');
?>