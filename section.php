<?php
extract($_POST);

include "dbConfig.php";
// update data

if (isset($_POST['submit'])) {
    $i = 0;
    foreach ($check as $val) {
        $query = "update admin set section='$section[$i]' where regno='$val'";
        $sql = mysqli_query($con, $query);
        $i++;
    }
}
header('location:api.php?link=0STV');
